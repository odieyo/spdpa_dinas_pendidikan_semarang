<?php echo $this->extend('petugas/layout/template'); ?>
<?= $this->section('content') ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 mt-2">
                <div class="col-sm-6">
                    <h3 class="page-header">Tambah Data Pegawai </h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/petugas'); ?>#">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('/petugas/pegawai/'); ?>/<?= strtolower($jenjang); ?>#">Pegawai / <?= $jenjang; ?></a></li>
                        <li class="breadcrumb-item" active>Tambah Data Pegawai</li>
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
                    <div class="card card-primary">
                        <div class="card-header" `>
                            <h1 class="card-title">Info Kepegawaian</h1>
                        </div>
                        <div class="card-body">
                            <form action="/petugas/pegawai/simpan" method="post">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="nik">NIK*</label>
                                            <input type="text" id="nik" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" name="nik" value="<?= old('nik'); ?>" autofocus>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('nik'); ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="nama_pegawai">Nama Pegawai*</label>
                                            <input type="text" id="nama_pegawai" class="form-control <?= ($validation->hasError('nama_pegawai')) ? 'is-invalid' : ''; ?>" name="nama_pegawai" value="<?= old('nama_pegawai'); ?>">
                                            <div class=" invalid-feedback">
                                                <?= $validation->getError('nama_pegawai'); ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="nip">NIP</label>
                                            <input type="text" id="nip" class="form-control <?= ($validation->hasError('nip')) ? 'is-invalid' : ''; ?>" name="nip" value="<?= old('nip'); ?>">
                                            <div class=" invalid-feedback">
                                                <?= $validation->getError('nip'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" id="jenjang" name="jenjang" class="form-control" value="<?= $jenjang; ?>">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="unit_kerja">Unit Kerja*</label>
                                            <select name="unit_kerja" id="unit_kerja" class="select form-control" name="unit_kerja">
                                                <option value=""></option>
                                                <?php foreach ($unit_kerja as $uk) : ?>
                                                    <option value="<?= $uk['npsn']; ?>"><?= $uk['nama_sekolah']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class=" invalid-feedback">
                                            <?= $validation->getError('unit_kerja'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="jenis_jabatan">Jenis Jabatan*</label>
                                            <input type="option" id="jenis_jabatan" class="form-control <?= ($validation->hasError('jenis_jabatan')) ? 'is-invalid' : ''; ?>" name="jenis_jabatan" value="<?= old('jenis_jabatan'); ?>">
                                        </div>
                                        <div class=" invalid-feedback">
                                            <?= $validation->getError('jenis_jabatan'); ?>
                                        </div>
                                        <div class="col">
                                            <label for="tugas_tambahan">Tugas Tambahan</label>
                                            <input type="option" id="tugas_tambahan" class="form-control" name="tugas_tambahan">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="status_kepeg">Status Kepegawaian*</label>
                                            <div class="row ml-1">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" id="pns" class="form-check-input" name="status_kepeg" value="PNS">
                                                    <label class="form-check-label" for="pns">PNS</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" id="pppk" class="form-check-input" name="status_kepeg" value="PPPK">
                                                    <label class="form-check-label" for="pppk">PPPK</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" id="nonpns" class="form-check-input" name="status_kepeg" value="Non-PNS">
                                                    <label class="form-check-label" for="nonpns">Non-PNS</label>
                                                </div>

                                            </div>
                                            <div class=" invalid-feedback">
                                                <?= $validation->getError('status_kepeg'); ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="status">Status*</label>
                                            <div class="row ml-1">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" id="aktif" class="form-check-input" name="status" value="Aktif">
                                                    <label class="form-check-label" for="aktif">Aktif</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" id="nonaktif" class="form-check-input" name="status" value="Non-Aktif">
                                                    <label class="form-check-label" for="nonaktif">Non-Aktif</label>
                                                </div>
                                            </div>
                                            <div class=" invalid-feedback">
                                                <?= $validation->getError('status'); ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="golongan">Golongan*</label>
                                            <select class="form-control <?= ($validation->hasError('golongan')) ? 'is-invalid' : ''; ?> select" id="golongan" name="golongan" value="<?= old('golongan'); ?>">
                                                <option value=""></option>
                                                <option value="1A">1A</option>
                                                <option value="1B">1B</option>
                                                <option value="1C">1C</option>
                                                <option value="1D">1D</option>
                                                <option value="2A">2A</option>
                                                <option value="2B">2B</option>
                                                <option value="2C">2C</option>
                                                <option value="2D">2D</option>
                                                <option value="3A">3A</option>
                                                <option value="3B">3B</option>
                                                <option value="3C">3C</option>
                                                <option value="3D">3D</option>
                                                <option value="4A">4A</option>
                                                <option value="4B">4B</option>
                                                <option value="4C">4C</option>
                                                <option value="4D">4D</option>
                                                <option value="4E">4E</option>
                                            </select>
                                            <div class=" invalid-feedback">
                                                <?= $validation->getError('golongan'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card card-secondary">
                        <div class="card-header" `>
                            <h1 class="card-title">Info Pribadi</h1>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="jenis_kelamin">Jenis Kelamin*</label>
                                        <div class="row ml-2">
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="jenis_kelamin" class="form-check-input" name="jenis_kelamin" value="Laki-Laki">
                                                <label class="form-check-label" for="pria">Laki-laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="jenis_kelamin" class="form-check-input" name="jenis_kelamin" value="perempuan">
                                                <label class="form-check-label" for="perempuan">Perempuan</label>
                                            </div>
                                        </div>
                                        <div class=" invalid-feedback">
                                            <?= $validation->getError('jenis_kelamin'); ?>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="tempat_lahir">Tempat Lahir*</label>
                                        <input type="text" id="tempat_lahir" class="form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : ''; ?>" name="tempat_lahir" value="<?= old('tempat_lahir'); ?>">
                                        <div class=" invalid-feedback">
                                            <?= $validation->getError('tempat_lahir'); ?>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="tanggal_lahir">Tanggal Lahir* (mm/dd/yyyy)</label>
                                        <input type="date" id="tanggal_lahir" class="form-control <?= ($validation->hasError('tanggal_lahir')) ? 'is-invalid' : ''; ?>" name="tanggal_lahir" value="<?= old('tanggal_lahir'); ?>">
                                        <div class=" invalid-feedback">
                                            <?= $validation->getError('tanggal_lahir'); ?>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="agama">Agama*</label>
                                        <select id="agama" class="form-control <?= ($validation->hasError('agama')) ? 'is-invalid' : ''; ?> select2" value="<?= old('agama'); ?>" name="agama">
                                            <option value=""></option>
                                            <option value="Islam"> Islam</option>
                                            <option value="Kristen"> Kristen</option>
                                            <option value="Katholik"> Katholik</option>
                                            <option value="Hindu"> Hindu</option>
                                            <option value="Budha"> Budha</option>
                                            <option value="Konghucu"> Konghucu</option>
                                        </select>
                                        <div class=" invalid-feedback">
                                            <?= $validation->getError('agama'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="nuptk">NUPTK</label>
                                        <input type="text" id="nuptk" class="form-control " name="nuptk">
                                    </div>
                                    <div class="col">
                                        <label for="no_pes_sertif">Nomor Peserta Sertifikat</label>
                                        <input type="text" id="no_pes_sertif" class="form-control " name="no_pes_sertif">
                                    </div>
                                    <div class="col">
                                        <label for="nrg">NRG</label>
                                        <input type="text" id="nrg" class="form-control " name="nrg">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="pend_terakhir">Pendidikan Terakhir*</label>
                                        <select id="pend_terakhir" name="pend_terakhir" class="form-control <?= ($validation->hasError('pend_terakhir')) ? 'is-invalid' : ''; ?> select2" value="<?= old('pend_terakhir'); ?>">
                                            <option value=""></option>
                                            <option value="SD/Sederajat">SD/Sederajat</option>
                                            <option value="SMP/Sederajat">SMP/Sederajat</option>
                                            <option value="SMA/Sederajat">SMA/Sederajat</option>
                                            <option value="D3/Diploma">D3/Diploma</option>
                                            <option value="S1/D4">S1/D4</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                        <div class=" invalid-feedback">
                                            <?= $validation->getError('pend_terakhir'); ?>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="jurusan">Jurusan*</label>
                                        <input type="text" id="jurusan" class="form-control <?= ($validation->hasError('jurusan')) ? 'is-invalid' : ''; ?>" name="jurusan" value="<?= old('jurusan'); ?>">
                                        <div class=" invalid-feedback">
                                            <?= $validation->getError('jurusan'); ?>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="no_hp">Nomor Handphone*</label>
                                        <input type="text" id="no_hp" class="form-control <?= ($validation->hasError('no_hp')) ? 'is-invalid' : ''; ?>" name="no_hp" value="<?= old('no_hp'); ?>">
                                        <div class=" invalid-feedback">
                                            <?= $validation->getError('no_hp'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="alamat">Alamat*</label>
                                        <input type="text" id="alamat" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" name="alamat" value="<?= old('alamat'); ?>">
                                        <div class=" invalid-feedback">
                                            <?= $validation->getError('alamat'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="ket">Keterangan</label>
                                        <input type="text" id="ket" class="form-control " name="ket">
                                    </div>
                                    <div class="col">
                                        <label for="ket2">Keterangan2</label>
                                        <input type="text" id="ket2" class="form-control " name="ket2">
                                    </div>
                                    <div class="col">
                                        <label for="tmt">TMT</label>
                                        <input type="date" id="tmt" class="form-control " name="tmt">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <b style="color: red; float: left;">*wajib diisi </b>
                            <button type="submit" class="btn btn-primary" style="float: right;">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>

<!-- <script type="text/javascript">
    // $(function() {
    $('#unit_kerja').select2({
        minimumInputLength: 2,
        allowClear: true,
        ajax: {
            dataType: 'json',
            url: "</?= base_url('Petugas/ajaxSearch'); ?>",
            delay: 500,
            data: function(params) {
                return {
                    search: params.term,
                }
            },
            processResult: function(data, page) {
                return {
                    results: data
                };
            },
        }
    });
    // $(document).ready(function() {
    //     sekolah();
    // })

    // })
</script> -->
<?= $this->endSection() ?>