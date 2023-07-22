
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Voucher | VMMS</title>

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
  <link rel="stylesheet" href="public/front/css/booking-page.css">
  <link rel="stylesheet" href="public/front/css/promotion-page.css">
</head>
<body>
  <div class="wrapper booking-page promotion-page">
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
            <h1 class="header-title">Voucher tặng bạn !</h1>
            <div class="header-contact">0962.180.180</div>
            <span class="menu-search">
              <i class="fas fa-search icon-search" style="position: relative;"></i>
              <form action="" class="search-mobile" style="position: absolute;">
                <input type="search" name="" placeholder="Nhập tìm kiếm..." />
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

    <div class="title">MÃ GIẢM GIÁ HOT</div>
    <span  style="margin :35px ">Lưu ý : các mã giảm giá này áp dụng cho tất cả các nền tảng đặt món online của VMMS bạn nhé !</span>
    <main class="main" style="margin-left :45px ">
        <div class="list-item row">
            @foreach($voucher as $vc)
          <div class="item col-sm-12 col-md-6 col-lg-4">
            <div class="left">
              <img src="https://cf.shopee.vn/file/01ad529d780769c418b225c96cb8a3d7" alt="" class="item-img">
              <strong class="item-name">Noodle</strong>
            </div>
            <div class="right">

              <br><span class="promotion">Số người ăn tối thiểu : <strong class="promotion-minimum">{{$vc->toithieusonguoi}}</strong></span>
              <br><span class="promotion">Giảm : <strong class="promotion-remaining">{{$vc->giam}}</strong> $ thực đơn</span>
              <br><span class="promotion">MÃ : <strong id="promotion_text" class="promotion-code">{{$vc->ma}}</strong></span>
              <br><span class="promotion">Hạn SD : <strong class="promotion-expiry">{{$vc->hsd}}</strong></span>
              <br><span class="promotion">Lưu ý :<strong class="item-note">Chỉ áp dụng cho sản phẩm của VMMS cung cấp</strong></span>
              <br><button class="promotion-btn" onclick="copyCouponCode(event, 'COSLUX05', 'https://shope.ee/an_redir?origin_link=https%3A%2F%2Fshopee.vn%2Fsearch%3FpromotionId%3D613398027468800%26signature%3D9da90109160ec2cee32ac6c0e9a1ae26f3cb73cc7049d622bf0418649854febb&amp;affiliate_id=17310730002&amp;sub_id=SL_1----', true)">copy</button>
            </div>
          </div>
          @endforeach

      </div>
    </main>
  </div>
  <script>
    function copyVourcher(){
      let input = document.getElementById('promotion_text')
      try {
        let value = input.textContent;
        if(navigator.clipboard) {   
          navigator.clipboard.writeText(value);
          console.log(`The text '${value}' is in the Clipboard Now!`);
        } else {
          console.log(`Clipboard API is Not Supported`);
        }
      } catch (err) {
        console.error(`Failed to copy: ${err}`);
      }
    }

    function pasteVourcher(){
      try {
        if (navigator.clipboard) {
          const fromClipboard = navigator.clipboard.readText();
          input.value = fromClipboard;
          console.log(`The text '${fromClipboard}' is pasted successfully!`);
        } else {
          console.log(`Clipboard API is Not Supported`);
        }
      } catch (err) {
        console.error(`Failed to paste: ${err}`);
      }
    }
    pasteVourcher()
    const copybtn = document.getElementById('btn_cop');
    copybtn.onclick = copyVourcher();
  </script>
</body>
</html>