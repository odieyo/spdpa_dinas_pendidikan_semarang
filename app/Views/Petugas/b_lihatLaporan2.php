<?php echo $this->extend('petugas/layout/template'); ?>

<?= $this->section('content') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Laporan Unit Kerja ___ 2022</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/petugas'); ?>#">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('/petugas/menulaporan'); ?>#">Menu Laporan</a></li>
                        <li class="breadcrumb-item active">Laporan Sekolah</li>
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
                        <h3 class="card-title">Sekolah Dasar</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row mb-1 ml-1">
                            <div class="col-sm-12">
                                <button type="print" class="btn btn-default"><i class="fas fa-file-pdf"></i> Print</button>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Unit Kerja</th>
                                        <th>Kecamatan</th>
                                        <th>Rombel</th>
                                        <th>Kepala Sekolah - PNS</th>
                                        <th>Total Guru Kelas</th>
                                        <th>Total Guru PA</th>
                                        <th>Total Guru PJOK</th>
                                        <th>Total Guru Inklusi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <?php $i = 1; ?>
                                <tbody>
                                    <?php foreach ($sekolah as $skl) : ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $skl['nama_sekolah']; ?></td>
                                            <td><?= $skl['kecamatan']; ?></td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1
                                                <span class="badge rounded-pill bg-danger">-1</span>
                                            </td>
                                            <td>1
                                                <span class="badge rounded-pill bg-success">+1</span>
                                            </td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>
                                                <button type="button" class="btn btn-block" data-toggle="modal" data-target="#ModalSekolah">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="3">Grand Total</th>
                                        <th rowspan="1" colspan="1"> </th>
                                        <th rowspan="1" colspan="1"> </th>
                                        <th rowspan="1" colspan="1"> </th>
                                        <th rowspan="1" colspan="1"> </th>
                                        <th rowspan="1" colspan="1"> </th>
                                        <th rowspan="1" colspan="1"> </th>
                                        <th rowspan="1" colspan="2"> </th>
                                    </tr>
                                </tfoot>
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
<!--modal-->
<div class="modal fade" id="ModalGuruKelas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Guru Kelas</h5>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <th></th>
                        <th>PNS</th>
                        <th>PPPK</th>
                        <th>NON PNS</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Guru Kelas</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button href="<?= base_url('/petugas/lihatlaporan2'); ?>" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalGuruPA" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Guru Pendidikan Agama</h5>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <th></th>
                        <th>PNS</th>
                        <th>PPPK</th>
                        <th>NON PNS</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pendidikan Agama Islam</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Pendidikan Agama Katholik</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Pendidikan Agama Kristen</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Pendidikan Agama Hindu</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Pendidikan Agama Budha</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button href="<?= base_url('/petugas/lihatlaporan2'); ?>" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalGuruPJOK" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Guru PJOK</h5>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <th></th>
                        <th>PNS</th>
                        <th>PPPK</th>
                        <th>NON PNS</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pendidikan Jasmani, Olahraga dan Kerohanian</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button href="<?= base_url('/petugas/lihatlaporan2'); ?>" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalGuruInklusi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Guru Inklusi</h5>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <th></th>
                        <th>PNS</th>
                        <th>PPPK</th>
                        <th>NON PNS</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Inklusi</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button href="<?= base_url('/petugas/lihatlaporan2'); ?>" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>