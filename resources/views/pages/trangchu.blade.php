@extends('layout')

@section('body')

<main class="main">
        <section class="banner-home">
          <div class="banner-home__image image-cover">
            <img src="public/front/images/banner-home.png" alt="banner trang chủ" />
          </div>
        </section>
        <section class="aboutus section-py">
          <div class="container">
            <div class="row">
              <div class="aboutus-content col-lg-6">
                <h2 class="aboutus-content__heading">
                  CHÀO MỪNG QUÝ KHÁCH ĐẾN VỚI NHÀ HÀNG VMMS!
                </h2>
                <div class="aboutus-content__img-mobi image-cover">
                  <img src="public/front/images/img-about.png" alt="" />
                </div>
                <div class="aboutus-content__text">
                  <p>
                    Nhắc đến ẩm thực Việt Nam, mọi người thường nghĩ đến không
                    gian đậm chất thôn quê, mộc mạc, giản dị. Nhưng đến với
                    VMMS, bạn sẽ không khỏi bất ngờ trước lối thiết kế giao hòa
                    tinh tế và độc đáo giữa nét quê Việt Nam và kiến trúc văn
                    hoá Á Đông.
                  </p>
                  <p>
                    Đến với VMMS, Quý khách có thể thưởng thức những món ăn độc
                    đáo, sáng tạo nhưng vẫn mang đậm dấu ấn đặc trưng của ẩm
                    thực Việt. Bên cạnh đó, với đội ngũ nhân viên và đội ngũ đầu
                    bếp tài năng, chuyên nghiệp, đầy tâm huyết, VMMS sẽ mang đến
                    cho Quý khách những món ăn ngon nhất, an toàn nhất và chất
                    lượng dịch vụ tốt nhất khi Quý khách đến với VMMS.
                  </p>
                </div>
                <a href="{{URL::to('/sanpham')}}" class="btn btn-primary">
                  Xem menu
                </a>
              </div>
              <div class="aboutus-image col-lg-6">
                <img src="public/front/images/img-about.png" alt="" />
              </div>
            </div>
          </div>
        </section>
        <section class="food-home">
          <div class="container">
            <div class="row">
              <div class="food-home--left col-lg-6">
                <div class="food-image">
                  <div class="food-image-item">
                    <img src="public/front/images/food1.png" alt="" />
                  </div>
                  <div class="food-image-item">
                    <img src="public/front/images/food2.png" alt="" />
                  </div>
                  <div class="food-image-item">
                    <img src="public/front/images/food3.png" alt="" />
                  </div>
                  <div class="food-image-item">
                    <img src="public/front/images/food4.png" alt="" />
                  </div>
                </div>
              </div>
              <div class="food-home--right col-lg-6">
                <div class="food-list">
                  <h2 class="food-list-heading">
                    MÓN ĂN ĐẶC TRƯNG CỦA CHÚNG TÔI
                  </h2>
                  <div class="food-list-info">

                  @foreach($sanphamnoibat as $special)
                    <div class="box-food">
                      <a href="">
                        <div class="box-food__name">{{$special->tensp}}</div>
                        <div class="box-food__price">{{$special->gia}} VNĐ</div>
                        <div class="box-food__desc">
                         {{$special->mieuta}}
                        </div>
                      </a>
                    </div>
                  @endforeach
                   
                  </div>
                  <a href="{{URL::to('/sanpham')}}" class="btn btn-primary">Xem thực đơn</a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="introduce-home section-py">
          <div class="container">
            <div class="row">
              <div class="introduce-image col-lg-6">
                <img
                  src="public/front/images/chef-kitchen-making-dough.png"
                  alt="chef-kitchen"
                />
              </div>
              <div class="introduce-content col-lg-6">
                <h2 class="introduce-content__heading">
                  BẾP TRƯỞNG CỦA CHÚNG TÔI
                </h2>
                <div class="introduce-content__text">
                  <p>
                    Mỗi một món ăn tại đây đều được
                    <span style="color: #be1522"
                      >Đầu bếp trưởng – Chef Dante</span
                    >
                    và đội ngũ nhân viên của anh tỉ mỉ, chú trọng tuyển chọn
                    nguyên liệu tươi ngon, đảm bảo hương vị món ăn. Ngoài ra,
                    việc bày trí món ăn đối với anh cũng quan trọng không kém
                    bởi thị giác tác động không nhỏ đến khẩu vị của người ăn.
                    Các món ăn được trình bày trong những vật dụng quen thuộc
                    như mẹt, thố đất, tạo cảm giác đầm ấm như ở nhà. Từng món ăn
                    như một “thước phim tư liệu” gợi mở nhiều cảm xúc về một
                    thời đã qua.
                  </p>
                  <p>
                    Bếp trưởng Dante mong muốn mang đến những món ăn hoàn hảo về
                    hương vị lẫn hình thức, đem đến những giây phút thưởng thức
                    ẩm thực khó quên cho thực khách tại VMMS.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="why-choose section-py">
          <div class="container">
            <div class="row">
              <div class="why-choose__heading col-sm-12 col-md-12 col-lg-12">
                TẠI SAO NÊN CHỌN NHÀ HÀNG VMMS?
              </div>
              <div class="why-choose-cards col-sm-12 col-md-12 col-lg-12">
                <div class="why-choose-card">
                  <div class="why-choose-card__img">
                    <img src="public/front/images/icon1.svg" alt="" />
                  </div>
                  <div class="why-choose-card__info">
                    Sản phẩm luôn tươi ngon, đảm bảo an toàn chất lượng
                  </div>
                </div>
                <div class="why-choose-card">
                  <div class="why-choose-card__img">
                    <img src="public/front/images/icon2.svg" alt="" />
                  </div>
                  <div class="why-choose-card__info">
                    Hỗ trợ đặt bàn online nhanh chóng, dễ dàng
                  </div>
                </div>
                <div class="why-choose-card">
                  <div class="why-choose-card__img">
                    <img src="public/front/images/icon3.svg" alt="" />
                  </div>
                  <div class="why-choose-card__info">
                    Có giao hàng tận nơi với các đơn online
                  </div>
                </div>
                <div class="why-choose-card">
                  <div class="why-choose-card__img">
                    <img src="public/front/images/icon4.svg" alt="" />
                  </div>
                  <div class="why-choose-card__info">
                    Có các phòng lớn tổ chức hội nghị và sự kiện
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="customer-review section-py">
          <div class="container">
            <div class="row">
              <div class="customer-review__heading col-sm-12">
                KHÁCH HÀNG HỌ NÓI GÌ VỀ CHÚNG TÔI?
              </div>
              <div
                class="customer-review-list owl-carousel owl-theme col-sm-12"
              >

              @foreach($danhgia as $dg)
                <div class="review-item">
                  <div class="review-item__avatar">
                    <img src="public/front/images/{{$dg->user->avatar}}" alt="{{$dg->user->name}}" />
                  </div>
                  <div class="review-item__content">
                    "{{$dg->noidung}}"
                  </div>
                  <div class="review-item__name">{{$dg->user->name}}</div>
                </div>
              @endforeach
              </div>
            </div>
          </div>
        </section>
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
        <section class="news-home section-py">
          <div class="container">
            <div class="row">
              <div class="news-home__heading col-sm-12">TIN TỨC - SỰ KIỆN</div>
              <div class="news-home-list owl-carousel owl-theme col-sm-12">

              @foreach($tintuc as $tt)
                <div class="box-blog-post">
                  <div class="box-blog-post__image image-cover">
              <a href="{{URL::to('/chitiettintuc'.$tt->id)}}"><img
              src="public/storage/images/{{substr($tt->anh, 14)}}"
                      alt="Thiết kế đỉnh cao căn hộ 22m2 khiến ai cũng ngưỡng mộ"
                    />
                    </a>
                  </div>
                  <div class="box-blog-post__date">{{date('M d, Y',strtotime($tt->created_at)) }}</div>
                  <h5 class="box-blog-post__title">
                    {{$tt->tieude}}
                  </h5>
                  <div class="box-blog-post__desc">
                  {{$tt->noidung}}
                  </div>
                </div>
              @endforeach
              </div>
            </div>
          </div>
        </section>
      </main>
@endsection