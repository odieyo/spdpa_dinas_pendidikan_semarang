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
                        <li class="breadcrumb-item active"><a href="<?= base_url('/petugas/smp'); ?>">Data Sekolah / SMP </a> </li>
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
                <div class="col-sm-6">
                    <div class="card card-success">
                        <div class="card-header" `>
                            <h1 class="card-title">Sekolah Menengah Pertama</h1>
                        </div>
                        <div class="card-body">
                            <form action="/petugas/sekolah/simpan" method="post">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="npsn">NPSN</label>
                                            <input type="text" id="npsn" class="form-control <?= ($validation->hasError('npsn')) ? 'is-invalid' : ''; ?>" name="npsn" value="<?= old('npsn'); ?>">
                                            <div class=" invalid-feedback">
                                                <?= $validation->getError('npsn'); ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="nama_sekolah">Nama Sekolah</label>
                                            <input type="text" id="nama_sekolah" class="form-control <?= ($validation->hasError('nama_sekolah')) ? 'is-invalid' : ''; ?>" name="nama_sekolah" value="<?= old('nama_sekolah'); ?>">
                                            <div class=" invalid-feedback">
                                                <?= $validation->getError('nama_sekolah'); ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="kecamatan">Kecamatan</label>
                                            <input type="text" id="kecamatan" class="form-control <?= ($validation->hasError('kecamatan')) ? 'is-invalid' : ''; ?>" name="kecamatan" value="<?= old('kecamatan'); ?>">
                                            <div class=" invalid-feedback">
                                                <?= $validation->getError('kecamatan'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="jenjang">Jenjang</label>
                                            <input type="text" id="jenjang" class="form-control " value="SMP" name="jenjang" placehodler="SMP" readonly>
                                        </div>

                                    </div>
                                </div>

                                <label style="text-align:center;font-size:20px;">Kebutuhan Sekolah</label>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label for="rombel">Rombel</label>
                                            <input type="number" id="rombel" class="form-control <?= ($validation->hasError('rombel')) ? 'is-invalid' : ''; ?>" name="rombel" value="<?= old('rombel'); ?>">
                                            <div class=" invalid-feedback">
                                                <?= $validation->getError('rombel'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="kepala_sekolah">Kepala Sekolah</label>
                                            <input type="number" id="kepala_sekolah" class="form-control" name="kepala_sekolah" placeholder="1" value="1" readonly>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="guru_ipa">Guru IPA</label>
                                            <input type="number" id="guru_ipa" class="form-control" name="guru_ipa">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="guru_ips">Guru IPS</label>
                                            <input type="number" id="guru_ips" class="form-control" name="guru_ips">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="guru_senbud">Guru Seni Budaya</label>
                                            <input type="number" id="guru_senbud" class="form-control" name="guru_senbud">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="guru_tik">Guru TIK</label>
                                            <input type="number" id="guru_tik" class="form-control" name="guru_tik">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label for="guru_pkn">Guru PKN</label>
                                            <input type="number" id="guru_pkn" class="form-control" name="guru_pkn">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="gur_indo">Guru Bahasa Indonesia</label>
                                            <input type="number" id="guru_indo" class="form-control" name="guru_indo">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="guru_eng">Guru Bahasa Inggris</label>
                                            <input type="number" id="guru_eng" class="form-control" name="guru_eng">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="guru_mat">Guru Matematika</label>
                                            <input type="number" id="guru_mat" class="form-control" name="guru_mat">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="guru_pai">Guru PA Islam</label>
                                            <input type="number" id="guru_pai" class="form-control" name="guru_pai">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="guru_kristen">Guru PA Kristen</label>
                                            <input type="number" id="guru_kristen" class="form-control" name="guru_kristen">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="guru_katholik">Guru PA Katholik</label>
                                            <input type="number" id="guru_katholik" class="form-control" name="guru_katholik">
                                        </div>
                                        <div class="col">
                                            <label for="guru_hindu">Guru PA Hindu</label>
                                            <input type="number" id="guru_hindu" class="form-control" name="guru_hindu">
                                        </div>
                                        <div class="col">
                                            <label for="guru_budha">Guru PA Budha</label>
                                            <input type="number" id="guru_budha" class="form-control" name="guru_budha">
                                        </div>
                                        <div class="col">
                                            <label for="guru_pjok">Guru PJOK</label>
                                            <input type="number" id="guru_pjok" class="form-control" name="guru_pjok">
                                        </div>
                                        <div class="col">
                                            <label for="guru_inklusi">Guru PA Inklusi</label>
                                            <input type="number" id="guru_inklusi" class="form-control" name="guru_inklusi">
                                        </div>
                                        <div class="col">
                                            <label for="pramu_bakti">Pramu Bakti</label>
                                            <input type="number" id="pramu_bakti" class="form-control" name="pramu_bakti">
                                        </div>
                                        <div class="col">
                                            <label for="penjaga_kebersihan">Penjaga-Kebersihan</label>
                                            <input type="number" id="penjaga_kebersihan" class="form-control" name="penjaga_kebersihan">
                                        </div>
                                        <input type="hidden" name="guru_kelas" value="0" id="guru_kelas" class="form-control">

                                    </div>
                                </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" style="width:auto; height:auto; float:right;">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>