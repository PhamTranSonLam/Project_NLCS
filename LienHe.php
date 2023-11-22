<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/79624eb5cd.js"></script>
    <title>Liên hệ</title>
    <link rel="shortcut icon" href="./img/favi_icon.png" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- hieu ung load trang web -->
    <script src="https://code.jquery.com/jquery-latest.js"></script>

    <!-- CSS -->
    <!-- css header && footer -->
    <link rel="stylesheet" href="./asset/TrangChu.css">
    <!-- css header && footer reponsive -->
    <link rel="stylesheet" href="./asset/header_footer_responsive.css">

    <link rel="stylesheet" href="./asset/LienHe.css">

</head>

<body>

    <!-- loading webpage -->
    <div id="loader">
        <div class="circle">
            <div class="circle1"></div>
            <div class="circle2"></div>
        </div>
    </div>

    <!-- start header -->
    <header id="header_container">
        <div class="header__logo">
            <a href="./TrangChuphpl" class="logo__a">
                <svg id="svg-logo" height="80" width="162">
                    <ellipse cx="80" cy="40" rx="80" ry="30" style="fill:rgb(82, 184, 117)"></ellipse>
                    <text fill="#ffffff" font-size="40" font-family="Verdana" x="24" y="55">Orga</text>
                </svg>
            </a>
        </div>

        <div class="navbar" id="navbar_menu">
            <ul class="navbar__ul">
                <li class="navbar__li"><a class="navbar__a" href="./TrangChu.php">Trang chủ</a></li>
                <li class="navbar__li"><a class="navbar__a" href="./GioiThieu.php">Giới thiệu</a></li>
                <li class="navbar__li"><a class="navbar__a" href="./LienHe.php">Liên hệ</a></li>
                <li class="navbar__li navbar__dropdown "><a id="drop_content_a" class="navbar__a">Sản phẩm <i
                            class="fa-solid fa-chevron-down"></i></i></a>
                    <ul id="dropdown-content" class="display-none">
                        <li class="dropdown-content__li"><a href="./SanPham.php#phpua" class="dropdown-content__a">Hoa
                                qua</a></li>
                        <li class="dropdown-content__li"><a href="./SanPham.php#thucphamtuphpng"
                                class="dropdown-content__a">Thực phẩm tươi sống</a></li>
                        <li class="dropdown-content__li"><a href="./SanPham.phpphpcu" class="dropdown-content__a">Rau
                                củ</a></li>
                    </ul>
                </li>
            </ul>
            <div class="header__search-user" action="">
                <!-- search -->
                <div class="header--search">
                    <input class="search--input" type="text" placeholder="Tìm kiếm...">
                    <button class="search--btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <!-- user && shop -->
                <div class="header--user">
                    <a href="./DangNhapphpl" class="header--user--btn user--btn">
                        <i class="fa-solid fa-user-plus"></i>
                    </a>
                    <a class="shopping__cart header--user--btn shop--btn">
                        <i class="fa-solid fa-cart-shopping"></i><sup class="no__order-item total">0</sup>
                    </a>
                </div>
            </div>
        </div>
        <!-- menu mobile -->
        <div id="menu">
            <i class="fa-solid fa-bars"></i>
        </div>
    </header>
    <!-- end header -->

    <!-- start main -->
    <main>
        <div class="banner">
            <div class="banner-img">
                <img src="./img/bg_breadcrumb-gioi-thieu.png" alt="">
                <div class="tieude">
                    <h1 class="tieude-trang"> Liên hệ </h1>
                </div>
                <p>HÃY ĐỂ CHÚNG TÔI KẾT NỐI VÀ ĐỒNG HÀNH CÙNG BẠN! </p>
            </div>
        </div>

        <!-- <h1>Liên hệ với chúng tôi</h1> -->
        <div class="thongtin">
            <div class="thongtin-form">

                <div class="main__content">
                    <ul class="main__content--contact__ul">
                        <li class="main__content--contact__li"><i class="fa-solid fa-location-dot"></i>3/2, Xuân Khánh,
                            Ninh Kiều, TP Cần Thơ</li>
                        <li class="main__content--contact__li"><i class="fa-solid fa-door-open"></i>5:00AM - 23:00PM
                        </li>
                        <li class="main__content--contact__li"><i
                                class="fa-solid fa-mobile-screen-button"></i>1919191991</li>
                        <li class="main__content--contact__li"><i class="fa-solid fa-phone"></i>123456789</li>
                        <li class="main__content--contact__li"><i class="fa-solid fa-envelope"></i>organic@gmail.com
                        </li>
                    </ul>
                </div>

                <form action="#" method="#" class="form-account">
                    <div class="form-gr">
                        <label for="">Họ và Tên</label>
                        <input type="text" placeholder="Họ và Tên" name="" id="">
                    </div>
                    <div class="form-gr">
                        <label for="">Số Điện Thoại</label>
                        <input type="text" placeholder="Số Điện Thoại" name="number" id="" value size="20">
                    </div>
                    <div class="form-gr">
                        <label for="">Email</label>
                        <input type="email" placeholder="Email" name="email" id="">
                    </div>
                    <div class="form-gr">
                        <label for=""> Quan Hệ</label>
                        <select name="option" id="" class="option">
                            <option value="Khách Hàng">Khách Hàng</option>
                            <option value="Đối Tác">Đối Tác</option>
                        </select>
                    </div>
                    <div class="form-gr">
                        <label for="noi dung"> Nội Dung Liên Hệ </label>
                        <textarea class="texrabox" name="" id="" cols="60" rows="10"
                            placeholder="Nội Dung Liên Hệ"></textarea>
                    </div>
                    <div class="form-button">
                        <button type="submit" class="button-submit"> Gửi</button>
                    </div>
                </form>
            </div>
            <div id="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.8415184086434!2d105.76842661488581!3d10.029933692830664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0895a51d60719%3A0x9d76b0035f6d53d0!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBD4bqnbiBUaMah!5e0!3m2!1svi!2s!4v1678373470095!5m2!1svi!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        </div>
    </main>
    <!-- end main -->

    <!-- start footer -->
    <footer class="footer">
        <div class="footer__new-letter">
            <form action="">
                <h3 class="footer__new-letter__primary">Đăng ký nhận khuyến mãi</h3>
                <div class="footer__new-letter__form">
                    <div class="footer__new-letter__input">
                        <input placeholder="Nhập email của bạn" type="email">
                    </div>
                    <div class="footer__new-letter__btn">
                        <button class="">Đăng ký</button>
                    </div>
            </form>
        </div>
        </div>
        <div class="footer-main__container">
            <div class="footer-main__container__content">
                <div class="footer-main__container__items footer-main__container__items--contact">
                    <div class="footer-main__container__item">
                        <img src="../img/logo.png" alt="">
                    </div>
                    <ul class="footer-main__container__items__ul">
                        <li class="footer-main__container__items__li"><i class="fa-solid fa-location-dot"></i>30/4, Ninh
                            Kiều, TP Cần Thơ</li>
                        <li class="footer-main__container__items__li"><i
                                class="fa-solid fa-mobile-screen-button"></i>123456789</li>
                        <li class="footer-main__container__items__li"><i class="fa-solid fa-phone"></i>123456789</li>
                        <li class="footer-main__container__items__li"><i
                                class="fa-solid fa-envelope"></i>organic@gmail.com</li>
                    </ul>

                </div>
                <div class="footer-main__container__items">
                    <div class="footer-rest-title">
                        <h3>Chính sách đổi trả</h3>
                    </div>
                    <ul class="footer-main__container__items__ul">
                        <li class="footer-main__container__items__li"><a href=""
                                class="footer-main__container__items__a">Chính sách đổi trả</a> </li>
                        <li class="footer-main__container__items__li"><a href=""
                                class="footer-main__container__items__a">Chính sách bảo mật</a> </li>
                        <li class="footer-main__container__items__li"><a href=""
                                class="footer-main__container__items__a">Chính sách vận chuyển</a> </li>
                        <li class="footer-main__container__items__li"><a href=""
                                class="footer-main__container__items__a">Phương thức thanh toán</a> </li>
                    </ul>
                </div>
                <div class="footer-main__container__items">
                    <div class="footer-rest-title">
                        <h3>về chúng tôi</h3>
                    </div>
                    <ul class="footer-main__container__items__ul">
                        <li class="footer-main__container__items__li"> <a href=""
                                class="footer-main__container__items__a">Giỏ hàng</a> </li>
                        <li class="footer-main__container__items__li"> <a href=""
                                class="footer-main__container__items__a">Giới thiệu</a> </li>
                        <li class="footer-main__container__items__li"> <a href=""
                                class="footer-main__container__items__a">Hướng dẫn mua hàng</a> </li>
                        <li class="footer-main__container__items__li"> <a href=""
                                class="footer-main__container__items__a">Liên hệ</a> </li>
                    </ul>
                </div>
                <div class="footer-main__container__items">
                    <div class="footer-rest-title">
                        <h3>mạng xã hội</h3>
                    </div>
                    <ul class="footer-main__container__items__ul">
                        <li class="footer-main__container__items__li"><a href=""
                                class="footer-main__container__items__a"><i
                                    class="fa-brands fa-square-facebook"></i>Facebook</a></li>
                        <li class="footer-main__container__items__li"><a href=""
                                class="footer-main__container__items__a"><i
                                    class="fa-brands fa-square-instagram"></i>Instagram</a></li>
                        <li class="footer-main__container__items__li"><a href=""
                                class="footer-main__container__items__a"><i
                                    class="fa-brands fa-linkedin"></i>Linkedin</a></li>
                        <li class="footer-main__container__items__li"><a href=""
                                class="footer-main__container__items__a"><i
                                    class="fa-brands fa-square-snapchat"></i>Snapchat</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->


    <!-- backtop -->
    <a href="#" class="back-top">
        <i class="fa-solid fa-angles-up"></i>
    </a>
    <script src="./asset/ThemSanPham.js"></script>
    <script src="./asset/main.js"></script>
    <!-- <script>
        const prices = document.querySelectorAll('.card__price');
        prices.forEach(item => {
          item.innerText = Number(item.innerText).toLocaleString('de-DE', { style: 'currency', currency: 'VND' });
        })
        window.onload = loadShoppingCart;
    </script> -->


</body>

</html>