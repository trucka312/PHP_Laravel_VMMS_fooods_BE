
<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title') | Admin VMMS</title>
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
    <link rel="stylesheet" href="public/front/css/home-page.css" />
    <link rel="stylesheet" href="public/front/css/admin-home-page.css">
    <link rel="stylesheet" href="public/front/css/admin-control-page.css">

  </head>

  <body>
    <div class="wrapper home-page">
      <header class="header">
        <div class="header-main">
          <div class="container">
            <div class="row">
              <div class="header-logo header-main--top col-lg-12">
                <span class="menu-bars">
                  <i class="far fa-bars"></i>
                </span>
                <div class="menu_box">
                  <a href="{{URL::to('/dashboard')}} " class="logo">
                    <img srcset="public/front/images/logo-vmms.png" alt="logo" />
                  </a>
                  <p class="menu_name">
                   @yield('menu-name')
                  </p>
                </div>
              </div>
              <div class="header-main--bottom col-lg-12">
                <div class="px-4 header-nav">
                  <ul class="menu">
                    <li class="menu-item active">
                      <a href="{{URL::to('/dashboard')}}" class="menu-link">Bảng thống kê</a>
                    </li>
                    <li class="menu-item active">
                      <a href="{{URL::to('/quanlyadmin')}}" class="menu-link">Tài khoản</a>
                    </li>
                    <li class="menu-item active">
                      <a href="{{URL::to('/quanlythucdon')}}"  class="menu-link">Thực đơn</a>
                    </li>
                    <li class="menu-item active">
                      <a href="{{URL::to('/quanlydoan')}}"  class="menu-link">Đồ ăn</a>
                    </li>
                    <li class="menu-item active">
                      <a href="{{URL::to('/quanlytintuc')}}"  class="menu-link">Tin tức</a>
                    </li>
                    <li class="menu-item active">
                      <a href="{{URL::to('/quanlythuvienanh')}}"  class="menu-link">Thư viện ảnh</a>
                    </li>
                    <li class="menu-item active">
                      <a href="{{URL::to('/quanlydatban')}}" class="menu-link">Đặt bàn</a>
                    </li>
                    <li class="menu-item active">
                      <a href="{{URL::to('/quanlytuvan')}}"  class="menu-link">Tư vấn</a>
                    </li>
                    <li class="menu-item active">
                      <a href="{{URL::to('/quanlydanhgia')}}"  class="menu-link">Đánh giá</a>
                    </li>
    
                    <li class="menu-item active">
                      <a href="{{URL::to('/quanlyvoucher')}}" class="menu-link">Vourcher</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
