<?= includePage('shared/admin/head') ?>

  <div id="wrapper">

    <?= includePage('shared/admin/sidebar') ?>

    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">

        <?= includePage('shared/admin/header') ?>

        <div class="container-fluid">

          <h1 class="h3 mb-2 text-gray-800">Notifications</h1>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">All Notifications</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive text-nowrap">
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  <tr>
                    <th>S/N</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Message</th>
                    <th>Fine</th>
                    <th class="text-right">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($notifications as $key => $value) {?>
                    <tr>
                      <td><?= $key+1 ?></td>
                      <td>
                        <?= $value->user->name ?>
                      </td>
                      <td>
                        <?= $value->created_at ?>
                      </td>
                      <td>
                        <?= $value->message ?>
                      </td>
                      <td>
                        <?= $value->amount ?>
                      </td>
                      <td class="text-right">
                        <a onclick="return confirm('Are you sure to delete this notification ?')"
                           href="/admin/notifications/delete/<?= $value->id ?>"
                           class="btn btn-sm btn-danger">
                          Delete
                        </a>
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

      <?= includePage('shared/admin/footer') ?>

    </div>

  </div>

<?= includePage('shared/admin/foot') ?>
