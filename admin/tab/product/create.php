<?php 
$conn = $productController->connect();
?>
<div class="layout-px-spacing">
  <div class="layout-top-spacing">
    <h4 class="">Create Product</h4>
  </div>
  <div class="row layout-spacing">
    <div class="col-lg-12">
      <div class="statbox widget box box-shadow">
        <div class="widget-content widget-content-area">
          <form action="index.php?tab=create_product" method="post" style="margin: 0px 23px 0px 23px" enctype="multipart/form-data">
            <button type="submit" id="product-create-btn" name="product-create-btn" class="btn btn-primary mb-1" style="margin: 57px 4px 4px 0px"><span>Submit</span>
            </button>
            <div class="row my-3">
              <div class="col col-6">
                <div class="form-group mt-4">
                  <label for="genre_name">Tên sản phẩm</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="" value="" required>
                </div>
                <div class="form-group mt-4">
                  <label for="genre_name">Giá tiền</label>
                  <input type="text" class="form-control" id="price" name="price" placeholder="" value="" required>
                </div>
                <div class="form-group mt-4">
                  <label for="genre_name">Mô tả</label>
                  <input type="text" class="form-control" id="description" name="description" placeholder="" value="" required>
                </div>
              </div>
              <div class="col col-6">
                <div class="form-group mt-4">
                  <label for="genre_name">Chi tiết danh mục</label>
                  <select class="form-control" id="detailcategory" name="detailcategory">
                  <?php
                  $sqlselectdetailcategory = "SELECT * FROM detail_category;";
                  $stmt = $conn->prepare($sqlselectdetailcategory);
                  $stmt->execute();
                  $result = $stmt->get_result();
                  while($row=$result->fetch_assoc())
                  {
                  ?>
                    <option value="<?php echo $row['ID']?> "><?php echo $row['Name']; ?></option>
                  <?php }?>
                  </select
                </div>
                <div class="form-group mt-4">
                  <label for="genre_name">Brand</label>
                  <input type="text" class="form-control" id="brand" name="brand" placeholder="" value="" required>
                </div>
                <div class="form-group mt-4">
                  <label for="genre_name">Hình ảnh</label>
                  <input type="file" class="form-control" id="image" name="image" placeholder="" value="" required>
                </div>
              </div>
            </div>
          </form>
        </div><br>
      </div>
    </div>
  </div>

</div>