<?= includePage('shared/user/header') ?>

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
              id="signup"
              method="post">
            <div>
               <input
                   type="text"
                   placeholder="Name"
                   id="name"
                   name="name"/>
                <small class="text-danger"></small>
            </div>
            <div>
              <input
                  type="email"
                  id="email"
                  data-url="<?= URI('/email-availability') ?>"
                  onblur="checkAvailability()"
                  name="email"
                  placeholder="Email" />
                <small class="text-danger"></small> <br>
                <span id="user-availability-status" style="font-size: 12px;"></span>
            </div>
            <div>
              <input
                  type="password"
                  id="password"
                  name="password"
                  placeholder="password"/>
                <small class="text-danger"></small>
            </div>
            <div>
              <input
                  type="password"
                  class="form-control"
                  name="confirm_password"
                  id="confirmed_password"
                  placeholder="Confirm password"/>
                <small class="text-danger"></small>
            </div>
            <div class="btn-box">
              <button type="submit">
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
            <img src="<?= publicPath('user/images/contact-img.png') ?>" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

<?= includePage('shared/user/footer') ?>
