<?= include_page('shared/admin/head') ?>

  <div id="wrapper">

    <?= include_page('shared/admin/sidebar') ?>

    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">

        <?= include_page('shared/admin/header') ?>

        <div class="container-fluid">

          <h1 class="h3 mb-2 text-gray-800">Returned Book</h1>
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
              <h6 class="m-0 font-weight-bold text-primary">Returned Book</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  <tr>
                    <th>S/N</th>
                    <th>User Name</th>
                    <th>Book</th>
                    <th>Author</th>
                    <th>Requested Date</th>
                    <th class="text-right">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($requests as $key => $value) { ?>
                    <tr>
                      <td><?= $key+1 ?></td>
                      <td>
                        <?= $value->user->name ?>
                      </td>
                      <td>
                        <?= $value->book->name ?>
                      </td>
                      <td>
                        <?= $value->book->author ?>
                      </td>
                      <td>
                        <?= dateFormat($value->created_at) ?>
                      </td>
                      <td class="text-right">
                        <a
                          onclick="return confirm('Do you want to accept this request ?')"
                          href="#"
                          title="Accept"
                          class="btn btn-sm btn-success">
                          Accept/Issue
                        </a>
                        <a
                          onclick="return confirm('Are you sure to cancel this request ?')"
                          title="cancel"
                          href="#"
                          class="btn btn-sm btn-danger">Cancel
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

      <?= include_page('shared/admin/footer') ?>

    </div>

  </div>

<?= include_page('shared/admin/foot') ?>