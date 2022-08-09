<?= include_page('shared/user/header') ?>

<section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ">
          <div class="heading_container ">
            <h2 class="">
              Register
            </h2>
          </div>
          <form action="/register" method="post">
            <div>
            <input
                type="text"
                id="name"
                name="name"
                placeholder="Name">
            </div>
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