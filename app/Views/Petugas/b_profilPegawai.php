<?php echo $this->extend('petugas/layout/template'); ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                    <h1>Profil Pegawai </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('/petugas/pegawai/'); ?>/<?= strtolower($jenjang); ?>#">Pegawai / <?= $jenjang; ?></a></li>
                        <li class="breadcrumb-item active">Profil Pegawai</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <?php foreach ($pegawai as $pgw) : ?>

                        <!-- Profil Pegawai -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="dist/img/admin.png" alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center"><b><?= $pgw['nama_pegawai']; ?></b></h3>

                                <p class="text-muted text-center"><?= $pgw['jenis_jabatan']; ?></p>
                                <p class="text-muted text-center"><?= $pgw['jenis_kelamin']; ?></p>

                                <!-- Hide NIK -->
                                <input class="float-center text-center text-muted" type="password" id="nik" value="<?= $pgw['nik']; ?>" style="box-sizing: border-box;background-color:white; border-outline:none; border-width:0; font-size:18px; margin-bottom:10px; margin-left:100px;" disabled>
                                <input type="checkbox" id="hide" onclick="hideNIK()" style="visibility:hidden;"><label class="fa fa-eye" for="hide" style="cursor:pointer;"></label>


                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Kepegawaian :</b> <a class="float-right"><?= $pgw['status_kepeg'] ?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Golongan :</b> <a class="float-right"><?= $pgw['golongan'] ?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>NIP :</b> <a class="float-right"><?= $pgw['nip']; ?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Unit Kerja :</b> <a class="float-right"><?= $pgw['unit_kerja'] ?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Status :</b> <a class="float-right"><?= $pgw['status'] ?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>NUPTK :</b> <a class="float-right"><?= $pgw['nuptk'] ?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Nomor Peserta Sertifikat :</b> <a class="float-right"><?= $pgw['no_pes_sertif'] ?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>NRG :</b> <a class="float-right"><?= $pgw['nrg'] ?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>TMT :</b> <a class="float-right"><?= $pgw['tmt'] ?></a>
                                    </li>

                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- Data Pegawai -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Informasi Pribadi</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fas fa-calendar mr-1"></i> Tempat, Tanggal Lahir </strong>

                                <p class="text-muted">
                                    <?= $pgw['tempat_lahir']; ?>, <?= $pgw['tanggal_lahir']; ?>
                                </p>

                                <hr>

                                <strong><i class="fas fa-star mr-1"></i> Agama </strong>

                                <p class="text-muted">
                                    <?= $pgw['agama']; ?>
                                </p>

                                <hr>

                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat </strong>

                                <p class="text-muted">
                                    <?= $pgw['alamat']; ?>
                                </p>

                                <hr>

                                <strong><i class="fas fa-phone-alt mr-1"></i> Nomor Ponsel </strong>

                                <p class="text-muted">
                                    <?= $pgw['no_hp']; ?>
                                </p>

                                <hr>

                                <strong><i class="far fa-file-alt mr-1"></i> Keterangan</strong>

                                <p class="text-muted">
                                    <?= $pgw['ket']; ?>
                                </p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Riwayat Mutasi</a></li>
                                <!-- <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li> -->
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <!-- /.tab-pane -->
                                <div class="tab-pane active" id="activity">
                                    <!-- The timeline -->
                                    <div class="timeline timeline-inverse">

                                        <!-- timeline item TERBARU -->
                                        <div>
                                            <i class="fas fa-location bg-success"></i>

                                            <div class="timeline-item">
                                                <span class="time"><i class="far fa-calendar"></i> <?= $pgw['updated_at']; ?></span>

                                                <h3 class="timeline-header">
                                                    Diangkat sebagai <strong> <?= $pgw['jenis_jabatan']; ?></strong> pada <strong> <?= $pgw['unit_kerja']; ?></strong>
                                                </h3>
                                            </div>
                                        </div>
                                        <!-- END timeline item TERBARU-->

                                        <!-- timeline item RIWAYAT-->
                                        <?php foreach ($mutasi as $mts) : ?>
                                            <div>
                                                <i class="fas fa-location bg-default"></i>
                                                <div class="timeline-item">
                                                    <span class="time"><i class="far fa-calendar"></i> <?= $mts['created_at']; ?></span>

                                                    <h3 class="timeline-header">Dimutasi sebagai <strong> <?= $mts['jabatan']; ?></strong> pada <strong> <?= $mts['uk']; ?></strong>
                                                    </h3>
                                                </div>

                                            </div>
                                        <?php endforeach; ?>
                                        <!-- END timeline item RIWAYAT-->
                                        <div>
                                            <i class="far  bg-default"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-content -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            <?php endforeach; ?>
            <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<script type="text/javascript">
    function hideNIK() {
        var x = document.getElementById("nik");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>


<?= $this->endSection() ?>