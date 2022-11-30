<?php echo $this->extend('petugas/layout/template'); ?>
<?= $this->section('content') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 mt-2">
                <div class="col-sm-6">
                    <h3 class="page-header">Tambah Data Sekolah </h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/petugas'); ?>#">Home</a></li>
                        <li class="breadcrumb-item" active>Tambah Data Sekolah</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card card-success">
                        <div class="card-header" `>
                            <h1 class="card-title"><? $jenjang ?></h1>
                        </div>
                        <div class="card-body">
                            <form action="/petugas/sekolah/simpan" method="post">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="npsn">NPSN</label>
                                            <input type="text" id="npsn" class="form-control" name="npsn">
                                        </div>
                                        <div class="col">
                                            <label for="nama_sekolah">Nama Sekolah</label>
                                            <input type="text" id="nama_sekolah" class="form-control" name="nama_sekolah">
                                        </div>
                                        <div class="col">
                                            <label for="kecamatan">Kecamatan</label>
                                            <input type="text" id="kecamatan" class="form-control" name="kecamatan">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="jenjang">Jenjang</label>
                                            <input type="text" id="jenjang" class="form-control " value=" " placehodler=" " readonly>
                                        </div>
                                        <div class="col">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" id="alamat" class="form-control" name="alamat">
                                        </div>
                                    </div>
                                </div>

                                <h3>Kebutuhan</h3>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label for="rombel">Rombel</label>
                                            <input type="number" id="rombel" class="form-control" name="rombel">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="kepala_sekolah">Kepala Sekolah</label>
                                            <input type="number" id="kepala_sekolah" class="form-control" name="kepala_sekolah">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="guru_kelas">Guru Kelas</label>
                                            <input type="number" id="guru_kelas" class="form-control" name="guru_kelas">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="guru_pai">Guru PA Islam</label>
                                            <input type="number" id="guru_pai" class="form-control" name="guru_pai">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="guru_kristen">Guru PA Kristen</label>
                                            <input type="number" id="guru_kristen" class="form-control" name="guru_kristen">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="guru_katholik">Guru PA Katholik</label>
                                            <input type="number" id="guru_katholik" class="form-control" name="guru_katholik">
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label for="guru_hindu">Guru PA Hindu</label>
                                            <input type="number" id="guru_hindu" class="form-control" name="guru_hindu">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="guru_budha">Guru PA Budha</label>
                                            <input type="number" id="guru_budha" class="form-control" name="guru_budha">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="guru_pjok">Guru PJOK</label>
                                            <input type="number" id="guru_pjok" class="form-control" name="guru_pjok">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="guru_inklusi">Guru PA Inklusi</label>
                                            <input type="number" id="guru_inklusi" class="form-control" name="guru_inklusi">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="pramu_bakti">Pramu Bakti</label>
                                            <input type="number" id="pramu_bakti" class="form-control" name="pramu_bakti">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="penjaga_kebersihan">Penjaga-Kebersihan</label>
                                            <input type="number" id="penjaga_kebersihan" class="form-control" name="penjaga_kebersihan">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>