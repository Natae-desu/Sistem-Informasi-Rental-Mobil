<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route("home") }}" class="brand-link">
        <img src="{{ asset("dist/img/AdminLTELogo.png") }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Rental Mobil</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset("dist/img/user2-160x160.jpg") }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="" class="d-block">
                    {{ ucfirst(Auth::user()->name) }}
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-pen"></i>
                        <p>
                            Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route("supir.index") }}" class="nav-link">
                                <i class="fas fa-user-alt"></i>
                                    <p>Supir</p>
                            </a>
                        </li>

                        <li class="nav-item">

                            <a href="{{ route("pelanggan.index") }}" class="nav-link">
                                <i class="fas fa-user-alt"></i>
                                    <p>Pelanggan</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route("mobil.index") }}" class="nav-link">
                                <i class="fas fa-car"></i>
                                    <p> Mobil</p>
                            </a>
                        </li>

                    </ul>
                </li>
        
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p> Laporan Mobil
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('list.laporanpemesanan') }}" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                    <p>Laporan Pemesanan</p>
                            </a>
                            </li>
                        <li class="nav-item">
                            <a href="{{ route('laporanpemakaian.list') }}" class="nav-link">
                            <i class="nav-icon fas fa-file"></i>
                                <p>Laporan Pemakaian</p>
                            </a>
                        </li>
                    </a>
                    </ul>
                </li>

                    <li class="nav-item">
                            <a href="{{ route('list.transaksi') }}" class="nav-link">
                                <i class="fas fa-hand-holding-usd"></i>
                                    <p>Transaksi</p>
                            </a>
                    </li>

               
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>