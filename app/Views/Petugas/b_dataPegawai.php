<?php echo $this->extend('petugas/layout/template'); ?>

<?= $this->section('content') ?>

<style type="text/css">
    .dataTables_filter {
        float: right;
    }

    .dataTables_paginate {
        float: right;
    }

    /* .dataTables_length {} */
</style>

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
                        <li class="breadcrumb-item active"><?= $nama_jenjang; ?></li>
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
                        <h3 class="card-title"><?= $nama_jenjang; ?></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('pesan') ?>
                            </div>

                        <?php endif; ?>
                        <?php if (session()->getFlashdata('error')) : ?>

                            <div class="alert alert-danger" role="alert">
                                <?= session()->getFlashdata('error') ?>
                            </div>
                        <?php endif; ?>
                        <div class="row mb-3">

                            <div class="col">
                                <a href="<?= base_url(uri_string()); ?>/tambah" type="insert" class="btn btn-success">
                                    <i class="fas fa-plus"></i> Tambah Pegawai
                                </a>
                                <button type="button" class="btn btn-info ml-1" data-toggle="modal" data-target="#importModal"><i class="fas fa-file-csv"></i> Import</button>
                            </div>
                            <div class="col-sm-2">

                            </div>
                        </div>

                        <div class=" col-sm-13">
                            <table class="table table-bordered table-striped" style="text-align:center;" id="tabel_pegawai">
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

                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($pegawai as $pgw) : ?>

                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $pgw['unit_kerja']; ?></td>
                                            <td><?= $pgw['nama_pegawai']; ?></td>
                                            <td><?= $pgw['jenis_jabatan']; ?></td>
                                            <td><?= $pgw['status_kepeg']; ?></td>
                                            <td><span class="badge rounded-pill <?= ($pgw['status'] == "Aktif") ? 'badge-success' : 'badge-danger'; ?>"><?= $pgw['status']; ?></span></td>
                                            <td><?= $pgw['ket']; ?></td>
                                            <td>
                                                <a href="<?= base_url('/petugas/pegawai/profil/'); ?>/<?= $pgw['slug']; ?>" type="button" class="btn btn-default btn-sm">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="/petugas/pegawai/<?= $pgw['slug']; ?>" type="button" class="btn btn-info btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <!-- <form action="/petugas/pegawai/</ ?= $pgw['nik']; ?>" method="post" class="d-inline">
                                                    </?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?');">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form> -->
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                        </div>

                    </div>

                    <!-- /.card-body -->
                </div>
                <!-- Pager dan Hasil -->


                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->

    <!-- content -->
</div>
<div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="importModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="importModalLabel">Import</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= site_url('petugas/pegawai/import'); ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="modal-body">
                    <div class="col">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="csvPegawai" name="csvPegawai" required>
                            <label for="csvPegawai" class="custom-file-label">Pilih Berkas</label>
                        </div>
                    </div>
                    <div class="col" style="margin-top: 10px;">
                        <a href="/template_pegawai.xlsx">Unduh Template (Data Pegawai.xlsx)</a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Unggah</button>
                </div>

        </div>
        </form>

    </div>
</div>
<?= $this->endSection() ?>