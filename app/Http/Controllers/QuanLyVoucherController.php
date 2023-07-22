<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class QuanLyVoucherController extends Controller
{
    public function all()
    { 
        if (session('name_admin')) {
         
            $all=  DB::table('voucher')->get();
            return view('admin.quanlyvoucher',compact('all'));
      } else {
          return view('admin_login');
      }       
    }
 
    public function add()
    {

      
        return view('admin.Add.themvoucher');
    }
    public function save(Request $request)
    {
        $data =array();
        $data['ma']= $request->ma;
        $data['giam']= $request->giam;
        $data['toithieusonguoi']= $request->toithieusonguoi;
        $data['hsd']= $request->hsd;
        $data['trangthai']= $request->trangthai;
        $data['ghichu']= $request->ghichu;
        DB::table('voucher')->insert($data);
        
    

        return Redirect::to('/quanlyvoucher');
    }
    public function edit($id)
    {
        $all=  DB::table('voucher')->where('id',$id)->get();
        return view('admin.Update.suavoucher',compact('all'));

    }
    public function store(Request $request,$id)
    {
        $data =array();
        $data['ma']= $request->ma;
        $data['giam']= $request->giam;
        $data['toithieusonguoi']= $request->toithieusonguoi;
        $data['hsd']= $request->hsd;
        $data['trangthai']= $request->trangthai;
        $data['ghichu']= $request->ghichu;
        DB::table('voucher')->update($data);
        Session::put('message','Cập nhật voucher thành công !');
        return Redirect::to('/quanlyvoucher');
    }
    public function del($id)
    {
        DB::table('voucher')->where('id',$id)->delete();
        Session::put('message','Xóa voucher thành công !');
    

        return Redirect::to('/quanlyvoucher');
    }
    public function unactiveVoucher($id)
    {
        DB::table('voucher')->where('id',$id)->update(['trangthai'=>1]);
        Session::put('message','Đã đổi sang trạng thái còn hạn !');
        return Redirect::to('/quanlyvoucher');
    }
    public function activeImages($id)
    {
        DB::table('voucher')->where('id',$id)->update(['trangthai'=>0]);
        Session::put('message','Đã đổi sang trạng thái hết hạn');
        return Redirect::to('/quanlyvoucher');
    }
}
