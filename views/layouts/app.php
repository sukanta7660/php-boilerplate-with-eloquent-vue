<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="This tool helps to build a simple project with object oriented php.">
    <meta name="author" content="Sukanta Purkayastha">
    <title>OOP STARTER KIT</title>
    <link href="<?= public_path('css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= public_path('css/pricing.css') ?>" rel="stylesheet">
</head>

<body>
<!--header-->
<?= include_page('shared/header') ?>
<!--header-->

<div class="pricing-header px-1 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Welcome to Object Oriented Starter Kit</h1>
    <p class="lead">
        This tool helps to build a simple project with object oriented php.
    </p>
</div>

<div class="container">
    <div class="card-deck mb-3 text-center">

    </div>

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
            <div class="col-12 text-center">
                <h6 class="d-block mb-3 text-muted">OOP (PHP) STARTER KIT &copy; <?= date('Y') ?></h6>
            </div>
        </div>
    </footer>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="<?= public_path('js/popper.min.js') ?>"></script>
<script src="<?= public_path('js/popper.min.js') ?>"></script>
<script src="<?= public_path('js/bootstrap.min.js') ?>"></script>
<script src="<?= public_path('js/holder.min.js') ?>"></script>
<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
</script>
</body>
</html>
