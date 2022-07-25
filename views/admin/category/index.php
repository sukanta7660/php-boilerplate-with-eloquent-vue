<?= include_page('shared/admin/head') ?>

<div id="wrapper">

    <?= include_page('shared/admin/sidebar') ?>

    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            <?= include_page('shared/admin/header') ?>

            <div class="container-fluid">

                <h1 class="h3 mb-2 text-gray-800">Categories</h1>

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">All Categories</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>status</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($categories as $key => $value) {?>
                                    <tr>
                                        <td><?= $key+1 ?></td>
                                        <td>
                                            <?= $value->name ?>
                                        </td>
                                        <td>
                                            <span
                                                class="badge <?= $value->status ? 'badge-success' : 'badge-danger' ?>">
                                                <?= $value->status ? 'Enabled' : 'Disabled' ?>
                                            </span>
                                        </td>
                                        <td class="text-right">
                                            <a href="<?= URI('/admin/category/edit/'.$value->id) ?>"
                                                class="btn btn-sm btn-success">
                                                Edit
                                            </a>
                                            <a onclick="return confirm('Are you sure to delete this category ?')"
                                                href="/admin/category/delete/<?= $value->id ?>"
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