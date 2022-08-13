<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= URI('/admin/dashboard') ?>">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-home"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Book Store</div>
  </a>

  <hr class="sidebar-divider my-0" />

  <li class="nav-item active">
    <a class="nav-link" href="<?= URI('/admin/dashboard') ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <hr class="sidebar-divider" />

  <?php if (auth_user()['role'] == 'admin') { ?>
  <div class="sidebar-heading">
    Functionalities
  </div>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Book Request</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Requests</h6>
        <a class="collapse-item" href="<?= URI('/admin/requests/new') ?>">New Request</a>
        <a class="collapse-item" href="<?= URI('/admin/requests/issued') ?>">Accepted Request</a>
        <a class="collapse-item" href="<?= URI('/admin/requests/cancelled') ?>">Cancel Request</a>
        <a class="collapse-item" href="<?= URI('/admin/requests/returned') ?>">Returned Book</a>
      </div>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?= URI('/admin/notifications') ?>">
      <i class="fas fa-fw fa-bell"></i>
      <span>Notification</span>
    </a>
  </li>

  <hr class="sidebar-divider" />

  <div class="sidebar-heading">
    Persons
  </div>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#users" aria-expanded="true" aria-controls="users">
      <i class="fas fa-fw fa-users"></i>
      <span>Users</span>
    </a>
    <div id="users" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Users</h6>
        <a class="collapse-item" href="<?= URI('/admin/users') ?>">Users</a>
        <a class="collapse-item" href="<?= URI('/admin/users/admins') ?>">Admin</a>
      </div>
    </div>
  </li>

  <hr class="sidebar-divider" />
  <div class="sidebar-heading">
    Basic Inputs
  </div>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#categories" aria-expanded="true" aria-controls="categories">
      <i class="fas fa-fw fa-tags"></i>
      <span>Category</span>
    </a>
    <div id="categories" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Categories</h6>
        <a class="collapse-item" href="<?= URI('/admin/category/create') ?>">Add Category</a>
        <a class="collapse-item" href="<?= URI('/admin/category') ?>">All Category</a>
      </div>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#books" aria-expanded="true" aria-controls="books">
      <i class="fas fa-fw fa-book-open"></i>
      <span>Book</span>
    </a>
    <div id="books" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Book</h6>
        <a class="collapse-item" href="<?= URI('/admin/book/create') ?>">Add Book</a>
        <a class="collapse-item" href="<?= URI('/admin/book') ?>">All Books</a>
      </div>
    </div>
  </li>
  <?php } else { ?>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="fas fa-fw fa-cog"></i>
        <span>My Records</span>
      </a>
    </li>
    <hr class="sidebar-divider my-0" />
    <li class="nav-item">
      <a class="nav-link" href="<?= URI('/admin/notifications') ?>">
        <i class="fas fa-fw fa-bell"></i>
        <span>Notification</span>
      </a>
    </li>
  <?php } ?>

  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>
