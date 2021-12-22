<div class="layout-px-spacing">

  <div class="layout-top-spacing">
    <h4 class="">Reckon</h4>
  </div>
  <div class="row layout-spacing">
    <div class="col-lg-12">
      <div class="statbox widget box box-shadow">
        <div class="widget-content widget-content-area">
          <table id="html5-extension" class="table table-hover" style="width:100%">
            <thead style="border-bottom: none;">
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Brand</th>
                <th>Size</th>
                <th>Quantity sold</th>
                <th>Price</th>
              </tr>
            </thead>
            <?php
            if ($reckon) {
              $i = 0;
              $totals = 0;
              $num = 0;
            ?>
              <tbody>
                <?php
                while ($data = $reckon->fetch_assoc()) {
                  $i++;
                  $num += $data['Sold'];
                  $totals += $data['Price'];
                ?>
                  <tr>
                    <td><?= $i ?></td>
                    <td><?= $data['Name'] ?></td>
                    <td><?= $data['Brand'] ?></td>
                    <td><?= $data['Size'] ?></td>
                    <td><?= $data['Sold'] ?></td>
                    <td><?= $data['Price'] ?></td>
                  </tr>
                <?php
                }
                ?>
              <tfoot>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th><?= $num ?></th>
                <th><?= $totals ?></th>
              </tfoot>
            <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>