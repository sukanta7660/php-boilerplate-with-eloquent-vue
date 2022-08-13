<?= include_page('shared/admin/head') ?>

<div id="wrapper">

  <?= include_page('shared/admin/sidebar') ?>

  <div id="content-wrapper" class="d-flex flex-column">

    <div id="content">

      <?= include_page('shared/admin/header') ?>
      <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                      Total Book</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalBooks ?></div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-book-open fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                      Total Request</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total ?></div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-chevron-down fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                      Pending Request</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pendingRequests ?></div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-lock-open fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Pending Requests Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                      Cancelled Requests</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $cancelledRequests ?></div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-user-ninja fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Content Row -->

      </div>

    </div>

    <?= include_page('shared/admin/footer') ?>

  </div>

</div>

<?= include_page('shared/admin/foot') ?>
