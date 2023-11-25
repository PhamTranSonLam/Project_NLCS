<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/79624eb5cd.js"></script>
    <title>Giới thiệu</title>
    <link rel="shortcut icon" href="./img/favi_icon.png" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- hieu ung load trang web -->
    <script src="https://code.jquery.com/jquery-latest.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="./asset/Home.css">
    <link rel="stylesheet" href="./asset/GioiThieu.css">
    <link rel="stylesheet" href="./asset/header_footer_responsive.css">

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
            <a href="./Home.php" class="logo__a">
                <svg id="svg-logo" height="80" width="162">
                    <ellipse cx="80" cy="40" rx="80" ry="30" style="fill:rgb(82, 184, 117)"></ellipse>
                    <text fill="#ffffff" font-size="40" font-family="Verdana" x="24" y="55">Orga</text>
                </svg>
            </a>
        </div>

        <div class="navbar" id="navbar_menu">
            <ul class="navbar__ul">
                <li class="navbar__li"><a class="navbar__a" href="./Home.php">Trang chủ</a></li>
                <li class="navbar__li"><a class="navbar__a" href="./GioiThieu.php">Giới thiệu</a></li>
                <li class="navbar__li"><a class="navbar__a" href="./LienHe.php">Liên hệ</a></li>
                <li class="navbar__li navbar__dropdown "><a id="drop_content_a" class="navbar__a">Sản phẩm <i
                            class="fa-solid fa-chevron-down"></i></i></a>
                    <ul id="dropdown-content" class="display-none">
                        <li class="dropdown-content__li"><a href="./SanPham.php#hoaqua" class="dropdown-content__a">Hoa
                                qua</a></li>
                        <li class="dropdown-content__li"><a href="./SanPham.php#thucphamtuoisong"
                                class="dropdown-content__a">Thực phẩm tươi sống</a></li>
                        <li class="dropdown-content__li"><a href="./SanPham.php#raucu" class="dropdown-content__a">Rau
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
                    <a href="./DangNhap.php" class="header--user--btn user--btn">
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
    <main class="main">
        <div class="main__slider">
            <p class="main__slider__content">Giới thiệu</p>
        </div>
        <h1>Giới thiệu</h1>
        <div class="main__content">
            <p class="main__content-1">Trang giới thiệu giúp khách hàng hiểu rõ hơn về cửa hàng của bạn. Hãy cung cấp
                thông tin cụ thể về việc kinh doanh, về cửa hàng, thông tin liên hệ. Điều này sẽ giúp khách hàng cảm
                thấy tin tưởng khi mua hàng trên website của bạn.</p>
            <p class="main__content-2">Một vài gợi ý cho nội dung trang Giới thiệu:</p>
            <ul class="main__content__ul">
                <li class="main__content_li">Bạn là ai</li>
                <li class="main__content_li">Giá trị kinh doanh của bạn là gì</li>
                <li class="main__content_li">Địa chỉ cửa hàng
                </li>
                <li class="main__content_li">Bạn đã kinh doanh trong ngành hàng này bao lâu rồi</li>
                <li class="main__content_li">Bạn kinh doanh ngành hàng online được bao lâu</li>
                <li class="main__content_li">Đội ngũ của bạn gồm những ai</li>
                <li class="main__content_li">Thông tin liên hệ</li>
                <li class="main__content_li">Liên kết đến các trang mạng xã hội (Twitter, Facebook)</li>
            </ul>
            <p class="main__content-3">Bạn có thể chỉnh sửa hoặc xoá bài viết này tại đây hoặc thêm những bài viết mới
                trong phần quản lý Trang nội dung.</p>
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