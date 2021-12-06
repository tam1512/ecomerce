<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Chi tiết sản phẩm</title>
   <link rel="icon"
      href="https://m.media-amazon.com/images/G/01/Zappos/MysteryDeals2021/2021-ZAPPOS-HOLIDAY-HEADER-LOGO.svg"
      type="image/x-icon" />
   <link rel="stylesheet" href="../f8-html-css/fonts/fontawesome-free-5.15.4-web/css/all.css" />
   <link rel="stylesheet" href="../f8-html-css/fonts/icons-1.5.0/font/bootstrap-icons.css" />
   <link rel="stylesheet" href="assets/css/grid.css" />
   <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
   <div class="wrap">
      <?php require_once 'view/header.php'?>
      <div class="content-product-detail grid wide">
         <div class="wrap-product-detail">
            <img
               src="https://images.unsplash.com/photo-1578681994506-b8f463449011?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGNsb3RoaW5nfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
               alt="" class="img-product">
            <div class="detail-product">
               <h1 class="dt-product-name">
                  Ao Phong
               </h1>
               <div class="product-brand">adidas</div>
               <div class="rating">
                  <div class="rating-star">
                     <span><i class="true fas fa-star"></i></span>
                     <span><i class="true fas fa-star"></i></span>
                     <span><i class="true fas fa-star"></i></span>
                     <span><i class="true fas fa-star"></i></span>
                     <span><i class="false fas fa-star"></i></span>
                  </div>
                  <div class="quantity-rating">
                     <span>(123)</span>
                  </div>
               </div>
               <div class="dt-product-price mt-40">
                  <span class="product-price-sale">650.000đ</span>
                  <span class="product-cost">1000.000đ</span>
               </div>

               <div class="color mt-40">
                  <span>Màu</span>
                  <ul class="choose-color-list">
                     <li class="btn choose-color-item">Đen</li>
                     <li class="btn choose-color-item">Trắng</li>
                     <li class="btn choose-color-item">Vàng</li>
                     <li class="btn choose-color-item">Nâu</li>
                  </ul>
               </div>
               <div class="size mt-40">
                  <span>Size</span>
                  <ul class="choose-color-list">
                     <li class="btn choose-size-item">M</li>
                     <li class="btn choose-size-item">L</li>
                     <li class="btn choose-size-item">XL</li>
                     <li class="btn choose-size-item">XXL</li>
                  </ul>
               </div>
               <div class="amount mt-40">
                  <span>Số lượng</span>
                  <span class="btn btn-sub">-</span>
                  <input type="text" class="btn btn-amount" value="1">
                  <span class="btn btn-sum">+</span>

                  <span class="product-available">1001 sản phẩm có sẵn</span>
               </div>
               <div class="btn-product-detail mt-40">
                  <div class="btn btn-add-cart">
                     <i class="fas fa-cart-plus cart-plus-icon"></i>
                     <span>Thêm vào giỏ hàng</span>
                  </div>
                  <div class="btn btn-buy-now">Mua ngay</div>
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
         <div class="feedback-product">
            <h2 class="feedback-title mt-20">Đánh giá sản phẩm</h2>
            <div class="rating-star mt-20">
               <span><i class="false fas fa-star"></i></span>
               <span><i class="false fas fa-star"></i></span>
               <span><i class="false fas fa-star"></i></span>
               <span><i class="false fas fa-star"></i></span>
               <span><i class="false fas fa-star"></i></span>
            </div>
            <div class="wrap-input-feedback mt-20">
               <input type="text" class="input-feedback" placeholder="Viết bình luận">
            </div>
            <span class="btn btn-submit-feedback mt-20">Gửi</span>
         </div>
      </div>
      <?php require_once 'view/footer.php'?>
   </div>
</body>

</html>