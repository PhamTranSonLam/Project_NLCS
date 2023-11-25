
<?php 
require_once "config/db.php";

    $sql = "SELECT * FROM products inner join brands on products.brand_id = brands.brand_id";
    $query = mysqli_query($connect,$sql);

// DANH MUC
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    
        $sql = "DELETE FROM products WHERE prd_id = $id";
        $qr = mysqli_query($connect,$sql);
        //header("location: admin.php");
    }
    //header('location:adminthemsanpham.php');
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
                <a href="admin.php"><i class="fa-solid fa-calculator"></i> Sản phẩm</a>
            </li>
            <li>
                <a href="admin.php"><i class="fa-regular fa-user"></i> Khách hàng</a>
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
</div>


    <div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Danh sách sản phẩm</h2>
        </div>
        <div class="card-body">
            <table class = "table">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Số lượng sản phẩm</th>
                        <th>Mô tả</th>
                        <th>Thương hiệu</th>
                        <th>Sửa</th>
                        <th>Xóa</th>

                        
                    </tr>
                </thead>
                <tbody >
                   <?php
                   $i=1;
                   while($row = mysqli_fetch_assoc($query)){?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['prd_name']; ?></td>
                            <td>
                                <img style="width: 100px;" src="img/<?php echo $row['image']; ?>" >
                            
                            </td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['quantity']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td><?php echo $row['brand_name']; ?></td>
                            <td>
                            <td>
                                <a href="indexx.php?page_layout=sua&id=<?php echo $row['prd_id']; ?>">Sửa</a>
                            </td>
                            <td>
                                <a onclick="return Del('<?php echo $row ['prd_name']; ?>')" href="adminthemsanpham.php?id=<?php echo $row['prd_id']?>">Xóa</a>
                            </td>

                        </tr>
                   <?PHP } ?>
                   
                </tbody>
            </table>
            <a class="btn btn-primary"href="indexx.php?page_layout=them">Thêm mới</a>
        </div>
    </div>
</div>
<script>
    function Del(name){
        return confirm ("Bạn có chắc chắn muốn xóa sản phẩm:"+ name+ "?");
    }
</script>
      

    