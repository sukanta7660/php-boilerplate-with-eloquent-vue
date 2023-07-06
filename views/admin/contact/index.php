<?= includePage('shared/admin/head') ?>

    <div id="wrapper">

        <?= includePage('shared/admin/sidebar') ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <?= includePage('shared/admin/header') ?>

                <div class="container-fluid">

                    <h1 class="h3 mb-2 text-gray-800">Message From User</h1>

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

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">All Message From User</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive text-nowrap">
                                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($messages as $key => $value) {?>
                                        <tr>
                                            <td><?= $key+1 ?></td>
                                            <td>
                                                <?= $value->name ?>
                                            </td>
                                            <td>
                                                <?= $value->email ?>
                                            </td>
                                            <td>
                                                <?= $value->subject ?>
                                            </td>
                                            <td>
                                                <?= $value->messages ?>
                                            </td>
                                            <td class="text-right">
                                                <a onclick="return confirm('Are you sure to delete this message ?')"
                                                   href="<?= URI('/admin/contact/delete/'.$value->id) ?>"
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

            <?= includePage('shared/admin/footer') ?>

        </div>

    </div>

<?= includePage('shared/admin/foot') ?>
