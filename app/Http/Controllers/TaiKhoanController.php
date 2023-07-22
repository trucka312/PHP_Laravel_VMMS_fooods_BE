<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class TaiKhoanController extends Controller
{
    public function login_user()
    {
        return view('user_login');
    }
    public function logintrangchu(Request $request)
    {

        $email = $request->email;
        $password = $request->password;
        $result = DB::table('users')->where('email', $email)->where('password', $password)->first();
        if ($result) {
            Session::put('username', $result->name);
            Session::put('userid', $result->id);
            return Redirect::to('/trangchu');
        } else {
            Session::put('message', 'Mật khẩu hoặc tài khoản của bạn không đúng. Nhập lại !');
            return Redirect::to('/dangnhap');
        }
    }

    public function dangky()
    {
        return view('dangky');
    }


    public function checkdky(Request $request)
    {

        if ($request->password != $request->password_confirmation) {
            return back()->with('message', 'Mật khẩu không trùng khớp !');
        }
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ];
        DB::table('users')->insert($data);


        Session::put('message', 'Thêm Admin thành công');


        return Redirect::to('/dangnhap');
    }


    public function showProfile()
    {
        return view('pages.profile');
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Đăng xuất người dùng hiện tại

        $request->session()->invalidate(); // Vô hiệu hóa phiên hiện tại
        $request->session()->regenerateToken(); // Tạo lại mã thông báo phiên mới
        Session::forget('username', 'userid');

        return redirect('/dangnhap'); // Chuyển hướng người dùng đến trang đăng nhập
    }


    //đổi mật khẩu
    public function changepass()
    {
        return view('doimatkhau');
    }
    public function savechangepass(Request $request)

    {  
        $password = $request->password;
        $repassword= $request->repassword;

        // Xác định người dùng hiện tại, ví dụ: từ session hoặc bất kỳ phương thức tùy chỉnh nào
        $userid = Session::get('userid'); // Đây chỉ là ví dụ, bạn cần xác định ID người dùng thực tế
         // Lấy thông tin người dùng từ CSDL
         $user = User::findOrFail($userid);



         if ($password == $user->password) {
             $user->password =$repassword;
             $data = array();
             $data['name']= $request->name;
             $data['email']= $request->email;
             $data['password']= $repassword;

             DB::table('users')->where('id',$userid)->update($data);
            
           
             return redirect('/profile'); 
           
         } else {
            Session::put('message', 'Mật khẩu hiện tại không chính xác !');
            return redirect('/doimatkhau'); 
         }
        

    }
}
