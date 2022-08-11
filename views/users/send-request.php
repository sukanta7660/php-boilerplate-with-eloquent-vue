<?php
use Illuminate\Support\Str;
?>
<?= include_page('shared/user/header') ?>

<!-- category section -->
<section class="catagory_section layout_padding">
    <div class="catagory_container">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Send a request for a book
                </h2>
            </div>
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <div class="row">
                        <?php 
                    $image =  
                          $book->image == 'default.jpg' ? 'https://www.freepnglogos.com/uploads/notebook-png/download-laptop-notebook-png-image-png-image-pngimg-2.png' : public_path('uploads/books/'.$book->image) ; ?>
                        <div class="col-md-3">
                            <div class="card h-100 shadow-sm">
                                <img src="<?= $image ?>" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <div class="clearfix mb-3">
                                        <span class="float-start badge rounded-pill bg-primary text-white">
                                            Available Book:
                                            <?= $book->availability ?>
                                        </span>
                                        <!-- <span class="float-right price-hp">12354.00&euro;</span> -->
                                    </div>
                                    <h5 class="card-title">
                                        <small>
                                            <b class="text-bold">Title:</b>
                                            <?= $book->name ?>
                                        </small>
                                        <br />
                                        <small>
                                            <b>Category:</b>
                                            <?= $book->category->name ?>
                                        </small>
                                        <br />
                                        <small>
                                            <b>Author:</b>
                                            <?= $book->author ?>
                                        </small>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <form action="<?= URI('/send-request') ?>" method="post">
                                <input type="hidden" name="book_id" value="<?= $book->id ?>">
                                <div class="form-group">
                                    <label for="name"> Name</label>
                                    <input 
                                    type="text" 
                                    class="form-control" 
                                    id="name" 
                                    placeholder="Enter name"
                                    value="<?= auth_user()['name'] ?>"
                                    readonly 
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="name"> Contact No</label>
                                    <input 
                                    type="text" 
                                    class="form-control" 
                                    id="contact" 
                                    name="contact_no"
                                    placeholder="Enter Contact No"
                                    value="<?= auth_user()['contact_no'] ?? "" ?>"
                                    required 
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="name"> Address</label>
                                    <input 
                                    type="text" 
                                    class="form-control" 
                                    id="address"
                                    name="address"
                                    placeholder="Enter address"
                                    value="<?= auth_user()['address'] ?? "" ?>"
                                    required 
                                    />
                                </div>
                                <div class="">
                                    <a href="<?= URI('/books') ?>" class="btn btn-sm btn-danger" id="btnContactUs">
                                        Cancel
                                    </a>
                                    <button type="submit" class="btn btn-sm btn-primary pull-right" id="btnContactUs">
                                        Send Request
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 sidebar">
                    <div class="list-group">
                        <span href="#" class="list-group-item active">
                            You Can also try this
                        </span>
                        <?php foreach ($books as $key =>
                        $value) { ?>
                        <a href="<?= URI('/book/'.$value->id.'/send-request/'.Str::slug($value->name)) ?>" class="list-group-item">
                            <i class="fa fa-folder"></i>
                            <?= $value->name ?> <span class="badge pull-right"><?= $value->availability ?></span>
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end catagory section -->

<?= include_page('shared/user/footer') ?>
