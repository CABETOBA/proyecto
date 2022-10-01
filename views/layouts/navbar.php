<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto nav__items">

        <li class="nav-item">
            <a 
            title="Notificaciones"
            class="nav-link"
            href="" 
            role="button">
                <i class="far fa-bell fa-lg"></i>
            </a>
        </li> 

        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="<?= route('assets/img/user2-160x160.png') ?>" class="user-image img-circle elevation-2" alt="User Image">
                <span class="d-none d-md-inline">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                <!-- User image -->
                <li class="user-header bg-primary">
                    <img src="<?= route('assets/img/user2-160x160.png') ?>" class="img-circle elevation-2" alt="User Image">

                    <p>
                        Alexander Pierce - Web Developer
                        <small>Member since Nov. 2012</small>
                    </p>
                </li>
                                
                <!-- Menu Footer-->
                <li class="user-footer">
                    <a href="#" class="btn btn-info">Perfil</a>
                    <a href="#" class="btn btn-danger float-right">Salir</a>
                </li>
            </ul>
        </li>      
      
    </ul>

</nav>