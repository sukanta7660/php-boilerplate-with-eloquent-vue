<?= include_page('shared/user/header') ?>


  <!-- category section -->
  <section class="catagory_section layout_padding">
    <div class="catagory_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h2>
            Book Lists
          </h2>
        </div>
        <div class="row">
          <div class="col-sm-4 col-md-3 sidebar">
            <div class="list-group">
                <span href="#" class="list-group-item active">
                    Categories
                </span>
                <?php foreach ($categories as $key => $value) { ?>
                  <a href="#" class="list-group-item">
                    <i class="fa fa-folder"></i> <?= $value->name ?> <span class="badge pull-right"><?= count($value->books) ?></span>
                  </a>
                <?php } ?>
            </div>        
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