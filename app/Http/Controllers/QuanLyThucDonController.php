<?php

namespace App\Http\Controllers;

use App\Models\thuvienanh;
use Illuminate\Http\Request;
use App\Models\danhmucmon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
class QuanLyThucDonController extends Controller
{
    public function all()
    {
        if (session('name_admin')) {
            $all=  DB::table('danhmucmon')->get();
            return view('admin.quanlythucdon',compact('all'));
      } else {
          return view('admin_login');
      }
        
    }
    public function add()
    {

      
        return view('admin.Add.themthucdon');
    }
    public function save(Request $request)
    {    $file = $request->file('path');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $data = array();
        $data['tendanhmuc']= $request->tendanhmuc;
        $data['path']= $request->file('path')->storeAs('public/images/', $filename);
        $data['trangthai']= $request->trangthai;
        DB::table('danhmucmon')->insert($data);
        Session::put('message','Thêm danh mục sản phẩm thành công');
    

        return Redirect::to('/quanlythucdon');
    }
    public function edit($id)
    {
        $all=  DB::table('danhmucmon')->where('id',$id)->get();
        return view('admin.Update.suathucdon',compact('all'));

    }
    public function store(Request $request,$id)
    {
        $file = $request->file('path');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $data = array();
        $data['tendanhmuc']= $request->tendanhmuc;
        $data['path']= $request->file('path')->storeAs('public/images/', $filename);
        $data['trangthai']= $request->trangthai;
        DB::table('danhmucmon')->where('id',$id)->update($data);
        Session::put('message','Cập nhật danh mục món thành công !');
    

        return Redirect::to('/quanlythucdon');
    }
    public function del($id)
    {
        DB::table('danhmucmon')->where('id',$id)->delete();
        Session::put('message','Đã xóa danh mục món thành công !');
    

        return Redirect::to('/quanlythucdon');
    }

    public function unactive($id)
    {
        DB::table('danhmucmon')->where('id',$id)->update(['trangthai'=>1]);
        Session::put('message','Kích hoạt bán danh mục sản phẩm thành công');
        return Redirect::to('/quanlythucdon');
    }
    public function active($id)
    {
        DB::table('danhmucmon')->where('id',$id)->update(['trangthai'=>0]);
        Session::put('message','Kích hoạt ngừng bán danh mục sản phẩm thành công');
        return Redirect::to('/quanlythucdon');
    }
}
