<?= include_page('shared/user/header') ?>

<section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ">
          <div class="heading_container ">
            <h2 class="">
              Login
            </h2>
          </div>
          <form action="#">
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
                    type="text"
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
            <img src="<?= public_path('user/images/contact-img.png') ?>" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

<?= include_page('shared/user/footer') ?>