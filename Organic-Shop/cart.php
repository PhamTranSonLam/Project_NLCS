<?php 
require_once "config/db.php";

if(isset($_GET["id"])){
    $id = $_GET["id"];

    $sql = "DELETE FROM cart WHERE id = $id";
    $qr = mysqli_query($connect,$sql);
    //header("location: admin.php");
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
    

</head>
<body>

    <div class="container">
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

        <p>Tổng Tiền: <?php echo $grand_total ?></p>

</table>
</div>
</body>
</html>