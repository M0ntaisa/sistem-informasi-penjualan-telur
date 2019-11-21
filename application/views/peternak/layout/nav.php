    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?= base_url('peternak/dashboard'); ?>" class="brand-link">
        <img src="<?= base_url(); ?>assets/admin/dist/img/egg_logo_2.png"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light"><strong>Bayaoku</strong> | Shop</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                <img src="<?= base_url(); ?>assets/admin/dist/img/egg.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $this->session->userdata('nama'); ?></a>
            </div>
        </div>

        
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <!-- MENU DASHBOARD  -->
            <li class="nav-item">
                <a href="<?= base_url('peternak/dashboard') ?>" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt text-info"></i>
                <p>DASHBOARD</p>
                </a>
            </li>

            <!-- MENU PETERNAKAN  -->
            <li class="nav-item">
                <a href="<?= base_url('peternak/ternak') ?>" class="nav-link">
                <i class="nav-icon fas fa-home text-info"></i>
                <p>PETERNAKAN</p>
                </a>
            </li>

            <!-- MENU produk -->
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th text-info"></i>
                <p>
                    PRODUK
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?= base_url('peternak/produk'); ?>" class="nav-link">
                    <i class="fas fa-table nav-icon"></i>
                    <p>Data Produk</p>
                    </a>
                </li>
                </ul>
            </li>

            <!-- MENU Pemesanan Telur -->
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy text-info"></i>
                <p>
                    TRANSAKSI
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?= base_url('peternak/pemesanan/konfirmasi'); ?>" class="nav-link">
                    <i class="fas fa-check nav-icon"></i>
                    <p>Konfirmasi Pesanan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('peternak/pemesanan/transaksi'); ?>" class="nav-link">
                    <i class="fas fa-table nav-icon"></i>
                    <p>Data Transaksi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('peternak/pemesanan/riwayat'); ?>" class="nav-link">
                    <i class="fas fa-clock nav-icon"></i>
                    <p>Riwayat Transaksi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('peternak/pemesanan/laporan'); ?>" class="nav-link">
                    <i class="fas fa-file nav-icon"></i>
                    <p>Laporan Transaksi</p>
                    </a>
                </li>
                </ul>
            </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?= $title; ?></h1>
            </div>
            
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
        <div class="row">
            <div class="col-12">
            <div class="card">
                
                <!-- /.card-header -->
                <div class="card-body">