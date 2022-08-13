<?= include_page('shared/admin/head') ?>

  <div id="wrapper">

    <?= include_page('shared/admin/sidebar') ?>

    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">

        <?= include_page('shared/admin/header') ?>

        <div class="container-fluid">
          <h1 class="h3 mb-2 text-gray-800 text-center">Add a new admin</h1>
          <div class="row justify-content-center">
            <div class="col-md-6">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Add new admin</h6>
                </div>
                <div class="card-body">
                  <form class="user" action="<?= URI('/admin/users/admin/store') ?>" method="post">
                    <div class="form-group">
                      <label>Name</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Enter name"
                        id="name"
                        name="name" required>
                        <small class="text-danger" id="nameError"></small>
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input
                        type="text"
                        class="form-control"
                        data-url="<?= URI('/email-availability') ?>"
                        id="email"
                        onBlur="checkAvailability()"
                        placeholder="Enter email"
                        name="email" required>
                      <span id="user-availability-status" style="font-size: 12px;"></span>
                    </div>
                    <div class="form-group">
                      <label>Phone</label>
                      <input
                        type="text"
                        class="form-control"
                        id="contactNo"
                        placeholder="Enter contact no"
                        name="contact_no" required>
                        <small class="text-danger" id="contactError"></small>
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input
                        type="password"
                        class="form-control"
                        name="password" required>
                        <small class="text-danger" id="passwordError"></small>
                    </div>
                    <a href="<?= URI('/admin/users/admins') ?>" class="btn btn-sm btn-danger">
                      <i class="fa fa-arrow-alt-circle-left"></i>
                      Back to the list
                    </a>
                    <button type="submit" class="btn btn-primary btn-sm float-right border-0">
                      Save admin
                      <i class="fa fa-arrow-alt-circle-right"></i>
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

      <?= include_page('shared/admin/footer') ?>

    </div>

  </div>

<?= include_page('shared/admin/foot') ?>