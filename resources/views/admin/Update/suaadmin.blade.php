@extends('admin_layout')
@section('title','Sửa tài khoản')
@section('menu-name','Cập nhật admin')
@section('body')
<main class="main">
        <div class="container_body">
                @foreach($all as $tt)
          <div class="content">
            <form action="{{URL::to('/luuadmin'.$tt->id)}}" method="post" id ="form__add" class="form__add" enctype="multipart/form-data">
              @csrf
              <div class="form_add__name first_add_item">
              <label class="form_text" for="name">Tên tài khoản</label> <br>
              <input style="height : 50px;" class="form_add__input" type="text" name="name_admin" placeholder="Nhập tên tài khoản" value="{{$tt->name_admin}}">
              </div>
              <div class="form_add__name first_add_item">
              <label class="form_text" for="name">Email</label> <br>
              <input style="height : 50px;" class="form_add__input" type="text" name="email_admin" placeholder="Nhập email" value="{{$tt->email_admin}}">
              </div>
      
              <div class="form_add__name">
                <label class="form_text" for="pass">Mật Khẩu</label> <br>
                <input style="height : 50px;" class="form_add__input" type="text" name="password_admin" placeholder="Nhập mật khẩu" value="{{$tt->password_admin}}">
              </div>
              <div class="form_add__name pb_3rem">
                <label class="form_text" for="type">Số điện thoại</label> <br>
                <input  style="height : 50px;" class="form_add__input"  type="text" name="phone_admin" placeholder="Nhập số điện thoại" value="{{$tt->phone_admin}}">
              </div>
      
              <div class="form_add__name padding_y">
                <label class="form_text" for="img">Ảnh</label> <br>
                <!-- lấy dữ liệu ảnh của input này -->
                <input class="form_add__input" type="text" name="image"> <br>
                <!-- cái này chỉ để hiện ảnh lên thôi -->
                <div class="img_input">
                  <input style="height : 50px;"  type="file" name="avatar_admin" placeholder="Aa" onchange="getImg(this)" class="file_input"> <br>
                </div>
              </div>
      
              <div class="form_add__name">
                <br><label class="form_text" for="date">Ngày tạo tài khoản</label> <br>
                <input class="form_add__input" type="text" name="created_at" placeholder="Ngày tạo tài khoản" value="{{ date('M d, Y',strtotime($tt->created_at)) }}">
              </div>    
              <div class="form_add__name input_btn">
                <button type="submit" name="btn-sub" class="custom-btn btn-12"><span>Xác nhận</span><span>Lưu</span></button>
              </div>
            </form>
          </div>
          @endforeach
        </div>
</main>
@endsection