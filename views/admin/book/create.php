<?= includePage('shared/admin/head') ?>

<div id="wrapper">

    <?= includePage('shared/admin/sidebar') ?>

    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            <?= includePage('shared/admin/header') ?>

            <div class="container-fluid">

                <h1 class="h3 mb-2 text-gray-800">Books</h1>

                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Add Book</h6>
                            </div>
                            <div class="card-body">
                                <form class="user" name="store" method="post"
                                    action="<?= URI('/admin/book/store') ?>" enctype="multipart/form-data">

                                    <?php if (isset($errors)) { ?>
                                    <ul>
                                        <?php foreach ($errors as $key => $value) { ?>
                                        <li class="text-danger"><?= $value ?></li>
                                        <?php } ?>
                                    </ul>
                                    <?php } ?>

                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="category_id" class="form-control" required>
                                            <option value="">Select a category</option>
                                            <?php foreach ($categories as $key => $value) { ?>
                                            <option value="<?= $value->id ?>"><?= $value->name ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Book Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Book Name">
                                    </div>
                                    <div class="form-group">
                                        <label>Author</label>
                                        <input type="text" name="author" class="form-control" placeholder="Book Author">
                                    </div>
                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input type="number"
                                            name="quantity"
                                            class="form-control"
                                            placeholder="Book quantity"
                                            value="0" min="0">
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file"
                                            name="image"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" class="form-control">
                                            <option value="1" selected>Enable</option>
                                            <option value="0">Disable</option>
                                        </select>
                                    </div>
                                    <a href="<?= URI('/admin/book') ?>" class="btn btn-sm btn-danger">
                                        <i class="fa fa-arrow-alt-circle-left"></i>
                                        Back to the list
                                    </a>
                                    <button type="submit" name="store"
                                        class="btn btn-primary btn-sm float-right border-0">
                                        Save Book
                                        <i class="fa fa-arrow-alt-circle-right"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>

        <?= includePage('shared/admin/footer') ?>

    </div>

</div>

<?= includePage('shared/admin/foot') ?>
