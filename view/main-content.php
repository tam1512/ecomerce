<div class="content  grid wide">
   <div class="slider">
      <div class="img__slider"
         style="background-image: url('https://images.unsplash.com/photo-1622519407650-3df9883f76a5?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzZ8fGZhc2hpb24lMjBtb2RlbHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60') "
         alt="">
      </div>
      <div class="img__slider"
         style="background-image: url('https://images.unsplash.com/photo-1606952222435-71dab5cc31d0?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OTl8fGZhc2hpb24lMjBtb2RlbHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60') "
         alt="">
      </div>
      <div class="img__slider"
         style="background-image: url('https://images.unsplash.com/photo-1613257052795-83032ebf92c1?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTd8fGZhc2hpb24lMjBtb2RlbHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60') "
         alt="">
      </div>
   </div>
   <div class="product">
      <h1>Sản phẩm</h1>
      <div class="row">
      <?php 
      $classproduct = new product();
      $productarray = $classproduct->getAll($conn);
      for($i=1; $i<=sizeof($productarray);$i++)
      {
      $detailproductarray = $classproduct->getAllDetail($conn, $productarray[$i]['ID']);
      ?>
         <div class="col-3 my-2">
            <a href="product-detail.php?product-id=<?php echo $productarray[$i]['ID'] ?>" class="product-item">
               <div class="wrap-img">
                  <img src="<?php echo $detailproductarray['Image1']?>" alt="Product Image" class="product-img">
               </div>
               <div class="product-like">
                  <i class="far fa-heart"></i> <span><?php echo  number_format($classproduct->getRating($conn, $productarray[$i]['ID']),1) ?></span>
               </div>
               <div class="product-content">
                  <div class="product-name"><?php echo $productarray[$i]['Name'];?></div>
                  <div class="product-brand"><?php echo $detailproductarray['Brand'];?></div>
                  <div class="price">
                     <span class="product-price">đ</span>
                     <span class="product-price-sale"><?php echo number_format($productarray[$i]['Price']);?>đ</span>
                  </div>
               </div>
            </a>
         </div>
      <?php } ?>
      </div>
   </div>  
   <div class="container-fluid my-4" style="padding: 0">
      <div class="row">
        <div class="col col-10">
        <img src="assets/img/product/featured.jpg" class="img-fluid">
        </div>
        <div class="col col-2 align-middle">
            <h4 >M.B.C SMILEY MOON T-SHIRT</h4>
        </div>
      </div>
   </div>
   <div class="Items-popular">
      <h1>Sản phẩm bán chạy</h1>
      <div class="row">
      <?php 
      $productarraydesc = $classproduct->getAllDescend($conn);
      for($i=1; $i<=sizeof($productarraydesc);$i++)
      {
      $detailproductarray = $classproduct->getAllDetail($conn, $productarraydesc[$i]['ID']);
      ?>
         <div class="col-3 my-2">
            <a href="product-detail.php?product-id=<?php echo $productarraydesc[$i]['ID'] ?>" class="product-item">
               <div class="wrap-img">
                  <img src="<?php echo $detailproductarray['Image1']?>" alt="Product Image" class="product-img">
               </div>
               <div class="product-like">
                  <i class="far fa-heart"></i> <span><?php echo  number_format($classproduct->getRating($conn, $productarraydesc[$i]['ID']),1) ?></span>
               </div>
               <div class="product-content">
                  <div class="product-name"><?php echo $productarraydesc[$i]['Name'];?></div>
                  <div class="product-brand"><?php echo $detailproductarray['Brand'];?></div>
                  <div class="price">
                     <span class="product-price">đ</span>
                     <span class="product-price-sale"><?php echo number_format($productarraydesc[$i]['Price']);?>đ</span>
                  </div>
               </div>
            </a>
         </div>
      <?php } ?>
      </div>
   </div>  
   <div class="Recently-viewed-items">
      <h1>Sản phẩm đã xem</h1>
      <div class="row">       
      <?php if(isset($_SESSION['History']))
      {
        for($i=0;$i<sizeof($_SESSION['History']);$i++)
        {
        $idhistory = $_SESSION['History'][$i]['ID'];
        $productarrayhistory = $classproduct->getByID($conn, $idhistory);
        $detailproductarrayhistory = $classproduct->getAllDetail($conn, $idhistory);
        ?>
         <div class=" col l-2-4">
            <a href="product-detail.php?product-id=<?php echo $productarrayhistory['ID'] ?>" class="product-item">
               <div class="wrap-img">
                  <img src="<?php echo $detailproductarrayhistory['Image1']?>" alt="Product Image" class="product-img">
               </div>
               <div class="product-like">
                  <i class="far fa-heart"></i> <span><?php echo  number_format($classproduct->getRating($conn, $productarrayhistory['ID']),1) ?></span>
               </div>
               <div class="product-content">
                  <div class="product-name"><?php echo $productarrayhistory['Name'];?></div>
                  <div class="product-brand"><?php echo $detailproductarrayhistory['Brand'];?></div>
                  <div class="price">
                     <span class="product-price">đ</span>
                     <span class="product-price-sale"><?php echo number_format($productarrayhistory['Price']);?>đ</span>
                  </div>
               </div>
            </a>
         </div>   
      <?php } } ?>
      </div>
   </div>
</div>