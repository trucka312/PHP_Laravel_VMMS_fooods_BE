<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class QuanLyTinTucController extends Controller
{
    public function all()
    {
        if (session('name_admin')) {
       
            $all =  DB::table('tintuc')->get();
        return view('admin.quanlytintuc', compact('all'));
  } else {
      return view('admin_login');
  }
       
    }

    public function add()
    {


        return view('admin.Add.themtintuc');
    }
    
    public function save(Request $request)
    {

        $file = $request->file('anh');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $data = array();
        $data['tieude'] = $request->tieude;
        $data['anh'] = $request->file('anh')->storeAs('public/images/', $filename);
        $data['thoigian'] = $request->thoigian;
        $data['noidung'] = $request->noidung;
        $data['ghichu'] = $request->ghichu;
        $data['trangthai'] = $request->trangthai;
        DB::table('tintuc')->insert($data);
        Session::put('message', 'Thêm danh mục sản phẩm thành công');

        return Redirect::to('/quanlytintuc');
    }

    public function edit($id)
    {
        $all =  DB::table('tintuc')->where('id', $id)->get();
        return view('admin.Update.suatintuc', compact('all'));
    }

    public function store(Request $request, $id)
    {
        $file = $request->file('anh');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $data = array();
        $data['tieude'] = $request->tieude;
        $data['anh'] = $request->file('anh')->storeAs('public/images/', $filename);
        $data['thoigian'] = $request->thoigian;
        $data['noidung'] = $request->noidung;
        $data['ghichu'] = $request->ghichu;
        $data['trangthai'] = $request->trangthai;
        DB::table('tintuc')->where('id', $id)->update($data);
        Session::put('message', 'Cập nhật tin tức thành công !');

        return Redirect::to('/quanlytintuc');
    }

    public function del($id)
    {
        DB::table('tintuc')->where('id', $id)->delete();
        Session::put('message', 'Đã xóa tin tức thành công !');

        return Redirect::to('/quanlytintuc');
    }

    public function unactiveNew($id)
    {
        DB::table('tintuc')->where('id', $id)->update(['trangthai' => 1]);
        Session::put('message', 'Kích hoạt hiển thị tin tức thành công !');
        return Redirect::to('/quanlytintuc');
    }

    public function activeNew($id)
    {
        DB::table('tintuc')->where('id', $id)->update(['trangthai' => 0]);
        Session::put('message', 'Kích hoạt ẩn tin tức thành công !');
        return Redirect::to('/quanlytintuc');
    }
}
