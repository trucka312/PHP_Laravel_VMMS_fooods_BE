
@extends('admin_layout')
@section('title','Quản lý đồ ăn')
@section('menu-name','Quản lý đồ ăn')
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
                    <a href="{{URL::to('/themdoan')}}" class="link_add">Thêm mới</a>
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
                        <td> tên món</td>
                        <td>ảnh</td>
                        <td>đơn giá</td>
                        <td>miêu tả</td>
                        <td>thuộc danh mục món</td>
                        <td>nhóm</td>
                        <td>trạng thái</td>
                        <td colspan="2">chức năng</td>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($all as $tt)
                      <tr>
                        <td>{{$tt->id}}</td>
                        <td>{{$tt->tensp}}</td>
                        <td><img class="image-avatar" src="public/storage/images/{{substr($tt->anh, 14)}}" alt=""></td>
                        <td>{{$tt->gia}}</td>
                        <td>{{$tt->mieuta}}</td>
                        <td>
                          <?php
                              if($tt->danhmucmon_id == 1)
                              echo 'Khai vị';
                              if($tt->danhmucmon_id == 2)
                              echo 'Món chính';
                              if($tt->danhmucmon_id == 3)
                              echo 'Nước uống ';


                          ?>
                        </td>

                        <td>{{$tt->tag}}</td>                
                        <td>
                          <?php
                           if($tt->featured == 0)
                              {
                          ?>
                            <a href="{{URL::to('/unactiveFood/'.$tt->id)}}">Ngừng kinh doanh</a>
                          <?php
                              }else{
                                
                             

                          ?>
                            <a href="{{URL::to('/activeFood/'.$tt->id)}}">Đang kinh doanh</a>

                          <?php

                              }
                          ?>
                        
                        </td>                        
                        <td>
                        <a href="{{URL::to('/suadoan'.$tt->id)}}">
                            <button class="btn-6 custom-btn">Sửa</button>
                          </a>
                        </td>
                        <td>
                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này?')" href="{{URL::to('/xoadoan'.$tt->id)}}">
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