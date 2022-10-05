<?php echo $this->extend('petugas/layout/template'); ?>
<?= $this->section('content') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 mt-2">
                <div class="col-sm-6">
                    <h3 class="page-header">Ubah Data Pegawai </h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/petugas'); ?>#">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('/petugas/pegawai/'); ?>#">Pegawai</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('/petugas/pegawai/sd/'); ?>#">Sekolah Dasar</a></li>
                        <li class="breadcrumb-item" active>Ubah Data Pegawai</li>
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
                            <h1 class="card-title">Sekolah Dasar</h1>
                        </div>
                        <div class="card-body">
                            <form action="/petugas/simpanPegawaiSD" method="post">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="nik">NIK</label>
                                            <input type="text" id="nik" class="form-control" name="nik" value="<?= $pegawai['nik']; ?>">
                                        </div>
                                        <div class="col">
                                            <label for="nama_pegawai">Nama Pegawai</label>
                                            <input type="text" id="nama_pegawai" class="form-control" name="nama_pegawai" value="<?= $pegawai['nama_pegawai']; ?>">
                                        </div>
                                        <div class=" col">
                                            <label for="nip">NIP</label>
                                            <input type="text" id="kecamatan" class="form-control" name="kecamatan" value="<?= $pegawai['nip']; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class=" form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="unit_kerja">Unit Kerja</label>
                                            <select class="form-control select">
                                                <!--?php foreach ($sekolahdasar as $sd) { ?>
                                                    <option value="</*?php echo $sd('npsn'); ?*/>"></*?php echo $sd('nama_sekolah'); ?*/></option>
                                                <php } ?-->
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label for="npsn">NPSN</label>
                                            <input type="text" id="npsn" class="form-control " name="npsn" readonly>
                                        </div>
                                        <div class="col">
                                            <label for="kecamatan">Kecamatan</label>
                                            <input type="text" id="kecamatan" class="form-control " name="kecamatan" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="jenis_jabatan">Jenis Jabatan</label>
                                            <input type="option" id="jenis_jabatan" class="form-control" name="jenis_jabatan" value="<?= $pegawai['jenis_jabatan']; ?>">
                                        </div>
                                        <div class=" col">
                                            <label for="tugas_tambahan">Tugas Tambahan</label>
                                            <input type="option" id="tugas_tambahan" class="form-control" name="tugas_tambahan" value="<?= $pegawai['tugas_tambahan']; ?>">
                                        </div>
                                        <div class=" col">
                                            <label for="status_kepeg">Status Kepegawaian</label>
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
                                        </div>
                                        <div class="col">
                                            <label for="status">Status</label>
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
                                        </div>
                                        <div class="col">
                                            <label for="golongan">Golongan</label>
                                            <select class="form-control select">
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
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <div class="row ml-2">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" id="pria" class="form-check-input" name="jenis_kelamin" value="Laki-Laki">
                                                    <label class="form-check-label" for="pria">Laki-laki</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" id="perempuan" class="form-check-input" name="jenis_kelamin" value="perempuan">
                                                    <label class="form-check-label" for="perempuan">Perempuan</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="tempat_lahir">Tempat Lahir</label>
                                            <input type="text" id="tempat_lahir" class="form-control" name="tempat_lahir" value="<?= $pegawai['tempat_lahir']; ?>">
                                        </div>
                                        <div class=" col">
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                            <input type="date" id="tanggal_lahir" class="form-control" name="tanggal_lahir" value="" placeholder="dd-mm-yyyy" value="<?= $pegawai['tanggal_lahir']; ?>">
                                        </div>
                                        <div class=" col">
                                            <label for="agama">Agama</label>
                                            <select id="agama" class="form-control select2" name="agama">
                                                <option value=""></option>
                                                <option value=" Islam"> Islam</option>
                                                <option value="Kristen"> Kristen</option>
                                                <option value="Katholik"> Katholik</option>
                                                <option value="Hindu"> Hindu</option>
                                                <option value="Budha"> Budha</option>
                                                <option value="Konghucu"> Konghucu</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="nuptk">NUPTK</label>
                                            <input type="text" id="nuptk" class="form-control " name="nuptk" value="<?= $pegawai['nuptk']; ?>">
                                        </div>
                                        <div class="col">
                                            <label for="no_pes_sertif">Nomor Peserta Sertifikat</label>
                                            <input type="text" id="no_pes_sertif" class="form-control " name="no_pes_sertif" value="<?= $pegawai['no_pes_sertif']; ?>">
                                        </div>
                                        <div class="col">
                                            <label for="nrg">NRG</label>
                                            <input type="text" id="nrg" class="form-control " name="nrg" value="<?= $pegawai['nrg']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="pend_terakhir">Pendidikan Terakhir</label>
                                            <select id="pend_terakhir" name="pend_terakhir" class="form-control select2">
                                                <option value=""></option>
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP</option>
                                                <option value="SMA">SMA</option>
                                                <option value="D3">D3</option>
                                                <option value="D4/S1">D4/S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label for="jurusan">Jurusan</label>
                                            <input type="text" id="jurusan" class="form-control " name="jurusan" value="<?= $pegawai['jurusan']; ?>">
                                        </div>
                                        <div class="col">
                                            <label for="no_hp">Nomor Handphone</label>
                                            <input type="text" id="no_hp" class="form-control " name="no_hp" value="<?= $pegawai['no_hp']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" id="alamat" class="form-control " name="alamat" value="<?= $pegawai['alamat']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="ket">Keterangan</label>
                                            <input type="text" id="ket" class="form-control " name="ket" value="<?= $pegawai['ket']; ?>">
                                        </div>
                                        <div class="col">
                                            <label for="ket2">Keterangan2</label>
                                            <input type="text" id="ket2" class="form-control " name="ket2" value="<?= $pegawai['ket2']; ?>">
                                        </div>
                                        <div class="col">
                                            <label for="tmt">TMT</label>
                                            <input type="text" id="tmt" class="form-control " name="tmt" value="<?= $pegawai['tmt']; ?>">
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