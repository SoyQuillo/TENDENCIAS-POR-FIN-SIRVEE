<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="https://brandemia.org/contenido/subidas/2014/03/nuevo_logo_terpel.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">E.D.S TERPEL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        

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
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="fa-solid fa-dollar-sign nav-icon" ></i>
                        <p>
                            Ventas
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">3</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <<a href="{{ route('products.index') }}" class="nav-link">
                            <i class="fa-solid fa-cart-plus nav-icon"></i>
                            <p>Producto</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                            <i class="fa-solid fa-user nav-icon"></i>
                                <p>Cliente</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/boxed.html" class="nav-link">
                            <i class="fa-solid fa-file-circle-check nav-icon"></i>
                                <p>Venta/Factura</p>
                            </a>
                        </li>
                        
                    </ul>
                </li>
                <!-- Resto de los elementos del menú -->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<style>
    /* Estilos para el sidebar */
    .main-sidebar {
        background-color: #f8f9fa; /* Color de fondo del sidebar */
        color: #333; /* Color del texto del sidebar */
        border-right: 1px solid #d2d6de; /* Borde derecho */
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Sombreado */
        padding-top: 20px; /* Espaciado superior */
    }

    /* Estilos para el logo y el nombre de la marca */
    .brand-link {
        background-color: #ffffff; /* Color de fondo del logo y nombre de la marca */
        border-bottom: 1px solid #d2d6de; /* Borde inferior */
        padding: 10px; /* Espaciado */
    }

    /* Estilos para los enlaces del sidebar */
    .nav-link {
        color: #333; /* Color del texto de los enlaces */
        padding: 10px 20px; /* Espaciado */
    }

    /* Estilos para los enlaces activos */
    .nav-link.active {
        background-color: #ffffff; /* Color de fondo del enlace activo */
        border-left: 3px solid #007bff; /* Borde izquierdo */
        padding-left: 17px; /* Espaciado del texto */
    }

    /* Estilos para los enlaces al pasar el cursor */
    .nav-link:hover {
        background-color: #f0f0f0; /* Color de fondo al pasar el cursor */
    }

    /* Estilos para los iconos */
    .nav-icon {
        margin-right: 10px; /* Margen derecho */
    }

    /* Estilos para las insignias */
    .badge {
        background-color: #007bff; /* Color de fondo */
        margin-left: auto; /* Margen izquierdo automático */
        margin-right: 20px; /* Margen derecho */
        padding: 5px 10px; /* Espaciado */
    }
</style>
