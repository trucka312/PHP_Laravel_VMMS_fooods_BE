@extends('admin_layout')
@section('title','Quản lý đặt bàn')
@section('menu-name','Quản lý đặt bàn')
@section('body')
<main class="main">
  <div class="container_body">

    <div class="content">
      <div class="admin">
        <div class="admin__control__search">
          <form action="" class="form-search">
            <input type="text" placeholder="Nhập gì đó để tìm kiếm ..." />
            <button type="submit">Tìm kiếm</button>
          </form>
        </div>
      </div>
      <div class="admin__control">
        <div class="admin__control__text">
          <span>
            <a href="#" class="link_add">Tất cả </a>
          </span>
          <span>
            <a href="{{URL::to('/themdatban')}}" class="link_add">Thêm mới</a>
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
                <td>tên khách</td>
                <td>email</td>
                <td>Số điện thoại</td>
                <td>Số người</td>
                <td>Thời gian</td>
                <td>cơ sở</td>
                <td>Ghi chú</td>
                <td>Trạng thái</td>
                <td>chức năng</td>
              </tr>
            </thead>
            <tbody>
              @foreach($all as $tt)
              <tr>
                <td>{{$tt->id}}</td>
                <td>{{$tt->name}}</td>
                <td>{{$tt->email}}</td>
                <td>{{$tt->sdt}}</td>
                <td>{{$tt->songuoi}}</td>
                <td>{{ date('M d, Y',strtotime($tt->thoigian)) }}</td>
                <td>{{$tt->coso}}</td>
                <td>{{$tt->ghichu}}</td>
                <td>
                  <?php
                  if ($tt->trangthai == 0) {
                    echo 'Chưa ăn';
                  } else
                    echo 'Đã ăn';
                  ?>
                </td>
                <td>
                  <a href="#">
                    <button class="btn-6 custom-btn">Xóa</button>
                  </a>
                </td>
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