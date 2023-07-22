@extends('admin_layout')
@section('title','Quản lý thực đơn')
@section('menu-name','Quản lý thực đơn')
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
                    <a href="{{URL::to('/themthucdon')}}" class="link_add">Thêm mới</a>
                  </span>
                </div>
                <div class="admin__data">
                <?php
            use Illuminate\Support\Facades\Session;

            $message = Session::get('message');
            if($message){
                echo '<span style="font-size:15px ; color : red;"> '.$message.'</span>';
                Session::put('message', null);
            }
             ?>
                  <table>
                    <thead>
                      <tr>
                        <td>id</td>
                        <td>tiêu đề</td>
                        <td>ảnh</td>
                        <td>trạng thái</td>
                        <td colspan="2">chức năng</td>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach($all as $td)
                      <tr>

                        <td>{{$td->id}}</td>
                        <td>{{$td->tendanhmuc}}</td>
                        <td><img class="image-avatar"  src="public/storage/images/{{substr($td->path, 14)}}" alt=""></td>
                        <td>
                          <?php
                           if($td->trangthai == 0)
                              {
                          ?>
                            <a href="{{URL::to('/unactive/'.$td->id)}}">Ngừng bán</a>
                          <?php
                              }else{
                                
                             

                          ?>
                            <a href="{{URL::to('/active/'.$td->id)}}">Đang bán</a>

                          <?php

                              }
                          ?>
                        
                        </td>                    
                        <td>
                          <a href="{{URL::to('/suathucdon'.$td->id)}}">
                            <button class="btn-6 custom-btn">Sửa</button>
                          </a>
                        </td>
                        <td>
                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này?')" href="{{URL::to('/xoathucdon'.$td->id)}}">
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