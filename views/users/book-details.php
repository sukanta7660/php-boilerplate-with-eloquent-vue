<?php
use Illuminate\Support\Str;
?>
<?= include_page('shared/user/header') ?>

<!-- product -->
<div class="container-fluid">
    <div class="product-content product-wrap clearfix product-deatil">
        <div class="row">
          <?php
          $image =
            $book->image == 'default.jpg' ? public_path('user/images/no_imiage.jpg') : public_path('uploads/books/'.$book->image) ; ?>
            <div class="col-md-5 col-sm-12 col-xs-12">
                <div class="product-image">
                    <img src="<?= $image ?>" style="max-width: 100%">
                </div>
            </div>

            <div class="col-md-6 col-md-offset-1 col-sm-12 col-xs-12">
                <h2 class="name">
                    <?= $book->name ?><br>
                    <i class="fa fa-star fa-2x text-primary"></i>
                    <i class="fa fa-star fa-2x text-primary"></i>
                    <i class="fa fa-star fa-2x text-primary"></i>
                    <i class="fa fa-star fa-2x text-primary"></i>
                    <i class="fa fa-star fa-2x text-muted"></i>
                    <span class="fa fa-2x"><h5>(4.5/5)</h5></span>
                    <a href="javascript:void(0);">109 reviews</a>
                </h2>
                <hr />
                <h3 class="price-container">
                    <?= $book->availability ?>
                    <small>*available</small>
                </h3>
                <hr />
                <div class="description description-tabs">
                    <ul id="myTab" class="nav nav-pills">
                        <li class="active"><a href="#more-information" data-toggle="tab" class="no-margin">Book Details </a></li>
                        <li class=""><a href="#reviews" data-toggle="tab">Reviews</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane active in" id="more-information">
                            <br />
                            <strong>Description Title</strong>
                            <p>
                                Integer egestas, orci id condimentum eleifend, nibh nisi pulvinar eros, vitae ornare massa neque ut orci. Nam aliquet lectus sed odio eleifend, at iaculis dolor egestas. Nunc elementum pellentesque augue
                                sodales porta. Etiam aliquet rutrum turpis, feugiat sodales ipsum consectetur nec.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="reviews">
                            <br />
                            <?php if (isset($_SESSION['user'])) { ?>
                            <form method="post" class="well padding-bottom-10">
                                <input type="hidden" name="id" value="<?= $book->id ?>">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <fieldset class="rate">
                                            <input class="rate-point" id="rate1-star5" type="radio" name="rate" value="5" />
                                            <label  for="rate1-star5" title="Excellent">5</label>

                                            <input class="rate-point" id="rate1-star4" type="radio" name="rate" value="4" />
                                            <label for="rate1-star4" title="Good">4</label>

                                            <input class="rate-point" id="rate1-star3" type="radio" name="rate" value="3" />
                                            <label for="rate1-star3" title="Satisfactory">3</label>

                                            <input class="rate-point" id="rate1-star2" type="radio" name="rate" value="2" />
                                            <label for="rate1-star2" title="Bad">2</label>

                                            <input class="rate-point" id="rate1-star1" type="radio" name="rate" value="1" />
                                            <label for="rate1-star1" title="Very bad">1</label>
                                        </fieldset>
                                    </div>
                                </div>
                                <textarea rows="2" class="form-control" placeholder="Write a review" name="review"></textarea>
                                <div class="margin-top-10">
                                    <button type="submit" class="btn btn-sm btn-primary pull-right mt-2">
                                        Submit Review
                                    </button>
                                </div>
                            </form>
                          <?php } else { ?>
                            <h1>First you have to log in to give review</h1>
                            <?php } ?>

                            <div class="chat-body no-padding profile-message">
                                <ul>
                                    <li class="message">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="online" />
                                        <span class="message-text">
                                            <a href="javascript:void(0);" class="username">
                                                Alisha Molly
                                                <span class="pull-right">
                                                    <i class="fa fa-star fa-2x text-primary"></i>
                                                    <i class="fa fa-star fa-2x text-primary"></i>
                                                    <i class="fa fa-star fa-2x text-primary"></i>
                                                    <i class="fa fa-star fa-2x text-primary"></i>
                                                    <i class="fa fa-star fa-2x text-muted"></i>
                                                </span>
                                            </a> <br>
                                            Can't divide were divide fish forth fish to. Was can't form the, living life grass darkness very image let unto fowl isn't in blessed fill life yielding above all moved
                                        </span>
                                        <ul class="list-inline font-xs">
                                            <li class="pull-right">
                                                <small class="text-muted pull-right ultra-light"> Posted 1 year ago </small>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="message">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="online" />
                                        <span class="message-text">
                                            <a href="javascript:void(0);" class="username">
                                                Aragon Zarko
                                                <span class="badge">Purchase Verified</span>
                                                <span class="pull-right">
                                                    <i class="fa fa-star fa-2x text-primary"></i>
                                                    <i class="fa fa-star fa-2x text-primary"></i>
                                                    <i class="fa fa-star fa-2x text-primary"></i>
                                                    <i class="fa fa-star fa-2x text-primary"></i>
                                                    <i class="fa fa-star fa-2x text-primary"></i>
                                                </span>
                                            </a>
                                            Excellent product, love it!
                                        </span>
                                        <ul class="list-inline font-xs">
                                            <li>
                                                <a href="javascript:void(0);" class="text-info"><i class="fa fa-thumbs-up"></i> This was helpful (22)</a>
                                            </li>
                                            <li class="pull-right">
                                                <small class="text-muted pull-right ultra-light"> Posted 1 year ago </small>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <a href="javascript:void(0);" class="btn btn-success btn-sm">Request for this book</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end product -->

<?= include_page('shared/user/footer') ?>
