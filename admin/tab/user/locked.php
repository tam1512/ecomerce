<div class="layout-px-spacing">

  <div class="layout-top-spacing">
    <h4 class="">Users locked</h4>
  </div>

  <div class="row layout-spacing">
    <div class="col-lg-12">
      <div class="statbox widget box box-shadow">
        <div class="widget-content widget-content-area">
          <a href="index.php?tab=users" class="btn btn-primary mb-1" style="margin-top: 36px; margin-left: 23px"><span>Users</span>
          </a>
          <table id="zero-config" class="table table-hover" style="width:100%">
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
              if ($users_locked) {
                $i = 0;
                while ($user = $users_locked->fetch_assoc()) {
                  $lastLogin = date('d/m/Y - H:i:s', $user['lastlogin']);
                  $i++;
              ?>
                  <tr>
                    <td><?= $i ?></td>
                    <td><?= $user['Email'] ?></td>
                    <td><?= $user['Fullname'] ?></td>
                    <td><?= $user['Phonenumber'] ?></td>
                    <td><?= $lastLogin ?></td>
                    <td class="text-center">
                      <ul class="table-controls">
                        <li><a href onclick="unlockUser(<?= $user['ID'] ?>)" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Unlock">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-unlock p-1 br-6 mb-1">
                              <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                              <path d="M7 11V7a5 5 0 0 1 9.9-1"></path>
                            </svg>
                          </a>
                        </li>
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