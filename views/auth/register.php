<?= include_page('shared/user/header') ?>

<section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ">
          <div class="heading_container ">
            <h2 class="">
              Register
            </h2>
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
          <form
              action="<?= URI('/register') ?>"
              id="registrationForm"
              method="post"
              onsubmit="return validateForm()">
            <div>
              <small class="text-danger" id="nameError"></small>
               <input
                   type="text"
                   placeholder="Name"
                   id="name"
                   name="name"/>
            </div>
            <div>
              <small class="text-danger" id="contactError"></small>
               <input
                   type="text"
                   placeholder="Contact No"
                   id="contactNo"
                   name="contact_no"/>
            </div>
            <div>
              <small class="text-danger" id="emailError"></small>
              <span id="user-availability-status" style="font-size: 12px;"></span>
              <input
                  type="email"
                  id="email"
                  data-url="<?= URI('/email-availability') ?>"
                  onblur="checkAvailability()"
                  name="email"
                  placeholder="Email" />
            </div>
            <div>
              <small class="text-danger" id="passwordError"></small>
              <input
                  type="password"
                  id="password"
                  name="password"
                  placeholder="password"/>
            </div>
            <div>
              <small class="text-danger" id="confirmPasswordError"></small>
              <input
                  type="password"
                  class="form-control"
                  name="confirm_password"
                  id="confirmPassword"
                  placeholder="Confirm password"/>
            </div>
            <div class="btn-box">
              <button id="submit" type="submit">
                Register
              </button>
            </div>
            <a href="<?= URI('/login') ?>" class="">
                <small>Already have an account? please login</small>
              </a>
          </form>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="<?= public_path('user/images/contact-img.png') ?>" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

<?= include_page('shared/user/footer') ?>
