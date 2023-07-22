@extends('admin_layout')
@section('title','Thêm mới ảnh')
@section('menu-name','Thêm ảnh vào thư viện')
@section('body')

      <main class="main">
        <div class="container_body">

          <div class="content">
            <form action="{{URL::to('/luuanh')}}" method="post" id ="form__add" class="form__add" enctype="multipart/form-data">
              @csrf
            <div class="form_add__name pb_3rem">
                <label class="form_text" for="note">Tiêu đề</label> <br>
                <input style="height : 50px;"  class="form_add__input"  type="text" name="tieude" placeholder="Nhập tiêu đề hiển thị">
              </div>
              
              <div class="form_add__name padding_y">
                <label class="form_text" for="img">Ảnh</label> <br>
                <!-- lấy dữ liệu ảnh của input này -->
                <input class="form_add__input" type="text" name="path"> <br>
                <!-- cái này chỉ để hiện ảnh lên thôi -->
                <div class="img_input">
                  <input style="height : 50px;"   type="file" name="path" placeholder="Chọn ảnh" onchange="getImg(this)" class="file_input"> <br>
                </div>
              </div>
      
              <div  style="margin-top : 90px;"  class="form_add__name padding_y">
                <label  style="padding-bottom : 25px; " class="form_text" for="name">Trạng thái</label> <br>
                <select style="margin-left : 15px; "name="trangthai" id="">
                    <option value="0">Ngừng kinh doanh</option>
                    <option value="1">Đang kinh doanh</option>
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