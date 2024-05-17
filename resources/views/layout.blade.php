<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="{{asset('./public/frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('./public/frontend/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('./public/frontend/css/base.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <style>
        .sticky-info {
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            background-color: #d9d9d9;
            position: sticky;
            bottom: 0;
            top: 0px;
            z-index: 4;
        }

        .sticky-info--container {
            display: flex;
            align-items: center;
        }

        .sticky-info--movie-info {
            display: flex;
            align-items: center;
        }

        .sticky-info--img {
            width: 100px;
            height: 150px;
            user-select: none;
        }

        .sticky-info--movie {
            margin-left: 20px;
        }

        .sticky-info--movie p {
            font-size: 1.6rem;
            font-weight: 500;
        }

        .sticky-info--payment-info {
            display: flex;
        }

        .sticky-info--hold-ticket {
            width: 160px;
            height: 80px;
            background-color: #e3b1b1;
            margin-right: 20px;
            border: 1px solid #e3b1b1;
            border-radius: 10px;
        }

        .sticky-info--hold-ticket p:first-child {
            font-size: 1.4rem;
            font-weight: 500;
            margin-bottom: 20px;
        }

        .sticky-info--hold-ticket p:last-child {
            font-size: 4rem;
            font-weight: 500;
            margin-top: 0;
            margin-bottom: 20px;
        }

        .sticky-info--hold-ticket, .sticky-info--buy-ticket {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .sticky-info--temp-bill, .sticky-info--buy-ticket {
            width: 300px;
            height: 35px;
            background-color: #bfb2b2;
            border: 1px solid #bfb2b2;
            border-radius: 10px;
        }

        .sticky-info--temp-bill {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-bottom: 8px;
        }

        .sticky-info--temp-bill p, .sticky-info--buy-ticket p{
            font-size: 1.4rem;
            font-weight: 500;
            margin: 0;
        }

        .sticky-info--buy-ticket {
            width: 300px;
            height: 35px;
            background-color: #dbb6b6;
            border: 1px solid #dbb6b6;
            border-radius: 10px;
        }

        .sticky-info--buy-ticket:hover {
            cursor: pointer;
            filter: brightness(1.1);
        }

        .sticky-info--buy-ticket:active {
            transform: translateY(1px);
        }
    </style>
</head>
<body>
    <header>
        <div class="grid">
          <div class="col l-12 m-12 c-12">
            <div class="row sm-gutter">
              <!-- <div class="col l-12 m-4 c-6">  -->
              <div class="header-logo" onclick="transfer('/laravel/example-app/homepage')">
                <img src="{{asset('./public/frontend/images/cinova-logo.png')}}" alt="">
                <img src="{{asset('./public/frontend/images/cinova.png')}}" alt="">
              </div>

              <div class="header-menu">
                <ul class="header-ulist">
                  <li class="header-list">
                    <a href="" class="header-list--option has-inner-list">MOVIES</a>

                    <ul class="header-movies-ulist">
                      <li class="header-movies-list">
                        <a href="{{URL::to('/now-showing')}}" class="header-movies-list--option">NOW SHOWING</a>
                      </li>
                      <li class="header-movies-list">
                        <a href="{{URL::to('/coming-soon')}}" class="header-movies-list--option">COMING SOON</a>
                      </li>
                    </ul>
                  </li>
                  <li class="header-list">
                    <a href="{{URL::to('/theater')}}" class="header-list--option">THEATERS</a>
                  </li>
                  <li class="header-list">
                    <a href="" class="header-list--option">OFFERS</a>
                  </li>
                  <li class="header-list">
                    <a href="{{URL::to('/contact-us')}}" class="header-list--option">CONTACT</a>
                  </li>
                </ul>
              </div>

              <div class="header-search">
                  <input type="text" name="" id="header-search" placeholder="Search for movies/cinemas...">

                  <button type="submit" class="header-search--svg">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/>
                    </svg>
                  </button>

                <div class="header-search-history">
                  <h2>Search History</h2>

                  <ul class="header-search--ul">
                    <li class="header-search--li">
                      <a href="" class="header-search--option">the eras tour</a>
                    </li>
                    <li class="header-search--li">
                      <a href="" class="header-search--option">barbie</a>
                    </li>
                    <li class="header-search--li">
                      <a href="" class="header-search--option">exhuma</a>
                    </li>
                    <li class="header-search--li">
                      <a href="" class="header-search--option">kungfu panda 4</a>
                    </li>
                    <li class="header-search--li">
                      <a href="" class="header-search--option">after like</a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="header-authorize hide-on-m">
                <div class="header-login">
                  <a href="#" class="header-login-link" onclick="LoginForm()">Login</a>
                </div>

                <div class="header-signup">
                  <a href="#" class="header-signup-link" onclick="RegisterForm()">Sign Up</a>
                </div>
              </div>
              <!-- </div> -->
            </div>
          </div>
        </div>
    </header>
    @yield('content')

    <footer class="footer-1" >
        <div class="grid wide">
            <div class="col l-12 m-12 c-12">
                <div class="row1 sm-gutter">
                    <div class="footer-logo">
                        <div class="col l-2-4 m-4 c-6">
                            <img src="{{asset('./public/frontend/images/cinova-logo.png')}}" alt="" onclick="transfer('/laravel/example-app/homepage')" class="footer-img"/>
                        </div>
                    </div>

                    <div class="footer-content-1">
                        <div class="col l-3 m-4 c-6">
                            <div class="footer-content-1--block">
                                    <h3 class="footer-content-1--heading">BRAND VIETNAM</h3>
                                    <ul class="footer-content-1--ulist">
                                        <li class="footer-content-1--list">
                                            <a href="{{URL::to('/about-us')}}" class="footer-content-1--option" >About us</a>
                                        </li>
                                        <li class="footer-content-1--list">
                                            <a href="{{URL::to('/homepage')}}" class="footer-content-1--option">Careers</a>
                                        </li>
                                        <li class="footer-content-1--list">
                                            <a href="{{URL::to('/contact-us')}}" class="footer-content-1--option">Contact</a>
                                        </li>
                                    </ul>
                            </div>
                        </div>
                        <div class="col l-3 m-4 c-6">
                            <div class="footer-content-1--block">
                                    <h3 class="footer-content-1--heading">RENTALS</h3>
                                    <ul class="footer-content-1--ulist">
                                        <li class="footer-content-1--list">
                                            <a href="" class="footer-content-1--option">Rent theaters</a>
                                        </li>
                                        <li class="footer-content-1--list">
                                            <a href="" class="footer-content-1--option">Other rentals</a>
                                        </li>
                                    </ul>
                            </div>
                        </div>
                        <div class="col l-3 m-4 c-6">
                            <div class="footer-content-1--block">
                                    <h3 class="footer-content-1--heading">CUSTOMER SERVICE</h3>
                                    <ul class="footer-content-1--ulist">
                                        <li class="footer-content-1--list">
                                            <span class="footer-content-1--option">Hotline: 012 3456789</span>
                                        </li>
                                        <li class="footer-content-1--list">
                                            <span class="footer-content-1--option">Working hours: 7:30 - 2:00</span>
                                        </li>
                                        <li class="footer-content-1--list">
                                            <span class="footer-content-1--option">E-mail: customerservice@brand.vn</span>
                                        </li>
                                    </ul>
                            </div>
                        </div>
                        <div class="col l-3 m-4 c-6">
                            <div class="footer-content-1--block">
                                    <h3 class="footer-content-1--heading">CONNECT WITH US</h3>
                                    <div class="footer-content-1--links">
                                        <div class="footer-content-1--links-qr">
                                            <a href="" class="footer-content-1--option">
                                                <img src="https://down-vn.img.susercontent.com/file/a5e589e8e118e937dc660f224b9a1472" alt="" class="footer-content-1--qr"/>
                                            </a>
                                        </div>

                                        <div class="footer-content-1--links-not-qr">
                                            <a href="" class="footer-content-1--option">
                                                <img src="https://down-vn.img.susercontent.com/file/ad01628e90ddf248076685f73497c163" alt="" class="footer-content-1--img"/>
                                            </a>

                                            <a href="" class="footer-content-1--option">
                                                <img src="https://down-vn.img.susercontent.com/file/ae7dced05f7243d0f3171f786e123def" alt="" class="footer-content-1--img"/>
                                            </a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="footer-separator">
        <div class="grid wide">
            <div class="col l-12 m-12 c-12">
                <div class="row sm-gutter">
                    <div class="footer-separator--div"></div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-2">
        <div class="grid wide">
            <div class="col l-12 m-12 c-12">
                    <div class="footer-content-2">
                        <div class="footer-content-2--heading">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="footer-content-2-svg">
                                <path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM199.4 312.6c-31.2-31.2-31.2-81.9 0-113.1s81.9-31.2 113.1 0c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9c-50-50-131-50-181 0s-50 131 0 181s131 50 181 0c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0c-31.2 31.2-81.9 31.2-113.1 0z"/>
                            </svg>

                            2024 Brand-name. All rights reserved.
                        </div>

                        <div class="footer-content-2--footnote">
                            <img src="https://api-website.cinestar.com.vn/media/.renditions/wysiwyg/bocongthuong/dathongbao.png" alt="" class="footer-content-2--img"/>

                            <span>CÔNG TY CỔ PHẦN GIẢI TRÍ PHÁT HÀNH PHIM – RẠP CHIẾU PHIM BRAND</span>
                            <span>ĐỊA CHỈ: Đường Hàn Thuyên, khu phố 6 P, Thủ Đức, Thành phố Hồ Chí Minh</span>
                            <span>GIẤY CNĐKDN SỐ: 0312742744, ĐĂNG KÝ LẦN ĐẦU NGÀY 18/04/2014, ĐĂNG KÝ THAY ĐỔI LẦN THỨ 2 NGÀY 15/09/2014, CẤP BỞI SỞ KH&ĐT TP.HCM</span>
                        </div>
                    </div>
            </div>
        </div>
    </footer>
    <div id="login_register_form">
    </div>

    <script src="{{asset('./public/frontend/js/script.js')}}"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="{{asset('./public/frontend/js/swiper-bundle.min.js')}}"></script>
    <script>
      const swiper = new Swiper('.swiper', {
        loop: true,

        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        }
      });
    </script>
</body>
</html>
