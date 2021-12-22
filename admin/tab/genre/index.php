<div class="layout-px-spacing">

  <div class="layout-top-spacing">
    <h4 class="">Genres</h4>
  </div>

  <div class="row layout-spacing">
    <div class="col-lg-12">
      <div class="statbox widget box box-shadow">
        <div class="widget-content widget-content-area">
          <a href="index.php?tab=create_genre" class="btn btn-primary mb-1" style="margin-top: 36px; margin-left: 23px"><span>Create</span>
          </a>
          <div id="delete-genre"></div>
          <table id="zero-config" class="table table-hover" style="width:100%">
            <thead style="border-bottom: none;">
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Filter</th>
                <th>Category</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if ($genres) {
                $i = 0;
                while ($genre = $genres->fetch_assoc()) {
                  $i++;
              ?>
                  <tr>
                    <td><?= $i ?></td>
                    <td><?= $genre['Name'] ?></td>
                    <td><?= $genre['filter'] ?></td>
                    <td>
                      <?php
                      $categories = $genreController->getCategory($genre['IDCategory']);
                      if ($categories) {
                        $category = $categories->fetch_assoc();
                      ?>
                        <span><?= $category['Name'] ?></span>
                      <?php
                      }
                      ?>
                    </td>
                    <td class="text-center">
                      <ul class="table-controls">
                        <li><a href="?tab=edit_genre&ge_id=<?= $genre['ID'] ?>" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
                              <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                            </svg>
                          </a></li>
                        <li><a href="" onclick="deleteGenre(<?= $genre['ID'] ?>)" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1">
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                            </svg>
                          </a></li>
                      </ul>
                    </td>
                  </tr>
              <?php
                }
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>