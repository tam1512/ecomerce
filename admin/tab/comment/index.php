<div class="layout-px-spacing">

  <div class="layout-top-spacing">
    <h4 class="">Comments</h4>
  </div>

  <div class="row layout-spacing">
    <div class="col-lg-12">
      <div class="statbox widget box box-shadow">
        <div class="widget-content widget-content-area">
          <a href="index.php?tab=comments_on_site" class="btn btn-primary mb-1" style="margin-top: 36px; margin-left: 23px"><span>Comments on site</span>
          </a>
          <table id="zero-config" class="table table-hover" style="width:100%">
            <thead style="border-bottom: none;">
              <tr>
                <th>Product name</th>
                <th>Genre</th>
                <th>Customer</th>
                <th>Comment</th>
                <th>Post Date</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if ($comments) {
                while ($comment = $comments->fetch_assoc()) {
                  $genres = $commentController->getGenre($comment['IDDetailCategory']);
                  $postDate = date('d/m/Y - H:i:s', $comment['Postdate']);
              ?>
                  <tr>
                    <td><?= $comment['Name'] ?></td>
                    <td>
                      <?php
                      if ($genres) {
                        $genre = $genres->fetch_assoc();
                        echo $genre['Name'];
                      }
                      ?>
                    </td>
                    <td>
                      <p><?= $comment['Fullname'] ?></p>
                      <p><?= $comment['Email'] ?></p>
                      <p><?= $comment['Phonenumber'] ?></p>
                    </td>
                    <td><?= $comment['Comments'] ?></td>
                    <td><?= $postDate ?></td>
                    <td class="text-center">
                      <ul class="table-controls">
                        <li><a href style="cursor:pointer" class="bs-tooltip allow" onclick="commentApprovad(<?= $comment['ID'] ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Allow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle p-1 br-6 mb-1">
                              <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                              <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                          </a></li>
                        <li><a href onclick="deleteComment(<?= $comment['ID'] ?>)" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle p-1 br-6 mb-1">
                              <circle cx="12" cy="12" r="10"></circle>
                              <line x1="15" y1="9" x2="9" y2="15"></line>
                              <line x1="9" y1="9" x2="15" y2="15"></line>
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