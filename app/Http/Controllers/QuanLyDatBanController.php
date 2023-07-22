<?php

namespace App\Http\Controllers;

use App\Models\datban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class QuanLyDatBanController extends Controller
{

    public function all()
    {
        if (session('name_admin')) {
            $all =  DB::table('datban')->get();
            return view('admin.quanlydatban', compact('all'));
      } else {
          return view('admin_login');
      }
      
    }

    public function add()
    {
        return view('admin.Add.themdatban');
    }

    public function show()
    {
        return view('pages.datban');
    }

    public function save(Request $request){
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['sdt'] = $request->sdt;
        $data['songuoi'] = $request->songuoi;
        $data['thoigian'] = $request->thoigian;
        $data['coso'] = $request->coso;
        $data['ghichu'] = $request->ghichu;
        $data['trangthai'] = $request->trangthai;
        DB::table('datban')->insert($data);
        Session::put('message', 'Thêm đặt bàn thành công');

        return Redirect::to('/quanlydatban');
    }

    public function save_user(Request $request){
        $data = array();
        
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['sdt'] = $request->sdt;
        $data['songuoi'] = $request->songuoi;
        $data['thoigian'] = $request->thoigian;
        $data['coso'] = $request->coso;
        $data['ghichu'] = $request->ghichu;
        $data['trangthai'] = $request->trangthai;

        // try {
        //     $data['name'] = $request->name;
        //     $data['email'] = $request->email;
        //     $data['sdt'] = $request->sdt;
        //     $data['songuoi'] = $request->songuoi;
        //     $data['thoigian'] = $request->thoigian;
        //     $data['coso'] = $request->coso;
        //     $data['ghichu'] = $request->ghichu;
        //     $data['trangthai'] = $request->trangthai;
            
        //     // Kiểm tra tất cả các trường không được null
        //     foreach ($data as $field) {
        //         if ($field === null) {
        //             throw new \Exception("Dữ liệu không hợp lệ");
        //         }
        //     }
    
        //     // Xử lý dữ liệu
            
        //     return response()->json(['message' => 'Success']);
        // } catch (\Exception $e) {
        //     return response()->json(['error' => $e->getMessage()]);
        // }

        // hàm lấy ra tổng số bàn đã đặt trong database table đặt bàn
        function soBanDaDat($date, $coso)
        {
            $result = DB::table('datban')
                ->whereRaw("DATE(thoigian) = ?", [$date])
                ->where('trangthai', 1)
                ->where('coso', $coso)
                ->sum('soban');
            // Echo the sum value
            // echo "so ban da dat : $result";
            return $result;
        }

        // hàm lấy tổng số bàn trên đơn vị 

        // so nguoi thuc te
        $nguoi = $data['songuoi'];
        // so ban khach dat
        $sobandat = ceil($nguoi / 6);
        // echo "sobanorder : $sobandat";
        // lay ra thoi gian de truuy van du lieu so ban con lai
        $thoigian = $data['thoigian'];
        // lay ra ngay 
        $date = date('Y-m-d', strtotime($thoigian));
        // lay ra thong tin co so
        $cosokhachdat = $data['coso'];
        // so ban con lai trang db
        $sobanconlai = soBanDaDat($date, $cosokhachdat);

        // lay ra tong so ban cua co so khach dat ban
        function tongsobanthucte($coso)
        {
            $result = DB::table('coso')
                ->where('tencoso', $coso)
                ->value('tongsoban');
            // Echo the sum value
            // echo "result :$result";
            return $result;
        }

        // tong so ban cua moi co so
        $tongsoban = +tongsobanthucte($cosokhachdat);
        // echo "tong so ban : $tongsoban";

        $something = $tongsoban - $sobandat;
        // echo "kq : $something số bàn còn lại là : $sobanconlai, kq trừ là $something - $sobandat";

        if (($tongsoban - $sobandat) <= $sobanconlai) {
            echo '<script>alert("Rất tiếc số bàn còn lại không đủ để đặt, vui lòng liên hệ nhân viên chăm sóc khách hàng để hỗ trợ đặt bàn theo số đường dây nóng của nhà hàng.");</script>';
        } else {
            // insert db
            DB::table('datban')->insert($data);
            Session::put('message', 'đặt bàn thành công thành công');
            
            // function get id bàn đặt on table datban
            function getIDTable($coso, $time, $userName, $sdt, $soNguoi, $email )
            {
                $result = DB::table('datban')
                    ->where('coso', $coso)
                    ->Where('thoigian', $time)
                    ->Where('sdt', $sdt)
                    ->Where('songuoi', $soNguoi)
                    ->Where('email', $email)
                    ->value('id');
                // Echo the sum value
                // echo "result :$result";
                return $result;
            }

            $id = getIDTable($request->coso, $thoigian, $request->name, $request->sdt, $request->songuoi, $request->email);

            return Redirect::to('/chitietdatban' . $id);
        }
    }

    public function chitietdatban($id)
    {
        try {
            $datban = datban::findOrFail($id);
            return view('pages.chitietdatban', compact('datban'));
        } catch (ModelNotFoundException $exception) {
            // return view('pages.chitietdatban', compact('datban'));
            // echo '<script>alert("Không tìm thấy thông tin đặt bàn của quý khách. 
            // vui lòng liên hệ nhân viên chăm sóc khách hàng để được hỗ trợ về thông tin bàn đặt");</script>';
            return Redirect::to('datban')->with('error', 'Không tìm thấy thông tin đặt bàn của quý khách. Vui lòng liên hệ nhân viên chăm sóc khách hàng để được hỗ trợ về thông tin bàn đặt');
        }
    }
}
