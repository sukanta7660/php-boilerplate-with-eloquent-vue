<?= include_page('shared/admin/head') ?>

<div id="wrapper">

    <?= include_page('shared/admin/sidebar') ?>

    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            <?= include_page('shared/admin/header') ?>

            <div class="container-fluid">

                <h1 class="h3 mb-2 text-gray-800">Books</h1>

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">All Books</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Author</th>
                                        <th>Availability</th>
                                        <th>Quantity</th>
                                        <th>status</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($books as $key => $value) {
                                      $image =
                                        $value->image == 'default.jpg' ?
                                          'https://www.freepnglogos.com/uploads/notebook-png/download-laptop-notebook-png-image-png-image-pngimg-2.png' :
                                          public_path('uploads/books/'.$value->image)
                                      ;
                                    ?>
                                    <tr>
                                        <td><?= $key+1 ?></td>
                                        <td>
                                            <img src="<?= $image ?>" alt="<?= $value->name ?>" width="40" height="40">
                                        </td>
                                        <td>
                                            <?= $value->name ?>
                                        </td>
                                        <td>
                                            <?= $value->author ?>
                                        </td>
                                        <td>
                                            <?= $value->availability ?>
                                        </td>
                                        <td>
                                            <?= $value->quantity ?>
                                        </td>
                                        <td>
                                            <span
                                                class="badge <?= $value->status ? 'badge-success' : 'badge-danger' ?>">
                                                <?= $value->status ? 'Enabled' : 'Disabled' ?>
                                            </span>
                                        </td>
                                        <td class="text-right">
                                            <a href="<?= URI('/admin/book/edit/'.$value->id) ?>"
                                                class="btn btn-sm btn-success">
                                                Edit
                                            </a>
                                            <a onclick="return confirm('Are you sure to delete this category ?')"
                                                href="/admin/book/delete/<?= $value->id ?>"
                                                class="btn btn-sm btn-danger">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>


        </div>

        <?= include_page('shared/admin/footer') ?>

    </div>

</div>

<?= include_page('shared/admin/foot') ?>