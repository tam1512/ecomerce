<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Category</title>
   <link rel="stylesheet" href="../f8-html-css/fonts/fontawesome-free-5.15.4-web/css/all.css" />
   <link rel="stylesheet" href="../f8-html-css/fonts/icons-1.5.0/font/bootstrap-icons.css" />
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
            <div class="row">
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