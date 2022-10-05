<?php echo $this->extend('petugas/layout/template'); ?>

<?= $this->section('content') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Laporan <? $bulan_periode; ?> <? $tahun_periode; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/petugas'); ?>#">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('/petugas/menulaporan'); ?>#">Menu Laporan</a></li>
                        <li class="breadcrumb-item active">Lihat Laporan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Sekolah Dasar</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row mb-1 ml-1">
                            <div class="col-sm-12">
                                <h3 style="text-align:center;"> Rekomendasi Pegawai</h3>
                                <h5 style="text-align:center;"> Periode Bulan <? ?> Tahun <? ?></h5>
                            </div>
                        </div>

                        <div class="col">
                            <table id="example1" class="table table-bordered " style="text-align:center; ">
                                <thead style="vertical-align: top;" height:"100">
                                    <tr>
                                        <th rowspan="2" width="20">No</th>
                                        <th rowspan="2" width="400">Jabatan</th>
                                        <th colspan="4">Status Kepegawaian</th>
                                        <th rowspan="2"><? $bulan_periode - 1 ?></th>
                                        <th rowspan="2">Total</th>
                                        <th rowspan="2">Status</th>
                                        <th rowspan="2">Aksi</th>
                                    </tr>
                                    <tr>
                                        <th width="50 px">PNS</th>
                                        <th width="50 px">PPPK</th>
                                        <th width="50 px">Non PNS</th>
                                        <th width="50 px">Jumlah</th>
                                    </tr>
                                </thead>
                                <?php $i = 1; ?>
                                <tbody>
                                    <!-- Guru Kepala Sekolah -->
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td>Kepala Sekolah</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Guru Kelas -->
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td>Guru Kelas</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Guru Islam -->
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td>Guru Pendidikan Agama Islam</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Guru Katholik -->
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td>Guru Pendidikan Agama Katholik</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Guru Kristen -->
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td>Guru Pendidikan Agama Kristen</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Guru Budha -->
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td>Guru Pendidikan Agama Budha</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Guru Hindu -->
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td>Guru Pendidikan Agama Hindu</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Guru PJOK -->
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td>Guru Pendidikan Jasmani, Olahraga dan Kesehatan</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Guru Inklusi -->
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td>Guru Inklusi</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>
                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                                                <i class="fas fa-eye"></i>
                                            </button>

                                        </td>
                                    </tr>
                                    <!-- Penjaga Sekolah / Pramu Kebersihan -->
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td>Penjaga Sekolah</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Tenaga Administrasi -->
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td>Tenaga Administrasi</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>x</td>
                                        <td>
                                            <button type="button" class="btn  btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- Table Foot -->
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="2">Grand Total</th>
                                        <th rowspan="1" colspan="1"></th>
                                        <th rowspan="1" colspan="1"></th>
                                        <th rowspan="1" colspan="1"></th>
                                        <th rowspan="1" colspan="1"></th>
                                        <th rowspan="1" colspan="1"></th>
                                        <th rowspan="1" colspan="1"></th>
                                        <th rowspan="1" colspan="1"></th>
                                        <th rowspan="1" colspan="1"></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <div class="col col-md-6">
                            <button type="print" class="btn btn-default"><i class="fas fa-file-pdf"></i> Print</button>
                        </div>
                    </div>
                </div>
                <!-- /.card -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div> <!-- content -->
<?= $this->endSection() ?>