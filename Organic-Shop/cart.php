<?php 
require_once "config/db.php";

if(isset($_GET["id"])){
    $id = $_GET["id"];

    $sql = "DELETE FROM cart WHERE id = $id";
    $qr = mysqli_query($connect,$sql);
    //header("location: admin.php");
}


if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST["ten"];
  $phone = $_POST["SDT"];
  $diachi = $_POST["diachi"];
  $tongtien = $_POST["tongtien"];
  
  $sql = "INSERT INTO `order` (name,phone,address,total)
  values ('$name', '$phone', '$diachi', '$tongtien')";

  $qr = mysqli_query($connect, $sql);
  echo '<script language="javascript">alert("Đặt hàng thành công!"); window.location="Cart.php";</script>';
  
  

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="./img/favi_icon.png" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- hieu ung load trang web -->
    <script src="https://code.jquery.com/jquery-latest.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="./asset/Home.css">
    <link rel="stylesheet" href="./asset/header_footer_responsive.css">

</head>
<body>
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
    <div class="container" style="padding-top:150px;">
        <h1 class="text-center p-2">Giỏ Hàng</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Tên</th>
      <th scope="col">Ảnh</th>
      <th scope="col">Số Lượng</th>
      <th scope="col">Giá</th>
      <th scope="col"></th>

    </tr>
  </thead>
  
  <?php 
     $stt=1;
     $grand_total=0;

      $select_cart=mysqli_query($connect,"SELECT * FROM cart");
      if(mysqli_num_rows($select_cart)>0){
        while($fetch_cart=mysqli_fetch_assoc($select_cart)){
          ?>

<tbody>
                                <tr>
                                    <th scope="row"><?php echo $stt++ ?></th>
                                    <td><?php echo $fetch_cart['product_name'] ?></td>
                                    <td><img  style="max-width: 100px;"  class="card__img--top" src="img/<?php echo $fetch_cart['product_image'] ?>" alt=""></td>
                                    <td><?php echo $fetch_cart['product_quantity'] ?></td>
                                    <td><?php echo $fetch_cart['product_price'] ?></td>

                                    <td>
                                    <a href='cart.php?id=<?php echo $fetch_cart['id']?>' values="" >Xóa</a>
                                    </td>
                                </tr>
                                                             
                            </tbody>
          <?php 
          $grand_total+=($fetch_cart['product_price']*$fetch_cart['product_quantity']);
         }
        }?>
        <form method="post">
          <label for="" class="col-2">Tên</label> <input type="text" name="ten"></br>
          <label for="" class="col-2">SDT</label>  <input type="text" name="SDT"></br>
          <label for="" class="col-2">Địa chỉ</label>  <input type="text" name="diachi"></br>
          <label for="" class="col-2">Tổng tiền</label>
          <input type="number" name="tongtien" value="<?php echo $grand_total ?>"></br>
          <button type= "submit"class="btn btn-success">Đặt hàng</button>
        </form>

</table>
</div>
</body>
</html>