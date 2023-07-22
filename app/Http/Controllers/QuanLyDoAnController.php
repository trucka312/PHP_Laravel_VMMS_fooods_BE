<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\danhmucmon;

use Illuminate\Support\Facades\Redirect;

class QuanLyDoAnController extends Controller
{
    public function all()
    {
        if (session('name_admin')) {
            $all =  DB::table('sampham')->get();
            return view('admin.quanlydoan', compact('all'));
      } else {
          return view('admin_login');
      }
        
    }
    public function add()
    {


        return view('admin.Add.themdoan');
    }
    public function save(Request $request)
    {
        $file = $request->file('anh');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $data = array();
        $data['tensp'] = $request->tensp;
        $data['gia'] = $request->gia;
        $data['mieuta'] = $request->mieuta;
        $data['anh'] = $request->file('anh')->storeAs('public/images/', $filename);
        $data['tag'] = $request->tag;
        $data['danhmucmon_id'] = $request->danhmucmon_id;

        $data['featured'] = $request->featured;
        DB::table('sampham')->insert($data);
        Session::put('message', 'Thêm thực đơn thành công');


        return Redirect::to('/quanlydoan');
    }

  public function edit($id)
    {
        $all=  DB::table('sampham')->where('id',$id)->get();
        return view('admin.Update.suadoan',compact('all'));

    }
    public function store(Request $request,$id)
    {
        $file = $request->file('anh');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $data = array();
        $data['tensp'] = $request->tensp;
        $data['gia'] = $request->gia;
        $data['mieuta'] = $request->mieuta;
        $data['anh'] = $request->file('anh')->storeAs('public/images/', $filename);
        $data['tag'] = $request->tag;
        $data['danhmucmon_id'] = $request->danhmucmon_id;
        $data['featured'] = $request->featured;
        DB::table('sampham')->where('id',$id)->update($data);
        Session::put('message','Cập nhật thực đơn thành công !');
    

        return Redirect::to('/quanlydoan');
    }
    public function del($id)
    {
        DB::table('sampham')->where('id',$id)->delete();
        Session::put('message','Đã xóa thực đơn thành công !');
    

        return Redirect::to('/quanlydoan');
    }

    public function unactiveFood($id)
    {
        DB::table('sampham')->where('id',$id)->update(['featured'=>1]);
        Session::put('message','Kích hoạt kinh doanh cho thực đơn thành công');
        return Redirect::to('/quanlydoan');
    }
    public function activeFood($id)
    {
        DB::table('sampham')->where('id',$id)->update(['featured'=>0]);
        Session::put('message','Kích hoạt ngừng ngừng kinh doanh cho thực đơn thành công');
        return Redirect::to('/quanlydoan');
    }
}

