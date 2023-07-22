<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chi tiết thực đơn | VMMS2</title>
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
    <link rel="stylesheet" href="public/front/css/menu-detail.css" />
  </head>

  <body>
    <div class="wrapper menu-detail">
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
              <h1 class="header-title">THỰC ĐƠN</h1>
              <div class="header-contact">0962.180.180</div>
              <span class="menu-search">
                <i class="fas fa-search icon-search"></i>
                <form action="" class="search-mobile">
                  <input
                    type="search"
                    name=""
                    placeholder="Nhập tìm kiếm..."
                  />
                  <button
                    type="submit"
                    value="Tìm kiếm"
                    class="search-form__button"
                  >
                    <i class="far fa-search"></i>
                  </button>
                </form>
              </span>
            </div>
          </div>
        </div>
      </header>
      <main class="main">
        <div class="menu-detail-wrapper">
          <div class="menu-detail-wrapper--left">
            <div class="box-image">
              <img src="public/front/images/menu-detail2.png" />
            </div>
            <div class="box-image">
              <img src="public/front/images/menu-detail3.png" />
            </div>
            <div class="box-image">
              <img src="public/front/images/menu-detail1.png" />
            </div>
          </div>
          <div class="menu-detail-wrapper--right">
            <div class="food-list">
              <div class="food-list-image">
                <img src="public/front/images/icon-food1.png" alt="" />
              </div>
              <h2 class="food-list-heading">
                <span>KHAI VỊ</span>
              </h2>
              <div class="food-list-info">

                @foreach($khaivi as $kv)
                <div class="box-food">
                  <a href="menu-detail.html">
                    <div class="box-food__name">{{$kv->tensp}}</div>
                    <div class="box-food__price">{{$kv->gia}} VNĐ</div>
                    <div class="box-food__desc">
                      {{$kv->mieuta}}
                    </div>
                  </a>
                </div>
                @endforeach

              </div>
            </div>
            <div class="food-list">
              <div class="food-list-image">
                <img src="public/front/images/icon-food1.png" alt="" />
              </div>
              <h2 class="food-list-heading">
                <span>MÓN CHÍNH</span>
              </h2>
              <ul
                class="nav nav-pills food-list-nav"
                id="pills-tab"
                role="tablist"
              >
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    data-toggle="pill"
                    href="#food-1"
                    role="tab"
                    aria-selected="true"
                    >Gà</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-toggle="pill"
                    href="#food-2"
                    role="tab"
                    aria-selected="false"
                    >Heo</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-toggle="pill"
                    href="#food-3"
                    role="tab"
                    aria-selected="false"
                    >Bò</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-toggle="pill"
                    href="#food-4"
                    role="tab"
                    aria-selected="false"
                    >Gỏi cuốn</a
                  >
                </li>

                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-toggle="pill"
                    href="#food-5"
                    role="tab"
                    aria-selected="false"
                    >Bún/Mì</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-toggle="pill"
                    href="#food-6"
                    role="tab"
                    aria-selected="false"
                    >Canh</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-toggle="pill"
                    href="#food-7"
                    role="tab"
                    aria-selected="false"
                    >Cơm</a
                  >
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div
                  class="tab-pane fade show active" id="food-1"role="tabpanel">
                  <div class="food-list-info">
                    @foreach($monchinhGa as $ga)
                    <div class="box-food">
                      <a href="">
                        <div class="box-food__name">{{$ga->tensp}}</div>
                        <div class="box-food__price">{{$ga->gia}} VNĐ</div>
                        <div class="box-food__desc">
                         {{$ga->mieuta}}
                        </div>
                      </a>
                    </div>
                    @endforeach
                  </div>
                </div>
                <div class="tab-pane fade" id="food-2" role="tabpanel">
                  <div class="food-list-info">
                  @foreach($monchinhHeo as $heo)
                    <div class="box-food">
                      <a href="">
                        <div class="box-food__name">{{$heo->tensp}}</div>
                        <div class="box-food__price">{{$heo->gia}} VNĐ</div>
                        <div class="box-food__desc">
                         {{$heo->mieuta}}
                        </div>
                      </a>
                    </div>
                    @endforeach
                  </div>
                </div>
                <div class="tab-pane fade" id="food-3" role="tabpanel">
                    <div class="food-list-info">
                    @foreach($monchinhBo as $bo)
                        <div class="box-food">
                        <a href="">
                            <div class="box-food__name">{{$bo->tensp}}</div>
                            <div class="box-food__price">{{$bo->gia}} VNĐ</div>
                            <div class="box-food__desc">
                            {{$bo->mieuta}}
                            </div>
                        </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="food-4" role="tabpanel">
                    <div class="food-list-info">
                    @foreach($monchinhPho as $pho)
                        <div class="box-food">
                        <a href="">
                            <div class="box-food__name">{{$pho->tensp}}</div>
                            <div class="box-food__price">{{$pho->gia}} VNĐ</div>
                            <div class="box-food__desc">
                            {{$pho->mieuta}}
                            </div>
                        </a>
                        </div>
                        @endforeach
                    </div>
                </div>
              </div>
            </div>
            <div class="food-list">
              <div class="food-list-image">
                <img src="public/front/images/icon-food2.png" alt="" />
              </div>
              <h2 class="food-list-heading">
                <span>Đồ uống</span>
              </h2>
              <div class="food-list-info">
                @foreach ($douong as $nuocuong)
                <div class="box-food">
                  <a href="">
                    <div class="box-food__name">{{$nuocuong->tensp}}</div>
                    <div class="box-food__price">{{$nuocuong->gia}} VNĐ</div>
                    <div class="box-food__desc">
                     {{$nuocuong->mieuta}}
                    </div>
                  </a>
                </div>
                @endforeach
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