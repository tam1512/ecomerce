<div class="layout-px-spacing">

  <div class="layout-top-spacing">
    <h4 class="">Orders</h4>
  </div>

  <div class="row layout-spacing">
    <div class="col-lg-12">
      <div class="statbox widget box box-shadow">
        <div class="widget-content widget-content-area">
          <a href="index.php?tab=approved" class="btn btn-primary mb-1" style="margin-top: 36px; margin-left: 23px"><span>Approved</span>
          </a>
          <table id="zero-config" class="table table-hover" style="width:100%">
            <thead style="border-bottom: none;">
              <tr>
                <th>Start date</th>
                <th>Total</th>
                <th>Customer</th>
                <th>Phone number</th>
                <th>Address</th>
                <th>Order type</th>
                <th>Note</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if ($orders) {
                while ($order = $orders->fetch_assoc()) {
                  $dateOrder = date('d/m/Y - H:i:s', $order['Orderdate']);
              ?>
                  <tr>
                    <td>
                      <a href="#" class="order-click" data-toggle="modal" data-target="#exampleModal<?= $order['ID'] ?>"><?= $dateOrder ?></a>
                      <div class="modal fade" id="exampleModal<?= $order['ID'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none" aria-hidden="true">
                        <div class="modal-dialog" style="max-width: 80%;" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel<?= $order['ID'] ?>">Detail</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                  <line x1="18" y1="6" x2="6" y2="18"></line>
                                  <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                              </button>
                            </div>
                            <div class="modal-body" style="padding-bottom: 0px;">
                              <table class="table dt-table-hover modal-text" style="width:100%;">
                                <thead style="border-bottom: none;">
                                  <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Size</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                  </tr>
                                </thead>
                                <?php
                                $orderDetails = $orderController->getDetail($order['ID']);

                                if ($orderDetails) {
                                  $i = 0;
                                  $total = 0;
                                ?>
                                  <tbody>
                                    <?php
                                    while ($detail = $orderDetails->fetch_assoc()) {
                                      $i++;
                                      $total += $detail['Quantity'] * $detail['Price'];
                                    ?>
                                      <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $detail['Name'] ?></td>
                                        <td><?= $detail['Size'] ?></td>
                                        <td><?= $detail['Quantity'] ?></td>
                                        <td><?= $detail['Price'] ?></td>
                                      </tr>
                                    <?php
                                    }
                                    ?>
                                  </tbody>
                                  <tfoot>
                                    <tr>
                                      <th></th>
                                      <th></th>
                                      <th></th>
                                      <th>Totals:</th>
                                      <th><?= $total ?></th>
                                    </tr>
                                  </tfoot>
                                <?php
                                }
                                ?>
                              </table>
                            </div>
                            <div class="modal-footer" style="border-top: none">
                              <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Cancel</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td><?= $order['Total'] ?></td>
                    <td><?= $order['Fullname'] ?></td>
                    <td><?= $order['Phonenumber'] ?></td>
                    <td><?= $order['Address'] ?></td>
                    <td><?= $order['Ordertype'] ?></td>
                    <td><?= $order['Note'] ?></td>
                    <td class="text-center">
                      <ul class="table-controls">
                        <li><a style="cursor:pointer" class="bs-tooltip allow" onclick="Allow(<?= $order['ID'] ?>)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Allow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle p-1 br-6 mb-1">
                              <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                              <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                          </a></li>
                        <input type="hidden" name="allow" value="<?= $order['ID'] ?>" />
                        <li><a href="" onclick="deleteOrder(<?= $order['ID'] ?>)" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
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