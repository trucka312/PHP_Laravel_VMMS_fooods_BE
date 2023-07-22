<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\tuvan;


class QuanLyTuVanController extends Controller
{
    public function all()
    {
        if (session('name_admin')) {
            $all = tuvan::orderBy('id','desc')->get();
            return view('admin.quanlytuvan', compact('all'));
  } else {
      return view('admin_login');
  }
      
    }
    public function guituvan(Request $request)
    {
        $data =array();
        $data['hoten']= $request->hoten;
        $data['users_id']= $request->users_id;
        $data['sdt']= $request->sdt;
        $data['diachi']= $request->diachi;
        $data['noidung']= $request->noidung;

        DB::table('tuvan')->insert($data);
        Session::put('message','Bạn đã gửi tư vấn đến nhà hàng. Chúng tôi sẽ giải đáp sớm nhất có thể ');
    

        return Redirect::to('/trangchu');
    }
    public function del($id)
    {
        DB::table('tuvan')->where('id',$id)->delete();
        Session::put('message','Đã xóa tư vấn thành công !');
    

        return Redirect::to('/quanlytuvan');
    }

    public function unactiveTuVan($id)
    {
        DB::table('tuvan')->where('id',$id)->update(['trangthai'=>1]);
        Session::put('message','Chuyển sang trạng thái chưa xử lý!');
        return Redirect::to('/quanlytuvan');
    }
    public function activeTuVan($id)
    {
        DB::table('tuvan')->where('id',$id)->update(['trangthai'=>0]);
        Session::put('message','Chuyển sang trạng thái đã duyệt!');
        return Redirect::to('/quanlytuvan');
    }

    
}







