<div class="layout-px-spacing">

  <div class="layout-top-spacing">
    <h4 class="">Create Category</h4>
  </div>

  <div class="row layout-spacing">
    <div class="col-lg-12">
      <div class="statbox widget box box-shadow">
        <div class="widget-content widget-content-area">
          <form action="index.php?tab=create_category" method="post" style="margin: 0px 23px 0px 23px">
            <button class="btn btn-primary mb-1" style="margin: 57px 4px 4px 0px"><span>Submit</span>
            </button>
            <?php
            if (isset($createCategory)) {
              echo $createCategory;
            }
            ?>
            <div class="form-group mt-4">
              <label for="create_cate_name">Name</label>
              <input type="text" class="form-control" id="create_cate_name" name="create_cate_name" placeholder="" value="" required>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>