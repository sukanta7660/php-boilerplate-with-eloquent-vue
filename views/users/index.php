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
<?= include_page('shared/user/header') ?>

<div class="container-fluid p-5">
  <h2 class="p-3">Horror</h2>
  <div class="resCarousel" data-items="2-3-4-5" data-slide="5" data-speed="900" data-interval="4000" data-load="3" data-animator="lazy">
    <div class="resCarousel-inner" id="eventLoad">

      <div class="item">
        <div class="tile">
          <div>
            <h1>1</h1>
          </div>
          <h3>Title</h3>
          <p>content</p>
        </div>
      </div>

      <div class="item">
        <div class="tile">
          <div>
            <h1>2</h1>
          </div>
          <h3>Title</h3>
          <p>content</p>
        </div>
      </div>

      <div class="item">
        <div class="tile">
          <div>
            <h1>3</h1>
          </div>
          <h3>Title</h3>
          <p>content</p>
        </div>
      </div>

      <div class="item">
        <div class="tile">
          <div>
            <h1>4</h1>
          </div>
          <h3>Title</h3>
          <p>content</p>
        </div>
      </div>

      <div class="item">
        <div class="tile">
          <div>
            <h1>5</h1>
          </div>
          <h3>Title</h3>
          <p>content</p>
        </div>
      </div>

      <div class="item">
        <div class="tile">
          <div>
            <h1>6</h1>
          </div>
          <h3>Title</h3>
          <p>content</p>
        </div>
      </div>

      <div class="item">
        <div class="tile">
          <div>
            <h1>7</h1>
          </div>
          <h3>Title</h3>
          <p>content</p>
        </div>
      </div>

      <div class="item">
        <div class="tile">
          <div>
            <h1>8</h1>
          </div>
          <h3>Title</h3>
          <p>content</p>
        </div>
      </div>

      <div class="item">
        <div class="tile">
          <div>
            <h1>9</h1>
          </div>
          <h3>Title</h3>
          <p>content</p>
        </div>
      </div>

      <div class="item">
        <div class="tile">
          <div>
            <h1>10</h1>
          </div>
          <h3>Title</h3>
          <p>content</p>
        </div>
      </div>

      <div class="item">
        <div class="tile">
          <div>
            <h1>11</h1>
          </div>
          <h3>Title</h3>
          <p>content</p>
        </div>
      </div>

      <div class="item">
        <div class="tile">
          <div>
            <h1>12</h1>
          </div>
          <h3>Title</h3>
          <p>content</p>
        </div>
      </div>

      <div class="item">
        <div class="tile">
          <div>
            <h1>13</h1>
          </div>
          <h3>Title</h3>
          <p>content</p>
        </div>
      </div>

      <div class="item">
        <div class="tile">
          <div>
            <h1>14</h1>
          </div>
          <h3>Title</h3>
          <p>content</p>
        </div>
      </div>

    </div>
    <button class='btn btn-secondary leftRs'><</button>
    <button class='btn btn-secondary rightRs'>></button>
  </div>
</div>
<div class="container-fluid p-5 bg-even">
  <h2 class="p-3">Science</h2>
  <div class="resCarousel" data-items="2-3-4-5" data-slide="5" data-speed="600" data-interval="4000" data-load="3" data-animator="lazy">
    <div class="resCarousel-inner" id="eventLoad">

      <div class="item">
        <div class="tile">
          <div style="background-image: url(<?= public_path('user/images/demoImg.jpg') ?>)">
            <h1>1</h1>
          </div>
          <h3>Title</h3>
          <p>content</p>
        </div>
      </div>

      <div class="item">
        <div class="tile">
          <div>
            <h1>2</h1>
          </div>
          <h3>Title</h3>
          <p>content</p>
        </div>
      </div>

      <div class="item">
        <div class="tile">
          <div>
            <h1>3</h1>
          </div>
          <h3>Title</h3>
          <p>content</p>
        </div>
      </div>

      <div class="item">
        <div class="tile">
          <div>
            <h1>4</h1>
          </div>
          <h3>Title</h3>
          <p>content</p>
        </div>
      </div>

      <div class="item">
        <div class="tile">
          <div>
            <h1>5</h1>
          </div>
          <h3>Title</h3>
          <p>content</p>
        </div>
      </div>

      <div class="item">
        <div class="tile">
          <div>
            <h1>6</h1>
          </div>
          <h3>Title</h3>
          <p>content</p>
        </div>
      </div>

      <div class="item">
        <div class="tile">
          <div>
            <h1>7</h1>
          </div>
          <h3>Title</h3>
          <p>content</p>
        </div>
      </div>

      <div class="item">
        <div class="tile">
          <div>
            <h1>8</h1>
          </div>
          <h3>Title</h3>
          <p>content</p>
        </div>
      </div>

      <div class="item">
        <div class="tile">
          <div>
            <h1>9</h1>
          </div>
          <h3>Title</h3>
          <p>content</p>
        </div>
      </div>

      <div class="item">
        <div class="tile">
          <div>
            <h1>10</h1>
          </div>
          <h3>Title</h3>
          <p>content</p>
        </div>
      </div>

      <div class="item">
        <div class="tile">
          <div>
            <h1>11</h1>
          </div>
          <h3>Title</h3>
          <p>content</p>
        </div>
      </div>

      <div class="item">
        <div class="tile">
          <div>
            <h1>12</h1>
          </div>
          <h3>Title</h3>
          <p>content</p>
        </div>
      </div>

      <div class="item">
        <div class="tile">
          <div>
            <h1>13</h1>
          </div>
          <h3>Title</h3>
          <p>content</p>
        </div>
      </div>

      <div class="item">
        <div class="tile">
          <div>
            <h1>14</h1>
          </div>
          <h3>Title</h3>
          <p>content</p>
        </div>
      </div>

    </div>
    <button class='btn btn-secondary leftRs'><</button>
    <button class='btn btn-secondary rightRs'>></button>
  </div>
</div>

<?= include_page('shared/user/footer') ?>

