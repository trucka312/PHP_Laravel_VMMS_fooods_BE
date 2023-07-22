<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class QuanLyThuVienAnhController extends Controller
{
    public function all()
    {        
        if (session('name_admin')) {
       
            $all=  DB::table('thuvienanh')->get();
            return view('admin.quanlythuvienanh',compact('all'));
  } else {
      return view('admin_login');
  }
    }
    

   
    public function add()
    {
  
        return view('admin.Add.themanh');
    }
    public function save(Request $request)
    {
        $file = $request->file('path');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $data =array();
        $data['tieude']= $request->tieude;
        $data['path']= $request->file('path')->storeAs('public/images/', $filename);
        $data['trangthai']= $request->trangthai;
        DB::table('thuvienanh')->insert($data);
        Session::put('message','Thêm danh mục sản phẩm thành công');

        return Redirect::to('/quanlythuvienanh');
    }
    public function edit($id)
    {
        $all=  DB::table('thuvienanh')->where('id',$id)->get();
        return view('admin.Update.suaanh',compact('all'));

    }
    public function store(Request $request,$id)
    {
        $file = $request->file('path');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $data =array();
        $data['tieude']= $request->tieude;
        $data['path']= $request->file('path')->storeAs('public/images/', $filename);
        $data['trangthai']= $request->trangthai;
        DB::table('thuvienanh')->where('id',$id)->update($data);
        Session::put('message','Cập nhật ảnh thành công !');
    

        return Redirect::to('/quanlythuvienanh');
    }
    public function del($id)
    {
        DB::table('thuvienanh')->where('id',$id)->delete();
        Session::put('message','Xóa ảnh thành công !');
    

        return Redirect::to('/quanlythuvienanh');
    }
    public function unactiveImages($id)
    {
        DB::table('thuvienanh')->where('id',$id)->update(['trangthai'=>1]);
        Session::put('message','Đã đổi sang trạng thái hiển thị ');
        return Redirect::to('/quanlythuvienanh');
    }
    public function activeImages($id)
    {
        DB::table('thuvienanh')->where('id',$id)->update(['trangthai'=>0]);
        Session::put('message','Đã đổi sang trạng thái ngừng hiển thị');
        return Redirect::to('/quanlythuvienanh');
    }
}