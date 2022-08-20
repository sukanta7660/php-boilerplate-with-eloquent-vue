<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin Register || Online Library</title>
  <link href="<?= public_path('admin/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
  <link href="<?= public_path('admin/css/sb-admin-2.min.css') ?>" rel="stylesheet">
  <link href="<?= public_path('admin/css/custom.css') ?>" rel="stylesheet">
  <style>
      .error {
          color: red;
          font-size: 14px;
          position: relative;
          line-height: 1;
          width: 12.5rem;
      }
  </style>
</head>

<body class="">

<div class="container">

  <div class="card o-hidden border-0 my-5">
    <div class="card-body p-0">

      <div class="row">
        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
        <div class="col-lg-7">
          <div class="p-5">
            <div class="text-center">
              <h1 class="">Online Library</h1>
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
            </div>
            <form id="signup" class="user" name="signup" method="post" action="<?= URI('/admin-login') ?>">
              <div class="form-group row">
                  <label>Enter Email</label>
                  <input class="form-control" placeholder="email" type="email" name="email" id="email" autocomplete="off" required/>
              </div>
              <div class="form-group row">
                  <label>Enter Password</label>
                  <input class="form-control" type="password" id="password" name="password" autocomplete="off" required/>
              </div>
              <button type="submit" class="btn btn-primary btn-sm float-right">
                Login
                <i class="fa fa-arrow-alt-circle-right"></i>
              </button>
            </form>
            <div class="">
              <a class="text-decoration-none" href="<?= URI('/admin-register') ?>">Don't have an account? Register!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<script src="<?= public_path('admin/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= public_path('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= public_path('admin/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
<script src="<?= public_path('admin/js/sb-admin-2.min.js') ?>"></script>
</body>

</html>