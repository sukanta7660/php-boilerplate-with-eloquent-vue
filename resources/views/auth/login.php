<section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ">
          <div class="heading_container ">
            <h2 class="">
              Login
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
          <form action="<?= URI('/login') ?>" method="post">
            <div>
            <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Email"
                    required>
            </div>
            <div>
            <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Password">
            </div>
            <div class="btn-box">
              <button class="btn btn-success" type="submit">
                Login
              </button>
            </div>
            <a href="<?= URI('/register') ?>" class="">
                <small>Don't have any account? please register</small>
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
