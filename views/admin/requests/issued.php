<?= include_page('shared/admin/head') ?>

  <div id="wrapper">

    <?= include_page('shared/admin/sidebar') ?>

    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">

        <?= include_page('shared/admin/header') ?>

        <div class="container-fluid">

          <h1 class="h3 mb-2 text-gray-800">Issued Requests</h1>
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
              <h6 class="m-0 font-weight-bold text-primary">Issued Requests</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive text-nowrap">
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  <tr>
                    <th>S/N</th>
                    <th>User Name</th>
                    <th>Book</th>
                    <th>Author</th>
                    <th>Issue Date</th>
                    <th>Returning Date</th>
                    <th>Fine</th>
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
                        <?= dateFormat($value->issue_date) ?>
                      </td>
                      <td>
                        <?= dateFormat($value->return_date) ?>
                      </td>
                      <td>
                        <?= $value->fine ?>
                      </td>
                      <td class="text-right">
                        <?php
                        $now = new DateTime();
                        $end = new DateTime($value->return_date);

                        if ($now > $end){
                          ?>
                            <a
                                    title="Notification"
                                    data-toggle="modal"
                                    data-id="<?= $value->id ?>"
                                    data-author="<?= $value->book->author ?>"
                                    data-book_id="<?= $value->book->id ?>"
                                    data-book_name="<?= $value->book->name ?>"
                                    data-user_id="<?= $value->user->id ?>"
                                    data-user_name="<?= $value->user->name ?>"
                                    data-returndate="<?= $value->return_date ?>"
                                    data-issue_date="<?= date('d/m/Y', strtotime($value->issue_date)) ?>"
                                    data-return_date="<?= date('d/m/Y', strtotime($value->return_date)) ?>"
                                    data-target="#notify"
                                    class="btn btn-warning btn-sm notify"
                                    href="">
                                <i class="fa fa-bell"></i>
                                Notify
                            </a>
                          <?php
                            }
                          ?>
                          <a
                              onclick="return confirm('Do you want to change the status as Return ?')"
                              href="<?= URI('admin/requests/return-book/'.$value->id) ?>"
                              title="Accept"
                              class="btn btn-sm btn-success">
                              <i class="fa fa-undo-alt"></i>
                              Return
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

        <!-- Details View -->
        <div class="modal fade" id="notify" tabindex="-1" role="dialog"
             aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Notify This User</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form method="post" name="send_notification" action="<?= URI('/admin/requests/notify-user') ?>">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="details-content">
                                        <h3>Book Details</h3>
                                        <table class="table table-striped table-hover">
                                            <tbody>
                                            <tr>
                                                <th>Book Name:</th>
                                                <td id="book_name"></td>
                                            </tr>
                                            <tr>
                                                <th>Author:</th>
                                                <td id="author_name"></td>
                                            </tr>
                                            <tr>
                                                <th>Requested User:</th>
                                                <td id="requested_user"></td>
                                            </tr>
                                            <tr>
                                                <th>Issue Date:</th>
                                                <td>
                                                    <span class="badge badge-primary" id="issue_date"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Return Date:</th>
                                                <td>
                                                    <span class="badge badge-warning" id="return_date"></span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <input type="hidden" name="id" id="id">
                                    <input type="hidden" name="user_id" id="user_id">
                                    <div class="details-content">
                                        <h3>Notification Details</h3>
                                        <div class="form-group">
                                            <label>Fine</label>
                                            <input
                                                    type="number"
                                                    name="fine"
                                                    id="amount"
                                                    class="form-control"
                                                    value="0"
                                                    required
                                                    min="0">
                                        </div>
                                        <div class="form-group">
                                            <label>Message:</label>
                                            <textarea
                                                    name="message"
                                                    rows="5"
                                                    required
                                                    class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-danger btn-sm" type="button" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary btn-sm" type="submit" name="send_notification">Send Notification</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Details View -->

    </div>

  </div>

<?= include_page('shared/admin/foot') ?>
