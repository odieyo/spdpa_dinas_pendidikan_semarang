<?php $session = session(); ?>
<?php $akses = $session->role; ?>
<?php $nama_user = $session->nama_user; ?>
<div class="wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/SemarangLogo.png" alt="SeemarangLogo" height="60" width="60">
        <h2> Dinas Pendidikan Kota Semarang </h2>
        <h3> Sistem Pengelolaan Data Pegawai ASN </h3>
    </div> -->

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <!-- Navbar user panel (optional) -->
            <li class="nav-item d-none d-sm-inline-block" style="margin-right:30px;color:white;">
                <img src="dist/img/admin.png" class="img-circle" alt="User Image" width="30" height="30">
                <a><?= $nama_user; ?></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?= site_url('auth/logout'); ?>"> <button class="btn btn-info nav-item align-self-md-end" styles="text-color: #ffff;">Logout</button> </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?= base_url('/petugas'); ?>" class="brand-link">
            <img src="dist/img/SemarangLogo.png" alt="Semarang Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">SPDPA</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <?php if ($akses === "Semua") : ?>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-users"></i>
                                <p>
                                    Data Pegawai ASN
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('/petugas/pegawai/tk'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>TK</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('/petugas/pegawai/sd'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>SD</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('/petugas/pegawai/smp'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>SMP</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-light fa-school"></i>
                                <p>
                                    Data Sekolah
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('/petugas/tk'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>TK</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('/petugas/sd'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>SD</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('/petugas/smp'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>SMP</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <?php if ($akses === "TK") : ?>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-users"></i>
                                <p>
                                    Data Pegawai ASN
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('/petugas/pegawai/tk'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>TK</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-light fa-school"></i>
                                <p>
                                    Data Sekolah
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('/petugas/tk'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>TK</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <?php if ($akses === "SD") : ?>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-users"></i>
                                <p>
                                    Data Pegawai ASN
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="<?= base_url('/petugas/pegawai/sd'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>SD</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-light fa-school"></i>
                                <p>
                                    Data Sekolah
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="<?= base_url('/petugas/sd'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>SD</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <?php if ($akses === "SMP") : ?>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-users"></i>
                                <p>
                                    Data Pegawai ASN
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('/petugas/pegawai/smp'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>SMP</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-light fa-school"></i>
                                <p>
                                    Data Sekolah
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('/petugas/smp'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>SMP</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <!-- MENU LAPORAN -->
                    <li class="nav-item">
                        <a href="<?= base_url('/petugas/menulaporan'); ?>" class="nav-link">
                            <i class="nav-icon fas fa-solid fa-folder-open"></i>
                            <p>
                                Menu Laporan
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>