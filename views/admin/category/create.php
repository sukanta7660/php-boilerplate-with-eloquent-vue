<?= include_page('shared/admin/head') ?>

<div id="wrapper">

    <?= include_page('shared/admin/sidebar') ?>

    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            <?= include_page('shared/admin/header') ?>

            <div class="container-fluid">

                <h1 class="h3 mb-2 text-gray-800">Categories</h1>

                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Add Category</h6>
                            </div>
                            <div class="card-body">
                                <form class="user" name="store" method="post"
                                    action="<?= URI('/admin/category/store') ?>">

                                    <?php if (isset($errors)) { ?>
                                    <ul>
                                        <?php foreach ($errors as $key => $value) { ?>
                                        <li class="text-danger"><?= $value ?></li>
                                        <?php } ?>
                                    </ul>
                                    <?php } ?>

                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <input type="text" class="form-control" placeholder="Enter category name"
                                            name="name">
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" class="form-control">
                                            <option value="1" selected>Enable</option>
                                            <option value="0">Disable</option>
                                        </select>
                                    </div>
                                    <a href="<?= URI('/admin/category') ?>" class="btn btn-sm btn-danger">
                                        <i class="fa fa-arrow-alt-circle-left"></i>
                                        Back to the list
                                    </a>
                                    <button type="submit" name="store"
                                        class="btn btn-primary btn-sm float-right border-0">
                                        Save Category
                                        <i class="fa fa-arrow-alt-circle-right"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>

        <?= include_page('shared/admin/footer') ?>

    </div>

</div>

<?= include_page('shared/admin/foot') ?>