@extends('admin_layout')
@section('title','Thêm mới thực đơn')
@section('menu-name','Thêm mới thực đơn')
@section('body')
      <main class="main">
        <div class="container_body">
        @foreach($all as $tt)
          <div class="content">
            <form action="{{URL::to('/luudoan'.$tt->id)}}" method="post" id ="form__add" class="form__add" enctype="multipart/form-data">
            @csrf
              <div class="form_add__name first_add_item">
                <label class="form_text" for="name">Tên thực đơn mới</label> <br>
                <input class="form_add__input" type="text" name="tensp" placeholder="Nhập tên đồ ăn hoặc đồ uống" value="{{$tt->tensp}}">
              </div>
      
              <div class="form_add__name">
                <label class="form_text" for="type">Loại</label> <br>
                <select name="tag" id="cars" class="selected_item">
                 <option value="{{$tt->tag}}">{{$tt->tag}}</option>
                  <option value="Gà">Gà</option>
                  <option value="Heo">Heo</option>
                  <option value="Bò">Bò</option>
                  <option value="Bún/Phở">Bún/Phở</option>
                  <option value="Heo">Heo</option>
                </select>
              </div>
      
              <div class="form_add__name">
                <label class="form_text" for="category">Danh mục</label> <br>
                <select name="danhmucmon_id" id="cars" class="selected_item">
                  <option value="1">Khai vị</option>
                  <option value="2">Món chính</option>
                  <option value="3">Đồ uống</option>
                </select>
              </div>
      
              <div class="form_add__name">
                <label class="form_text" for="pass">Đơn giá</label> <br>
                <input class="form_add__input" type="text" name="gia" placeholder="Nhập đơn giá" value="{{$tt->gia}}">
              </div>
                    
              <div class="form_add__name">
                <br><label class="form_text" for="date">Miêu tả</label> <br>
                <input class="form_add__input" type="text" name="mieuta" placeholder="Miêu tả"  value="{{$tt->mieuta}}">
              </div>
      
              <div class="form_add__name padding_y">
                <label class="form_text" for="img">Ảnh</label> <br>
                <!-- lấy dữ liệu ảnh của input này -->
                <input class="form_add__input" type="text" name="anh"> <br>
                <!-- cái này chỉ để hiện ảnh lên thôi -->
                <div class="img_input">
                  <input  type="file" name="anh" placeholder="Aa" onchange="getImg(this)" class="file_input"> <br>
                </div>
              </div>
              <div  style="margin-top : 90px;"  class="form_add__name padding_y">
                <label  style="padding-bottom : 25px; " class="form_text" for="name">Trạng thái</label> <br>
                <select style="margin-left : 15px; "name="featured" id="">
                \  <option value="1">Đang kinh doanh</option>
                    <option value="0">Ngừng kinh doanh </option>
                   
                </select>
              </div>


      
              <div class="form_add__name input_btn">
                <button type="submit" name="btn-sub" class="custom-btn btn-12"><span>Xác nhận</span><span>Thêm</span></button>
              </div>
            </form>
          </div>
        @endforeach
        </div>
      </main>
@endsection