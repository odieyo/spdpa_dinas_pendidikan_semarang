<?php echo $this->extend('petugas/layout/template'); ?>
<?= $this->section('content') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 mt-2">
                <div class="col-sm-6">
                    <h3 class="page-header">Ubah Data Sekolah </h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/petugas'); ?>#">Home</a></li>
                        <li class="breadcrumb-item active"><a href="<?= base_url('/petugas/tk'); ?>">Data Sekolah / TK </a> </li>
                        <li class="breadcrumb-item" active>Ubah Data Sekolah</li>
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
                            <h1 class="card-title">Taman Kanak-Kanak</h1>
                        </div>
                        <div class="card-body">
                            <?php helper('form'); ?>
                            <?php foreach ($sekolah as $skl) : ?>
                                <form action="/petugas/sekolah/update/<?= $skl['npsn']; ?>" method="POST">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <label for="npsn">NPSN</label>
                                                <input type="text" id="npsn" class="form-control <?= ($validation->hasError('npsn')) ? 'is-invalid' : ''; ?>" name="npsn" value="<?= (old('npsn')) ? old('npsn') : $skl['npsn']; ?>" readonly>
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('npsn'); ?>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="nama_sekolah">Nama Sekolah</label>
                                                <input type="text" id="nama_sekolah" class="form-control <?= ($validation->hasError('nama_sekolah')) ? 'is-invalid' : ''; ?>" name="nama_sekolah" value="<?= (old('nama_sekolah')) ? old('nama_sekolah') : $skl['nama_sekolah']; ?>" autofocus>
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('nama_sekolah'); ?>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="kecamatan">Kecamatan</label>
                                                <input type="text" id="kecamatan" class="form-control <?= ($validation->hasError('kecamatan')) ? 'is-invalid' : ''; ?>" name="kecamatan" value="<?= (old('kecamatan')) ? old('kecamatan') : $skl['kecamatan']; ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('kecamatan'); ?>
                                                </div>
                                            </div>
                                            <input type="hidden" id="slug" name="slug" class="form-control" value="<?= $slug; ?>">
                                            <input type="hidden" id="jenjang" class="form-control <?= ($validation->hasError('jenjang')) ? 'is-invalid' : ''; ?> " value="TK" placehodler="TK" name="jenjang" readonly>
                                        </div>
                                    </div>



                                    <label style="text-align:center; font-size:24px;">Kebutuhan</label>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <label for="rombel">Rombel</label>
                                                <input type="number" id="rombel" class="form-control <?= ($validation->hasError('rombel')) ? 'is-invalid' : ''; ?>" name="rombel" value="<?= (old('rombel')) ? old('rombel') : $skl['rombel']; ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('rombel'); ?>
                                                </div>
                                            </div>
                                            <input type="hidden" name="kepala_sekolah" id="kepala_sekolah" class="form-control <?= ($validation->hasError('kepala_sekolah')) ? 'is-invalid' : ''; ?>" name="kepala_sekolah" value="<?= (old('kepala_sekolah')) ? old('kepala_sekolah') : $skl['kepala_sekolah']; ?>" readonly>
                                            <div class="col">
                                                <label for="guru_kelas">Guru Kelas</label>
                                                <input type="number" id="guru_kelas" class="form-control <?= ($validation->hasError('guru_kelas')) ? 'is-invalid' : ''; ?>" name="guru_kelas" value="<?= (old('guru_kelas')) ? old('guru_kelas') : $skl['guru_kelas']; ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('guru_kelas'); ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <label for="guru_pjok">Guru PJOK</label>
                                                <input type="number" id="guru_pjok" class="form-control <?= ($validation->hasError('guru_pjok')) ? 'is-invalid' : ''; ?>" name="guru_pjok" value="<?= (old('guru_pjok')) ? old('guru_pjok') : $skl['guru_pjok']; ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('guru_pjok'); ?>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="guru_inklusi">Guru PA Inklusi</label>
                                                <input type="number" id="guru_inklusi" class="form-control <?= ($validation->hasError('guru_inklusi')) ? 'is-invalid' : ''; ?>" name="guru_inklusi" value="<?= (old('guru_inklusi')) ? old('guru_inklusi') : $skl['guru_inklusi']; ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('guru_inklusi'); ?>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="pramu_bakti">Pramu Bakti</label>
                                                <input type="number" id="pramu_bakti" class="form-control <?= ($validation->hasError('pramu_bakti')) ? 'is-invalid' : ''; ?>" name="pramu_bakti" value="<?= (old('pramu_bakti')) ? old('pramu_bakti') : $skl['pramu_bakti']; ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('pramu_bakti'); ?>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="penjaga_kebersihan">Penjaga-Kebersihan</label>
                                                <input type="number" id="penjaga_kebersihan" class="form-control <?= ($validation->hasError('penjaga_kebersihan')) ? 'is-invalid' : ''; ?>" name="penjaga_kebersihan" value="<?= (old('penjaga_kebersihan')) ? old('penjaga_kebersihan') : $skl['penjaga_kebersihan']; ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('penjaga_kebersihan'); ?>
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
                                    </div>
                        </div>
                    <?php endforeach; ?>
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