
@extends('admin_layout')
@section('title','Quản lý tư vấn')
@section('menu-name','Quản lý tư vấn')
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
                    <a href="#" class="link_add">Tất cả</a>
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
                        <td>tên</td>
                        <td>sdt</td>
                        <td>địa chỉ</td>
                        <td>nội dung</td>
                        <td>trạng thái</td>
                        <td colspan="2">chức năng</td>
                      </tr>
                    </thead>

                    <tbody>
                    @foreach($all as $tt) 
                      <tr>
                        <td>{{$tt->id}}</td>
                       <td>{{$tt->hoten}}</td>
                        <td>{{$tt->sdt}}</td>
                        <td>{{$tt->diachi}}</td>                
                        <td>{{$tt->noidung}}</td>

                        <td>
                          <?php
                           if($tt->trangthai == 0)
                              {
                          ?>
                            <a href="{{URL::to('/unactiveTuVan/'.$tt->id)}}">Đã xử lý</a>
                          <?php
                              }else{
                                
                             

                          ?>
                            <a href="{{URL::to('/activeTuVan/'.$tt->id)}}">Chưa xử lý</a>

                          <?php

                              }
                          ?>
                        
                        <td>
                        <td>
                          <a onclick="return confirm('Bạn có chắc chắn muốn xóa tư vấn này?')" href="{{URL::to('/xoatuvan'.$tt->id)}}">
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