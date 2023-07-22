<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\thuvienanh;
use App\Models\danhmucmon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class QuanLyUserController extends Controller
{
    public function all()
    {
        if (session('name_admin')) {
         
        $all=  DB::table('users')->get();
        return view('admin.quanlyuser',compact('all'));
  } else {
      return view('admin_login');
  }
    }
    public function unactive($id)
    {
        DB::table('users')->where('id',$id)->update(['trangthai'=>1]);
        Session::put('message','Đã kích hoạt User hoạt động ! ');
        return Redirect::to('/quanlyuser');
    }
    public function active($id)
    {
        DB::table('users')->where('id',$id)->update(['trangthai'=>0]);
        Session::put('message','Đã kích hoạt User ngừng hoạt động !');
        return Redirect::to('/quanlyuser');
    }
    public function del($id)
    {
        DB::table('users')->where('id',$id)->delete();
        Session::put('message','Xóa user thành công !');
    

        return Redirect::to('/quanlyuser');
    }
   
}
