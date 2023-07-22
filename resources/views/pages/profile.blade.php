<?php

use Illuminate\Support\Facades\Session;
?>
<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <?php

          $username = Session::get('name');
          if ($username) {
            echo $username;
          }
          ?> | VMMS</title>

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
  <link rel="stylesheet" href="public/front/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="public/front/css/owl.theme.default.min.css" />
  <link rel="stylesheet" href="public/front/css/booking-page.css">
  <link rel="stylesheet" href="public/front/css/profile-user-page.css">

</head>

<body>
  <div class="wrapper profile-page booking-page">
    <!-- header -->
    <header class="header">
      <div class="container">
        <div class="row">
          <div class="header-main col-lg-12">
            <span class="menu-bars">
              <i class="far fa-bars"></i>
            </span>
            <a href="{{URL::to('/trangchu')}}" class="logo">
              <img srcset="public/front/images/logo-vmms.png" alt="logo" />
            </a>
            <h1 class="header-title">Hồ sơ cá nhân !</h1>
            <div class="header-contact">0962.180.180</div>
            <span class="menu-search">
              <i class="fas fa-search icon-search" style="position: relative;"></i>
              <form action="" class="search-mobile" style="position: absolute;">
                <input type="search" name="" placeholder="Nhập tìm kiếm..." />
                <button type="submit" value="Tìm kiếm" class="search-form__button">
                  <i class="far fa-search"></i>
                </button>
              </form>
            </span>
          </div>
        </div>
      </div>
    </header>

    <!-- main -->
    <main class="main">
      <!-- siderbar bên trái -->
      <div class="siderbar">
        <div class="siderbar-group">
          <div class=" siderbar-group-1">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2xlvtxHZMPsNg7oso_FgimAtFKGcp8dU0601pGuU&s" alt="avatar" class="avatar">
            <div class="name">
              <strong class="name-user--name">
                <?php

                $username = Session::get('username');
                if ($username) {
                  echo $username;
                }
                ?>
              </strong>
              <!-- change pass -->
              <div class="name-change--profile">
                <i class="far fa-pencil-alt"></i>
                <a href="{{URL::to('/doimatkhau')}}" class="change-profile--link">Đổi mật khẩu</a>
              </div>

            </div>
          </div>
        </div>

        <!-- đặt bàn -->
        <div class="siderbar-item siderbar-group3">
          <i class="far fa-table"></i>
          <span class="order">
            <a href="{{URL::to('chitietdatban{id}')}}" class="booking-link">Thông tin đặt bàn</a>
          </span>
        </div>
        <!-- đăt đồ ăn -->
        <div class="siderbar-item siderbar-group4">
          <i class="fas fa-hamburger"></i>
          <span class="food">
            <a href="delivery-page.html" class="booking-link">Đặt đồ ăn online</a>
          </span>
        </div>
        <!-- sang trang đặt bàn -->
        <div class="siderbar-item siderbar-group5">
          <i class="fas fa-tags"></i>
          <span class="booking-link">
            <a href="{{URL::to('/voucher')}}" class="booking-link">Nhận voucher</a>
          </span>
        </div>
        <!-- sang trang tin tức -->
        <div class="siderbar-item siderbar-group5">
          <i class="fas fa-bell"></i>
          <span class="booking-link">
            <a href="news-category.html" class="booking-link">Xem tin tức hôm nay</a>
          </span>
        </div>
        <!-- sang thư viện ảnh -->
        <div class="siderbar-item siderbar-group5">
          <i class="far fa-image-polaroid"></i>
          <span class="booking-link">
            <a href="news-category.html" class="booking-link">Xem ảnh mới nhất</a>
          </span>
        </div>
        <!-- đánh giá -->
        <div class="siderbar-item siderbar-group5">
          <i class="fas fa-comment-smile"></i>
          <span class="booking-link">
            <a href="review-page.html" class="booking-link">Gửi đánh giá, góp ý</a>
          </span>
        </div>
        <!-- kết nối -->
        <div class="siderbar-item siderbar-group5">

          <a href="http://facebook.com/" class="connect-link">
            <i class="fab icon-connect fa-facebook"></i>
          </a>
          <a href="http://twitter.com/" class="connect-link">
            <i class="fab icon-connect fa-twitter"></i>
          </a>
          <a href="http://instagram.com/" class="connect-link">
            <i class="fab icon-connect fa-instagram-square"></i>
          </a>
          <a href="http://tiktok.com/" class="connect-link">
            <i class="fab icon-connect fa-tiktok"></i>
          </a>
        </div>

        <!-- logout -->
        <div class="siderbar-item siderbar-group5">
          <i class="far fa-sign-out dangxuat"></i>
          <a href="{{URL::to('/dangxuatuser')}}" class="change-profile--link">Đăng xuất</a>
        </div>

        <div class="noti">
          <i class="fas fa-exclamation"></i>
          <span>Trở thành khách hàng thân thiết của nhà hàng và cập nhật mọi thông tin mới nhất từ chúng về các sự kiện, mã giảm giá, chương trình ưu đãi và tri ân khách hàng tại :<a href="http://facebook.com/">fanpage của nhà hàng</a>. Và nhận hàng ngàn voucher tích lũy để mua hàng trên các nền tảng liên kết của nhà hàng nhé !</span>
        </div>
      </div>

      <!-- vong quay may man -->
      <div class="right">
        <div class="bg">
          <p class="thanks-title"> Lời cảm ơn từ nhà hàng, kính gửi bạn <?php echo $username ?> </p>
          <img class="thanks-img" src="public/front/images/thucamon.png" alt="thư cảm ơn">
          <p class="text-muted">Sự hỗ trợ của quý khách hàng, quý đối tác có ý nghĩa là cả thế giới với chúng tôi.
            Một lần nữa, chúng tôi xin gửi lời cảm ơn chân thành và sự tri ân sâu sắc tới quý khách hàng. Kính chúc quý khách hàng, quý đối tác sức khỏe, hạnh phúc và thành công.
          </p>
        </div>
      </div>
    </main>
    <!-- footer -->
    <footer class="footer">
      <div class="container footer--top">
        <div class="row">
          <div class="footer-col footer-col-1 col">
            <div class="footer-col-content footer-info">
              <a href="home-page.html" class="footer-logo"><img src="public/front//images/logo-vmms.png" alt="Logo" /></a>
              <p class="footer-info__address">
                Tầng 3 số 14 Pháo Đài Láng, Đống Đa, Hà Nội
              </p>
              <p class="footer-info__phone">(+84-4) 3562.6296</p>
              <p class="footer-info__email">info@vmms.vn</p>
              <p class="footer-info__time">Mở cửa: 09:30 - 22:00</p>
            </div>
          </div>
          <div class="footer-col footer-col-2 col">
            <div class="footer-col-title">LIÊN KẾT NHANH</div>
            <div class="footer-col-content">
              <ul class="menu-footer">
                <li class="menu-footer__link">
                  <a href="{{URL::to('/trangchu')}}">Trang chủ</a>
                </li>
                <li class="menu-footer__link">
                  <a href="aboutus section-py">Giới thiệu</a>
                </li>
                <li class="menu-footer__link">
                  <a href="{{URL::to('/tintuc')}}">Tin tức</a>
                </li>
                <li class="menu-footer__link">
                  <a href="{{URL::to('/sanpham')}}">Thực đơn</a>
                </li>
                <li class="menu-footer__link">
                  <a href="{{URL::to('/lienhe')}}">Liên hệ</a>
                </li>
                <li class="menu-footer__link">
                  <a href="{{URL::to('/datban')}}">Đặt bàn</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="footer-col footer-col-3 col">
            <div class="footer-col-title">HƯỚNG DẪN</div>
            <div class="footer-col-content">
              <ul class="menu-footer">
                <li class="menu-footer__link">
                  <a href="{{URL::to('/huongdan')}}">Hướng dẫn đặt món online</a>
                </li>
                <li class="menu-footer__link">
                  <a href="{{URL::to('/huongdan')}}">Hướng dẫn đặt bàn</a>
                </li>
                <li class="menu-footer__link">
                  <a href="{{URL::to('/huongdan')}}">Hướng dẫn thanh toán</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="footer-col footer-col-4 col">
            <div class="fanpage-facebook">
              <div class="fanpage-facebook-avatar">
                <img src="public/front/images/facebook.jpg" alt="" />
              </div>
              <div class="fanpage-facebook-content">
                <a href="http://www.facebook.com/" class="fanpage-facebook-name">NHÀ HÀNG VMMS</a>
                <div class="fanpage-facebook-like">
                  <a href="http://www.facebook.com/"><img src="public/front//images/icon-face2.png" /> Like Page</a><span>50K người đã thích</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container footer--bottom">
        <div class="row">
          <div class="col col-sm-12 col-md-7">
            <div class="footer-copyright">COPYRIGHT © 2022 BY VMMS</div>
          </div>
          <div class="col col-sm-12 col-md-5">
            <a href="!#" target="_blank" class="footer-bct"><img src="public/front/images/thongbaobocongthuong.png" alt="Thông báo bộ công thương" /></a>
            <div class="social-network">
              <div class="social-network__title">KẾT NỐI VỚI CHÚNG TÔI</div>
              <ul class="social-network__list">
                <li>
                  <a href="https://www.facebook.com/" rel="nofollow" target="_blank"><img src="public/front/images/icon-face.svg" alt="facebook" /></a>
                </li>
                <li>
                  <a href="https://twitter.com/" rel="nofollow" target="_blank"><img src="public/front/images/icon-instagram.svg" alt="instagram" /></a>
                </li>
                <li>
                  <a href="https://www.youtube.com/" rel="nofollow" target="_blank"><img src="public/front/images/icon-twitter.svg" alt="twitter" /></a>
                </li>
                <li>
                  <a href="https://mail.google.com/" rel="nofollow" target="_blank"><img src="public/front/images/icon-gg.svg" alt="Gmail" /></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <a href="{{URL::to('/datban')}}" class="btn-booking">Đặt bàn</a>
    </footer>
    <div class="mobile-sidebar d-lg-none">
      <div class="mobile-sidebar--top">
        <a href="https://www.facebook.com/" class="mobile-sidebar-logo"><img src="public/front/images/logo-vmms.png" alt="Logo" /></a>
        <i class="mobile-sidebar-close"></i>
      </div>
      <div class="mobile-sidebar--bottom">
        <ul class="menu">
          <li class="menu-item active">
            <a href="{{URL::to('/trangchu')}}" class="menu-link">Trang chủ</a>
          </li>
          <li class="menu-item">
            <a href="{{URL::to('/sanpham')}}" class="menu-link">Sản phẩm</a>
          </li>
          <li class="menu-item">
            <a href="{{URL::to('/tintuc')}}" class="menu-link">Tin tức</a>
          </li>
          <li class="menu-item">
            <a href="{{URL::to('/trangchu')}}" class="menu-link">Khuyến mại</a>
          </li>
          <li class="menu-item">
            <a href="{{URL::to('/huongdan')}}"class="menu-link">Hướng dẫn mua hàng</a>
          </li>
          <li class="menu-item">
            <a href="{{URL::to('/lienhe')}}" class="menu-link">Liên Hệ</a>
          </li>
          <li class="menu-item">
            <a href="{{URL::to('/dangky')}}" class="menu-link">Đăng ký</a>
          </li>
          <li class="menu-item">
            <a href="{{URL::to('/dangnhap')}}" class="menu-link">Đăng nhập</a>
          </li>
        </ul>
        <div class="phone-number d-block">
          <a href="tel:0962180180">0962.180.180</a>
        </div>
      </div>
    </div>
    <div class="menu-bars-close"></div>
  </div>
  </div>


  <script type="text/javascript" src="public/front/js/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="public/front/js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="public/front/js/script.js"></script>
</body>

</html>