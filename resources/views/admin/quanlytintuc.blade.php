
@extends('admin_layout')
@section('title','Quản lý tin tức')
@section('menu-name','Quản lý tin tức')
@section('body')
      <main class="main">
        <div class="container_body">

          <div class="content">
            <div class="admin">
              <div class="admin__control__search">
                <form action="" class="form-search">
                  <input type="text" placeholder="Nhập gì đó để tìm kiếm ..."/>
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
                    <a href="{{URL::to('/themtintuc')}}" class="link_add">Thêm mới</a>
                  </span>
                </div>
                <?php
                  use Illuminate\Support\Facades\Session;

                  $message = Session::get('message');
                  if($message){
                      echo '<span style="font-size:25px ; color : green;"> '.$message.'</span>';
                      Session::put('message', null);
                  }
                ?>
                <div class="admin__data">
                  <table>
                    <thead>
                      <tr>
                        <td>id</td>
                        <td>tiêu đề</td>
                        <td>ảnh</td>
                        <td>thời gian</td>
                        <td>nội dung</td>
                        <td>ghichu</td>
                        <td>trạng thái</td>
                        <td colspan="2">chức năng</td>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($all as $tt)
                      <tr>
                        <td>{{$tt->id}}</td>
                        <td>{{$tt->tieude}}</td>
                        <td><img class="image-avatar" src="public/storage/images/{{substr($tt->anh, 14)}}" alt=""></td>
                        <td>{{ date('M d, Y',strtotime($tt->thoigian)) }}</td>
                        <td>{{$tt->noidung}}</td>                
                        <td>{{$tt->ghichu}}</td> 
                        <td>
                          <?php
                           if($tt->trangthai == 0)
                              {
                          ?>
                            <a href="{{URL::to('/unactiveNew/'.$tt->id)}}">Ẩn</a>
                          <?php
                              }else{
                                
                             

                          ?>
                            <a href="{{URL::to('/activeNew/'.$tt->id)}}">Hiển thị</a>

                          <?php

                              }
                          ?>
                        
                        <td>
                          <a href="{{URL::to('/suatintuc'.$tt->id)}}">
                            <button class="btn-6 custom-btn">Sửa</button>
                          </a>
                        </td>
                        <td>
                          <a onclick="return confirm('Bạn có chắc chắn muốn xóa ảnh này?')" href="{{URL::to('/xoatintuc'.$tt->id)}}">
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