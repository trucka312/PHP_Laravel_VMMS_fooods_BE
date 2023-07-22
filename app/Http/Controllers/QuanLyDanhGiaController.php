<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\danhgia;

class QuanLyDanhGiaController extends Controller{
    public function all()

    {
        if (session('name_admin')) {
              $all = danhgia::orderBy('id', 'desc')->get();
        return view('admin.quanlydanhgia', compact('all'));
        } else {
            return view('admin_login');
        }
        // $all=  DB::table('danhgia')->get();
        // return view('admin.quanlydanhgia',compact('all'));
      
    }
    public function show(){
        return view('pages.review');
    }
    public function luureview(Request $request){
        $userid = Session::get('userid');

        $data = array();
        $data['users_id'] =  $userid;
        $data['hoten'] = $request->hoten;
        $data['sdt'] = $request->sdt;
        $data['noidung'] = $request->noidung;

        DB::table('danhgia')->insert($data);
        Session::put('message', 'Chúng tôi đã nhận được đánh giá của bạn về nhà hàng chúng tôi. Cảm ơn bạn ');

        return Redirect::to('/profile');
    }

    public function del($id)
    {
        DB::table('danhgia')->where('id', $id)->delete();
        Session::put('message', 'Đã xóa đánh giá thành công !');
        return Redirect::to('/quanlydanhgia');
    }

    public function unactiveReview($id)
    {
        DB::table('danhgia')->where('id', $id)->update(['trangthai' => 1]);
        Session::put('message', 'Hiện đánh giá thành công');
        return Redirect::to('/quanlydanhgia');
    }
    public function activeReview($id)
    {
        DB::table('danhgia')->where('id', $id)->update(['trangthai' => 0]);
        Session::put('message', 'Đã ẩn đánh giá thành công');
        return Redirect::to('/quanlydanhgia');
    }
}
