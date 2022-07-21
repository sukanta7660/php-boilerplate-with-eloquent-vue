<?= include_page('shared/user/header') ?>


  <!-- category section -->
  <section class="catagory_section layout_padding">
    <div class="catagory_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h2>
            Books Categories
          </h2>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-4 ">
            <a href="">
              <div class="box ">
                <div class="img-box">
                  <img src="<?= public_path('user/images/cat1.png') ?>" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Textbooks
                  </h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <a href="">
              <div class="box ">
                <div class="img-box">
                  <img src="<?= public_path('user/images/cat2.png') ?>" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Science
                  </h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <a href="">
              <div class="box ">
                <div class="img-box">
                  <img src="<?= public_path('user/images/cat3.png') ?>" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    History
                  </h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <a href="">
              <div class="box ">
                <div class="img-box">
                  <img src="<?= public_path('user/images/cat4.png') ?>" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Biography
                  </h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <a href="">
              <div class="box ">
                <div class="img-box">
                  <img src="<?= public_path('user/images/cat5.png') ?>" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Adventure
                  </h5>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <a href="">
              <div class="box ">
                <div class="img-box">
                  <img src="<?= public_path('user/images/cat6.png') ?>" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Fantasy
                  </h5>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end catagory section -->

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ">
          <div class="heading_container ">
            <h2 class="">
              Contact Us
            </h2>
          </div>
          <form action="#">
            <div>
              <input type="text" placeholder="Name" />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" placeholder="Pone Number" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="btn-box">
              <button>
                SEND
              </button>
            </div>
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

  <!-- end contact section -->

<?= include_page('shared/user/footer') ?>