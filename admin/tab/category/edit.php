<div class="layout-px-spacing">

  <div class="layout-top-spacing">
    <h4 class="">Update Category</h4>
  </div>

  <div class="row layout-spacing">
    <div class="col-lg-12">
      <div class="statbox widget box box-shadow">
        <div class="widget-content widget-content-area">
          <?php
          if (isset($_GET['ce_id'])) {
            $categoryEdit = $categoryController->edit($_GET['ce_id']);
            $category = $categoryEdit->fetch_assoc();
          }
          ?>
          <form action="index.php?tab=edit_category&ce_id=<?= $category['ID'] ?>" method="post" style="margin: 0px 23px 0px 23px">
            <button class="btn btn-primary mb-1" style="margin: 57px 4px 4px 0px"><span>Update</span>
            </button>
            <?php
            if (isset($updateCategory)) {
              echo $updateCategory;
            }
            ?>
            <div class="form-group mt-4">
              <label for="cate_name">Name</label>
              <input type="text" class="form-control" id="cate_name" name="update_cate_name" placeholder="" value="<?= $category['Name'] ?>" required>
              <input type="hidden" class="form-control" name="update_cate_id" value="<?= $category['ID'] ?>" required>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>