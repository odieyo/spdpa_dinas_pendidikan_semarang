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
                        <li class="breadcrumb-item active"><a href="<?= base_url('/petugas/tk'); ?>"> Data Sekolah / TK </a></li>
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
                            <h1 class="card-title">Taman Kanak-Kanak</h1>
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
                                            <input type="text" id="jenjang" class="form-control" value="TK" placeholder="TK" name="jenjang" readonly>
                                        </div>

                                    </div>
                                </div>

                                <label style="text-align:center;font-size:20px;">Kebutuhan Sekolah</label>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="rombel">Rombel</label>
                                            <input type="number" id="rombel" class="form-control <?= ($validation->hasError('rombel')) ? 'is-invalid' : ''; ?>" name="rombel" value="<?= old('rombel'); ?>">
                                            <div class=" invalid-feedback">
                                                <?= $validation->getError('rombel'); ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="kepala_sekolah">Kepala Sekolah</label>
                                            <input type="number" id="kepala_sekolah" class="form-control" name="kepala_sekolah" placeholder="1" value="1" readonly>
                                        </div>
                                        <div class="col">
                                            <label for="guru_kelas">Guru Kelas</label>
                                            <input type="number" id="guru_kelas" class="form-control" name="guru_kelas">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
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
                                    </div>
                                </div>
                                <input type="hidden" name="guru_pai" value="0" id="guru_pai" class="form-control">
                                <input type="hidden" name="guru_kristen" value="0" id="guru_kristen" class="form-control">
                                <input type="hidden" name="guru_katholik" value="0" id="guru_katholik" class="form-control">
                                <input type="hidden" name="guru_budha" value="0" id="guru_budha" class="form-control">
                                <input type="hidden" name="guru_hindu" value="0" id="guru_hindu" class="form-control">
                                <input type="hidden" name="guru_tik" value="0" id="guru_tik" class="form-control">
                                <input type="hidden" name="guru_eng" value="0" id="guru_eng" class="form-control">
                                <input type="hidden" name="guru_mat" value="0" id="guru_mat" class="form-control">
                                <input type="hidden" name="guru_indo" value="0" id="guru_indo" class="form-control">
                                <input type="hidden" name="guru_senbud" value="0" id="guru_senbud" class="form-control">
                                <input type="hidden" name="guru_pkn" value="0" id="guru_pkn" class="form-control">
                                <input type="hidden" name="guru_ipa" value="0" id="guru_ipa" class="form-control">
                                <input type="hidden" name="guru_ips" value="0" id="guru_ips" class="form-control">

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