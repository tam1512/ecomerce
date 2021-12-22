<div class="layout-px-spacing">

  <div class="layout-top-spacing">
    <h4 class="">Update genre</h4>
  </div>

  <div class="row layout-spacing">
    <div class="col-lg-12">
      <div class="statbox widget box box-shadow">
        <div class="widget-content widget-content-area">
          <?php
          if (isset($_GET['ge_id']) && isset($_GET['tab']) == 'edit_genre') {
            $genreEdit = $genreController->edit($_GET['ge_id']);
            if ($genreEdit) {
              $genre = $genreEdit->fetch_assoc();
            }
          }
          ?>
          <form action="index.php?tab=edit_genre&ge_id=<?= $genre['ID'] ?>" method="post" style="margin: 0px 23px 0px 23px">
            <button class="btn btn-primary mb-1" style="margin: 57px 4px 4px 0px"><span>Update</span>
            </button>
            <?php
            if (isset($updateGenre)) {
              echo $updateGenre;
            }
            ?>
            <div class="form-group mt-4">
              <label for="cate_name">Category</label>
              <select class="form-control" name="update_cate_id">
                <option value=""></option>
                <?php
                if ($categories) {
                  while ($category = $categories->fetch_assoc()) {
                ?>
                    <option value="<?= $category['ID'] ?>" <?php
                                                            if ($genre['IDCategory'] == $category['ID'])
                                                              echo 'selected="selected"';
                                                            ?>>
                      <?= $category['Name'] ?>
                    </option>
                <?php
                  }
                }
                ?>
              </select>
            </div>
            <div class="form-group mt-4">
              <label for="genre_name">Name</label>
              <input type="text" class="form-control" id="genre_name" name="update_genre_name" placeholder="" value="<?= $genre['Name'] ?>" required>
              <input type="hidden" class="form-control" name="update_genre_id" value="<?= $genre['ID'] ?>">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>