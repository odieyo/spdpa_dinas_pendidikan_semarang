<?php echo $this->extend('petugas/layout/template'); ?>

<?= $this->section('content') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pegawai ASN</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/petugas'); ?>#">Home</a></li>
                        <li class="breadcrumb-item">Data Pegawai ASN</li>
                        <li class="breadcrumb-item active"><? $jenjang; ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><? $jenjang; ?></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col">
                                <a href="<?= base_url('/petugas/pegawai/sd/tambah'); ?>" type="insert" class="btn btn-success">
                                    <i class="fas fa-plus"></i> Tambah Pegawai
                                </a>
                                <a type="import" class="btn btn-info">
                                    <i class="fas fa-file-csv"> </i>
                                    Import CSV
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <form method="post" action="#">
                                    <label>Cari:</label>
                                    <input type="text" class="">
                                </form>
                            </div>
                        </div>

                        <div class="col-sm-13">
                            <table id="example1" class="table table-bordered table-striped" style="text-align:center;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Unit Kerja</th>
                                        <th>Nama Pegawai</th>
                                        <th>Jenis Jabatan</th>
                                        <th>Status Kepegawaian</th>
                                        <th>Status</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <?php $i = 1; ?>
                                <tbody>
                                    <?php foreach ($pegawai as $pgw) : ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $pgw['unit_kerja']; ?></td>
                                            <td><?= $pgw['nama_pegawai']; ?></td>
                                            <td><?= $pgw['jenis_jabatan']; ?></td>
                                            <td><?= $pgw['status_kepeg']; ?></td>
                                            <td><?= $pgw['status']; ?></td>
                                            <td><?= $pgw['ket']; ?></td>
                                            <td>
                                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <a href="/petugas/pegawai/sd/<?= $pgw['slug']; ?>" type="button" class="btn btn-info">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a type="button" class="btn btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->

    <!-- content -->
</div>
<?= $this->endSection() ?>