@extends('admin_layout')
@section('title','Thêm mới tin tức')
@section('menu-name','Thêm mới tin tức')
@section('body')

      <main class="main">
        <div class="container_body">
          <div class="content">
            <form action="{{URL::to('/luutintuc')}}" id ="form__add" method="post" class="form__add" enctype="multipart/form-data">
            @csrf
              <div class="form_add__name pb_3rem">
                <label class="form_text" for="type">Tiêu đề</label> <br>
                <input class="form_add__input"  type="text" name="tieude" placeholder="Nhập tiêu đề">
              </div>
              
              <div class="form_add__name padding_y">
                <label class="form_text" for="img">Ảnh</label> <br>
                <!-- lấy dữ liệu ảnh của input này -->
                <input class="form_add__input" type="text" name="image"> <br>
                <!-- cái này chỉ để hiện ảnh lên thôi -->
                <div class="img_input">
                  <input  type="file" name="anh" placeholder="Chọn ảnh" onchange="getImg(this)" class="file_input"> <br>
                </div>
              </div>
      
              <div class="form_add__name pb_3rem">
                <label class="form_text" for="type">Thời gian</label> <br>
                <input class="form_add__input"  type="datetime" name="thoigian" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}" placeholder="00:00 - dd/mm/yyyy">
              </div>
      
              <div class="form_add__name pb_3rem">
                <label class="form_text" for="type">Nội dung</label> <br>
                <input class="form_add__input"  type="text" name="noidung" placeholder="Nhập nội dung tin tức">
              </div>
      
              <div class="form_add__name pb_3rem">
                <label class="form_text" for="note">Ghi chú</label> <br>
                <textarea class="text_area" name="ghichu" cols="30" rows="10"></textarea>
              </div>
              <div  style="margin-top : 90px;"  class="form_add__name padding_y">
                <label  style="padding-bottom : 25px; " class="form_text" for="name">Trạng thái</label> <br>
                <select style="margin-left : 15px; "name="trangthai" id="">
                <option value="1">Hiển thị</option>
                    <option value="0">Ẩn</option>
                  
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
     