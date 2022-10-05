<?php echo $this->extend('petugas/layout/template'); ?>

<?= $this->section('content') ?>

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
                        <li class="breadcrumb-item active">Data Sekolah </li>
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
                        <h1 class="card-title"><? $sekolah['jenjang']; ?></h1>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <?php if (session()->getFlashdata('notifikasi')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('notifikasi'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="row ml-auto mb-3">
                            <div class="col">
                                <a href="<?= base_url('/petugas/sd/tambah'); ?>" type="button" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Sekolah</a>
                                <a type="button" class="btn btn-info ml-1"><i class="fas fa-file-csv"></i> Import CSV</a>
                            </div>
                            <div class="col-md-4 ">
                                <form method="post" action="#">
                                    <label>Cari :</label>
                                    <input type="text" name="#">
                                </form>
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
                                        <a class="nav-link" id="custom-tabs-four-guruPA-tab" data-toggle="pill" href="#custom-tabs-four-guruPA" role="tab" aria-controls="custom-tabs-four-guruPA" aria-selected="false">Guru Pendidikan Agama</a>
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
                                        <table class="table table-bordered">
                                            <?php $i = 1; ?>
                                            <thead style="text-align:center;">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Sekolah</th>
                                                    <th>Kecamatan</th>
                                                    <th>Rombongan Belajar</th>
                                                    <th>Alamat</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($sekolah as $skl) : ?>
                                                    <tr>
                                                        <td><?= $i++ ?></td>
                                                        <td><?= $skl['nama_sekolah']; ?></td>
                                                        <td><?= $skl['kecamatan']; ?></td>
                                                        <td><?= $skl['rombel']; ?></td>
                                                        <td><?= $skl['alamat']; ?></td>
                                                        <td>
                                                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#ModalSekolah">
                                                                <i class="fas fa-eye"></i>
                                                            </button>
                                                            <a href="/petugas/sd/<?= $skl['slug']; ?>" type="button" class="btn btn-info">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <button type="button" class="btn btn-danger">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Tab Kepala Sekolah -->
                                    <div class="tab-pane fade" id="custom-tabs-four-kepalasekolah" role="tabpanel" aria-labelledby="custom-tabs-four-kepalasekolah-tab">
                                        <table class="table table-bordered ">
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
                                                        <td><? $skl['nama_ks']; ?> </td>
                                                        <td><?= $skl['kepala_sekolah']; ?></td>
                                                        <td><? $jml_ks ?> </td>
                                                        <td><? $hasil_ks  ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Tabel Guru Kelas-->
                                    <?php ?>
                                    <div class="tab-pane fade" id="custom-tabs-four-gurukelas" role="tabpanel" aria-labelledby="custom-tabs-four-gurukelas-tab">
                                        <table class="table table-bordered">
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
                                                    <tr>
                                                        <td><?= $i++ ?></td>
                                                        <td><?= $skl['nama_sekolah']; ?></td>
                                                        <td><?= $skl['guru_kelas']; ?></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>

                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Tabel Guru PA -->
                                    <div class="tab-pane fade" id="custom-tabs-four-guruPA" role="tabpanel" aria-labelledby="custom-tabs-four-guruPA-tab" style="overflow-x:auto;">
                                        <table class="table table-bordered ">
                                            <?php $i = 1; ?>
                                            <thead style="text-align:center;">
                                                <tr>
                                                    <th rowspan="2">No</th>
                                                    <th rowspan="2">Nama Sekolah</th>
                                                    <th rowspan="2">Kebutuhan Guru PA Islam</th>
                                                    <th colspan="3">Guru PA Islam</th>
                                                    <th rowspan="2">+/-</th>
                                                    <th rowspan="2">Kebutuhan Guru PA Kristen</th>
                                                    <th colspan="3">Guru PA Kristen</th>
                                                    <th rowspan="2">+/-</th>
                                                    <th rowspan="2">Kebutuhan Guru PA Katholik</th>
                                                    <th colspan="3">Guru PA Katolik</th>
                                                    <th rowspan="2">+/-</th>
                                                    <th rowspan="2">Kebutuhan Guru PA Hindu</th>
                                                    <th colspan="3">Guru PA Hindu</th>
                                                    <th rowspan="2">+/-</th>
                                                    <th rowspan="2">Kebutuhan Guru PA Budha</th>
                                                    <th colspan="3">Guru PA Budha</th>
                                                    <th rowspan="2">+/-</th>
                                                </tr>
                                                <tr>
                                                    <th>PNS</th>
                                                    <th>PPPK</th>
                                                    <th>Non PNS</th>
                                                    <th>PNS</th>
                                                    <th>PPPK</th>
                                                    <th>Non PNS</th>
                                                    <th>PNS</th>
                                                    <th>PPPK</th>
                                                    <th>Non PNS</th>
                                                    <th>PNS</th>
                                                    <th>PPPK</th>
                                                    <th>Non PNS</th>
                                                    <th>PNS</th>
                                                    <th>PPPK</th>
                                                    <th>Non PNS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($sekolah as $skl) : ?>
                                                    <tr>
                                                        <td><?= $i++ ?></td>
                                                        <td><?= $skl['nama_sekolah']; ?></td>
                                                        <td><?= $skl['guru_pai']; ?></td>
                                                        <td> </td>
                                                        <td> </td>
                                                        <td> </td>
                                                        <td> </td>
                                                        <td><?= $skl['guru_kristen']; ?></td>
                                                        <td> </td>
                                                        <td> </td>
                                                        <td> </td>
                                                        <td> </td>
                                                        <td><?= $skl['guru_katholik']; ?></td>
                                                        <td> </td>
                                                        <td> </td>
                                                        <td> </td>
                                                        <td> </td>
                                                        <td><?= $skl['guru_hindu']; ?></td>
                                                        <td> </td>
                                                        <td> </td>
                                                        <td> </td>
                                                        <td> </td>
                                                        <td><?= $skl['guru_budha']; ?></td>
                                                        <td> </td>
                                                        <td> </td>
                                                        <td> </td>
                                                        <td> </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Tabel Guru PJOK -->
                                    <div class="tab-pane fade" id="custom-tabs-four-guruPJOK" role="tabpanel" aria-labelledby="custom-tabs-four-guruPJOK-tab">
                                        <table class="table table-bordered">
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
                                                    <tr>
                                                        <td><?= $i++ ?></td>
                                                        <td><?= $skl['nama_sekolah']; ?></td>
                                                        <td><?= $skl['guru_pjok']; ?></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>

                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Tabel Guru Inklusi -->
                                    <div class="tab-pane fade" id="custom-tabs-four-guruInklusi" role="tabpanel" aria-labelledby="custom-tabs-four-guruInklusi-tab">
                                        <table class="table table-bordered" style="text-align:center;">
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
                                                    <tr>
                                                        <td><?= $i++ ?></td>
                                                        <td><?= $skl['nama_sekolah']; ?></td>
                                                        <td><?= $skl['guru_inklusi']; ?></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Tabel Tendik -->
                                    <div class="tab-pane fade" id="custom-tabs-four-tendik" role="tabpanel" aria-labelledby="custom-tabs-four-tendik-tab">
                                        <table class="table table-bordered">
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
                                                    <tr>
                                                        <td><?= $i++ ?></td>
                                                        <td><?= $skl['nama_sekolah']; ?></td>
                                                        <td><?= $skl['pramu_bakti']; ?></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><?= $skl['penjaga_kebersihan']; ?></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
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
    <div class="modal fade" id="ModalSekolah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Rekapitulasi Sekolah</h5>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th></th>
                            <th>PNS</th>
                            <th>PPPK</th>
                            <th>NON PNS</th>
                            <th>Total</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Kepala Sekolah</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Guru Kelas</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    8
                                    <span class="badge rounded-pill bg-danger">-1</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Pendidikan Agama Islam</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Pendidikan Agama Katholik</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Pendidikan Agama Kristen</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Pendidikan Agama Hindu</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Pendidikan Agama Budha</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Pendidikan Jasmani, Olahraga dan Kerohanian</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Inklusi</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">Grand Total</th>
                                <th rowspan="1" colspan="1"> </th>
                                <th rowspan="1" colspan="1"> </th>
                                <th rowspan="1" colspan="1"> </th>
                                <th rowspan="1" colspan="2"> </th>
                            </tr>
                        </tfoot>
                    </table>
                    Kekurangan Guru Kelas: </br>
                    Kekurangan Guru PA: </br>
                    Kekurangan Guru PJOK: </br>
                    Kekurangan Guru Inklusi: </br>
                </div>
                <div class="modal-footer">
                    <button href="<?= base_url('/petugas/lihatlaporan2'); ?>" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- content -->
</div>
<?= $this->endSection() ?>