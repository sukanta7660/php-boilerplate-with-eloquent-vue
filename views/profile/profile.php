<?= include_page('shared/admin/head') ?>

  <div id="wrapper">

    <?= include_page('shared/admin/sidebar') ?>

    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">

        <?= include_page('shared/admin/header') ?>
        <div class="container-fluid">
          <h1 class="h3 mb-2 text-gray-800">My Profile</h1>
          <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) {?>

            <small class="text-success"><?php echo $_SESSION['success_message']; ?></small>

            <?php
            unset($_SESSION['success_message']);
          }
          ?>
          <div class="row">
            <div class="col-md-12">
              <div class="card shadow mb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6 col-lg-4 col-sm-12">
                      <ul class="list-group">
                        <li class="list-group-item text-muted"><i class="fa fa-user-circle"></i> Profile</li>
                        <li class="list-group-item text-right">
                          <span class="float-left"><strong>Name:</strong></span>
                          <?= auth_user()['name'] ?>
                        </li>
                        <li class="list-group-item text-right">
                          <span class="float-left"><strong>Email:</strong></span>
                          <?= auth_user()['email'] ?>
                        </li>
                        <li class="list-group-item text-right">
                          <span class="float-left"><strong>Phone:</strong></span>
                          <?= auth_user()['contact_no'] ?>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-6 col-lg-8 col-sm-12">
                      <!-- Menu -->
                      <ul class="nav nav-tabs">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#profileUpdate">Profile Update</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#passwordChange">Change Password</a>
                        </li>
                      </ul>

                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div class="tab-pane container active" id="profileUpdate">
                          <form class="form mt-2" method="post" name="profile_update">
                            <input type="hidden" name="id" value="<?= auth_user()['id'] ?>">
                            <div class="row">
                              <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="form-group">
                                  <label class="">Name: </label>
                                  <input
                                    type="text"
                                    name="name"
                                    required
                                    class="form-control"
                                    value="<?= auth_user()['name'] ?>">
                                </div>
                              </div>
                              <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="form-group">
                                  <label class="">Email: </label>
                                  <input
                                    type="text"
                                    name="email"
                                    required
                                    readonly
                                    class="form-control"
                                    value="<?= auth_user()['email'] ?>">
                                </div>
                              </div>
                              <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="form-group">
                                  <label class="">Phone: </label>
                                  <input
                                    type="text"
                                    required
                                    name="phone_no"
                                    class="form-control"
                                    value="<?= auth_user()['contact_no'] ?>">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12 col-lg-12 col-sm-12">
                              <button
                                type="submit"
                                class="btn btn-sm btn-success float-right"
                                name="profile_update">
                                Update Your Profile
                              </button>
                            </div>
                          </form>
                        </div>
                        <div class="tab-pane container fade" id="passwordChange">
                          <form class="form mt-2" method="post" name="password_change" onsubmit="valid()">
                            <input type="hidden" name="id" value="<?= auth_user()['id'] ?>">
                            <div class="row">
                              <div class="col-md-12 col-lg-12 col-sm-12">
                                <div class="form-group">
                                  <label class="">Current Password: </label>
                                  <input
                                    type="password"
                                    name="current_password"
                                    placeholder="Current Password"
                                    required
                                    class="form-control">
                                </div>
                              </div>
                              <div class="col-md-12 col-lg-12 col-sm-12">
                                <div class="form-group">
                                  <label class="">New Password: </label>
                                  <input
                                    type="password"
                                    placeholder="New Password"
                                    name="new_password"
                                    required
                                    class="form-control">
                                </div>
                              </div>
                              <div class="col-md-12 col-lg-12 col-sm-12">
                                <div class="form-group">
                                  <label class="">Confirm Password: </label>
                                  <input
                                    type="password"
                                    placeholder="Confirm Password"
                                    name="confirm_password"
                                    required
                                    class="form-control">
                                </div>
                              </div>
                              <div class="col-md-12 col-lg-12 col-sm-12">
                                <button
                                  type="submit"
                                  class="btn btn-sm btn-success float-right"
                                  name="password_change">
                                  Change Your Password
                                </button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
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