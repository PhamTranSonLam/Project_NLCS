<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/79624eb5cd.js"></script>
    <!-- crossorigin="anonymous" -->
    <title>Trang Chủ</title>

    <link rel="shortcut icon" href="./img/favi_icon.png" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- hieu ung load trang web -->
    <script src="https://code.jquery.com/jquery-latest.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="./asset/TrangChu.css">
    <link rel="stylesheet" href="./asset/header_footer_responsive.css">

</head>

<body>
    <!-- loading webpage -->
    <!-- <div id="loader">
        <div class="circle">
            <div class="circle1"></div>
            <div class="circle2"></div>
        </div>
    </div> -->

    <!-- start header -->
    <header id="header_container">
        <div class="header__logo">
            <a href="./TrangChu.php" class="logo__a">
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
                        <li class="dropdown-content__li"><a class="dropdown-content__a" href="./SanPham.php#hoaqua">Hoa
                                qua</a></li>
                        <li class="dropdown-content__li"><a class="dropdown-content__a"
                                href="./SanPham.php#thucphamtuoisong">Thực phẩm tươi sống</a></li>
                        <li class="dropdown-content__li"><a class="dropdown-content__a" href="./SanPham.php#raucu">Rau
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
                    <a href="cart.php" class="shopping__cart header--user--btn shop--btn">
                        <i class="fa-solid fa-cart-shopping" ></i><sup class="no__order-item total">0</sup>

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

    <!-- slider -->
    <div id="slider">
        <img id="slider--img1" src="./img/slider_1.jpg" alt="">
        <!-- <img class="slider--img2" src="./img/m_slider_2.jpg" alt=""> -->
        <h3 class="slider__text">Organic Shop</h3>
    </div>



    <!-- start main -->
    <main class="main">
        <div class="main__wrapper">
            <div class="row">
                <div class="main__options option-1 ">
                    <div class="main__options__content">
                        <h3>Rau quả tươi</h3>
                        <span>Sinh tố hoa quả
                            Chúng tôi cam kết 100% các sản phẩm có nguồn gốc xuất xứ rõ ràng, sạch, an toàn và đảm bảo
                            chất lượng ngon nhất giao đến tận tay người tiêu dùng, để san sẻ sự vất vả của các mẹ, các
                            chị</span>
                        <button>Xem ngay</button>
                    </div>
                </div>
                <div class="main__options option-2">
                    <div class="main__options__content">
                        <h3>Sinh tố hoa quả</h3>
                        <span>Sinh tố hoa quả
                            Chúng tôi cam kết 100% các sản phẩm có nguồn gốc xuất xứ rõ ràng, sạch, an toàn và đảm bảo
                            chất lượng ngon nhất giao đến tận tay người tiêu dùng, để san sẻ sự vất vả của các mẹ, các
                            chị</span>
                        <button>Xem ngay</button>
                    </div>

                </div>
                <div class="main__options option-3">
                    <div class="main__options__content">
                        <h3>Thực phẩm tươi</h3>
                        <span>Sinh tố hoa quả
                            Chúng tôi cam kết 100% các sản phẩm có nguồn gốc xuất xứ rõ ràng, sạch, an toàn và đảm bảo
                            chất lượng ngon nhất giao đến tận tay người tiêu dùng, để san sẻ sự vất vả của các mẹ, các
                            chị</span>
                        <button>Xem ngay</button>
                    </div>

                </div>
                <div class="main__options option-4">
                    <div class="main__options__content">
                        <h3>Hoa quả tươi mát</h3>
                        <span>Sinh tố hoa quả
                            Chúng tôi cam kết 100% các sản phẩm có nguồn gốc xuất xứ rõ ràng, sạch, an toàn và đảm bảo
                            chất lượng ngon nhất giao đến tận tay người tiêu dùng, để san sẻ sự vất vả của các mẹ, các
                            chị</span>
                        <button>Xem ngay</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="main--sale">
            <div class="about-shop">
                <h1 class="about-shop__title ">Về chúng tôi</h1>
                <p class="about-shop-text">
                    Hiện tại vùng nguyên liệu của chúng tôi có thể cung cấp các thực tập tươi sạch với số lượng lớn vì
                    đang vào vụ mùa thu hoạch nên chúng tôi có thể cung ứng cho tất cả các đối tác xuất khẩu nông sản
                    trên cả nước.
                </p>
                <img src="./img/about-img.jpg" alt="" class="about-shop-img">
                <ul class="about-list">
                    <li class="about-li">
                        <p class="about-shop-text">Có thể có ít thuốc trừ sâu bọ hoặc hóa chất khác.</p>
                    </li>
                    <li class="about-li">
                        <p class="about-shop-text">Thịt động vật được nuôi trong môi trường thiên nhiên gần với con
                            người hơn</p>
                    </li>
                    <li class="about-li">
                        <p class="about-shop-text">Thịt không có kháng sinh hoặc kích thích tố</p>
                    </li>
                    <li class="about-li">
                        <p class="about-shop-text"> Áp dụng phương pháp canh tác tự nhiên để đất trở lại mầu mỡ.</p>
                    </li>
                </ul>
            </div>
            <div class="sidebar--sale">
                <h2 class="sidebar--title">Big Sales</h2>
                <a class="sidebar--buy" href="./SanPham.php">Mua ngay</a>
                <a href="./SanPham.php"><img src="./img/sale-img.jpg" alt="" class="sale-img"></a>
            </div>
        </div>

        <div class="topbuy--primary">
            <h1>Sản phẩm bán chạy</h1>
        </div>

        <div class="topbuy">
            <div class="topbuy--option" id="sanpham">
                <div class="topbuy-item">
                    <img class="topbuy--img product--img" src="./img/cam.jpg" alt="">
                    <div class="topbuy__info">
                        <p class="topbuy--name product--name ">Cam</p>
                        <p class="topbuy--price product--price">40,000</p>
                        <button class="topbuy-buy"><i class="fa-solid fa-cart-plus"></i></button>
                    </div>
                </div>
            </div>
            <div class="topbuy--option" id="sanpham">
                <div class="topbuy-item">
                    <img class="topbuy--img product--img" src="./img/chuoi-nam-my.jpg" alt="">
                    <div class="topbuy__info">
                        <p class="topbuy--name product--name ">Chuối</p>
                        <p class="topbuy--price product--price">50,000</p>
                        <button class="topbuy-buy"><i class="fa-solid fa-cart-plus"></i></button>
                    </div>
                </div>
            </div>
            <div class="topbuy--option" id="sanpham">
                <div class="topbuy-item">
                    <img class="topbuy--img product--img" src="./img/dau-da-lat.jpg" alt="">
                    <div class="topbuy__info">
                        <p class="topbuy--name product--name ">Dâu Đà Lạt</p>
                        <p class="topbuy--price product--price">290,000</p>
                        <button class="topbuy-buy"><i class="fa-solid fa-cart-plus"></i></button>
                    </div>
                </div>
            </div>
            <div class="topbuy--option" id="sanpham">
                <div class="topbuy-item">
                    <img class="topbuy--img product--img" src="./img//qua-oc-cho.jpg" alt="">
                    <div class="topbuy__info">
                        <p class="topbuy--name product--name ">Quả óc chó</p>
                        <p class="topbuy--price product--price">710,000</p>
                        <button class="topbuy-buy"><i class="fa-solid fa-cart-plus"></i></button>
                    </div>
                </div>
            </div>
            <div class="topbuy--option" id="sanpham">
                <div class="topbuy-item">
                    <img class="topbuy--img product--img" src="./img/chuoi.jpg" alt="">
                    <div class="topbuy__info">
                        <p class="topbuy--name product--name ">Chuối</p>
                        <p class="topbuy--price product--price">70,000</p>
                        <button class="topbuy-buy"><i class="fa-solid fa-cart-plus"></i></button>
                    </div>
                </div>
            </div>
            <div class="topbuy--option" id="sanpham">
                <div class="topbuy-item">
                    <img class="topbuy--img product--img" src="./img/cachua1.png" alt="">
                    <div class="topbuy__info">
                        <p class="topbuy--name product--name ">cà chua</p>
                        <p class="topbuy--price product--price">50,000</p>
                        <button class="topbuy-buy"><i class="fa-solid fa-cart-plus"></i></button>
                    </div>
                </div>
            </div>
            <div class="topbuy--option" id="sanpham">
                <div class="topbuy-item">
                    <img class="topbuy--img product--img" src="./img/dua-chuot.jpg" alt="">
                    <div class="topbuy__info">
                        <p class="topbuy--name product--name ">Dưa chuột</p>
                        <p class="topbuy--price product--price">30,000</p>
                        <button class="topbuy-buy"><i class="fa-solid fa-cart-plus"></i></button>
                    </div>
                </div>
            </div>
            <div class="topbuy--option" id="sanpham">
                <div class="topbuy-item">
                    <img class="topbuy--img product--img" src="./img/buoi-1.jpg" alt="">
                    <div class="topbuy__info">
                        <p class="topbuy--name product--name ">Bưởi</p>
                        <p class="topbuy--price product--price">70,000</p>
                        <button class="topbuy-buy"><i class="fa-solid fa-cart-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="hotline">
            <div class="hotline-theme">
                <div class="hotline-content">
                    <h2 class="hotline__h2">Hotline</h2>
                    <a class="hotline__a" href="">123456789</a>
                    <p class="hotline__p">Chúng tôi cam kết 100% các sản phẩm có nguồn gốc xuất xứ rõ ràng, sạch, an
                        toàn và đảm bảo chất lượng ngon nhất.</p>
                </div>
            </div>
        </div>

        <div class="topbrand">
            <h1 class="topbrand--title">
                Top các thương hiệu nổi bật
            </h1>
            <div class="topbrand__item">
                <a class="brand--img" href=""><img src="/img/brand_1.png" alt=""></a>
                <a class="brand--img" href=""><img src="/img/brand_2.png" alt=""></a>
                <a class="brand--img" href=""><img src="/img/brand_3.png" alt=""></a>
                <a class="brand--img" href=""><img src="/img/brand_4.png" alt=""></a>
                <a class="brand--img" href=""><img src="/img/brand_5.png" alt=""></a>
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
                        <button type="submit" class="">Đăng ký</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- <div class="footer-main__container"> -->
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
                    <li class="footer-main__container__items__li"><i class="fa-solid fa-envelope"></i>organic@gmail.com
                    </li>
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
                    <li class="footer-main__container__items__li"><a href="" class="footer-main__container__items__a"><i
                                class="fa-brands fa-square-facebook"></i>Facebook</a></li>
                    <li class="footer-main__container__items__li"><a href="" class="footer-main__container__items__a"><i
                                class="fa-brands fa-square-instagram"></i>Instagram</a></li>
                    <li class="footer-main__container__items__li"><a href="" class="footer-main__container__items__a"><i
                                class="fa-brands fa-linkedin"></i>Linkedin</a></li>
                    <li class="footer-main__container__items__li"><a href="" class="footer-main__container__items__a"><i
                                class="fa-brands fa-square-snapchat"></i>Snapchat</a></li>
                </ul>
            </div>
        </div>
        <!-- </div> -->
    </footer>
    <!-- end footer -->

    <!-- backtop -->
    <a href="#" class="back-top">
        <i class="fa-solid fa-angles-up"></i>
    </a>

    <script src="./asset/ThemSanPham.js"></script>
    <script src="./asset/main.js"></script>

    <script>
        // thay doi slider trang chu
        var imgtag = document.getElementById("slider--img1");
        var imgArr = ["./img/slider_1.jpg", "./img/m_slider_2.jpg"];
        var i = 0;
        function changImg() {
            imgtag.setAttribute("src", imgArr[i]);
            i++;
            if (i == imgArr.length) i = 0;
        }
        setInterval(changImg, 1500);
    </script>

    <script>
        const prices = document.querySelectorAll('.card__price');
        prices.forEach(item => {
            item.innerText = Number(item.innerText).toLocaleString('de-DE', { style: 'currency', currency: 'VND' });
        })
        window.onload = loadShoppingCart;
    </script>

</body>
</html>