<!-- Body here -->
   @yield('body')
      <footer class="footer">
        <div class="container footer--top">
          <div class="row">
            <div class="footer-col footer-col-1 col">
              <div class="footer-col-content footer-info">
                <a href="/dashboard" class="footer-logo"
                  ><img src="public/front/images/logo-vmms.png" alt="Logo"
                /></a>
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
                    <a href="public/front/home-page.html">Trang chủ</a>
                  </li>
                  <li class="menu-footer__link">
                    <a href="public/front/news-category.html">Tin tức</a>
                  </li>
                  <li class="menu-footer__link">
                    <a href="public/front/menu-page.html">Thực đơn</a>
                  </li>
                  <li class="menu-footer__link">
                    <a href="public/front/contact-page.html">Liên hệ</a>
                  </li>
                  <li class="menu-footer__link">
                    <a href="public/front/booking-page.html">Đặt bàn</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="footer-col footer-col-3 col">
              <div class="footer-col-title">HƯỚNG DẪN</div>
              <div class="footer-col-content">
                <ul class="menu-footer">
                  <li class="menu-footer__link">
                    <a href="public/front/guide-page.html">Hướng dẫn đặt món online</a>
                  </li>
                  <li class="menu-footer__link">
                    <a href="public/front/guide-page.html">Hướng dẫn đặt bàn</a>
                  </li>
                  <li class="menu-footer__link">
                    <a href="public/front/guide-page.html">Hướng dẫn thanh toán</a>
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
                  <a href="public/front/http://www.facebook.com/" class="fanpage-facebook-name">NHÀ HÀNG VMMS</a>
                  <div class="fanpage-facebook-like">
                    <a href="public/front/http://www.facebook.com/"
                      ><img src="public/front/images/icon-face2.png" /> Like Page</a
                    ><span>50K người đã thích</span>
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
              <ul class="menu-footer">
                <li class="menu-footer__link">
                  <a href="public/front/privacy-policy-page.html">Chính sách bảo mật</a>
                </li>
                <li class="menu-footer__link">
                  <a href="public/front/payment-policy-page.html">Chính sách thanh toán</a>
                </li>
                <li class="menu-footer__link">
                  <a href="public/front/regulations-page.html">Quy định nhà hàng</a>
                </li>
                <li class="menu-footer__link">
                  <a href="public/front/complaint-process-page.html">Quy trình khiếu nại</a>
                </li>
              </ul>
            </div>
            <div class="col col-sm-12 col-md-5">
              <a href="!#" target="_blank" class="footer-bct"
                ><img
                  src="public/front/images/thongbaobocongthuong.png"
                  alt="Thông báo bộ công thương"
              /></a>
              <div class="social-network">
                <div class="social-network__title">KẾT NỐI VỚI CHÚNG TÔI</div>
                <ul class="social-network__list">
                  <li>
                    <a
                      href="public/front/https://www.facebook.com/"
                      rel="nofollow"
                      target="_blank"
                      ><img src="public/front/images/icon-face.svg" alt="facebook"
                    /></a>
                  </li>
                  <li>
                    <a
                      href="public/front/https://twitter.com/"
                      rel="nofollow"
                      target="_blank"
                      ><img src="public/front/images/icon-instagram.svg" alt="instagram"
                    /></a>
                  </li>
                  <li>
                    <a
                      href="public/front/https://www.youtube.com/"
                      rel="nofollow"
                      target="_blank"
                      ><img src="public/front/images/icon-twitter.svg" alt="twitter"
                    /></a>
                  </li>
                  <li>
                    <a
                      href="public/front/https://mail.google.com/"
                      rel="nofollow"
                      target="_blank"
                      ><img src="public/front/images/icon-gg.svg" alt="Gmail"
                    /></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <div class="mobile-sidebar d-lg-none">
        <div class="mobile-sidebar--top">
          <a href="public/front/https://www.facebook.com/" class="mobile-sidebar-logo"
            ><img src="public/front/images/logo-vmms.png" alt="Logo"
          /></a>
          <i class="mobile-sidebar-close"></i>
        </div>
        <div class="mobile-sidebar--bottom">
        <ul class="menu">
                    <li class="menu-item active">
                      <a href="{{URL::to('/dashboard')}}" class="menu-link">Bảng thống kê</a>
                    </li>
                    <li class="menu-item active">
                      <a href="{{URL::to('/quanlyadmin')}}" class="menu-link">Tài khoản</a>
                    </li>
                    <li class="menu-item active">
                      <a href="{{URL::to('/quanlythucdon')}}"  class="menu-link">Thực đơn</a>
                    </li>
                    <li class="menu-item active">
                      <a href="{{URL::to('/quanlydoan')}}"  class="menu-link">Đồ ăn</a>
                    </li>
                    <li class="menu-item active">
                      <a href="{{URL::to('/quanlytintuc')}}"  class="menu-link">Tin tức</a>
                    </li>
                    <li class="menu-item active">
                      <a href="{{URL::to('/quanlythuvienanh')}}"  class="menu-link">Thư viện ảnh</a>
                    </li>
                    <li class="menu-item active">
                      <a href="{{URL::to('/quanlydatban')}}" class="menu-link">Đặt bàn</a>
                    </li>
                    <li class="menu-item active">
                      <a href="{{URL::to('/quanlytuvan')}}"  class="menu-link">Tư vấn</a>
                    </li>
                    <li class="menu-item active">
                      <a href="{{URL::to('/quanlydanhgia')}}"  class="menu-link">Đánh giá</a>
                    </li>
    
                    <li class="menu-item active">
                      <a href="{{URL::to('/quanlyvoucher')}}" class="menu-link">Vourcher</a>
                    </li>
                  </ul>
          <div class="phone-number d-block">
            <a href="#">Đăng xuất</a>
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
    <script type="text/javascript" src="public/front/js/home-page.js"></script>
    <script type="text/javascript" src="public/front/js/script.js"></script>
  </body>
</html>
