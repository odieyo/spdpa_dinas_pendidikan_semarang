<?php echo $this->extend('petugas/layout/template'); ?>

<?= $this->section('content') ?>

<?php $session = session(); ?>
<?php $role = $session->role; ?>
<?php helper('form'); ?>

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
            <div class="col-md-4">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Periode Laporan</h3>

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
                        <form action="/petugas/laporan/lihat" method="get">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="tanggal_awal">Tanggal Awal</label>
                                        <input type="date" id="tanggal_awal" name="tanggal_awal" class="form-control" required></input>

                                    </div>
                                    <div class="col-md-6">

                                        <label for="tanggal_akhir">Tanggal Akhir</label>
                                        <input type="date" id="tanggal_akhir" name="tanggal_akhir" class="form-control" required></input>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label class="kategori">Kategori </label>
                                        <?php if ($role == 'Semua') : ?>
                                            <div class="form-check">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="kategori" value="TK">
                                                    <label class="form-check-label" for="TK">
                                                        TK
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="kategori" value="SD">
                                                    <label class="form-check-label" for="SD">
                                                        SD
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="kategori" value="SMP">
                                                    <label class="form-check-label" for="SMP">
                                                        SMP
                                                    </label>
                                                </div>
                                            </div>
                                        <?php else : ?>
                                            <div class="form-check">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="kategori" value="TK" <?= ($role == 'TK') ? set_radio('kategori', 'TK', true) : 'disabled'; ?>>
                                                    <label class="form-check-label" for="TK">
                                                        TK
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="kategori" value="SD" <?= ($role == 'SD') ? set_radio('kategori', 'SD', true) : 'disabled'; ?>>
                                                    <label class="form-check-label" for="SD">
                                                        SD
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="kategori" value="SMP" <?= ($role == 'SMP') ? set_radio('kategori', 'SMP', true) : 'disabled'; ?>>
                                                    <label class="form-check-label" for="SMP">
                                                        SMP
                                                    </label>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <!-- /.form-group -->
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-default float-right">
                            <b> Lihat Laporan</b>
                        </button>
                    </div>
                    </form>
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.col -->

    </div>
</div>
<!-- /.col -->

<?= $this->endSection() ?>