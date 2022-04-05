<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="bi bi-shop"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Madtive Store</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="bi bi-house-fill"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Products Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="bi bi-bag-fill"></i>
            <span>Produk</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Aksi :</h6>
                <a class="collapse-item" href="/produk-kategori">Kategori Produk</a>
                <a class="collapse-item" href="/produk/satuan">Satuan Produk</a>
                <a class="collapse-item" href="/produk/data">Data Produk</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Stock Products Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
            aria-expanded="true" aria-controls="collapseThree">
            <i class="bi bi-box2-fill"></i>
            <span>Stok</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Aksi :</h6>
                <a class="collapse-item" href="buttons.html">Stok Masuk</a>
                <a class="collapse-item" href="buttons.html">Stok Keluar</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Transaction Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
            aria-expanded="true" aria-controls="collapseFour">
            <i class="bi bi-cart-check-fill"></i>
            <span>Transaksi</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Aksi :</h6>
                <a class="collapse-item" href="utilities-color.html">Transaksi Penjualan</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Report Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive"
            aria-expanded="true" aria-controls="collapseFive">
            <i class="bi bi-clipboard2-data-fill"></i>
            <span>Laporan</span>
        </a>
        <div id="collapseFive" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Aksi :</h6>
                <a class="collapse-item" href="utilities-color.html">Laporan Penjualan</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Settings
    </div>

    <!-- Nav Item - Settings Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseExample"
            aria-expanded="true" aria-controls="collapseExample">
            <i class="fas fa-fw fa-cog"></i>
            <span>Pengaturan</span>
        </a>
        <div id="collapseExample" class="collapse" aria-labelledby="headingExample" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Aksi :</h6>
                <a class="collapse-item" href="register.html">Profil</a>
                <a class="collapse-item" href="login.html">User</a>
                <a class="collapse-item" href="login.html">Setting</a>
            </div>
        </div>
    </li>

    {{-- <!-- Nav Item - Charts --> 
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li>  --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End Sidebar -->
