<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chi tiết tin tức | VMMS2</title>
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
    <link rel="stylesheet" href="public/front/css/news-detail.css" />
  </head>

  <body>
    <div class="wrapper news-detail">
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
            <img src="public/front/images/bg-news.png" />
          </div>
          <div class="container">
            <h3 class="page-title">TIN TỨC - SỰ KIỆN</h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{URL::to('/trangchu')}}">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Tin tức - Sự kiện
                </li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="news-wrapper">
          <div class="container">
            <div class="row">
              
              <div class="col-content col-lg-9 col-md-12 col-sm-12">
          
                <h1 class="news-title">
                {{$new->tieude}}
                </h1>
                <div class="news-info">
                  <div class="news-info__date">{{$new->thoigian}}</div>
                  <div class="news-info__share"><a href="http://facebook.com/">Chia sẻ</a></div>
                </div>
                <div class="news-detail">
                  <p>
                  {{$new->noidung}}
                  </p>
                  
                  <img  src="public/storage/images/{{substr($new->anh, 14)}}" alt="{{$new->tieude}}" />
                </div>
              
              </div>
          
              <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="col-sidebar">
                  <div class="new-post">
                    <div class="new-post-title">Tin mới nhất</div>
                    <div class="new-post-list">
                      <div class="post-item">
                        <a href="#" class="">
                          <div class="post-item-image image-cover">
                            <img src="public/front/images/post1.png" alt="" />
                          </div>
                          <div class="post-item-content">
                            <h4 class="post-item-title">
                              Check in liền tay - Hái lộc mê say
                            </h4>
                          </div>
                        </a>
                      </div>
                      <div class="post-item">
                        <a href="#" class="">
                          <div class="post-item-image image-cover">
                            <img src="public/front/images/post2.png" alt="" />
                          </div>
                          <div class="post-item-content">
                            <h4 class="post-item-title">
                              Siêu phẩm món mới sắp ra mắt trên hệ thống nhà
                              hàng VMMS
                            </h4>
                          </div>
                        </a>
                      </div>
                      <div class="post-item">
                        <a href="#" class="">
                          <div class="post-item-image image-cover">
                            <img src="public/front/images/post3.png" alt="" />
                          </div>
                          <div class="post-item-content">
                            <h4 class="post-item-title">
                              Hội ngộ hàn huyên - mến mời ưu đãi
                            </h4>
                          </div>
                        </a>
                      </div>
                      <div class="post-item">
                        <a href="#" class="">
                          <div class="post-item-image image-cover">
                            <img src="public/front/images/post4.png" alt="" />
                          </div>
                          <div class="post-item-content">
                            <h4 class="post-item-title">
                              VMMS đón chào quý khách với công suất tối đa
                            </h4>
                          </div>
                        </a>
                      </div>
                      <div class="post-item">
                        <a href="#" class="">
                          <div class="post-item-image image-cover">
                            <img src="public/front/images/post5.png" alt="" />
                          </div>
                          <div class="post-item-content">
                            <h4 class="post-item-title">
                              Các món ăn siêu ngon với view hồ Tây cực xịn tại
                              VMMS Trích Sài
                            </h4>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="tags">
                    <div class="tags-title">Tags</div>
                    <div class="tags-list">
                      <a href="" class="tags-item">Nội thất phòng khách</a>
                      <a href="" class="tags-item">Nội thất phòng bếp</a>
                      <a href="" class="tags-item">Nội thất phòng ngủ</a>
                      <a href="" class="tags-item">Xu hướng nội thất 2022</a>
                      <a href="" class="tags-item"
                        >Cẩm nang thiết kế nội thất</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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