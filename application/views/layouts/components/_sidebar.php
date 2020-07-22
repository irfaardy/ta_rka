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
        <a href="#" class="d-block"><?= userLevel(AuthData()->level) ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <?php foreach (admin_menus() as $menu): ?>
          <?php if (in_array(AuthData()->level, $menu['user'])): 
            if(empty($menu['dropdown_menus'])):?>
            <li class="nav-item">
              <a href="<?php echo $menu['url']; ?>" class="nav-link">
                <i class="nav-icon <?php echo $menu['icon']; ?>"></i>
                <p>
                  <?php echo $menu['text']; ?>
                </p>
              </a>
            </li>
            <?php else:?>
               <li class="nav-item has-treeview">
                <a href="<?php echo $menu['url']; ?>" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                     <?php echo $menu['text']; ?>
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <?php foreach($menu['dropdown_menus'] as $m):?>
                  <li class="nav-item">
                    <a href="<?php echo $m['url']; ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p><?php echo $m['text']; ?></p>
                    </a>
                  </li>
                 <?php endforeach; ?>
                </ul>
            </li>
          <?php endif; ?>
          <?php endif; ?>
        <?php endforeach; ?>
       
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
