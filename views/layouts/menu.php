<!-- Sidebar Menu -->
<nav class="mt-2">

	<ul 
	class="nav nav-pills nav-sidebar flex-column" 
	data-widget="treeview"
	role="menu" 
	data-accordion="false">

        <li class="nav-item">

            <a href="<?=APP_URL; ?>inicio" class="nav-link">
                <i class="nav-icon fa fa-home"></i>
                <p> Inicio </p>
            </a>

        </li>

        <li class="nav-item">

            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-desktop"></i>
                <p>
                    Administración
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>

            <ul class="nav nav-treeview">

                <li class="nav-item">
                    <a href="<?=APP_URL; ?>empleado/gestor" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Empleados</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Empresas</p>
                    </a>
                </li>


            </ul>
            
        </li>


        <li class="nav-item">

            <a href="#" class="nav-link">

                <i class="nav-icon far fa-file-alt"></i>
                <p>
                    Informes
                    <i class="fas fa-angle-left right"></i>
                </p>
                
            </a>

            <ul class="nav nav-treeview">

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>General</p>
                    </a>
                </li>

            </ul>

        </li>

        <li class="nav-item">

            <a href="#" class="nav-link">

                <i class="nav-icon fas fa-cog"></i>
                <p>
                    Configuracion
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>

            <ul class="nav nav-treeview">

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Usuario</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Roles</p>
                    </a>
                </li>

            </ul>
            
        </li>

	</ul>

</nav>