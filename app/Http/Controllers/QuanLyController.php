<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class QuanLyController extends Controller
{
    public function login()
    {
        return view('admin_login');
    }
    public function show()
    {
        if (session('name_admin')) {
            return view('admin.dashboard');
        } else {
            return view('admin_login');
        }
    }
    public function dangnhap(Request $request)
    {

        $email = $request->email_admin;
        $password = $request->password_admin;
        $result = DB::table('admin')->where('email_admin', $email)->where('password_admin', $password)->first();
        if($result)
        {
            Session::put('name_admin',$result->name_admin);
            Session::put('id',$result->id);
            return Redirect::to('/dashboard');
        }else
        {
            Session::put('message','Mật khẩu hoặc tài khoản của bạn không đúng. Nhập lại !');
            return Redirect::to('/admin');
        }
    }
        public function dangxuat()
        {
            Session::put('name_admin',null);
            Session::put('id',null);
            return Redirect::to('/admin');

        }
       
    
}
