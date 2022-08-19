<?= include_page('shared/admin/head') ?>

<div id="wrapper">

  <?= include_page('shared/admin/sidebar') ?>

  <div id="content-wrapper" class="d-flex flex-column">

    <div id="content">

      <?= include_page('shared/admin/header') ?>

      <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">All Admins</h1>
          <a href="<?= URI('/admin/users/admin/create') ?>" class="btn btn-primary btn-sm mb-2">Add a new admin</a>
        <?php if(isset($_SESSION['warning'])) { ?>
            <p class="alert alert-warning text-center p-2">
                <small><?= $_SESSION['warning'] ?></small>
            </p>
          <?php
        }
        unset($_SESSION['warning']);
        ?>
        <?php if(isset($_SESSION['success'])) { ?>
            <p class="alert alert-success text-center p-2">
                <small><?= $_SESSION['success'] ?></small>
            </p>
          <?php
        }
        unset($_SESSION['success']);
        ?>
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Admins</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive text-nowrap">
              <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                  <th>S/N</th>
                  <th>Name</th>
                  <th>email</th>
                  <th>Address</th>
                  <th>Contact</th>
                  <th class="text-right">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $key => $value) {?>
                  <tr>
                    <td><?= $key+1 ?></td>
                    <td>
                      <?= $value->name ?>
                    </td>
                    <td>
                      <?= $value->email ?>
                    </td>
                    <td>
                      <?= $value->address ?>
                    </td>
                    <td>
                      <?= $value->contact_no ?>
                    </td>
                    <?php
                    $class = $value->is_approved ? 'warning' : 'success';
                    ?>
                    <td class="text-right">
                      <?php if (auth_user()['id'] != $value->id){ ?>
                          <a onclick="return confirm('Are you sure ?')"
                             href="/admin/users/status-change/<?= $value->id ?>"
                             class="btn btn-sm btn-<?= $class ?>">
                            <?= $value->is_approved ? 'Inactive' : 'Active' ?>
                          </a>
                          <a onclick="return confirm('Are you sure to delete this Admin ?')"
                             href="/admin/users/delete-user/<?= $value->id ?>"
                             class="btn btn-sm btn-danger">
                              Delete
                          </a>
                      <?php } ?>
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>


    </div>

    <?= include_page('shared/admin/footer') ?>

  </div>

</div>

<?= include_page('shared/admin/foot') ?>
