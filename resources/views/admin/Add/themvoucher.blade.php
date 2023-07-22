@extends('admin_layout')
@section('title','Thêm mới voucher')
@section('menu-name','Thêm mới Voucher')
@section('body')
      <main class="main">
        <div class="container_body">

          <div class="content">
            <form action="{{URL::to('/luuvoucher')}}" method="post" id ="form__add" class="form__add">
            @csrf
              <div class="form_add__name first_add_item">
                <label class="form_text" for="name">Mã vourcher</label> <br>
                <input class="form_add__input" type="text" name="ma" placeholder="Nhập mã Voucher">
              </div>
      
              <div class="form_add__name">
                <label class="form_text" for="down">Giảm</label> <br>
                <input class="form_add__input" type="text" name="giam" placeholder="Nhập giảm theo %">
              </div>
      
              <div class="form_add__name">
                <label class="form_text" for="min">Tối thiểu số người</label> <br>
                <input class="form_add__input" type="text" name="toithieusonguoi" placeholder="Nhập tối thiểu">
              </div>
              <div class="form_add__name">
                <br><label class="form_text" for="date">HSD</label> <br>
                <input class="form_add__input" type="datetime" name="hsd" placeholder="Nhập hạn sử dụng mã voucher">
              </div>
              <div  style="margin-top : 90px;"  class="form_add__name padding_y">
                <label  style="padding-bottom : 25px; " class="form_text" for="name">Trạng thái</label> <br>
                <select style="margin-left : 15px; "name="trangthai" id="">
                    <option value="0">Còn hạn</option>
                    <option value="1">Hết hạn</option>
                </select>
              </div>
      
              <div class="form_add__name pb_3rem">
                <label class="form_text" for="note">ghi chú</label> <br>
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