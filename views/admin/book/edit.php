<?= include_page('shared/admin/head') ?>

<div id="wrapper">

    <?= include_page('shared/admin/sidebar') ?>

    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            <?= include_page('shared/admin/header') ?>

            <div class="container-fluid">

                <h1 class="h3 mb-2 text-gray-800">Update Category</h1>

                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Update Category</h6>
                            </div>
                            <div class="card-body">
                                <form class="user" name="store" method="post"
                                    action="<?= URI('/admin/book/update') ?>"
                                    enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?= $book->id ?>">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="category_id" class="form-control" required>
                                            <option value="">Select a category</option>
                                            <?php foreach ($categories as $key => $value) { ?>
                                            <option 
                                                value="<?= $value->id ?>"
                                                <?= $value->id == $book->category_id ? 'selected' : '' ?>>
                                                <?= $value->name ?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Book Name</label>
                                        <input type="text" 
                                            name="name"
                                            value="<?= $book->name ?>"  
                                            class="form-control" 
                                            placeholder="Book Name">
                                    </div>
                                    <div class="form-group">
                                        <label>Author</label>
                                        <input type="text" 
                                            name="author"
                                            value="<?= $book->author ?>"  
                                            class="form-control" 
                                            placeholder="Book Author">
                                    </div>
                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input type="number" 
                                            name="quantity" 
                                            class="form-control" 
                                            placeholder="Book quantity" 
                                            value="<?= $book->quantity ?>"  
                                            min="0">
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
                                            <option value="1" <?= $book->status ? 'selected' : '' ?>>Enable</option>
                                            <option value="0" <?= !$book->status ? 'selected' : '' ?>>Disable
                                            </option>
                                        </select>
                                    </div>
                                    <a href="<?= URI('/admin/book') ?>" class="btn btn-sm btn-danger">
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