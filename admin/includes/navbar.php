<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['auth_user']['name'] ?></span>
            </a>
          <?php
          $delimiter = '-';
          $value = $_SESSION['auth_user']['name'];
          $slug = strtolower(
            trim(preg_replace('/[\s-]+/', $delimiter,
              preg_replace('/[^A-Za-z0-9-]+/', $delimiter,
                preg_replace('/[&]/', 'and',
                  preg_replace('/[\']/', '',
                    iconv('UTF-8', 'ASCII//TRANSLIT', $value))))),
              $delimiter));
          ?>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="my-profile.php?slug=<?= $slug ?>">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../auth-action/logout.php">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>

