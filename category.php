<!DOCTYPE html>
<html lang="en">
<?php 
require_once("controller/authController.php"); 
require_once("class/category.php");
require_once("class/product.php");
require_once("class/cart.php");
?>
<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Category</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <link rel="icon"
      href="https://m.media-amazon.com/images/G/01/Zappos/MysteryDeals2021/2021-ZAPPOS-HOLIDAY-HEADER-LOGO.svg"
      type="image/x-icon" />
   <link rel="stylesheet" href="assets/fonts/icons-1.5.0/font/bootstrap-icons.css" />
   <link rel="stylesheet" href="assets/honts/fontawesome-free-5.15.4-web/css/all.css" />
   <link rel="stylesheet" href="assets/css/grid.css" />
   <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
   <div class="wrap">
      <?php require_once 'view/header.php'?>
      <div class="content-category">
         <div class="grid wide">
            <div class="header-content">
               <div class="product-category">
                  <h1 class="category-name">
                     Sandals Nam
                  </h1>
                  <span>10754 sản phẩm tìm thấy</span>
               </div>
               <div class="sort-product">
                  <div class="sort-product__chose">
                     <span>Sắp xếp theo</span>
                     <i class="fas fa-chevron-down chevron-down-icon"></i>
                     <ul class="chose-sort">
                        <li class="sort-item">
                           Giá từ cao đến thấp
                        </li>
                        <li class="sort-item">
                           Giá từ thấp đến cao
                        </li>
                     </ul>
                  </div>

               </div>
            </div>
            <div class="row filter-detail">
               <div class="filter col l-2-4">
                  <span class="filter__title">Tìm Kiếm Chi Tiết</span>
                  <div class="filter__brand">
                     <span class="brand-title">Thương Hiệu</span>
                     <div class="filter-category__name">
                        <input type="checkbox" name="Nike" id="check-brand">
                        <span>Nike</span>
                     </div>
                     <div class="filter-category__name">
                        <input type="checkbox" name="Adidas" id="check-brand">
                        <span>Adisdas</span>
                     </div>
                     <div class="filter-category__name">
                        <input type="checkbox" name="Conveser" id="check-brand">
                        <span>Conveser</span>
                     </div>
                  </div>
                  <div class="filter__price">
                     <span class="filter__price-title">Khoảng giá</span>
                     <div class="wrap-filter__price">
                        <input type="text" name="first price" id="first-price">
                        <span> - </span>
                        <input type="text" name="last price" id="last-price">
                     </div>
                  </div>
               </div>
               <div class="list-product col l-9-6">
                  <div class="row">
                     <div class="col l-3">
                        <a href="product-detail.php" class="product-item">
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
                              <div class="product-brand">Adidas levi</div>
                              <div class="price">
                                 <span class="product-price">1.000.000đ</span>
                                 <span class="product-price-sale">650.000đ</span>
                              </div>
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
                           </div>
                        </a>
                     </div>
                  </div>
                  <ul class="pagination home-product__pagination">
                     <li class="pagination-item">
                        <a href="#" class="pagination-item__link">
                           <i class="pagination-item__icon bi bi-chevron-left"></i>
                        </a>
                     </li>
                     <li class="pagination-item pagination-item--active">
                        <a href="#" class="pagination-item__link"> 1 </a>
                     </li>
                     <li class="pagination-item">
                        <a href="#" class="pagination-item__link"> 2 </a>
                     </li>
                     <li class="pagination-item">
                        <a href="#" class="pagination-item__link"> 3 </a>
                     </li>
                     <li class="pagination-item">
                        <a href="#" class="pagination-item__link"> 4 </a>
                     </li>
                     <li class="pagination-item">
                        <a href="#" class="pagination-item__link"> 5 </a>
                     </li>
                     <li class="pagination-item">
                        <a href="#" class="pagination-item__link"> ... </a>
                     </li>
                     <li class="pagination-item">
                        <a href="#" class="pagination-item__link"> 14 </a>
                     </li>
                     <li class="pagination-item">
                        <a href="#" class="pagination-item__link">
                           <i class="pagination-item__icon bi bi-chevron-right"></i>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>


            <div class="Recently-viewed-items">
               <h1>Sản phẩm đã xem</h1>
               <div class="row">
                  <div class="col l-3">
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
                           <div class="product-brand">Adidas levi</div>
                           <div class="price">
                              <span class="product-price">1.000.000đ</span>
                              <span class="product-price-sale">650.000đ</span>
                           </div>
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
                        </div>
                     </a>
                  </div>
                  <div class="col l-3">
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
                           <div class="product-brand">Adidas levi</div>
                           <div class="price">
                              <span class="product-price">1.000.000đ</span>
                              <span class="product-price-sale">650.000đ</span>
                           </div>
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
                        </div>
                     </a>
                  </div>
                  <div class="col l-3">
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
                           <div class="product-brand">Adidas levi</div>
                           <div class="price">
                              <span class="product-price">1.000.000đ</span>
                              <span class="product-price-sale">650.000đ</span>
                           </div>
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
                        </div>
                     </a>
                  </div>
                  <div class="col l-3">
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
                           <div class="product-brand">Adidas levi</div>
                           <div class="price">
                              <span class="product-price">1.000.000đ</span>
                              <span class="product-price-sale">650.000đ</span>
                           </div>
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
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php require_once 'view/footer.php'?>
   </div>
</body>

</html>