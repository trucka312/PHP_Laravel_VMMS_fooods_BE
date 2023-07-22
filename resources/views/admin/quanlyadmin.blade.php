@extends('admin_layout')
@section('title','Quản lý admin')
@section('menu-name','Quản lý Admin')
@section('body')
<main class="main">
  <div class="container_body">

    <div class="content">
      <div class="admin">
        <div class="admin__control__search">
          <form action="search" class="form-search">
            <input type="text" name ="search" placeholder="Nhập gì đó để tìm kiếm ..." />
            <button type="submit">Tìm kiếm</button>
          </form>
        </div>
      </div>
      <div class="admin__control">
        <div class="admin__control__text">
          <span>
            <a href="{{URL::to('/quanlyuser')}}" class="link_add">Danh sách User </a>
          </span>
          <span>
            <a href="{{URL::to('/themadmin')}}" class="link_add">Thêm mới</a>
          </span>
        </div>
        <?php

        use Illuminate\Support\Facades\Session;

        $message = Session::get('message');
        if ($message) {
          echo '<span style="font-size:25px ; color : green;"> ' . $message . '</span>';
          Session::put('message', null);
        }
        ?>
        <div class="admin__data">
          <table>
            <thead>
              <tr>
                <td>id</td>
                <td>tên admin</td>
                <td>email</td>
                <td>ảnh</td>
                <td>Số điện thoại</td>
                <td>ngày tạo</td>

                <td colspan="2">Chức năng</td>
              </tr>
            </thead>
            <tbody>

              @foreach($all as $tt)
              
              <tr>
                <td>{{$tt->id}}</td>
                <td>{{$tt->name_admin}}</td>
                <td>{{$tt->email_admin}}</td>
                <td><img class="image-avatar" src="public/storage/images/{{substr($tt->avatar_admin, 14)}}" alt=""></td>
                <td>{{$tt->phone_admin}}</td>
                <td>{{ date('M d, Y',strtotime($tt->created_at)) }}</td>
                <td>
                  <a href="{{URL::to('/suaadmin'.$tt->id)}}">
                    <button class="btn-6 custom-btn">Sửa</button>
                  </a>
                </td>
                <td>
                  <a onclick="return confirm('Bạn có chắc chắn muốn xóa Admin này?')" href="{{URL::to('/xoaadmin'.$tt->id)}}">
                    <button class="btn-6 custom-btn">Xóa</button>
                </td>
                </a>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection