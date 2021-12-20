<!DOCTYPE html>
<html lang="en">
<?php 
require_once("controller/authController.php");
require_once("class/category.php");
require_once("class/product.php");
require_once("class/cart.php");
require_once("class/order.php"); 
?>
<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Trang chủ</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <link rel="icon"
      href="https://m.media-amazon.com/images/G/01/Zappos/MysteryDeals2021/2021-ZAPPOS-HOLIDAY-HEADER-LOGO.svg"
      type="image/x-icon" />
   <link rel="stylesheet" href="assets/fonts/fontawesome-free-5.15.4-web/css/all.css" />
   <link rel="stylesheet" href="assets/fonts/icons-1.5.0/font/bootstrap-icons.css" />
   <link rel="stylesheet" href="assets/css/grid.css" />
   <link rel="stylesheet" href="assets/css/style.css" />
   <style>
   a:hover
   {
    color: #004B89;
   }
   
   </style>
</head>

<body>
   <div class="wrap">
      <?php require_once 'view/header.php' ?>
      <div class="container-fluid my-5 px-5">
          <h3>Xin chào, <?php echo $_SESSION['Fullname']; ?></h3>
          <p>Bạn đang đăng nhập với <?php echo $_SESSION['Email'] ?></p>          
		  <h2 class="my-4">Chi tiết hóa đơn</h2>
            <div class="row">
                <hr>
                <div class="col col-9">
                <?php 
                $classorder = new order();
                $orderdetailarray = $classorder->getOrderDetail($_GET['order-id'],$conn);
                for($i=0;$i<sizeof($orderdetailarray);$i++)
                {
                ?>
                    <div class="row">
                        <div class="col col-3">
                            <img src="<?php echo $orderdetailarray[$i]['Image']?>" alt="Sản phẩm" height="180" width="180">
                        </div>
                        <div class="col col-5">
                            <input type="text" value="<?php echo $i ?>" name="removeid" hidden>
                            <b><?php echo $orderdetailarray[$i]['Name']?></b>
                            <p>Thương hiệu: <?php echo  $orderdetailarray[$i]['Brand']?><br>
                            Size: <?php echo $orderdetailarray[$i]['Size']?><br>
                            Số lượng: <?php echo $orderdetailarray[$i]['Quantity']?><br>
                            Số tiền: <?php echo number_format($orderdetailarray[$i]['Price'])?>đ
                            </p>
                        </div>
                    </div>
                    <hr>
                <?php 
                }
                ?>
                </div>    
                <div class="col col-3">
                <?php
                $total=0;
                for($i=0;$i<sizeof($orderdetailarray);$i++)
			    {
                    $s=$orderdetailarray[$i]['Price']*$orderdetailarray[$i]['Quantity'];
                    $total=$total + $s;
                }
                ?>
                    <div class="row">
                        <div class="col col-8"><b>Thành tiền:</b></div>
                        <div class="col col-4"><h4><?php echo number_format($total) ?></h4></div>
                    </div><hr>
                </div>
            </div> 
            <a href="order-list.php" class="btn btn-danger py-2"> < Quay lại</a>
      </div>
      <?php require_once 'view/footer.php' ?>
   </div>	
   <script src="assets/js/app.js"></script>
</body>


</html>