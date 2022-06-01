<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/kampusmerdeka.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">My Admin Apps</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url('home')?>" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('praktikum1')?>" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Praktikum 1
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('praktikum2')?>" class="nav-link">
                        <i class="nav-icon fab fa-android"></i>
                        <p>
                            Praktikum 2
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('praktikum8')?>" class="nav-link">
                        <i class="nav-icon fab fa-android"></i>
                        <p>
                            Praktikum 8
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('mahasiswa')?>" class="nav-link">
                        <i class="nav-icon fab fa-android"></i>
                        <p>
                            Praktikum 10(CRUD)
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('login/logout')?>" class="nav-link">
                        <i class="nav-icon fab fa-android"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>