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
        <div
                class="col-lg-5 d-none d-lg-block bg-register-image"
                style="background-image: url(<?= public_path('admin/img/library-bg1.png') ?>) !important;">

        </div>
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
            <form id="signup" class="user" name="signup" method="post" action="<?= URI('/admin-register') ?>">
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <label>Name:</label>
                  <input
                    type="text"
                    id="name"
                    class="form-control"
                    placeholder="Name"
                    name="name">
                    <small></small>
                </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                      <label>Enter Email</label>
                      <input class="form-control" placeholder="email" type="email" name="email" id="email" autocomplete="off" />
                      <small></small>
                  </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <label>Enter Password</label>
                  <input class="form-control" type="password" id="password" name="password" autocomplete="off" />
                  <small></small>
                </div>
                <div class="col-sm-6">
                  <label>Confirm Password </label>
                  <input class="form-control" id="confirmed_password" type="password" name="confirmed_password" autocomplete="off" />
                    <small></small>
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-sm float-right" name="signup">
                Register Account
                <i class="fa fa-arrow-alt-circle-right"></i>
              </button>
            </form>
            <div class="">
              <a class="text-decoration-none" href="<?= URI('/admin-login') ?>">Already have an account? Login!</a>
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

<script type="text/javascript">
    const usernameEl = document.querySelector('#name');
    const emailEl = document.querySelector('#email');
    const passwordEl = document.querySelector('#password');
    const confirmPasswordEl = document.querySelector('#confirmed_password');

    const form = document.querySelector('#signup');


    const checkUsername = () => {

        let valid = false;

        const min = 3,
            max = 25;

        const username = usernameEl.value.trim();

        if (!isRequired(username)) {
            showError(usernameEl, 'Username cannot be blank.');
        } else if (!isBetween(username.length, min, max)) {
            showError(usernameEl, `Username must be between ${min} and ${max} characters.`)
        } else {
            showSuccess(usernameEl);
            valid = true;
        }
        return valid;
    };


    const checkEmail = () => {
        let valid = false;
        const email = emailEl.value.trim();
        if (!isRequired(email)) {
            showError(emailEl, 'Email cannot be blank.');
        } else if (!isEmailValid(email)) {
            showError(emailEl, 'Email is not valid.')
        } else {
            showSuccess(emailEl);
            valid = true;
        }
        return valid;
    };

    const checkPassword = () => {
        let valid = false;


        const password = passwordEl.value.trim();

        if (!isRequired(password)) {
            showError(passwordEl, 'Password cannot be blank.');
        } else if (!isPasswordSecure(password)) {
            showError(passwordEl, 'Password must has at least 8 characters that include at least 1 lowercase character, 1 uppercase characters, 1 number, and 1 special character in (!@#$%^&*)');
        } else {
            showSuccess(passwordEl);
            valid = true;
        }

        return valid;
    };

    const checkConfirmPassword = () => {
        let valid = false;
        // check confirm password
        const confirmPassword = confirmPasswordEl.value.trim();
        const password = passwordEl.value.trim();

        if (!isRequired(confirmPassword)) {
            showError(confirmPasswordEl, 'Please enter the password again');
        } else if (password !== confirmPassword) {
            showError(confirmPasswordEl, 'The password does not match');
        } else {
            showSuccess(confirmPasswordEl);
            valid = true;
        }

        return valid;
    };

    const isEmailValid = (email) => {
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    };

    const isPasswordSecure = (password) => {
        const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
        return re.test(password);
    };

    const isRequired = value => value !== '';
    const isBetween = (length, min, max) => !(length < min || length > max);


    const showError = (input, message) => {
        // get the form-field element
        const formField = input.parentElement;
        // add the error class
        formField.classList.remove('success');
        formField.classList.add('error');

        // show the error message
        const error = formField.querySelector('small');
        error.textContent = message;
    };

    const showSuccess = (input) => {
        // get the form-field element
        const formField = input.parentElement;

        // remove the error class
        formField.classList.remove('error');
        formField.classList.add('success');

        // hide the error message
        const error = formField.querySelector('small');
        error.textContent = '';
    }


    form.addEventListener('submit', function (e) {
        // prevent the form from submitting
        e.preventDefault();

        // validate fields
        let isUsernameValid = checkUsername(),
            isEmailValid = checkEmail(),
            isPasswordValid = checkPassword(),
            isConfirmPasswordValid = checkConfirmPassword();

        let isFormValid = isUsernameValid &&
            isEmailValid &&
            isPasswordValid &&
            isConfirmPasswordValid;

        // submit to the server if the form is valid
        if (isFormValid) {
            document.getElementById("signup").submit();
        }
    });


    const debounce = (fn, delay = 500) => {
        let timeoutId;
        return (...args) => {
            // cancel the previous timer
            if (timeoutId) {
                clearTimeout(timeoutId);
            }
            // setup a new timer
            timeoutId = setTimeout(() => {
                fn.apply(null, args)
            }, delay);
        };
    };

    form.addEventListener('input', debounce(function (e) {
        switch (e.target.id) {
            case 'username':
                checkUsername();
                break;
            case 'email':
                checkEmail();
                break;
            case 'password':
                checkPassword();
                break;
            case 'confirm-password':
                checkConfirmPassword();
                break;
        }
    }));
</script>
</body>

</html>