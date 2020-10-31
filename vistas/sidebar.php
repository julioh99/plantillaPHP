<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block">Julio Herrera</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        
        <li class="nav-item">
            <a href="inicio.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>INICIO<span class="right badge badge-danger">New</span></p>
            </a>
        </li>
        <!--Item Tienda -->
        <li class="nav-header">Tienda</li>
            <li class="nav-item">
                <a href="tienda.php" class="nav-link">
                    <i class="nav-icon fas fa-calendar-alt"></i>
                    <p>Tienda<span class="badge badge-danger right">9+</span></p>
                </a>
            </li>
        <!--Item Calendario -->
        <li class="nav-header">Calendario</li>
            <li class="nav-item">
                <a href="calendar.php" class="nav-link">
                    <i class="nav-icon fas fa-calendar-alt"></i>
                    <p>Calendario<span class="badge badge-info right">2</span></p>
                </a>
            </li>
        <li class="nav-header">Usuarios</li>
            <li class="nav-item">
                <a href="register.php" class="nav-link">
                    <i class="fas fa-plus-circle nav-icon"></i>
                    <p>Crear</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="recover-password.php" class="nav-link">
                    <i class="fas fa-sync nav-icon"></i>
                    <p>Cambiar Password</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="lockscreen.php" class="nav-link">
                    <i class="fas fa-lock nav-icon"></i>
                    <p>Block session</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="login.php" class="nav-link">
                    <i class="fas fa-sign-out-alt nav-icon"></i>
                    <p>Log Out</p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
