<?php 
$conn = $productController->connect();
?>
<div class="layout-px-spacing">
  <div class="layout-top-spacing">
    <h4 class="">Edit Product</h4>
    <?php
    $productid = $_GET['product_id'];
    $sqlgetdataproduct = "SELECT * FROM product WHERE ID=?";
    $stmt = $conn->prepare($sqlgetdataproduct);
    $stmt->bind_param('s',$productid);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $sqlgetdatadetailproduct = "SELECT * FROM detail_product WHERE ID=?";
    $stmt = $conn->prepare($sqlgetdatadetailproduct);
    $stmt->bind_param('s',$productid);
    $stmt->execute();
    $result = $stmt->get_result();
    $row2 = $result->fetch_assoc();
    ?>
  </div>
  <div class="row layout-spacing">
    <div class="col-lg-12">
      <div class="statbox widget box box-shadow">
        <div class="widget-content widget-content-area">
          <form action="index.php?tab=edit_product&product_id=<?php echo $productid?>" method="post" style="margin: 0px 23px 0px 23px">
            <button type="submit" id="product-edit-btn" name="product-edit-btn" class="btn btn-primary mb-1" style="margin: 57px 4px 4px 0px"><span>Submit</span>
            </button>
            <div class="row my-3">
              <div class="col col-6">
                <div class="form-group mt-4">
                <input type="text" value="<?php echo $row['ID'] ?>" class="form-control" id="productid" name="productid" placeholder="" hidden>
                  <label for="genre_name">Tên sản phẩm</label>
                  <input type="text" value="<?php echo $row['Name'] ?>" class="form-control" id="name" name="name" placeholder="" required>
                </div>
                <div class="form-group mt-4">
                  <label for="genre_name">Giá tiền</label>
                  <input type="text" value="<?php echo $row['Price'] ?>" class="form-control" id="price" name="price" placeholder="" required>
                </div>
                <div class="form-group mt-4">
                  <label for="genre_name">Mô tả</label>
                  <input type="text" value="<?php echo $row['Description'] ?>" class="form-control" id="description" name="description" placeholder="" required>
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
                  <input type="text" value="<?php echo $row2['Brand'] ?>" class="form-control" id="brand" name="brand" placeholder="" required>
                </div>
              </div>
            </div>
          </form>
        </div><br>
      </div>
    </div>
  </div>

</div>