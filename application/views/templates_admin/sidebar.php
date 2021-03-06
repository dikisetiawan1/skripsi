<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion " id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center  " href="index.html">
        <div class="col-lg  mt-5    ">
            <img src="<?= base_url() ?>" alt="">
            <h5 class="mt-3">SILP</h5>
        </div>

    </a>
    <br>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item a active">
        <a class="nav-link" href="<?= base_url("admin/dashboard"); ?>">
            <i class="fas fa-fw fa-tachometer-alt "></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw  fa-database"></i>


            <span>Master Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Master data</h6>
                <a class="collapse-item" href="<?= base_url("admin/databarang"); ?>">Data Barang </a>
                <a class="collapse-item" href="<?= base_url("admin/supplier"); ?>">Data supplier</a>
                <a class="collapse-item" href="<?= base_url("admin/kategoribarang"); ?>">kategori barang</a>

            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa fa-fw fa-list"></i>
            <span>Proses barang </span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data proses barang</h6>
                <a class="collapse-item" href="<?= base_url("admin/transaksibarangmasuk"); ?>">barang masuk</a>
                <a class="collapse-item" href="<?= base_url("admin/transaksibarangkeluar"); ?>">barang keluar</a>
            </div>
        </div>

    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities1" aria-expanded="true" aria-controls="collapseUtilities1">
            <i class="fa fa-fw fa-print"></i>
            <span>Laporan</span>
        </a>
        <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Laporan</h6>
                <a class="collapse-item" href="<?= base_url("admin/laporan/L_barangMasuk"); ?>">Laporan Barang masuk</a>
                <a class="collapse-item" href="<?= base_url("admin/laporan/L_barangKeluar"); ?>">Laporan Barang keluar</a>


            </div>
        </div>

    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities3" aria-expanded="true" aria-controls="collapseUtilities3">
            <i class="fa fa-fw fa-box-open"></i>
            <span>Stok barang</span>
        </a>
        <div id="collapseUtilities3" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Stok barang</h6>
                <a class="collapse-item" href="<?= base_url('admin/stokbarang/'); ?>">Barang kosong</a>
                <a class="collapse-item" href="<?= base_url('admin/stokbarang/tersedia') ?>">Barang Tersedia</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <!-- Heading -->
    <div class="sidebar-heading">
        Setting
    </div>

    <!-- Nav Item - Pages Collapse Menu -->

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/ubahPassword') ?>" data-target="#collapsePages" aria-expanded="true" aria-controls="">

            <i class="fa fa-fw fa-unlock"></i>
            <span>Ubah password</span>
        </a>



    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout') ?>" data-target="#collapsePages" aria-expanded="true" aria-controls="">
            <i class="fas  fa-sign-out-alt fa-sm fa-fw mr-2 "></i>
            <span>Logout</span>
        </a>

    </li>

    <!-- Nav Item - Charts -->


    <!-- Nav Item - Tables -->



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->