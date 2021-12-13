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
      $detailproductarray = $classproduct->getAllDetail($conn, $i);
      ?>
         <div class="col-3 my-2">
            <a href="product-detail.php?product-id=<?php echo $productarray[$i]['ID'] ?>" class="product-item">
               <div class="wrap-img">
                  <img src="<?php echo $detailproductarray['Image1']?>" alt="Product Image" class="product-img">
               </div>
               <div class="product-like">
                  <i class="far fa-heart"></i> <span>60</span>
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
   <div class="Categories-popular">
      <h1>Danh mục bán chạy</h1>
      <div class="row">
         <div class=" col l-3">
            <a href="#" class="product-item">
               <div class="wrap-img">
                  <img
                     src="https://images.unsplash.com/photo-1578681994506-b8f463449011?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGNsb3RoaW5nfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                     alt="product img" class="product-img">
               </div>
               <div class="product-like">
                  <i class="far fa-heart"></i> <span>60</span>
                  <!-- <i class="fas fa-heart"></i> -->
               </div>
               <div class="product-content">
                  <div class="product-name">Áo khoác len</div>
                  <div class="product-brand">Adidas</div>
                  <div class="price">
                     <span class="product-price">1.000.000đ</span>
                     <span class="product-price-sale">650.000đ</span>
                  </div>
               </div>
            </a>
         </div>
         <div class=" col l-3">
            <a href="#" class="product-item">
               <div class="wrap-img">
                  <img
                     src="https://images.unsplash.com/photo-1578681994506-b8f463449011?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGNsb3RoaW5nfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                     alt="product img" class="product-img">
               </div>
               <div class="product-like">
                  <i class="far fa-heart"></i> <span>60</span>
                  <!-- <i class="fas fa-heart"></i> -->
               </div>
               <div class="product-content">
                  <div class="product-name">Áo khoác len</div>
                  <div class="product-brand">Adidas</div>
                  <div class="price">
                     <span class="product-price">1.000.000đ</span>
                     <span class="product-price-sale">650.000đ</span>
                  </div>
               </div>
            </a>
         </div>
         <div class=" col l-3">
            <a href="#" class="product-item">
               <div class="wrap-img">
                  <img
                     src="https://images.unsplash.com/photo-1578681994506-b8f463449011?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGNsb3RoaW5nfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                     alt="product img" class="product-img">
               </div>
               <div class="product-like">
                  <i class="far fa-heart"></i> <span>60</span>
                  <!-- <i class="fas fa-heart"></i> -->
               </div>
               <div class="product-content">
                  <div class="product-name">Áo khoác len</div>
                  <div class="product-brand">Adidas</div>
                  <div class="price">
                     <span class="product-price">1.000.000đ</span>
                     <span class="product-price-sale">650.000đ</span>
                  </div>
               </div>
            </a>
         </div>
         <div class=" col l-3">
            <a href="#" class="product-item">
               <div class="wrap-img">
                  <img
                     src="https://images.unsplash.com/photo-1578681994506-b8f463449011?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGNsb3RoaW5nfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                     alt="product img" class="product-img">
               </div>
               <div class="product-like">
                  <i class="far fa-heart"></i> <span>60</span>
                  <!-- <i class="fas fa-heart"></i> -->
               </div>
               <div class="product-content">
                  <div class="product-name">Áo khoác len</div>
                  <div class="product-brand">Adidas</div>
                  <div class="price">
                     <span class="product-price">1.000.000đ</span>
                     <span class="product-price-sale">650.000đ</span>
                  </div>
               </div>
            </a>
         </div>
      </div>
   </div>
   <div class="Items-popular">
      <h1>Sản phẩm bán chạy</h1>
      <div class="row">
         <div class=" col l-3">
            <a href="#" class="product-item">
               <div class="wrap-img">
                  <img
                     src="https://images.unsplash.com/photo-1578681994506-b8f463449011?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGNsb3RoaW5nfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                     alt="product img" class="product-img">
               </div>
               <div class="product-like">
                  <i class="far fa-heart"></i> <span>60</span>
                  <!-- <i class="fas fa-heart"></i> -->
               </div>
               <div class="product-content">
                  <div class="product-name">Áo khoác len</div>
                  <div class="product-brand">Adidas</div>
                  <div class="price">
                     <span class="product-price">1.000.000đ</span>
                     <span class="product-price-sale">650.000đ</span>
                  </div>
               </div>
            </a>
         </div>
         <div class=" col l-3">
            <a href="#" class="product-item">
               <div class="wrap-img">
                  <img
                     src="https://images.unsplash.com/photo-1578681994506-b8f463449011?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGNsb3RoaW5nfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                     alt="product img" class="product-img">
               </div>
               <div class="product-like">
                  <i class="far fa-heart"></i> <span>60</span>
                  <!-- <i class="fas fa-heart"></i> -->
               </div>
               <div class="product-content">
                  <div class="product-name">Áo khoác len</div>
                  <div class="product-brand">Adidas</div>
                  <div class="price">
                     <span class="product-price">1.000.000đ</span>
                     <span class="product-price-sale">650.000đ</span>
                  </div>
               </div>
            </a>
         </div>
         <div class=" col l-3">
            <a href="#" class="product-item">
               <div class="wrap-img">
                  <img
                     src="https://images.unsplash.com/photo-1578681994506-b8f463449011?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGNsb3RoaW5nfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                     alt="product img" class="product-img">
               </div>
               <div class="product-like">
                  <i class="far fa-heart"></i> <span>60</span>
                  <!-- <i class="fas fa-heart"></i> -->
               </div>
               <div class="product-content">
                  <div class="product-name">Áo khoác len</div>
                  <div class="product-brand">Adidas</div>
                  <div class="price">
                     <span class="product-price">1.000.000đ</span>
                     <span class="product-price-sale">650.000đ</span>
                  </div>
               </div>
            </a>
         </div>
         <div class=" col l-3">
            <a href="#" class="product-item">
               <div class="wrap-img">
                  <img
                     src="https://images.unsplash.com/photo-1578681994506-b8f463449011?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGNsb3RoaW5nfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                     alt="product img" class="product-img">
               </div>
               <div class="product-like">
                  <i class="far fa-heart"></i> <span>60</span>
                  <!-- <i class="fas fa-heart"></i> -->
               </div>
               <div class="product-content">
                  <div class="product-name">Áo khoác len</div>
                  <div class="product-brand">Adidas</div>
                  <div class="price">
                     <span class="product-price">1.000.000đ</span>
                     <span class="product-price-sale">650.000đ</span>
                  </div>
               </div>
            </a>
         </div>
      </div>
   </div>
   <div class="Recently-viewed-items">
      <h1>Sản phẩm đã xem</h1>
      <div class="row">
         <div class=" col l-2-4">
            <a href="#" class="product-item">
               <div class="wrap-img">
                  <img
                     src="https://images.unsplash.com/photo-1578681994506-b8f463449011?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGNsb3RoaW5nfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                     alt="product img" class="product-img">
               </div>
               <div class="product-like">
                  <i class="far fa-heart"></i> <span>60</span>
                  <!-- <i class="fas fa-heart"></i> -->
               </div>
               <div class="product-content">
                  <div class="product-name">Áo khoác len</div>
                  <div class="product-brand">Adidas</div>
                  <div class="price">
                     <span class="product-price">1.000.000đ</span>
                     <span class="product-price-sale">650.000đ</span>
                  </div>
               </div>
            </a>
         </div>
         <div class=" col l-2-4">
            <a href="#" class="product-item">
               <div class="wrap-img">
                  <img
                     src="https://images.unsplash.com/photo-1578681994506-b8f463449011?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGNsb3RoaW5nfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                     alt="product img" class="product-img">
               </div>
               <div class="product-like">
                  <i class="far fa-heart"></i> <span>60</span>
                  <!-- <i class="fas fa-heart"></i> -->
               </div>
               <div class="product-content">
                  <div class="product-name">Áo khoác len</div>
                  <div class="product-brand">Adidas</div>
                  <div class="price">
                     <span class="product-price">1.000.000đ</span>
                     <span class="product-price-sale">650.000đ</span>
                  </div>
               </div>
            </a>
         </div>
         <div class=" col l-2-4">
            <a href="#" class="product-item">
               <div class="wrap-img">
                  <img
                     src="https://images.unsplash.com/photo-1578681994506-b8f463449011?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGNsb3RoaW5nfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                     alt="product img" class="product-img">
               </div>
               <div class="product-like">
                  <i class="far fa-heart"></i> <span>60</span>
                  <!-- <i class="fas fa-heart"></i> -->
               </div>
               <div class="product-content">
                  <div class="product-name">Áo khoác len</div>
                  <div class="product-brand">Adidas</div>
                  <div class="price">
                     <span class="product-price">1.000.000đ</span>
                     <span class="product-price-sale">650.000đ</span>
                  </div>
               </div>
            </a>
         </div>
         <div class=" col l-2-4">
            <a href="#" class="product-item">
               <div class="wrap-img">
                  <img
                     src="https://images.unsplash.com/photo-1578681994506-b8f463449011?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGNsb3RoaW5nfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                     alt="product img" class="product-img">
               </div>
               <div class="product-like">
                  <i class="far fa-heart"></i> <span>60</span>
                  <!-- <i class="fas fa-heart"></i> -->
               </div>
               <div class="product-content">
                  <div class="product-name">Áo khoác len</div>
                  <div class="product-brand">Adidas</div>
                  <div class="price">
                     <span class="product-price">1.000.000đ</span>
                     <span class="product-price-sale">650.000đ</span>
                  </div>
               </div>
            </a>
         </div>
         <div class=" col l-2-4">
            <a href="#" class="product-item">
               <div class="wrap-img">
                  <img
                     src="https://images.unsplash.com/photo-1578681994506-b8f463449011?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGNsb3RoaW5nfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                     alt="product img" class="product-img">
               </div>
               <div class="product-like">
                  <i class="far fa-heart"></i> <span>60</span>
                  <!-- <i class="fas fa-heart"></i> -->
               </div>
               <div class="product-content">
                  <div class="product-name">Áo khoác len</div>
                  <div class="product-brand">Adidas</div>
                  <div class="price">
                     <span class="product-price">1.000.000đ</span>
                     <span class="product-price-sale">650.000đ</span>
                  </div>
               </div>
            </a>
         </div>
      </div>
   </div>
</div>