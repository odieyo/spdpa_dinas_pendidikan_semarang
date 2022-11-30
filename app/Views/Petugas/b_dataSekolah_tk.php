<?php echo $this->extend('petugas/layout/template'); ?>

<?= $this->section('content') ?>


<?php

use App\Models\M_Pegawai;

$this->m_pegawai = new M_Pegawai(); ?>

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
            <div class="row mb-2 mt-2">
                <div class="col-sm-6">
                    <h3 class="page-header">Data Sekolah</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/petugas'); ?>#">Home</a></li>
                        <li class="breadcrumb-item active"><a href="<?= base_url('/petugas/tk'); ?>"> Data Sekolah / TK </a></li>
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
                        <h1 class="card-title">Taman Kanak-Kanak</h1>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <?php if (session()->getFlashdata('notifikasi')) : ?>
                            <div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <?= session()->getFlashdata('notifikasi'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if (session()->getFlashdata('error')) : ?>
                            <div class="alert alert-danger" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <?= session()->getFlashdata('error') ?>
                            </div>
                        <?php endif; ?>
                        <div class="row ml-auto mb-3">
                            <div class="col">
                                <a href="<?= base_url('/petugas/tk/tambah'); ?>" type="button" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Sekolah</a>
                                <button type="button" class="btn btn-info ml-1" data-toggle="modal" data-target="#importModal"><i class="fas fa-file-csv"></i> Import CSV</button>
                            </div>

                        </div>

                        <!-- Tab Tabel -->
                        <div class="card card-primary card-outline card-outline-tabs">
                            <div class="card-header p-0 border-bottom-0">
                                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-four-info-tab" data-toggle="pill" href="#custom-tabs-four-info" role="tab" aria-controls="custom-tabs-four-info" aria-selected="true">Info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-four-kepalasekolah-tab" data-toggle="pill" href="#custom-tabs-four-kepalasekolah" role="tab" aria-controls="custom-tabs-kepalasekolah" aria-selected="false">Kepala Sekolah</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-four-gurukelas-tab" data-toggle="pill" href="#custom-tabs-four-gurukelas" role="tab" aria-controls="custom-tabs-four-gurukelas" aria-selected="false">Guru Kelas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-four-guruPJOK-tab" data-toggle="pill" href="#custom-tabs-four-guruPJOK" role="tab" aria-controls="custom-tabs-four-guruPJOK" aria-selected="false">Guru PJOK</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-four-guruInklusi-tab" data-toggle="pill" href="#custom-tabs-four-guruInklusi" role="tab" aria-controls="custom-tabs-four-guruInklusi" aria-selected="false">Guru Inklusi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-four-tendik-tab" data-toggle="pill" href="#custom-tabs-four-tendik" role="tab" aria-controls="custom-tabs-four-tendik" aria-selected="false">Tenaga Kependidikan</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Isi Tab -->
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-four-tabContent">
                                    <!-- Tab Info -->
                                    <div class="tab-pane fade show active" id="custom-tabs-four-info" role="tabpanel" aria-labelledby="custom-tabs-four-info-tab">
                                        <table class="table table-bordered text-center" id="tabel_sekolah">
                                            <?php
                                            $i = 1; ?>
                                            <thead style="text-align:center;">
                                                <tr>
                                                    <th>No</th>
                                                    <th>NPSN</th>
                                                    <th>Nama Sekolah</th>
                                                    <th>Kecamatan</th>
                                                    <th>Rombongan Belajar</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($sekolah as $skl) : ?>
                                                    <tr>
                                                        <td><?= $i++ ?></td>
                                                        <td><?= $skl['npsn']; ?></td>
                                                        <td><?= $skl['nama_sekolah']; ?></td>
                                                        <td><?= $skl['kecamatan']; ?></td>
                                                        <td><?= $skl['rombel']; ?></td>
                                                        <td>
                                                            <a href="/petugas/tk/<?= $skl['slug']; ?>" type="button" class="btn btn-info btn-sm">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <form action="/petugas/sekolah/<?= $skl['npsn']; ?>" method="post" class="d-inline">
                                                                <?= csrf_field(); ?>
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?');">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Tab Kepala Sekolah -->
                                    <div class="tab-pane fade" id="custom-tabs-four-kepalasekolah" role="tabpanel" aria-labelledby="custom-tabs-four-kepalasekolah-tab">
                                        <table class="table table-bordered text-center" id="tabel_sekolah1">
                                            <?php $i = 1; ?>
                                            <thead style="text-align:center;">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Sekolah</th>
                                                    <th>Nama Kepala Sekolah</th>
                                                    <th>Kebutuhan</th>
                                                    <th>Jumlah</th>
                                                    <th>+/-</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($sekolah as $skl) : ?>
                                                    <tr>
                                                        <td><?= $i++ ?></td>
                                                        <td><?= $skl['nama_sekolah']; ?></td>
                                                        <td>
                                                            <?= $this->m_pegawai->getKS($skl['npsn']);
                                                            ?> </td>
                                                        <td><?= $skl['kepala_sekolah']; ?></td>
                                                        <td><?= $this->m_pegawai->hitungKS($skl['npsn']); ?></td>
                                                        <td><?= $this->m_pegawai->hitungKS($skl['npsn']) - $skl['kepala_sekolah']; ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Tabel Guru Kelas-->
                                    <?php ?>
                                    <div class="tab-pane fade" id="custom-tabs-four-gurukelas" role="tabpanel" aria-labelledby="custom-tabs-four-gurukelas-tab">
                                        <table class="table table-bordered text-center" id="tabel_sekolah2">
                                            <?php $i = 1; ?>
                                            <thead style="text-align:center; vertical-align:middle;">
                                                <tr>
                                                    <th rowspan="2">No</th>
                                                    <th rowspan="2">Nama Sekolah</th>
                                                    <th rowspan="2">Kebutuhan Guru Kelas</th>
                                                    <th colspan="3">Guru Kelas</th>
                                                    <th rowspan="2">+/-</th>
                                                </tr>
                                                <tr>
                                                    <th>PNS</th>
                                                    <th>PPPK</th>
                                                    <th>Non PNS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($sekolah as $skl) : ?>
                                                    <?php $gk =  $this->m_pegawai->hitungGuruKelas($skl['npsn']);  ?>
                                                    <tr>
                                                        <td><?= $i++ ?></td>
                                                        <td><?= $skl['nama_sekolah']; ?></td>
                                                        <td><?= $skl['guru_kelas']; ?></td>
                                                        <td><?= $gk['gPNS']; ?></td>
                                                        <td><?= $gk['gPPPK']; ?></td>
                                                        <td><?= $gk['gNonPNS']; ?></td>
                                                        <td><?= $gk['gPNS'] + $gk['gPPPK'] + $gk['gNonPNS'] - $skl['guru_kelas']; ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Tabel Guru PJOK -->
                                    <div class="tab-pane fade" id="custom-tabs-four-guruPJOK" role="tabpanel" aria-labelledby="custom-tabs-four-guruPJOK-tab">
                                        <table class="table table-bordered text-center" id="tabel_sekolah3">
                                            <?php $i = 1; ?>
                                            <thead style="text-align:center;">
                                                <tr>
                                                    <th rowspan="2">No</th>
                                                    <th rowspan="2">Nama Sekolah</th>
                                                    <th rowspan="2">Kebutuhan Guru PJOK</th>
                                                    <th colspan="3">Guru PJOK</th>
                                                    <th rowspan="2">+/-</th>
                                                </tr>
                                                <tr>
                                                    <th>PNS</th>
                                                    <th>PPPK</th>
                                                    <th>Non PNS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($sekolah as $skl) : ?>
                                                    <?php $gpjok =  $this->m_pegawai->hitungGuruPJOK($skl['npsn']);  ?>
                                                    <tr>
                                                        <td><?= $i++ ?></td>
                                                        <td><?= $skl['nama_sekolah']; ?></td>
                                                        <td><?= $skl['guru_pjok']; ?></td>
                                                        <td><?= $gpjok['gPNS']; ?></td>
                                                        <td><?= $gpjok['gPPPK']; ?></td>
                                                        <td><?= $gpjok['gNonPNS']; ?></td>
                                                        <td><?= $gpjok['gPNS'] + $gpjok['gPPPK'] + $gpjok['gNonPNS'] - $skl['guru_pjok']; ?></td>

                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Tabel Guru Inklusi -->
                                    <div class="tab-pane fade" id="custom-tabs-four-guruInklusi" role="tabpanel" aria-labelledby="custom-tabs-four-guruInklusi-tab">
                                        <table class="table table-bordered text-center" style="text-align:center;" id="tabel_sekolah4">
                                            <?php $i = 1; ?>
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">No</th>
                                                    <th rowspan="2">Nama Sekolah</th>
                                                    <th rowspan="2">Kebutuhan Guru Inklusi</th>
                                                    <th colspan="1">Guru Inklusi</th>
                                                    <th rowspan="2">+/-</th>
                                                </tr>
                                                <tr>
                                                    <th>Non PNS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($sekolah as $skl) : ?>
                                                    <?php $gpInk =  $this->m_pegawai->hitungGuruInklusi($skl['npsn']);  ?>
                                                    <tr>
                                                        <td><?= $i++ ?></td>
                                                        <td><?= $skl['nama_sekolah']; ?></td>
                                                        <td><?= $skl['guru_inklusi']; ?></td>
                                                        <td><?= $gpInk; ?></td>
                                                        <td><?= $gpInk - $skl['guru_inklusi']; ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Tabel Tendik -->
                                    <div class="tab-pane fade" id="custom-tabs-four-tendik" role="tabpanel" aria-labelledby="custom-tabs-four-tendik-tab">
                                        <table class="table table-bordered text-center" id="tabel_sekolah5">
                                            <?php $i = 1; ?>
                                            <thead style="text-align: center;">
                                                <tr>
                                                    <th rowspan="2">No</th>
                                                    <th rowspan="2">Nama Sekolah</th>
                                                    <th rowspan="2">Kebutuhan Pramu Bakti</th>
                                                    <th colspan="2">Pramu Bakti</th>
                                                    <th rowspan="2">+/-</th>
                                                    <th rowspan="2">Kebutuhan Penjaga / Kebersihan</th>
                                                    <th colspan="2">Penjaga / Kebersihan</th>
                                                    <th rowspan="2">+/-</th>
                                                </tr>
                                                <tr>
                                                    <th>PNS</th>
                                                    <th>Non PNS</th>
                                                    <th>PNS</th>
                                                    <th>Non PNS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($sekolah as $skl) : ?>
                                                    <?php $gptk =  $this->m_pegawai->hitungTenagaPendidik($skl['npsn']); ?>
                                                    <tr>
                                                        <td><?= $i++; ?></td>
                                                        <td><?= $skl['nama_sekolah']; ?></td>
                                                        <td><?= $skl['pramu_bakti']; ?></td>
                                                        <td>
                                                            <?= $gptk['pbPNS']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $gptk['pbNonPNS']; ?>
                                                        </td>
                                                        <td>
                                                            <?= ($gptk['pbPNS'] + $gptk['pbNonPNS']) - $skl['pramu_bakti']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $skl['penjaga_kebersihan']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $gptk['pkPNS']; ?></td>
                                                        <td>
                                                            <?= $gptk['pkNonPNS']; ?>
                                                        </td>
                                                        <td>
                                                            <?= ($gptk['pkPNS'] + $gptk['pkNonPNS']) - $skl['penjaga_kebersihan']; ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>


    <!-- /.container-fluid -->

    <!-- Modal Import -->

</div>
<div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="importModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="importModalLabel">Import CSV</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= site_url('petugas/sekolah/import'); ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="modal-body">
                    <div class="col">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="csvSekolah" name="csvSekolah" required>
                            <input type="hidden" class="custom-file-input" id="jenjang" name="jenjang" value="TK">
                            <label for="csvSekolah" class="custom-file-label">Pilih Berkas</label>
                        </div>
                    </div>
                    <div class="col" style="margin-top: 10px;">
                        <a href="/template_sekolah_tk.xlsx">Unduh Template (Data TK.xlsx)</a>
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