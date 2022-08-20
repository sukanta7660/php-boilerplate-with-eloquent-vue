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
            $book->image == 'default.jpg' ? public_path('user/images/no_imiage.jpg') : public_path('uploads/books/'.$book->image) ;
          ?>
            <div class="col-md-5 col-sm-12 col-xs-12">
                <div class="product-image">
                    <img src="<?= $image ?>" style="max-width: 100%">
                </div>
            </div>

            <div class="col-md-6 col-md-offset-1 col-sm-12 col-xs-12">
              <?php if(isset($_SESSION['warning'])) { ?>
                  <p class="alert alert-warning text-center p-1">
                      <small><?= $_SESSION['warning'] ?></small>
                  </p>
                <?php
              }
              unset($_SESSION['warning']);
              ?>
              <?php if(isset($_SESSION['success'])) { ?>
                  <p class="alert alert-success text-center p-1">
                      <small><?= $_SESSION['success'] ?></small>
                  </p>
                <?php
              }
              unset($_SESSION['success']);
              ?>
                <h2 class="name">
                    <?= $book->name ?><br>
                    <?php
                        $avarageRating = $book->reviews->sum('points') / $book->reviews->count();
                    ?>
                    <span class="fa fa-2x"><h5>(<?= number_format($avarageRating, 1) ?>/5)</h5></span>
                    <a href="javascript:void(0);"><?= count($book->reviews) ?> reviews</a>
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
                            <strong><?= $book->name ?></strong>
                            <p>Author: <?= $book->author ?></p>
                            <p>Available Books: <?= $book->availability ?></p>
                        </div>
                        <div class="tab-pane fade" id="reviews">
                            <br />
                            <?php if (isset($_SESSION['user'])) { ?>
                            <form method="post" class="well padding-bottom-10" action="<?= URI('/give-review') ?>">
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
                                <textarea rows="2" class="form-control" placeholder="Write a review" name="review" required></textarea>
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
                                    <?php foreach ($book->reviews as $row) { ?>
                                        <li class="message">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="online" />
                                            <span class="message-text">
                                            <a href="javascript:void(0);" class="username">
                                                <?= $row->user->name ?>
                                                <?php
//                                                    $rateClass = '';
//                                                    if ($row->points == 1)
                                                ?>
<!--                                                <span class="pull-right">-->
<!--                                                    <i class="fa fa-star fa-2x text-primary"></i>-->
<!--                                                    <i class="fa fa-star fa-2x text-primary"></i>-->
<!--                                                    <i class="fa fa-star fa-2x text-primary"></i>-->
<!--                                                    <i class="fa fa-star fa-2x text-primary"></i>-->
<!--                                                    <i class="fa fa-star fa-2x text-muted"></i>-->
<!--                                                </span>-->
                                            </a> <br>
                                            <?= $row->review ?>
                                        </span>
                                            <ul class="list-inline font-xs">
                                                <li class="pull-right">
                                                    <small class="text-muted pull-right ultra-light"> <?= get_time_ago(strtotime($row->created_at)) ?> </small>
                                                </li>
                                            </ul>
                                        </li>
                                        <hr>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <a href="<?= URI('/book/'.$book->id.'/send-request/'.Str::slug($book->name)) ?>" class="btn btn-success btn-sm">Request for this book</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end product -->

<?= include_page('shared/user/footer') ?>
