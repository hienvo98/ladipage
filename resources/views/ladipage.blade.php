<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ladi - Page</title>
</head>

<body>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
      <style>
      .slide {
          position: relative;
      }
      .slide::before {
        content: '';
        background-image: url('{{ asset('image/CAO-CAP.jpg') }}');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.8; /* Adjust the background image opacity */
      }

      .slide-inner {
          position: relative;
          z-index: 1;
      }

      .single-slick {
          display: inline-block;
          vertical-align: middle;
      }
      .cc {
          position: relative;
      }

      .slide-inner {
          position: relative;
      }

      .arrow-prev,
      .arrow-next {
          position: absolute;
          top: 50%;
          transform: translateY(-50%);
          background-color: transparent;
          border: none;
          color: #ffffff;
          font-size: 24px;
          cursor: pointer;
      }

      .arrow-prev {
          left: 10px;
      }

      .arrow-next {
          right: 10px;
      }
      .pt {
        position: relative;
      }
      
      .slick-slider {
        position: relative;
        width: 100%;
        height: 100%;
        overflow: hidden;
      }
      
      .slick-slider::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('path/to/pho_thong.jpg');
        background-size: cover;
        z-index: -1;
      }
      
      .multiple-slick img {
        width: 50%;
        height: 50%;
        /*Thêm các thuộc tính CSS khác cho các hình ảnh trong slick-slider nếu cần*/
      }
      .personal {
        position: relative;
      }

      .personal img {
        display: block;
        width: 100%;
        height: auto;
      }

      .video-personal {
        position: absolute;
        bottom: 20%;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .muitiple-slick {
        margin-right: 10px;
      }

      .muitiple-slick iframe {
        max-width: 100%;
        height: auto;
      }
      .footer {
        position: relative;
      }

      .img-container {
        position: relative;
      }

      .info-personal {
        position: absolute;
        top: 46%;
        left: 55%;
        /* bottom: 5%; */
        width: 27%;
        /* height: 40%; */
        background-color: rgb(255 237 167);
        /* display: flex; */
        justify-content: center;
        align-items: center;
        z-index: 2;
      }
      /* #main-form-content {
        display: flex;
        justify-content: center;
        align-items: center;
        background: rgb(255 234 155);
        width: 100%;
        height: 20vh;
        border-radius: 10px;
      }

      .form-wrapper {
        width: 90%;
        margin: 0px auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-left: 2%;
        height: 100%;
      }

      

      label {
        display: block;
        margin-bottom: 5px;
      }

      input[type="number"],
      input[type="text"],
      input[type="email"] {
        width: 100%;
      } */

      /* .button-muangay {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        background-color: #b11828;
        color: white;
        border: none;
        cursor: pointer;
      }

      .button-muangay:hover {
        background-color: #45a049;
      } */
      .form-group {
        text-align: center;
      }

      .form-group input[type="number"],
      .form-group input[type="text"],
      .form-group input[type="email"] {
        width: 90%;
        margin: auto;
      }
      .button-muangay {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        background-color: #b11828;
        color: white;
        border: none;
        cursor: pointer;
      }
  </style>

  <div>
    <img src="{{ asset('image/maychaybokingsport.jpg') }}" alt="máy chạy bộ king sport"  width="100%"/>
    <img src="{{ asset('image/loi_ich_may_chay_bo_tai_nha.jpg') }}" alt="máy chạy bộ king sport"  width="100%"/>
    <img src="{{ asset('image/dong_co_khong_choi_than.jpg') }}" alt="máy chạy bộ king sport"  width="100%"/>
    <img src="{{ asset('image/may_ban_chay.jpg') }}" alt="máy chạy bộ king sport"  width="100%"/>
    <div class="pt">
        <img src="{{ asset('image/pho_thong.jpg') }}" alt="máy chạy bộ king sport"  width="100%"/>
        <div class="slick-slider">
          <div class="multiple-slick">
            <img src="image/1.png" alt="Ảnh 1" s />
          </div>
          <div class="multiple-slick">
            <img src="image/2.png" alt="Ảnh 2" />
          </div>
          <div class="multiple-slick">
            <img src="image/3.png" alt="Ảnh 3" />
          </div>
          <div class="multiple-slick">
            <img src="image/4.png" alt="Ảnh 4" />
          </div>
          <div class="multiple-slick">
            <img src="image/5.png" alt="Ảnh 5" />
          </div>
          <div class="multiple-slick">
            <img src="image/6.png" alt="Ảnh 6" />
          </div>
        </div>
    </div>
    <div class="cc">
        <div class="slide">
            <div class="slide-inner">
                <div class="single-slick">
                    <img data-lazy="{{ asset('image/CAO-CAP1.png') }}" alt="máy chạy bộ CC1" width="100%">
                </div>
                <div class="single-slick">
                    <img data-lazy="{{ asset('image/CAO-CAP2.png') }}" alt="máy chạy bộ CC2" width="100%">
                </div>
                <div class="single-slick">
                    <img data-lazy="{{ asset('image/CAO-CAP3.png') }}" alt="máy chạy bộ CC3" width="100%">
                </div>
                <div class="single-slick">
                    <img data-lazy="{{ asset('image/CAO-CAP4.png') }}" alt="máy chạy bộ CC4" width="100%">
                </div>
                <div class="single-slick">
                    <img data-lazy="{{ asset('image/CAO-CAP5.png') }}" alt="máy chạy bộ CC5" width="100%">
                </div>
            </div>
        </div>
        <button class="arrow-prev"><i class="fas fa-arrow-left"></i></button>
        <button class="arrow-next"><i class="fas fa-arrow-right"></i></button>
    </div>
    <img src="{{ asset('image/sanphammoi.jpg') }}" alt="máy chạy bộ king sport"  width="100%"/>
    <img src="{{ asset('image/8_ly_do.jpg') }}" alt="máy chạy bộ king sport"  width="100%"/>
    <div class="personal">
      <div class="slide-personal">
      <img src="{{ asset('image/VIDEO-KHACH-HANG_01.png') }}" alt="máy chạy bộ king sport"  width="100%"/>
      <div class="video-personal">
          <iframe width="33%" height="30%" src="https://www.youtube.com/embed/-TA0n4dy-6c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="margin-right: 1%;"></iframe>
          <iframe width="33%" height="30%" src="https://www.youtube.com/embed/_cC1ZpMeFPk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="margin-right: 1%;"></iframe>
        </div>
      </div>
        <button class="arrow-prev"><i class="fas fa-arrow-left"></i></button>
        <button class="arrow-next"><i class="fas fa-arrow-right"></i></button>
      </div>
    </div>
    <img src="{{ asset('image/dich_vu_hau_mai.jpg') }}" alt="máy chạy bộ king sport"  width="100%"/>
    <div class="footer">
      <div class="img-container">
        <img src="{{ asset('image/DANG-KY-NGAY-VER-3.jpg') }}" alt="máy chạy bộ king sport" width="100%">
          <div class="info-personal">
            <form action="/info-personal.html" method="POST" id="main-form-content">
              <div class="form-group">
              <input type="number" name="phone" id="phone" class="form-control" pattern="0?[35789]{1}[0-9]{8}" required="">
              </div>
              <div class="form-group">
              <input type="text" name="name" id="name" class="form-control" required="">
              </div>
              <div class="form-group">
              <input type="email" name="email" id="email" class="form-control" required="">
              </div>
              <p class="text-center mt-3">
                <button class="button-muangay" id="btn-send-form"><span>ĐĂNG KÝ NHẬN MÃ</span></button>
              </p>
            </form>
          </div>
      </div>
    </div>
  <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>

    <!-- ✅ load Slick ✅ -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
      integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
  <script type="text/javascript">
        $('.slide-inner').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            lazyLoad: 'ondemand',
            infinite: true,
            centerMode: true,
            centerPadding: '0px',
            prevArrow: $('.arrow-prev'),
            nextArrow: $('.arrow-next')
        });

        $(document).ready(function() {
          $('.slick-slider').slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 3,
            slidesToScroll: 1
          });
        });
  </script>
  </script>
  
</body>
</html>