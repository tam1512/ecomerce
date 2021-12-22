<div class="layout-px-spacing">

  <div class="layout-top-spacing">
    <h4 class="">Create genre</h4>
  </div>

  <div class="row layout-spacing">
    <div class="col-lg-12">
      <div class="statbox widget box box-shadow">
        <div class="widget-content widget-content-area">
          <form action="index.php?tab=create_genre" method="post" style="margin: 0px 23px 0px 23px">
            <button class="btn btn-primary mb-1" style="margin: 57px 4px 4px 0px"><span>Submit</span>
            </button>
            <?php
            if (isset($createGenre)) {
              echo $createGenre;
            }
            ?>
            <div class="form-group mt-4">
              <label for="cate_name">Category</label>
              <select class="form-control" name="create_cate_id">
                <option value=""></option>
                <?php
                if ($categories) {
                  while ($category = $categories->fetch_assoc()) {
                ?>
                    <option value="<?= $category['ID'] ?>"><?= $category['Name'] ?></option>
                <?php
                  }
                }
                ?>
              </select>
            </div>
            <div class="form-group mt-4">
              <label for="genre_name">Name</label>
              <input type="text" class="form-control" id="genre_name" name="create_genre_name" placeholder="" value="" required>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>