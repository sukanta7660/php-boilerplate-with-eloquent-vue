<?php
use Illuminate\Support\Str;
?>
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
<?= includePage('shared/user/header') ?>
<?php foreach ($categories as $key => $value) { ?>
    <div class="container-fluid p-5 <?= ($key+1)%2 == 0 ? 'bg-even' : '' ?>">
        <a class="text-uppercase text-primary" href="">
            <h3 class="p-3">
                <span style="border: 1px solid; padding: 10px; <?= ($key+1)%2 == 0 ? 'background: #fff;' : 'background: #d1d1d1;' ?> color: #111;"><?= $value->name ?> : <?= count($value->books) ?></span>
            </h3>
        </a>
        <div class="resCarousel" data-items="2-3-4-5" data-slide="5" data-speed="600" data-interval="6000" data-load="3" data-animator="lazy">
            <div class="resCarousel-inner" id="eventLoad">

                <?php foreach ($value->books as $index => $item) { ?>
                    <?php
                    $image =
                        $item->image == 'default.jpg' ? publicPath('user/images/no_imiage.jpg') : publicPath('uploads/books/'.$item->image) ;
                    ?>
                    <div class="item">
                        <div class="tile">
                            <div style="background-image: url(<?= $image ?>)">
                            </div>
                            <h3><?= $item->name ?></h3>
                            <a href="<?= URI('/book/'.$item->id.'/book-details/'.Str::slug($item->name)) ?>" class="btn btn-info btn-sm mb-2">See more</a>
                        </div>
                    </div>
                <?php } ?>

            </div>
            <button class='btn btn-secondary leftRs'><</button>
            <button class='btn btn-secondary rightRs'>></button>
        </div>
    </div>
<?php } ?>

<?= includePage('shared/user/footer') ?>

