@extends('admin_layout')
@section('title','Trang chủ')
@section('menu-name','Bảng thống kê')
@section('body')
<div class="main_home">
        <div class="wrapper">
          <!-- body nè -->
            <div class="main_top">
              <div class="main_top__item-left">
                <h1 class="main_tiltle">Chào mừng quay trở lại !</h1>
                <h2 class="main_name">
                  <?php
                    use Illuminate\Support\Facades\Session;

                    $username = Session::get('name_admin');
                    if($username){
                        echo $username;
                      
                    }
                  ?>
  

                </h2>
              </div>
              <div class="main_top__item-right">
                <button class="custom-btn btn-6">
                  <a href="{{URL::to('/dangxuat')}}">
                  <i class="fas fa-sign-out dropdown-icon"></i>
                  </a>
                </button>
              </div>
            </div>
            <p class="body-title">Bảng Thống Kê</p>
            <!-- chỗ thống kê nà -->
            <div class="statistical-list container">
              <div class="row">
                <div class="col col-lg-3 col-sm-12 col-md-6 col-12">
                  <div class="statistical-item">
                    <i class="fas icon-statistical fa-burger-soda"></i> <br>
                    <p class="number">120</p> <br>
                    <span  class="item-name">Order</span>
                  </div>
                </div>
                <div class="col col-lg-3 col-sm-12 col-md-6 col-12">
                  <div class="statistical-item">
                    <i class="fas icon-statistical food-icon fa-utensils-alt"></i> <br>
                    <p class="number">120</p> <br>
                    <p class="item-name">Đặt bàn</p>
                  </div>
                </div>
                <div class="col col-lg-3 col-sm-12 col-md-6 col-12">
                  <div class="statistical-item">
                    <i class="fas icon-statistical ticket-icon fa-ticket"></i> <br>
                    <p class="number">120</p> <br>
                    <p class="item-name">Vourcher</p>
                  </div>
                </div>
                <div class="col col-lg-3 col-sm-12 col-md-6 col-12">
                  <div class="statistical-item">
                    <i class="fas icon-statistical heart-icon fa-heart"></i> <br>
                    <p class="number">120</p> <br>
                    <p class="item-name">Đánh giá</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- hết chỗ thống kê nà -->
  
            <!-- biểu đồ -->
            <p class="chart-title">Thống kê lượng khách</p>
            <div class="chart">
              <div class="chart-layout morning">
                <div class="chart-layout--item" style="--percent: 10%">0h</div>
                <div class="chart-layout--item" style="--percent: 20%">1h</div>
                <div class="chart-layout--item" style="--percent: 27%">2h</div>
                <div class="chart-layout--item" style="--percent: 87%">3h</div>
                <div class="chart-layout--item" style="--percent: 82%">4h</div>
                <div class="chart-layout--item" style="--percent: 72%">5h</div>
                <div class="chart-layout--item" style="--percent: 90%">6h</div>
                <div class="chart-layout--item" style="--percent: 27%">7h</div>
                <div class="chart-layout--item" style="--percent: 13%">8h</div>
                <div class="chart-layout--item" style="--percent: 8%">9h</div>
                <div class="chart-layout--item" style="--percent: 12%">10h</div>
                <div class="chart-layout--item" style="--percent: 100%">11h</div>
              </div>

              <div class="chart-layout night">
                <div class="chart-layout--item evening" style="--percent: 10%">12h</div>
                <div class="chart-layout--item evening" style="--percent: 20%">13h</div>
                <div class="chart-layout--item evening" style="--percent: 27%">14h</div>
                <div class="chart-layout--item evening" style="--percent: 87%">15h</div>
                <div class="chart-layout--item evening" style="--percent: 82%">16h</div>
                <div class="chart-layout--item evening" style="--percent: 72%">17h</div>
                <div class="chart-layout--item evening" style="--percent: 90%">18h</div>
                <div class="chart-layout--item evening" style="--percent: 27%">19h</div>
                <div class="chart-layout--item evening" style="--percent: 13%">20h</div>
                <div class="chart-layout--item evening" style="--percent: 8%">21h</div>
                <div class="chart-layout--item evening" style="--percent: 12%">22h</div>
                <div class="chart-layout--item evening" style="--percent: 100%">23h</div>
              </div>
            </div>
            <!-- xong chart -->
            <!-- the end -->
            <p class="chart-title">Feedback</p>
            <div class="statistical-list container">
              <div class="row">
                <div class="col col-md-6 col-12 col-lg-3 col-sm-6">
                  <div class="statistical-item">
                    <i class="fas icon-statistical fa-comment-alt"></i> <br>
                    <p class="number">120</p> <br>
                    <span class="item-name">Đánh Giá</span>
                  </div>
                </div>
                <div class="col col-md-6 col-12 col-lg-3 col-sm-6">
                  <div class="statistical-item">
                    <i class="fas icon-statistical food-icon fa-comment-exclamation"></i> <br>
                    <p class="number">120</p> <br>
                    <span class="item-name">YC Tư Vấn</span>
                  </div>
                </div>
                <div class="col col-md-6 col-12 col-lg-3 col-sm-6">
                  <div class="statistical-item">
                    <i class="fas icon-statistical feedback-icon fa-comment"></i> <br>
                    <p class="number">120</p> <br>
                    <span class="item-name">Góp Ý</span>
                  </div>
                </div>
                <div class="col col-md-6 col-12 col-lg-3 col-sm-6">
                  <div class="statistical-item">
                    <i class="fas icon-statistical like-icon fa-thumbs-up"></i> <br>
                    <p class="number">120</p> <br>
                    <span class="item-name">Like</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- the end -->
        </div>
      </div>

@endsection