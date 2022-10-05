<?php echo $this->extend('petugas/layout/template'); ?>

<?= $this->section('content') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Menu Laporan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/petugas'); ?>#">Home</a></li>
                        <li class="breadcrumb-item active">Menu Laporan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Menu Laporan</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Bulan Periode</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected"></option>
                                        <option>Januari</option>
                                        <option>Februari</option>
                                        <option>Maret</option>
                                        <option>April</option>
                                        <option>Mei</option>
                                        <option>Juni</option>
                                        <option>Juli</option>
                                        <option>Agustus</option>
                                        <option>September</option>
                                        <option>Oktober</option>
                                        <option>November</option>
                                        <option>Desember</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.form-group -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tahun Periode</label>
                                    <Select class="form-control select2" style="width: 100%">
                                        <option selected="selected"></option>
                                        <option>2021</option>
                                        <option>2022</option>
                                        <option>2023</option>
                                        <option>2024</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">

                                <label class="kategori">Kategori </label>

                                <div class="form-check">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kategori" id="paud" value="PAUD">
                                        <label class="form-check-label" for="paud">
                                            PAUD
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kategori" id="sd" value="SD">
                                        <label class="form-check-label" for="SD">
                                            SD
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kategori" id="smp" value="SMP">
                                        <label class="form-check-label" for="SMP">
                                            SMP
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kategori" id="sma" value="SMA">
                                        <label class="form-check-label" for="SMA">
                                            SMA
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-default" href="<?= base_url('/petugas/lihatlaporan'); ?>#">
                            <b> Lihat Laporan</b>
                        </a>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.col -->

    </div>
</div>
<!-- /.col -->

</div>
<!-- /.row -->

< <!-- /.card-body -->

    <!-- /.row -->

    </div>
    </div>
    </div>
    <!-- /.card-body -->

    </div>
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->

    <!-- content -->
    </div>
    <?= $this->endSection() ?>