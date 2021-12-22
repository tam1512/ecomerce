<div class="layout-px-spacing">
  <div class="row layout-spacing">
    <div class="col-lg-12">
      <div class="statbox widget box box-shadow">
        <div class="widget-content widget-content-area">
          <a href="index.php?tab=users_locked" class="btn btn-primary mb-1" style="margin-top: 36px; margin-left: 23px"><span>Users Locked</span>
          </a>
          <table id="zero-config" class="table dt-table-hover" style="width:100%">
            <thead style="border-bottom: none;">
              <tr>
                <th>#</th>
                <th>Email</th>
                <th>Full name</th>
                <th>Phone number</th>
                <th>Last login</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if ($users) {
                $i = 0;
                while ($user = $users->fetch_assoc()) {
                  $i++;
                  $lastLogin = date('d/m/Y - H:i:s', $user['lastlogin']);
              ?>
                  <tr>
                    <td><?= $i ?></td>
                    <td><?= $user['Email'] ?></td>
                    <td><?= $user['Fullname'] ?></td>
                    <td><?= $user['Phonenumber'] ?></td>
                    <td><?= $lastLogin ?></td>
                    <td class="text-center">
                      <?php
                      if ($user['permission'] != 0) {
                      ?>
                        <ul class="table-controls">
                          <li><a href="" onclick="lockUser(<?= $user['ID'] ?>)" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lock">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock p-1 br-6 mb-1">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                              </svg>
                            </a>
                          </li>
                        </ul>
                      <?php
                      }
                      ?>
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