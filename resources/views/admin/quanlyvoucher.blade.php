@extends('admin_layout')
@section('title','Quản lý Voucher')
@section('menu-name','Quản lý Voucher')
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
                  <span>
                    <a href="{{URL::to('/themvoucher')}}" class="link_add">Thêm mới</a>
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
                        <td>Mã Voucher</td>
                        <td>giảm</td>
                        <td>tối thiểu số người</td>
                        <td>HSD</td>
                        <td>trạng thái</td>
                        <td>Ghi chú</td>
                        <td colspan="2">chức năng</td>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach($all as $tt)
                      <tr>
                        <td>{{$tt->id}}</td>
                        <td>{{$tt->ma}}</td>
                        <td>{{$tt->giam}} %</td>
                        <td>{{$tt->toithieusonguoi}}</td>                             
                        <td>{{ date('M d, Y | h:s',strtotime($tt->hsd)) }}</td>
                        <td>
                                    <?php
                                    if ($tt->trangthai == 0) {
                                    ?>
                                        <a href="{{URL::to('/unactiveVoucher/'.$tt->id)}}">Hết hạn</a>
                                    <?php
                                    } else {



                                    ?>
                                        <a href="{{URL::to('/activeVoucher/'.$tt->id)}}">Còn hạn</a>

                                    <?php

                                    }
                                    ?>

                                </td>
                                       
                        <td>{{$tt->ghichu}}</td>

                        <td>
                          <a href="{{URL::to('/suavoucher'.$tt->id)}}">
                            <button class="btn-6 custom-btn">Sửa</button>
                          </a>
                        </td>
                        <td>
                          <a onclick="return confirm('Bạn có chắc chắn muốn xóa voucher này?')" href="{{URL::to('/xoavoucher'.$tt->id)}}">
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
      