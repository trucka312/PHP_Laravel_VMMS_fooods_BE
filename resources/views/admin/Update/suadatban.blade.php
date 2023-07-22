@extends('admin_layout')
@section('title','Thêm mới đặt bàn')
@section('menu-name','Thêm mới đặt bàn')
@section('body')

      <main class="main">
        <div class="container_body">

          <div class="content">
            <form action="{{URL::to('/luudatban')}}" id ="form__add" method="post" class="form__add">
              @csrf
              <div class="form_add__name first_add_item">
                <label class="form_text" for="name">Tên khách hàng</label> <br>
                <input class="form_add__input" type="text" name="name" placeholder="Nhập tên khách hàng">
              </div>
      
              <div class="form_add__name">
                <label class="form_text" for="mail">Email</label> <br>
                <input class="form_add__input" type="text" name="email" placeholder="Nhập Email">
              </div>
      
              <div class="form_add__name">
                <label class="form_text" for="mail">Số điện thoại</label> <br>
                <input class="form_add__input" type="text" name="sdt" placeholder="Nhập số điện thoại">
              </div>
              <div class="form_add__name">
                <label class="form_text" for="mail">Số người</label> <br>
                <input class="form_add__input" type="text" name="songuoi" placeholder="Nhập số người">
              </div>
              <div class="form_add__name">
                <label class="form_text" for="mail">Thời gian</label> <br>
                <input class="form_add__input" type="datetime" name="thoigian" placeholder="Chọn thời gian đặt">
            </div>
            <div  style="margin-top : 90px;"  class="form_add__name padding_y">
                <label  style="padding-bottom : 25px; " class="form_text" for="name">Cơ sở</label> <br>
                <select style="margin-left : 15px; "name="coso" id="">
                    <option value="CS01">CS01</option>
                    <option value="CS02">CS02</option>
                    <option value="CS03">CS03</option>
                </select>
              </div>
              <div  style="margin-top : 20px;"  class="form_add__name padding_y">
                <label  style="padding-bottom : 25px; " class="form_text" for="name">Trạng thái</label> <br>
                <select style="margin-left : 15px; "name="trangthai" id="">
                    <option value="0">Đã ăn</option>
                    <option value="1">Chưa ăn</option>
                </select>
              </div>

              <div class="form_add__name pb_3rem">
                <label class="form_text" for="note">Ghi chú</label> <br>
                <textarea class="text_area" name="ghichu" cols="30" rows="10"></textarea>
              </div>

      
              <div class="form_add__name input_btn">
                <button type="submit" name="btn-sub" class="custom-btn btn-12"><span>Xác nhận</span><span>Thêm</span></button>
              </div>
            </form>
          </div>
        </div>
      </main>
@endsection  