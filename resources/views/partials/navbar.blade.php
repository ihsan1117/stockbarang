<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Barang Masuk TA</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link" href="{{ 'stock' }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Stock Barang
                    </a>
                    <a class="nav-link" href="{{ 'pemasukan' }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Barang Masuk
                    </a>
                    <a class="nav-link" href="{{ 'pengeluaran' }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Barang Keluar
                    </a>
                    <a class="nav-link" href="{{ route('logout') }}">
                        Logout
                    </a>
                </div>
            </div>
        </nav>
    </div>