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
                <div class="col">
                    <div class="card card-success">
                        <div class="card-header" `>
                            <h1 class="card-title">Sekolah Menengah Pertama</h1>
                        </div>
                        <div class="card-body">
                            <?php helper('form'); ?>
                            <?php foreach ($sekolah as $skl) : ?>
                                <form action="/petugas/sekolah/update/<? $skl['npsn']; ?>" method="POST">
                                    <div class="form-group">
                                        <div class="row">
                                            <input type="hidden" name="guru_kelas" value="0" id="guru_kelas" class="form-control">

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
                                            <input type="hidden" id="jenjang" class="form-control <?= ($validation->hasError('jenjang')) ? 'is-invalid' : ''; ?> " value="SMP" placehodler="SMP" name="jenjang" readonly>

                                        </div>
                                    </div>



                                    <label style="text-align:center; font-size:24px;">Kebutuhan</label>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label for="rombel">Rombel</label>
                                                <input type="number" id="rombel" class="form-control <?= ($validation->hasError('rombel')) ? 'is-invalid' : ''; ?>" name="rombel" value="<?= (old('rombel')) ? old('rombel') : $skl['rombel']; ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('rombel'); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label for="kepala_sekolah">Kepala Sekolah</label>
                                                <input type="number" id="kepala_sekolah" class="form-control <?= ($validation->hasError('kepala_sekolah')) ? 'is-invalid' : ''; ?>" name="kepala_sekolah" value="<?= (old('kepala_sekolah')) ? old('kepala_sekolah') : $skl['kepala_sekolah']; ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('kepala_sekolah'); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label for="guru_ipa">Guru IPA</label>
                                                <input type="number" id="guru_ipa" class="form-control <?= ($validation->hasError('guru_ipa')) ? 'is-invalid' : ''; ?>" name="guru_ipa" value="<?= (old('guru_ipa')) ? old('guru_ipa') : $skl['guru_ipa']; ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('guru_ipa'); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label for="guru_ips">Guru IPS</label>
                                                <input type="number" id="guru_ips" class="form-control <?= ($validation->hasError('guru_ips')) ? 'is-invalid' : ''; ?>" name="guru_ips" value="<?= (old('guru_ips')) ? old('guru_ips') : $skl['guru_ips']; ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('guru_ips'); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label for="guru_senbud">Guru Seni Budaya</label>
                                                <input type="number" id="guru_senbud" class="form-control <?= ($validation->hasError('guru_senbud')) ? 'is-invalid' : ''; ?>" name="guru_senbud" value="<?= (old('guru_senbud')) ? old('guru_senbud') : $skl['guru_senbud']; ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('guru_senbud'); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label for="guru_tik">Guru TIK</label>
                                                <input type="number" id="guru_tik" class="form-control <?= ($validation->hasError('guru_tik')) ? 'is-invalid' : ''; ?>" name="guru_tik" value="<?= (old('guru_tik')) ? old('guru_tik') : $skl['guru_tik']; ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('guru_tik'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label for="guru_pkn">Guru PKN</label>
                                                <input type="number" id="guru_pkn" class="form-control <?= ($validation->hasError('guru_pkn')) ? 'is-invalid' : ''; ?>" name="guru_pkn" value="<?= (old('guru_pkn')) ? old('guru_pkn') : $skl['guru_pkn']; ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('guru_pkn'); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label for="gur_indo">Guru Bahasa Indonesia</label>
                                                <input type="number" id="guru_indo" class="form-control <?= ($validation->hasError('guru_indo')) ? 'is-invalid' : ''; ?>" name="guru_indo" value="<?= (old('guru_indo')) ? old('guru_indo') : $skl['guru_indo']; ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('guru_indo'); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label for="guru_eng">Guru Bahasa Inggris</label>
                                                <input type="number" id="guru_eng" class="form-control <?= ($validation->hasError('guru_eng')) ? 'is-invalid' : ''; ?>" name="guru_eng" value="<?= (old('guru_eng')) ? old('guru_eng') : $skl['guru_eng']; ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('guru_eng'); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label for="guru_mat">Guru Matematika</label>
                                                <input type="number" id="guru_mat" class="form-control <?= ($validation->hasError('guru_mat')) ? 'is-invalid' : ''; ?>" name="guru_mat" value="<?= (old('guru_mat')) ? old('guru_mat') : $skl['guru_mat']; ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('guru_mat'); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label for="guru_pai">Guru PA Islam</label>
                                                <input type="number" id="guru_pai" class="form-control <?= ($validation->hasError('guru_pai')) ? 'is-invalid' : ''; ?>" name="guru_pai" value="<?= (old('guru_pai')) ? old('guru_pai') : $skl['guru_pai']; ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('guru_pai'); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label for="guru_kristen">Guru PA Kristen</label>
                                                <input type="number" id="guru_kristen" class="form-control <?= ($validation->hasError('guru_kristen')) ? 'is-invalid' : ''; ?>" name="guru_kristen" value="<?= (old('guru_kristen')) ? old('guru_kristen') : $skl['guru_kristen']; ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('guru_kristen'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <label for="guru_katholik">Guru PA Katholik</label>
                                                <input type="number" id="guru_katholik" class="form-control <?= ($validation->hasError('guru_katholik')) ? 'is-invalid' : ''; ?>" name="guru_katholik" value="<?= (old('guru_katholik')) ? old('guru_katholik') : $skl['guru_katholik']; ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('guru_katholik'); ?>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="guru_hindu">Guru PA Hindu</label>
                                                <input type="number" id="guru_hindu" class="form-control <?= ($validation->hasError('guru_hindu')) ? 'is-invalid' : ''; ?>" name="guru_hindu" value="<?= (old('guru_hindu')) ? old('guru_hindu') : $skl['guru_hindu']; ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('guru_hindu'); ?>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="guru_budha">Guru PA Budha</label>
                                                <input type="number" id="guru_budha" class="form-control <?= ($validation->hasError('guru_budha')) ? 'is-invalid' : ''; ?>" name="guru_budha" value="<?= (old('guru_budha')) ? old('guru_budha') : $skl['guru_budha']; ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('guru_pai'); ?>
                                                </div>
                                            </div>
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
                                        </div>
                                    </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" style="width:auto; height:auto; float:right;">Simpan</button>
                        </div>
                        </form>
                    <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>