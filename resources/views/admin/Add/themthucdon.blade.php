@extends('admin_layout')
@section('title','Thêm mới danh mục')
@section('menu-name','Thêm danh mục')
@section('body')

      <main class="main">
        <div class="container_body">
          <div class="content">

          <form action="{{URL::to('/luuthucdon')}}" id ="form__add" method="post" class="form__add" enctype="multipart/form-data">
                @csrf
              <div class="form_add__name first_add_item">
                <label class="form_text" for="name">Tên danh mục</label> <br>
                <input style="height : 50px;" class="form_add__input" type="text" name="tendanhmuc" placeholder="Nhập tên danh mục">
              </div>
      
              <div class="form_add__name padding_y">
                <label class="form_text" for="img">Ảnh</label> <br>
                <!-- lấy dữ liệu ảnh của input này -->
                <input style="height : 50px;" class="form_add__input" type="text" name="image"> <br>
                <!-- cái này chỉ để hiện ảnh lên thôi -->
                <div class="img_input">
                  <input  type="file" name="path" placeholder="Aa" onchange="getImg(this)" class="file_input"> <br>
                </div>
              </div>
              <div  style="margin-top : 90px;"  class="form_add__name padding_y">
                <label  style="padding-bottom : 25px; " class="form_text" for="name">Trạng thái</label> <br>
                <select style="margin-left : 15px; "name="trangthai" id="">
                    <option value="0">Ẩn</option>
                    <option value="1">Hiển thị</option>
                </select>
              </div>
              <div class="form_add__name input_btn">
                <button type="submit" name="btn-sub" class="custom-btn btn-12"><span>Xác nhận</span><span>Thêm</span></button>
              </div>
            </form>
          </div>
        </div>
      </main>
@endsection  