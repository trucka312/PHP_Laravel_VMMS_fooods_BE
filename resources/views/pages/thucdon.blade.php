<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thực đơn | VMMS2</title>
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"
    />
    <link rel="stylesheet" href="public/front/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="public/front/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="public/front/css/menu-page.css" />
  </head>

  <body>
    <div class="wrapper menu-page">
    <header class="header">
      <div class="header-main">
        <div class="container">
          <div class="row">
            <div class="header-logo header-main--top col-lg-12">
              <span class="menu-bars">
                <i class="far fa-bars"></i>
              </span>
              <a href="{{URL::to('/trangchu')}}" class="logo">
                <img src="public/front/images/logo-vmms.png" alt="logo" />
              </a>
              <span class="menu-search">
                <i class="fas fa-search icon-search"></i>

                <form action="{{URL::to('/timkiemSP')}}" method="POST" class="search-mobile">
                  @csrf
                  <input type="search" name="inputSearch" placeholder="Nhập tìm kiếm..." />
                  <button type="submit" value="Tìm kiếm" class="search-form__button">
                    <i class="far fa-search"></i>
                  </button>
                </form>
              </span>
            </div>
            <div class="header-main--bottom col-lg-12">
              <div class="px-4 header-nav">
                <ul class="menu">
                  <li class="menu-item active">
                    <a href="{{URL::to('/trangchu')}}" class="menu-link">Trang chủ</a>
                  </li>
                  <li class="menu-item">
                    <a href="{{URL::to('/thucdon')}}" class="menu-link">Thực đơn</a>
                  </li>
                  <li class="menu-item.html">
                    <a href="{{URL::to('/vanchuyen')}}" class="menu-link">Delivery</a>
                  </li>
                  <li class="menu-item.html">
                    <a href="{{URL::to('/tintuc')}}" class="menu-link">Tin tức - Sự kiện</a>
                  </li>
                  <li class="menu-item">
                    <a href="{{URL::to('/thuvienanh')}}" class="menu-link">Thư viện ảnh</a>
                  </li>
                  <li class="menu-item">
                    <a href="{{URL::to('/huongdan')}}" class="menu-link">Hướng dẫn đặt đơn</a>
                  </li>
                  <li class="menu-item">
                    <a href="{{URL::to('/lienhe')}}" class="menu-link">Liên hệ</a>
                  </li>

                  <li class="menu-item">

                    <!-- kiểm tra nếu trong session storage có dữ liệu rồi thì 
                    hiện thông tin tên người dùng còn nếu nó null thì tức là chưa
                    đăng nhập và di chuyển sang đăng nhập-->
                    <?php

                    use Illuminate\Support\Facades\Session;

                    $username = Session::get('username');
                    if ($username) {
                    ?>
                      <a href="{{URL::to('/profile')}}" class="menu-link">
                        <?php
                        echo $username
                        ?>
                      </a>
                    <?php
                    } else {
                      ?>
                        <a href="{{URL::to('/dangnhap')}}" class="menu-link">Đăng nhập</a>
                      <?php
                    }
                    ?>

                  </li>

                  <li class="menu-item menu-search">
                    <i class="fas fa-search icon-search" style="position: relative;"></i>
                    <form action="{{URL::to('/timkiemSP')}}" method="POST" class="search-header" style="position: absolute;">
                      @csrf
                      <input type="search" name="inputSearch" placeholder="Nhập tìm kiếm...">
                      <button type="submit" value="Tìm kiếm" class="search-form__button">
                        <i class="far fa-search"></i>
                      </button>
                    </form>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
      <main class="main">
        <div class="page-banner">
          <div class="page-banner-image image-cover">
            <img src="public/front/images/menu-page-bg.png" alt="banner trang chủ" />
          </div>
          <div class="container">
            <h1 class="page-title">THỰC ĐƠN</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{URL::to('/trangchu')}}">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Thực đơn
                </li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="page-content">
          <div class="list-menu">
            <div class="menu-item">
              <div class="menu-item--left">
                <div class="menu-item-image">
                  <img src="public/front/images/menu1.png" alt="" />
                </div>
                <a href="tel:0962180180" class="menu-item-phone"
                  >Hotline: <span>0962.180.180</span></a
                >
              </div>
              <div class="menu-item--right">
                <div class="menu-item-text">
                  <h2 class="menu-item-heading">THỰC ĐƠN CỦA CHÚNG TÔI</h2>
                  <div class="menu-item-desc">
                    Để tạo cho thực khách cảm giác thân quen gia đình, mang
                    hương vị ấm cúng của căn bếp nhỏ, thực đơn được thể hiện qua
                    các món ăn kèm theo hình ảnh minh họa và cả công thức chế
                    biến của từng món như một lời tỉ tê của VMMS về truyền thống
                    ẩm thực của Việt Nam đến với khách hàng.
                  </div>
                  <a href="#" class="btn btn-primary"
                    >Đăng ký tư vấn thực đơn</a
                  >
                </div>
              </div>
            </div>
            <div class="menu-item">
              <div class="menu-item--left">
                <div class="menu-item-image">
                  <img src="public/front/images/menu2.png" alt="" />
                </div>
                <a href="tel:0962180180" class="menu-item-phone"
                  >Hotline: <span>0962.180.180</span></a
                >
              </div>
              <div class="menu-item--right">
                <div class="menu-item-text">
                  <h2 class="menu-item-heading">MÓN ĂN</h2>
                  <div class="menu-item-desc">
                    Lấy cảm hứng từ Món Việt truyền thống và chế biến theo phong
                    cách hiện đại để cho ra đời những món ăn khiến khẩu vị thực
                    khách thăng hoa đến cung bậc cao nhất.
                  </div>
                  <a href="{{URL::to('/sanpham')}}" class="btn btn-primary">Xem menu</a>
                </div>
              </div>
            </div>
            <div class="menu-item">
              <div class="menu-item--left">
                <div class="menu-item-image">
                  <img src="public/front/images/menu2.png" alt="" />
                </div>
                <a href="tel:0962180180" class="menu-item-phone"
                  >Hotline: <span>0962.180.180</span></a
                >
              </div>
              <div class="menu-item--right">
                <div class="menu-item-text">
                  <h2 class="menu-item-heading">ĐỒ UỐNG</h2>
                  <div class="menu-item-desc">
                    Đa dạng từ các thức uống đặc trưng không thể thiếu của người Việt như cafe, nước ép, cho tới các loại nước được đặc pha một cách hết sức tuyệt vời.
                  </div>
                  <a href="/menu-detail.html" class="btn btn-primary">Xem menu</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <section class="form-consultation">
          <div class="container section-py position-relative">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="form-consultation__heading">
                  ĐĂNG KÝ TƯ VẤN THỰC ĐƠN
                </div>
                <form action="{{URL::to('/guituvan')}}" method="post" class="form-home" id="form-3">
                  @csrf
                  <input type="hidden" name="id" value="">
                  <div class="form-home__item required">
                    <label for="">Họ và tên</label>
                    <input type="text"name ="hoten" />
                  </div>

                  <input type="hidden" name ="users_id" value="
                      " />
                  <div class="form-home__item required">
                    <label for="">Số điện thoại</label>
                    <input type="text" name="sdt" />
                  </div>
                  <div class="form-home__item required">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="diachi" />
                  </div>
                  <div class="form-home__item required">
                    <label for="">Nội dung</label>
                    <input type="text" name="noidung" />
                  </div>

                  <div class="form-home__item required">
                    <input type="submit" class="submit" value="Đăng ký ngay" />
                  </div>
                </form>
              </div>
              <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="form-consultation__image">
                  <img src="public/front/images/img-form.png" alt="chef-kitchen" />
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
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
    <script type="text/javascript" src="public/front/js/jquery-3.6.0.min.js"></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript" src="public/front/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="public/front/js/script.js"></script>
  </body>
</html>
</html>