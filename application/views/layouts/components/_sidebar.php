<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-2 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= assets('img/avatar.png') ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <!-- username -->
        <a href="#" class="d-block"><?= AuthData()->nama ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <?php foreach (admin_menus() as $menu): ?>
          <li class="nav-item">
            <a href="<?php echo $menu['url']; ?>" class="nav-link">
              <i class="nav-icon <?php echo $menu['icon']; ?>"></i>
              <p>
                <?php echo $menu['text']; ?>
              </p>
            </a>
          </li>
        <?php endforeach; ?>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
