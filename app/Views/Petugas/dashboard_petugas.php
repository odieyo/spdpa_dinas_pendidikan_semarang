<?php echo $this->extend('petugas/layout/template'); ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Main content -->

    <div class="container-fluid">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6" style=" margin-top: 10px">
                        <h1 class="m-0">Selamat Datang, <?= $nama_user; ?> </h1>
                        <h4 class="">di Sistem Pengelolaan Data Pegawai ASN </h4>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard Petugas</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Dashboard Petugas</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Small boxes (Stat box) -->
                            <div class="content-body">
                                <div class="row">
                                    <div class="col-lg-3 col-6">

                                        <div class="info-box">
                                            <span class="info-box-icon bg-success"><i class="fas fa-users"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Jumlah Pegawai Aktif</span>
                                                <span class="info-box-number"><?= $jml_pgw; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">

                                        <div class="info-box">
                                            <span class="info-box-icon bg-danger"><i class="fas fa-user-minus"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Jumlah Pegawai Non-Aktif</span>
                                                <span class="info-box-number"><?= $non_pgw; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">

                                        <div class="info-box">
                                            <span class="info-box-icon bg-primary"><i class="fas fa-school"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Jumlah Sekolah</span>
                                                <span class="info-box-number"><?= $jml_skl; ?></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- ./col -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-7 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->


                    <!-- /.Left col -->
                    <!-- right col (We are only adding the ID to make the widgets sortable)-->
                    <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </div>
    </section>
</div>
<?= $this->endSection() ?>