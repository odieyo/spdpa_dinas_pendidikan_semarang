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
                        <li class="breadcrumb-item"><a href="<?= base_url('/petugas/sd'); ?>#">Data Sekolah Dasar</a></li>
                        <li class="breadcrumb-item active"><?= $sekolahdasar['nama_sekolah']; ?></li>
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
                    <div class="card card-info">
                        <div class="card-header" `>
                            <h1 class="card-title">Sekolah Dasar</h1>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="editnpsn">NPSN</label>
                                        <input type="text" id="editnpsn" class="form-control" value="<?= $sekolahdasar['npsn']; ?>">
                                    </div>
                                    <div class="col">
                                        <label for="editnamasekolah">Nama Sekolah</label>
                                        <input type="text" id="editnamasekolah" class="form-control" value="<?= $sekolahdasar['nama_sekolah']; ?>">
                                    </div>
                                    <div class="col">
                                        <label for="editkecamatan">Kecamatan</label>
                                        <input type="text" id="editkecamatan" class="form-control" value="<?= $sekolahdasar['kecamatan']; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="editjenjang">Jenjang</label>
                                        <input type="text" id="editjenjang" class="form-control " value="<?= $sekolahdasar['jenjang']; ?>" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="editks">Kepala Sekolah</label>
                                        <input type="text" id="editks" class="form-control " value="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="editalamat">Alamat</label>
                                <input type="text" id="editalamat" class="form-control" value="<?= $sekolahdasar['alamat']; ?>">
                            </div>

                            <div class="form-group">
                                <div class="row mb-2">
                                    <div class="col">
                                        <label for="editrombel">Rombel</label>
                                        <input type="number" id="editrombel" class="form-control" value="<?= $sekolahdasar['rombel']; ?>">
                                    </div>
                                    <div class="col">
                                        <label for="editgurukelas">Guru Kelas</label>
                                        <input type="number" id="editgurukelas" class="form-control" value="<?= $sekolahdasar['guru_kelas']; ?>" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="editgurupai">Guru PA Islam</label>
                                        <input type="number" id="editgurupai" class="form-control" value="<?= $sekolahdasar['guru_pai']; ?>" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="editgurupakatholik">Guru PA Katholik</label>
                                        <input type="number" id="editgurupakatholik" class="form-control" value="<?= $sekolahdasar['guru_katholik']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col">
                                        <label for="editgurupakristen">Guru PA Kristen</label>
                                        <input type="number" id="editgurupakristen" class="form-control" value="<?= $sekolahdasar['guru_kristen']; ?>" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="editgurupabudha">Guru PA Budha</label>
                                        <input type="number" id="editgurupabudha" class="form-control" value="<?= $sekolahdasar['guru_budha']; ?>" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="editgurupahindu">Guru PA Hindu</label>
                                        <input type="number" id="editgurupahindu" class="form-control" value="<?= $sekolahdasar['guru_hindu']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="editgurupaPJOK">Guru PJOK</label>
                                        <input type="number" id="editgurupaPJOK" class="form-control" value="<?= $sekolahdasar['guru_pjok']; ?>" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="editgurupainklusi">Guru Inklusi</label>
                                        <input type="number" id="editgurupahinklusi" class="form-control" value="<?= $sekolahdasar['guru_inklusi']; ?>" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="edittendik">Tendik</label>
                                        <input type="number" id="edittendik" class="form-control" value="<?= $sekolahdasar['tendik']; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<?= $this->endSection() ?>