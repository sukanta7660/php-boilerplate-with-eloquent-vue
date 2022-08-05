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
          <div class="col-md-9 col-sm-8">
            <div class="row">
                <?php 
                  foreach ($books as $key => $value) {
                    $image =  
                          $value->image == 'default.jpg' ? 
                          'https://www.freepnglogos.com/uploads/notebook-png/download-laptop-notebook-png-image-png-image-pngimg-2.png' : 
                          public_path('uploads/books/'.$value->image)
                        ;
                ?>
                <div class="col-md-4">
                  <div class="card h-100 shadow-sm">
                  <img src="<?= $image ?>" class="card-img-top" alt="..." />
                  <div class="card-body">
                      <div class="clearfix mb-3">
                        <span class="float-start badge rounded-pill bg-primary text-white">
                          Available Book: 
                          <?= $value->availability ?>
                        </span> 
                        <!-- <span class="float-right price-hp">12354.00&euro;</span> -->
                      </div>
                      <h5 class="card-title">
                          <small><b class="text-bold">Title:</b> <?= $value->name ?></small><br>
                          <small><b>Category:</b> <?= $value->category->name ?></small><br>
                        <small><b>Author:</b> <?= $value->author ?></small>
                      </h5>
                      <div class="text-center my-4"><a href="#" class="btn btn-primary btn-sm">Send a book request</a></div>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
	      </div>
      </div>
    </div>
  </section>

  <!-- end catagory section -->

<?= include_page('shared/user/footer') ?>