
<?php 
require_once "config/db.php";
if(isset($_GET["id"])){
    $id = $_GET["id"];

    $sql = "DELETE FROM users WHERE id = $id";
    $qr = mysqli_query($connect,$sql);
    //header("location: admin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="admin.css">
    <title>Giao Hàng</title>
</head>
<body>
    <nav class="menu">
        
        <ul>
            <li>
                <a href="adminthemsanpham.php"><i class="fa-solid fa-calculator"></i> Sản phẩm</a>
            </li>
            <li>
                <a href="#"><i class="fa-regular fa-user"></i> Khách hàng</a>
            </li>
            <li>
                <a href="donhang.php"><i class="fa-regular fa-file-lines"></i> Đơn hàng</a>
            </li>
            <li>
                <a href="#"><i class="fa-solid fa-cart-shopping"></i> Giao hàng</a>
            </li>
            <li>
                <a href="#">O Đổi mật khẩu</a>
            </li>
            <li>
                <a href="DangNhap.php">X Đăng xuất</a>
            </li>
        </ul>
    </nav>
      <div class="container">
                <table class="table">
                     <thead>
                            <tr>
                            <th scope="col">STT</th>
                            <th scope="col">username</th>
                            <th scope="col">email</th>
                            <th scope="col">age</th>
                            <th scope="col">Xóa</th>

                            <th></th>
                            </tr>
                        </thead>
                    <?php
                            $sql = "SELECT * FROM users";
                            $query = mysqli_query($connect,$sql);
                            $i=1;
                    while($row = mysqli_fetch_array($query)){
                        ?>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><?php echo $row['username']?></td>
                                    <td><?php echo $row['email']?></td>
                                    <td><?php echo $row['age']?></td>
                                    <td>
                                    <a href='admin.php?id=<?php echo $row['id']?>' values="" >Xóa</a>
                                    </td>
                                </tr>                         
                            </tbody>
                            <?php }
                        ?>  
                </table>
</div>
    