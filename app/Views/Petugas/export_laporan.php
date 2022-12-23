<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" content="IF=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        .header {
            font-family: "Times New Roman", Times, Arial;
            font-size: 20px;
            text-align: center;
            padding-bottom: 0;
        }

        .sub-header {
            font-family: "Times New Roman", Times, Arial;
            font-size: 12px;
            text-align: center;
        }

        .table-border {
            font-family: Times, sans-serif;
            width: 100%;
            border-collapse: collapse;
            text-align: center;
            font-size: 10px;
            border: 1px solid #000000;
        }

        .table-border thead {
            border: 1px solid #000000;
        }

        .table-border tr {
            border: 1px solid #000000;
        }
    </style>
</head>

<body>
    <!-- <img src="dist/img/kop_surat.jpeg" height="auto" width="auto"> -->
    <!-- <img src="dist/img/kop_surat.jpeg" /> -->
    <h1 class="header">Rekomendasi Pegawai</h1>
    <h3 class="sub-header">Jenjang <?= $jenjang; ?></h3>
    <p class="sub-header">Periode <?= date("d-m-Y", strtotime($tgl_awal)); ?> sampai dengan <?= date("d-m-Y", strtotime($tgl_akhir)); ?></p>

    <?php if ($jenjang == "TK") : ?>
        <table class="table-border" border="1" cellspacing="1" cellpadding="1">
            <thead>
                <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Jabatan</th>
                    <th colspan="4">Status Kepegawaian</th>
                    <th rowspan="2">Pegawai Saat Ini</th>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Kebutuhan</th>
                    <th rowspan="2">Rekomendasi</th>
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
                    <td>
                        <?= $hpegawai['hKS1']; ?>
                    </td>
                    <td>
                        <?= $hpegawai['hKS2']; ?>
                    </td>
                    <td>
                        <?= $hpegawai['hKS3']; ?>
                    </td>
                    <td>
                        <?= $hks = $hpegawai['hKS1'] + $hpegawai['hKS2'] + $hpegawai['hKS3'] ?>
                    </td>
                    <td>
                        <?= $sks = $spegawai['sKs']; ?>
                    </td>
                    <td><?= $tks = $hks + $sks ?></td>
                    <td><?= $ks = $sekolah['ks']->kepala_sekolah; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tks - $ks) == 0) ? 'badge-danger' : ($tks - $ks == 0 ? 'badge-success' : 'badge-warning'); ?>">
                            <?= (($tks - $ks) < 0) ? 'Menambah ' . (- ($tks - $ks)) . ' pegawai' : ($tks - $ks == 0 ? 'Sudah Sesuai' : 'Mendistribusikan kembali ' . ($tks - $ks) . ' pegawai '); ?>
                        </span>
                    </td>
                </tr>
                <!-- Guru Kelas -->
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Guru Kelas</td>
                    <td><?= $hpegawai['hGK1']; ?></td>
                    <td><?= $hpegawai['hGK2']; ?></td>
                    <td><?= $hpegawai['hGK3']; ?></td>
                    <td><?= $hgk = $hpegawai['hGK1'] + $hpegawai['hGK2'] + $hpegawai['hGK3'] ?></td>
                    <td>
                        <?= $sgk = $spegawai['sGk']; ?>
                    </td>
                    <td><?= $tgk = $hgk + $sgk ?></td>
                    <td><?= $gk = $sekolah['gk']->guru_kelas; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tgk - $gk) < 0) ? 'badge-danger' : ($tgk - $gk > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($tgk - $gk) < 0) ? 'Menambah ' . (- ($tgk - $gk)) . ' pegawai' : ($tgk - $gk > 0 ? 'Mendistribusikan kembali ' . ($tgk - $gk) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>

                <!-- Guru PJOK -->
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Guru Pendidikan Jasmani, Olahraga dan Kesehatan</td>
                    <td><?= $hpegawai['hPjok1']; ?></td>
                    <td><?= $hpegawai['hPjok2']; ?></td>
                    <td><?= $hpegawai['hPjok3']; ?></td>
                    <td><?= $hpjok = $hpegawai['hPjok1'] + $hpegawai['hPjok2'] + $hpegawai['hPjok3'] ?></td>
                    <td>
                        <?= $spjok = $spegawai['sPjok']; ?>
                    </td>
                    <td><?= $tpjok = $hpjok + $spjok ?></td>
                    <td><?= $pjok = $sekolah['pjok']->guru_pjok; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tpjok - $pjok) < 0) ? 'badge-danger' : ($tpjok - $pjok > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($tpjok - $pjok) < 0) ? 'Menambah ' . (- ($tpjok - $pjok)) . ' pegawai' : ($tpjok - $pjok > 0 ? 'Mendistribusikan kembali ' . ($tpjok - $pjok) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>
                <!-- Guru Inklusi -->
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Guru Inklusi</td>
                    <td><?= $hpegawai['hIn1']; ?></td>
                    <td><?= $hpegawai['hIn2']; ?></td>
                    <td><?= $hpegawai['hIn3']; ?></td>
                    <td><?= $hin = $hpegawai['hIn1'] + $hpegawai['hIn2'] + $hpegawai['hIn3'] ?></td>
                    <td>
                        <?= $sin = $spegawai['sIn']; ?>
                    </td>
                    <td><?= $tin = $hin + $sin ?></td>
                    <td><?= $in = $sekolah['in']->guru_inklusi; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tin - $in) < 0) ? 'badge-danger' : ($tin - $in > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($tin - $in) < 0) ? 'Menambah ' . (- ($tin - $in)) . ' pegawai' : ($tin - $in > 0 ? 'Mendistribusikan kembali ' . ($tin - $in) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td> -->
                    <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#eampleModal">
                                                <i class="fas fa-eye"></i>
                                            </button>

                                        </td> -->
                </tr>
                <!-- Penjaga Sekolah / Pramu Kebersihan -->
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Pramu Bakti</td>
                    <td><?= $hpegawai['hPb1']; ?></td>
                    <td><?= $hpegawai['hPb2']; ?></td>
                    <td><?= $hpegawai['hPb3']; ?></td>
                    <td><?= $hpb = $hpegawai['hPb1'] + $hpegawai['hPb2'] + $hpegawai['hPb3'] ?></td>
                    <td>
                        <?= $spb = $spegawai['sPb']; ?>
                    </td>
                    <td><?= $tpb = $hpb + $spb ?></td>
                    <td><?= $pb = $sekolah['pb']->pramu_bakti; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tpb - $pb) < 0) ? 'badge-danger' : ($tpb - $pb > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($tpb - $pb) < 0) ? 'Menambah ' . (- ($tpb - $pb)) . ' pegawai' : ($tpb - $pb > 0 ? 'Mendistribusikan kembali ' . ($tpb - $pb) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>
                <!-- Tenaga Administrasi -->
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Penjaga Sekolah / Pramu Kebersihan</td>
                    <td><?= $hpegawai['hPk1']; ?></td>
                    <td><?= $hpegawai['hPk2']; ?></td>
                    <td><?= $hpegawai['hPk3']; ?></td>
                    <td><?= $hpk = $hpegawai['hPk1'] + $hpegawai['hPk2'] + $hpegawai['hPk3'] ?></td>
                    <td>
                        <?= $spk = $spegawai['sPk']; ?>
                    </td>
                    <td><?= $tpk = $hpk + $spk ?></td>
                    <td><?= $pk = $sekolah['pk']->penjaga_kebersihan; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tpk - $pk) < 0) ? 'badge-danger' : ($tpk - $pk > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($tpk - $pk) < 0) ? 'Menambah ' . (- ($tpk - $pk)) . ' pegawai' : ($tpk - $pk > 0 ? 'Mendistribusikan kembali ' . ($tpk - $pk) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn  btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>
            </tbody>
            <!-- Table Foot -->
            <tfoot>
                <tr>
                    <th rowspan="1" colspan="2">Grand Total</th>
                    <th rowspan="1" colspan="1">
                        <?= $tpns = $hpegawai['hKS1'] + $hpegawai['hGK1'] + $hpegawai['hIs1'] + $hpegawai['hKa1'] + $hpegawai['hKr1'] + $hpegawai['hBu1'] + $hpegawai['hHi1'] + $hpegawai['hPjok1'] + $hpegawai['hIn1'] + $hpegawai['hPb1'] + $hpegawai['hPk1'] ?>
                    </th>
                    <th rowspan="1" colspan="1">
                        <?= $tpppk = $hpegawai['hKS2'] + $hpegawai['hGK2'] + $hpegawai['hIs2'] + $hpegawai['hKa2'] + $hpegawai['hKr2'] + $hpegawai['hBu2'] + $hpegawai['hHi2'] + $hpegawai['hPjok2'] + $hpegawai['hIn2'] + $hpegawai['hPb2'] + $hpegawai['hPk2'] ?>
                    </th>
                    <th rowspan="1" colspan="1">
                        <?= $tnon = $hpegawai['hKS3'] + $hpegawai['hGK3'] + $hpegawai['hIs3'] + $hpegawai['hKa3'] + $hpegawai['hKr3'] + $hpegawai['hBu3'] + $hpegawai['hHi3'] + $hpegawai['hPjok3'] + $hpegawai['hIn3'] + $hpegawai['hPb3'] + $hpegawai['hPk3'] ?>
                    </th>
                    <th rowspan="1" colspan="1">
                        <?= $tpns + $tpppk + $tnon ?>
                    </th>
                    <th rowspan="1" colspan="1">
                        <?= $spegawai['sKs'] + $spegawai['sGk'] + $spegawai['sIs'] + $spegawai['sKa'] + $spegawai['sKr'] + $spegawai['sBu'] + $spegawai['sHi'] + $spegawai['sPjok'] + $spegawai['sIn'] + $spegawai['sPb'] + $spegawai['sPk'] ?>
                    </th>
                    <th rowspan="1" colspan="1">
                        <?= $tks + $tgk +  $tpjok + $tin + $tpb + $tpk ?>
                    </th>
                    <th rowspan="1" colspan="1">
                        <?= $ks + $gk +  $pjok + $in + $pb + $pk ?>
                    </th>
                    <th rowspan="1" colspan="1"></th>
                    <!-- <th rowspan="1" colspan="1"></th> -->
                </tr>
            </tfoot>
        </table>
        </div>
    <?php endif; ?>
    <?php if ($jenjang == "SD") : ?>
        <table class="table-border" border="1" cellspacing="1" cellpadding="1">
            <thead>
                <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Jabatan</th>
                    <th colspan="4">Status Kepegawaian</th>
                    <th rowspan="2">Pegawai Saat Ini</th>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Kebutuhan</th>
                    <th rowspan="2">Rekomendasi</th>
                    <!-- <th rowspan="2" width="100">Aksi</th> -->
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
                    <td>
                        <?= $hpegawai['hKS1']; ?>
                    </td>
                    <td>
                        <?= $hpegawai['hKS2']; ?>
                    </td>
                    <td>
                        <?= $hpegawai['hKS3']; ?>
                    </td>
                    <td>
                        <?= $hks = $hpegawai['hKS1'] + $hpegawai['hKS2'] + $hpegawai['hKS3'] ?>
                    </td>
                    <td>
                        <?= $sks = $spegawai['sKs']; ?>
                    </td>
                    <td><?= $tks = $hks + $sks ?></td>
                    <td><?= $ks = $sekolah['ks']->kepala_sekolah; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tks - $ks) < 0) ? 'badge-danger' : ($tks - $ks > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($tks - $ks) < 0) ? 'Menambah ' . (- ($tks - $ks)) . ' pegawai' : ($tks - $ks > 0 ? 'Mendistribusikan kembali ' . ($tks - $ks) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>
                <!-- Guru Kelas -->
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Guru Kelas</td>
                    <td><?= $hpegawai['hGK1']; ?></td>
                    <td><?= $hpegawai['hGK2']; ?></td>
                    <td><?= $hpegawai['hGK3']; ?></td>
                    <td><?= $hgk = $hpegawai['hGK1'] + $hpegawai['hGK2'] + $hpegawai['hGK3'] ?></td>
                    <td>
                        <?= $sgk = $spegawai['sGk']; ?>
                    </td>
                    <td><?= $tgk = $hgk + $sgk ?></td>
                    <td><?= $gk = $sekolah['gk']->guru_kelas; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tgk - $gk) < 0) ? 'badge-danger' : ($tgk - $gk > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($tgk - $gk) < 0) ? 'Menambah ' . (- ($tgk - $gk)) . ' pegawai' : ($tgk - $gk > 0 ? 'Mendistribusikan kembali ' . ($tgk - $gk) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>
                <!-- Guru Islam -->
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Guru Pendidikan Agama Islam</td>
                    <td><?= $hpegawai['hIs1']; ?></td>
                    <td><?= $hpegawai['hIs2']; ?></td>
                    <td><?= $hpegawai['hIs3']; ?></td>
                    <td><?= $his = $hpegawai['hIs1'] + $hpegawai['hIs2'] + $hpegawai['hIs3'] ?></td>
                    <td>
                        <?= $sis = $spegawai['sIs']; ?>
                    </td>
                    <td><?= $tis = $his + $sis ?></td>
                    <td><?= $is = $sekolah['is']->guru_pai; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tis - $is) < 0) ? 'badge-danger' : ($tis - $is > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($tis - $is) < 0) ? 'Menambah ' . (- ($tis - $is)) . ' pegawai' : ($tis - $is > 0 ? 'Mendistribusikan kembali ' . ($tis - $is) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>
                <!-- Guru Katholik -->
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Guru Pendidikan Agama Katholik</td>
                    <td><?= $hpegawai['hKa1']; ?></td>
                    <td><?= $hpegawai['hKa2']; ?></td>
                    <td><?= $hpegawai['hKa3']; ?></td>
                    <td><?= $hka = $hpegawai['hKa1'] + $hpegawai['hKa2'] + $hpegawai['hKa3'] ?></td>
                    <td>
                        <?= $ska = $spegawai['sKa']; ?>
                    </td>
                    <td><?= $tka = $hka + $ska ?></td>
                    <td><?= $ka = $sekolah['ka']->guru_katholik; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tka - $ka) < 0) ? 'badge-danger' : ($tka - $ka > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($tka - $ka) < 0) ? 'Menambah ' . (- ($tka - $ka)) . ' pegawai' : ($tka - $ka > 0 ? 'Mendistribusikan kembali ' . ($tka - $ka) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>
                <!-- Guru Kristen -->
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Guru Pendidikan Agama Kristen</td>
                    <td><?= $hpegawai['hKr1']; ?></td>
                    <td><?= $hpegawai['hKr2']; ?></td>
                    <td><?= $hpegawai['hKr3']; ?></td>
                    <td><?= $hkr = $hpegawai['hKr1'] + $hpegawai['hKr2'] + $hpegawai['hKr3'] ?></td>
                    <td>
                        <?= $skr = $spegawai['sKr']; ?>
                    </td>
                    <td><?= $tkr = $hkr + $skr ?></td>
                    <td><?= $kr = $sekolah['kr']->guru_kristen; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tkr - $kr) < 0) ? 'badge-danger' : ($tkr - $kr > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($tkr - $kr) < 0) ? 'Menambah ' . (- ($tkr - $kr)) . ' pegawai' : ($tkr - $kr > 0 ? 'Mendistribusikan kembali ' . ($tkr - $kr) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>
                <!-- Guru Budha -->
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Guru Pendidikan Agama Budha</td>
                    <td><?= $hpegawai['hBu1']; ?></td>
                    <td><?= $hpegawai['hBu2']; ?></td>
                    <td><?= $hpegawai['hBu3']; ?></td>
                    <td><?= $hbu = $hpegawai['hBu1'] + $hpegawai['hBu2'] + $hpegawai['hBu3'] ?></td>
                    <td>
                        <?= $sbu = $spegawai['sBu']; ?>
                    </td>
                    <td><?= $tbu = $hbu + $sbu ?></td>
                    <td><?= $bu = $sekolah['bu']->guru_budha; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tbu - $bu) < 0) ? 'badge-danger' : ($tbu - $bu > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($tbu - $bu) < 0) ? 'Menambah ' . (- ($tbu - $bu)) . ' pegawai' : ($tbu - $bu > 0 ? 'Mendistribusikan kembali ' . ($tbu - $bu) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>
                <!-- Guru Hindu -->
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Guru Pendidikan Agama Hindu</td>
                    <td><?= $hpegawai['hHi1']; ?></td>
                    <td><?= $hpegawai['hHi2']; ?></td>
                    <td><?= $hpegawai['hHi3']; ?></td>
                    <td><?= $hhi = $hpegawai['hHi1'] + $hpegawai['hHi2'] + $hpegawai['hHi3'] ?></td>
                    <td>
                        <?= $shi = $spegawai['sHi']; ?>
                    </td>
                    <td><?= $thi = $hhi + $shi ?></td>
                    <td><?= $hi = $sekolah['hi']->guru_hindu; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($thi - $hi) < 0) ? 'badge-danger' : ($thi - $hi > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($thi - $hi) < 0) ? 'Menambah ' . (- ($thi - $hi)) . ' pegawai' : ($thi - $hi > 0 ? 'Mendistribusikan kembali ' . ($thi - $hi) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>
                <!-- Guru PJOK -->
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Guru Pendidikan Jasmani, Olahraga dan Kesehatan</td>
                    <td><?= $hpegawai['hPjok1']; ?></td>
                    <td><?= $hpegawai['hPjok2']; ?></td>
                    <td><?= $hpegawai['hPjok3']; ?></td>
                    <td><?= $hpjok = $hpegawai['hPjok1'] + $hpegawai['hPjok2'] + $hpegawai['hPjok3'] ?></td>
                    <td>
                        <?= $spjok = $spegawai['sPjok']; ?>
                    </td>
                    <td><?= $tpjok = $hpjok + $spjok ?></td>
                    <td><?= $pjok = $sekolah['pjok']->guru_pjok; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tpjok - $pjok) < 0) ? 'badge-danger' : ($tpjok - $pjok > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($tpjok - $pjok) < 0) ? 'Menambah ' . (- ($tpjok - $pjok)) . ' pegawai' : ($tpjok - $pjok > 0 ? 'Mendistribusikan kembali ' . ($tpjok - $pjok) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>
                <!-- Guru Inklusi -->
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Guru Inklusi</td>
                    <td><?= $hpegawai['hIn1']; ?></td>
                    <td><?= $hpegawai['hIn2']; ?></td>
                    <td><?= $hpegawai['hIn3']; ?></td>
                    <td><?= $hin = $hpegawai['hIn1'] + $hpegawai['hIn2'] + $hpegawai['hIn3'] ?></td>
                    <td>
                        <?= $sin = $spegawai['sIn']; ?>
                    </td>
                    <td><?= $tin = $hin + $sin ?></td>
                    <td><?= $in = $sekolah['in']->guru_inklusi; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tin - $in) < 0) ? 'badge-danger' : ($tin - $in > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($tin - $in) < 0) ? 'Menambah ' . (- ($tin - $in)) . ' pegawai' : ($tin - $in > 0 ? 'Mendistribusikan kembali ' . ($tin - $in) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td> -->
                    <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#eampleModal">
                                                <i class="fas fa-eye"></i>
                                            </button>

                                        </td> -->
                </tr>
                <!-- Penjaga Sekolah / Pramu Kebersihan -->
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Pramu Bakti</td>
                    <td><?= $hpegawai['hPb1']; ?></td>
                    <td><?= $hpegawai['hPb2']; ?></td>
                    <td><?= $hpegawai['hPb3']; ?></td>
                    <td><?= $hpb = $hpegawai['hPb1'] + $hpegawai['hPb2'] + $hpegawai['hPb3'] ?></td>
                    <td>
                        <?= $spb = $spegawai['sPb']; ?>
                    </td>
                    <td><?= $tpb = $hpb + $spb ?></td>
                    <td><?= $pb = $sekolah['pb']->pramu_bakti; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tpb - $pb) < 0) ? 'badge-danger' : ($tpb - $pb > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($tpb - $pb) < 0) ? 'Menambah ' . (- ($tpb - $pb)) . ' pegawai' : ($tpb - $pb > 0 ? 'Mendistribusikan kembali ' . ($tpb - $pb) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>
                <!-- Tenaga Administrasi -->
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Penjaga Sekolah / Pramu Kebersihan</td>
                    <td><?= $hpegawai['hPk1']; ?></td>
                    <td><?= $hpegawai['hPk2']; ?></td>
                    <td><?= $hpegawai['hPk3']; ?></td>
                    <td><?= $hpk = $hpegawai['hPk1'] + $hpegawai['hPk2'] + $hpegawai['hPk3'] ?></td>
                    <td>
                        <?= $spk = $spegawai['sPk']; ?>
                    </td>
                    <td><?= $tpk = $hpk + $spk ?></td>
                    <td><?= $pk = $sekolah['pk']->penjaga_kebersihan; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tpk - $pk) < 0) ? 'badge-danger' : ($tpk - $pk > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($tpk - $pk) < 0) ? 'Menambah ' . (- ($tpk - $pk)) . ' pegawai' : ($tpk - $pk > 0 ? 'Mendistribusikan kembali ' . ($tpk - $pk) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn  btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>
            </tbody>
            <!-- Table Foot -->
            <tfoot>
                <tr>
                    <th rowspan="1" colspan="2">Grand Total</th>
                    <th rowspan="1" colspan="1">
                        <?= $tpns = $hpegawai['hKS1'] + $hpegawai['hGK1'] + $hpegawai['hIs1'] + $hpegawai['hKa1'] + $hpegawai['hKr1'] + $hpegawai['hBu1'] + $hpegawai['hHi1'] + $hpegawai['hPjok1'] + $hpegawai['hIn1'] + $hpegawai['hPb1'] + $hpegawai['hPk1'] ?>
                    </th>
                    <th rowspan="1" colspan="1">
                        <?= $tpppk = $hpegawai['hKS2'] + $hpegawai['hGK2'] + $hpegawai['hIs2'] + $hpegawai['hKa2'] + $hpegawai['hKr2'] + $hpegawai['hBu2'] + $hpegawai['hHi2'] + $hpegawai['hPjok2'] + $hpegawai['hIn2'] + $hpegawai['hPb2'] + $hpegawai['hPk2'] ?>
                    </th>
                    <th rowspan="1" colspan="1">
                        <?= $tnon = $hpegawai['hKS3'] + $hpegawai['hGK3'] + $hpegawai['hIs3'] + $hpegawai['hKa3'] + $hpegawai['hKr3'] + $hpegawai['hBu3'] + $hpegawai['hHi3'] + $hpegawai['hPjok3'] + $hpegawai['hIn3'] + $hpegawai['hPb3'] + $hpegawai['hPk3'] ?>
                    </th>
                    <th rowspan="1" colspan="1">
                        <?= $tpns + $tpppk + $tnon ?>
                    </th>
                    <th rowspan="1" colspan="1">
                        <?= $spegawai['sKs'] + $spegawai['sGk'] + $spegawai['sIs'] + $spegawai['sKa'] + $spegawai['sKr'] + $spegawai['sBu'] + $spegawai['sHi'] + $spegawai['sPjok'] + $spegawai['sIn'] + $spegawai['sPb'] + $spegawai['sPk'] ?>
                    </th>
                    <th rowspan="1" colspan="1">
                        <?= $tks + $tgk + $tis + $tka + $tkr + $thi + $tbu + $tpjok + $tin + $tpb + $tpk ?>
                    </th>
                    <th rowspan="1" colspan="1">
                        <?= $ks + $gk + $is + $ka + $kr + $hi + $bu + $pjok + $in + $pb + $pk ?>
                    </th>
                    <th rowspan="1" colspan="1"></th>
                    <!-- <th rowspan="1" colspan="1"></th> -->
                </tr>
            </tfoot>
        </table>
    <?php endif; ?>
    <?php if ($jenjang == "SMP") : ?>
        <table class="table-border" border="1" cellspacing="1" cellpadding="1">
            <thead>
                <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Jabatan</th>
                    <th colspan="4">Status Kepegawaian</th>
                    <th rowspan="2">Pegawai Saat Ini</th>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Kebutuhan</th>
                    <th rowspan="2">Rekomendasi</th>
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
                    <td>
                        <?= $hpegawai['hKS1']; ?>
                    </td>
                    <td>
                        <?= $hpegawai['hKS2']; ?>
                    </td>
                    <td>
                        <?= $hpegawai['hKS3']; ?>
                    </td>
                    <td>
                        <?= $hks = $hpegawai['hKS1'] + $hpegawai['hKS2'] + $hpegawai['hKS3'] ?>
                    </td>
                    <td>
                        <?= $sks = $spegawai['sKs']; ?>
                    </td>
                    <td><?= $tks = $hks + $sks ?></td>
                    <td><?= $ks = $sekolah['ks']->kepala_sekolah; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tks - $ks) < 0) ? 'badge-danger' : ($tks - $ks > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($tks - $ks) < 0) ? 'Menambah ' . (- ($tks - $ks)) . ' pegawai' : ($tks - $ks > 0 ? 'Mendistribusikan kembali ' . ($tks - $ks) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>
                <!-- Guru Ipa -->
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Guru Ilmu Pengetahuan Alam</td>
                    <td><?= $hpegawai['hipa1']; ?></td>
                    <td><?= $hpegawai['hipa2']; ?></td>
                    <td><?= $hpegawai['hipa3']; ?></td>
                    <td><?= $hipa = $hpegawai['hipa1'] + $hpegawai['hipa2'] + $hpegawai['hipa3'] ?></td>
                    <td>
                        <?= $sipa = $spegawai['sipa']; ?>
                    </td>
                    <td><?= $tipa = $hipa + $sipa ?></td>
                    <td><?= $ipa = $sekolah['ipa']->guru_ipa; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tipa - $ipa) < 0) ? 'badge-danger' : ($tipa - $ipa > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($tipa - $ipa) < 0) ? 'Menambah ' . (- ($tipa - $ipa)) . ' pegawai' : ($tipa - $ipa > 0 ? 'Mendistribusikan kembali ' . ($tipa - $ipa) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Guru Ilmu Pengetahuan Sosial</td>
                    <td><?= $hpegawai['hips1']; ?></td>
                    <td><?= $hpegawai['hips2']; ?></td>
                    <td><?= $hpegawai['hips3']; ?></td>
                    <td><?= $hips = $hpegawai['hips1'] + $hpegawai['hips2'] + $hpegawai['hips3'] ?></td>
                    <td>
                        <?= $sips = $spegawai['sips']; ?>
                    </td>
                    <td><?= $tips = $hips + $sips ?></td>
                    <td><?= $ips = $sekolah['ips']->guru_ips; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tips - $ips) < 0) ? 'badge-danger' : ($tips - $ips > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($tips - $ips) < 0) ? 'Menambah ' . (- ($tips - $ips)) . ' pegawai' : ($tips - $ips > 0 ? 'Mendistribusikan kembali ' . ($tips - $ips) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Guru Seni Budaya</td>
                    <td><?= $hpegawai['hsen1']; ?></td>
                    <td><?= $hpegawai['hsen2']; ?></td>
                    <td><?= $hpegawai['hsen3']; ?></td>
                    <td><?= $hsen = $hpegawai['hsen1'] + $hpegawai['hsen2'] + $hpegawai['hsen3'] ?></td>
                    <td>
                        <?= $ssen = $spegawai['ssen']; ?>
                    </td>
                    <td><?= $tsen = $hsen + $ssen ?></td>
                    <td><?= $sen = $sekolah['sen']->guru_senbud; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tsen - $sen) < 0) ? 'badge-danger' : ($tsen - $sen > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($tsen - $sen) < 0) ? 'Menambah ' . (- ($tsen - $sen)) . ' pegawai' : ($tsen - $sen > 0 ? 'Mendistribusikan kembali ' . ($tsen - $sen) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Guru Teknologi, Informasi dan Komunikasi</td>
                    <td><?= $hpegawai['htik1']; ?></td>
                    <td><?= $hpegawai['htik2']; ?></td>
                    <td><?= $hpegawai['htik3']; ?></td>
                    <td><?= $htik = $hpegawai['htik1'] + $hpegawai['htik2'] + $hpegawai['htik3'] ?></td>
                    <td>
                        <?= $stik = $spegawai['stik']; ?>
                    </td>
                    <td><?= $ttik = $htik + $stik ?></td>
                    <td><?= $tik = $sekolah['tik']->guru_tik; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($ttik - $tik) < 0) ? 'badge-danger' : ($ttik - $tik > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($ttik - $tik) < 0) ? 'Menambah ' . (- ($ttik - $tik)) . ' pegawai' : ($ttik - $tik > 0 ? 'Mendistribusikan kembali ' . ($ttik - $tik) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Guru Pendidikan Kewarganegaraan</td>
                    <td><?= $hpegawai['hpkn1']; ?></td>
                    <td><?= $hpegawai['hpkn2']; ?></td>
                    <td><?= $hpegawai['hpkn3']; ?></td>
                    <td><?= $hpkn = $hpegawai['hpkn1'] + $hpegawai['hpkn2'] + $hpegawai['hpkn3'] ?></td>
                    <td>
                        <?= $spkn = $spegawai['spkn']; ?>
                    </td>
                    <td><?= $tpkn = $hpkn + $spkn ?></td>
                    <td><?= $pkn = $sekolah['pkn']->guru_pkn; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tpkn - $pkn) < 0) ? 'badge-danger' : ($tpkn - $pkn > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($tpkn - $pkn) < 0) ? 'Menambah ' . (- ($tpkn - $pkn)) . ' pegawai' : ($tpkn - $pkn > 0 ? 'Mendistribusikan kembali ' . ($tpkn - $pkn) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Guru Bahasa Indonesia</td>
                    <td><?= $hpegawai['hind1']; ?></td>
                    <td><?= $hpegawai['hind2']; ?></td>
                    <td><?= $hpegawai['hind3']; ?></td>
                    <td><?= $hind = $hpegawai['hind1'] + $hpegawai['hind2'] + $hpegawai['hind3'] ?></td>
                    <td>
                        <?= $sind = $spegawai['sind']; ?>
                    </td>
                    <td><?= $tind = $hind + $sind ?></td>
                    <td><?= $ind = $sekolah['ind']->guru_indo; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tind - $ind) < 0) ? 'badge-danger' : ($tind - $ind > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($tind - $ind) < 0) ? 'Menambah ' . (- ($tind - $ind)) . ' pegawai' : ($tind - $ind > 0 ? 'Mendistribusikan kembali ' . ($tind - $ind) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Guru Bahasa Inggris</td>
                    <td><?= $hpegawai['heng1']; ?></td>
                    <td><?= $hpegawai['heng2']; ?></td>
                    <td><?= $hpegawai['heng3']; ?></td>
                    <td><?= $heng = $hpegawai['heng1'] + $hpegawai['heng2'] + $hpegawai['heng3'] ?></td>
                    <td>
                        <?= $seng = $spegawai['seng']; ?>
                    </td>
                    <td><?= $teng = $heng + $seng ?></td>
                    <td><?= $eng = $sekolah['eng']->guru_eng; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($teng - $eng) < 0) ? 'badge-danger' : ($teng - $eng > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($teng - $eng) < 0) ? 'Menambah ' . (- ($teng - $eng)) . ' pegawai' : ($teng - $eng > 0 ? 'Mendistribusikan kembali ' . ($teng - $eng) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Guru Matematika</td>
                    <td><?= $hpegawai['hmat1']; ?></td>
                    <td><?= $hpegawai['hmat2']; ?></td>
                    <td><?= $hpegawai['hmat3']; ?></td>
                    <td><?= $hmat = $hpegawai['hmat1'] + $hpegawai['hmat2'] + $hpegawai['hmat3'] ?></td>
                    <td>
                        <?= $smat = $spegawai['smat']; ?>
                    </td>
                    <td><?= $tmat = $hmat + $smat ?></td>
                    <td><?= $mat = $sekolah['mat']->guru_mat; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tmat - $mat) < 0) ? 'badge-danger' : ($tmat - $mat > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($tmat - $mat) < 0) ? 'Menambah ' . (- ($tmat - $mat)) . ' pegawai' : ($tmat - $mat > 0 ? 'Mendistribusikan kembali ' . ($tmat - $mat) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>
                <!-- Guru Islam -->
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Guru Pendidikan Agama Islam</td>
                    <td><?= $hpegawai['hIs1']; ?></td>
                    <td><?= $hpegawai['hIs2']; ?></td>
                    <td><?= $hpegawai['hIs3']; ?></td>
                    <td><?= $his = $hpegawai['hIs1'] + $hpegawai['hIs2'] + $hpegawai['hIs3'] ?></td>
                    <td>
                        <?= $sis = $spegawai['sIs']; ?>
                    </td>
                    <td><?= $tis = $his + $sis ?></td>
                    <td><?= $is = $sekolah['is']->guru_pai; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tis - $is) < 0) ? 'badge-danger' : ($tis - $is > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($tis - $is) < 0) ? 'Menambah ' . (- ($tis - $is)) . ' pegawai' : ($tis - $is > 0 ? 'Mendistribusikan kembali ' . ($tis - $is) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>
                <!-- Guru Katholik -->
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Guru Pendidikan Agama Katholik</td>
                    <td><?= $hpegawai['hKa1']; ?></td>
                    <td><?= $hpegawai['hKa2']; ?></td>
                    <td><?= $hpegawai['hKa3']; ?></td>
                    <td><?= $hka = $hpegawai['hKa1'] + $hpegawai['hKa2'] + $hpegawai['hKa3'] ?></td>
                    <td>
                        <?= $ska = $spegawai['sKa']; ?>
                    </td>
                    <td><?= $tka = $hka + $ska ?></td>
                    <td><?= $ka = $sekolah['ka']->guru_katholik; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tka - $ka) < 0) ? 'badge-danger' : ($tka - $ka > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($tka - $ka) < 0) ? 'Menambah ' . (- ($tka - $ka)) . ' pegawai' : ($tka - $ka > 0 ? 'Mendistribusikan kembali ' . ($tka - $ka) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>
                <!-- Guru Kristen -->
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Guru Pendidikan Agama Kristen</td>
                    <td><?= $hpegawai['hKr1']; ?></td>
                    <td><?= $hpegawai['hKr2']; ?></td>
                    <td><?= $hpegawai['hKr3']; ?></td>
                    <td><?= $hkr = $hpegawai['hKr1'] + $hpegawai['hKr2'] + $hpegawai['hKr3'] ?></td>
                    <td>
                        <?= $skr = $spegawai['sKr']; ?>
                    </td>
                    <td><?= $tkr = $hkr + $skr ?></td>
                    <td><?= $kr = $sekolah['kr']->guru_kristen; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tkr - $kr) < 0) ? 'badge-danger' : ($tkr - $kr > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($tkr - $kr) < 0) ? 'Menambah ' . (- ($tkr - $kr)) . ' pegawai' : ($tkr - $kr > 0 ? 'Mendistribusikan kembali ' . ($tkr - $kr) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>
                <!-- Guru Budha -->
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Guru Pendidikan Agama Budha</td>
                    <td><?= $hpegawai['hBu1']; ?></td>
                    <td><?= $hpegawai['hBu2']; ?></td>
                    <td><?= $hpegawai['hBu3']; ?></td>
                    <td><?= $hbu = $hpegawai['hBu1'] + $hpegawai['hBu2'] + $hpegawai['hBu3'] ?></td>
                    <td>
                        <?= $sbu = $spegawai['sBu']; ?>
                    </td>
                    <td><?= $tbu = $hbu + $sbu ?></td>
                    <td><?= $bu = $sekolah['bu']->guru_budha; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tbu - $bu) < 0) ? 'badge-danger' : ($tbu - $bu > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($tbu - $bu) < 0) ? 'Menambah ' . (- ($tbu - $bu)) . ' pegawai' : ($tbu - $bu > 0 ? 'Mendistribusikan kembali ' . ($tbu - $bu) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>
                <!-- Guru Hindu -->
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Guru Pendidikan Agama Hindu</td>
                    <td><?= $hpegawai['hHi1']; ?></td>
                    <td><?= $hpegawai['hHi2']; ?></td>
                    <td><?= $hpegawai['hHi3']; ?></td>
                    <td><?= $hhi = $hpegawai['hHi1'] + $hpegawai['hHi2'] + $hpegawai['hHi3'] ?></td>
                    <td>
                        <?= $shi = $spegawai['sHi']; ?>
                    </td>
                    <td><?= $thi = $hhi + $shi ?></td>
                    <td><?= $hi = $sekolah['hi']->guru_hindu; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($thi - $hi) < 0) ? 'badge-danger' : ($thi - $hi > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($thi - $hi) < 0) ? 'Menambah ' . (- ($thi - $hi)) . ' pegawai' : ($thi - $hi > 0 ? 'Mendistribusikan kembali ' . ($thi - $hi) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>
                <!-- Guru PJOK -->
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Guru Pendidikan Jasmani, Olahraga dan Kesehatan</td>
                    <td><?= $hpegawai['hPjok1']; ?></td>
                    <td><?= $hpegawai['hPjok2']; ?></td>
                    <td><?= $hpegawai['hPjok3']; ?></td>
                    <td><?= $hpjok = $hpegawai['hPjok1'] + $hpegawai['hPjok2'] + $hpegawai['hPjok3'] ?></td>
                    <td>
                        <?= $spjok = $spegawai['sPjok']; ?>
                    </td>
                    <td><?= $tpjok = $hpjok + $spjok ?></td>
                    <td><?= $pjok = $sekolah['pjok']->guru_pjok; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tpjok - $pjok) < 0) ? 'badge-danger' : ($tpjok - $pjok > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($tpjok - $pjok) < 0) ? 'Menambah ' . (- ($tpjok - $pjok)) . ' pegawai' : ($tpjok - $pjok > 0 ? 'Mendistribusikan kembali ' . ($tpjok - $pjok) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>
                <!-- Guru Inklusi -->
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Guru Inklusi</td>
                    <td><?= $hpegawai['hIn1']; ?></td>
                    <td><?= $hpegawai['hIn2']; ?></td>
                    <td><?= $hpegawai['hIn3']; ?></td>
                    <td><?= $hin = $hpegawai['hIn1'] + $hpegawai['hIn2'] + $hpegawai['hIn3'] ?></td>
                    <td>
                        <?= $sin = $spegawai['sIn']; ?>
                    </td>
                    <td><?= $tin = $hin + $sin ?></td>
                    <td><?= $in = $sekolah['in']->guru_inklusi; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tin - $in) < 0) ? 'badge-danger' : ($tin - $in > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($tin - $in) < 0) ? 'Menambah ' . (- ($tin - $in)) . ' pegawai' : ($tin - $in > 0 ? 'Mendistribusikan kembali ' . ($tin - $in) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td> -->
                    <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#eampleModal">
                                                <i class="fas fa-eye"></i>
                                            </button>

                                        </td> -->
                </tr>
                <!-- Penjaga Sekolah / Pramu Kebersihan -->
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Pramu Bakti</td>
                    <td><?= $hpegawai['hPb1']; ?></td>
                    <td><?= $hpegawai['hPb2']; ?></td>
                    <td><?= $hpegawai['hPb3']; ?></td>
                    <td><?= $hpb = $hpegawai['hPb1'] + $hpegawai['hPb2'] + $hpegawai['hPb3'] ?></td>
                    <td>
                        <?= $spb = $spegawai['sPb']; ?>
                    </td>
                    <td><?= $tpb = $hpb + $spb ?></td>
                    <td><?= $pb = $sekolah['pb']->pramu_bakti; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tpb - $pb) < 0) ? 'badge-danger' : ($tpb - $pb > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($tpb - $pb) < 0) ? 'Menambah ' . (- ($tpb - $pb)) . ' pegawai' : ($tpb - $pb > 0 ? 'Mendistribusikan kembali ' . ($tpb - $pb) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>
                <!-- Tenaga Administrasi -->
                <tr>
                    <td><?= $i++ ?></td>
                    <td>Penjaga Sekolah / Pramu Kebersihan</td>
                    <td><?= $hpegawai['hPk1']; ?></td>
                    <td><?= $hpegawai['hPk2']; ?></td>
                    <td><?= $hpegawai['hPk3']; ?></td>
                    <td><?= $hpk = $hpegawai['hPk1'] + $hpegawai['hPk2'] + $hpegawai['hPk3'] ?></td>
                    <td>
                        <?= $spk = $spegawai['sPk']; ?>
                    </td>
                    <td><?= $tpk = $hpk + $spk ?></td>
                    <td><?= $pk = $sekolah['pk']->penjaga_kebersihan; ?></td>
                    <td>
                        <span class="badge rounded-pill <?= (($tpk - $pk) < 0) ? 'badge-danger' : ($tpk - $pk > 0 ? 'badge-warning' : 'badge-success'); ?>">
                            <?= (($tpk - $pk) < 0) ? 'Menambah ' . (- ($tpk - $pk)) . ' pegawai' : ($tpk - $pk > 0 ? 'Mendistribusikan kembali ' . ($tpk - $pk) . ' pegawai ' : 'Sudah Sesuai'); ?>
                        </span>
                    </td>
                    <!-- <td>
                                            <button type="button" class="btn  btn-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td> -->
                </tr>
            </tbody>
            <!-- Table Foot -->
            <tfoot>
                <tr>
                    <th rowspan="1" colspan="2">Grand Total</th>
                    <th rowspan="1" colspan="1">
                        <?= $tpns = $hpegawai['hKS1'] + $hpegawai['hipa1'] + $hpegawai['hips1'] + $hpegawai['hsen1'] + $hpegawai['htik1'] + $hpegawai['hpkn1'] + $hpegawai['hind1'] + $hpegawai['heng1'] + $hpegawai['hmat1'] + $hpegawai['hIs1'] + $hpegawai['hKa1'] + $hpegawai['hKr1'] + $hpegawai['hBu1'] + $hpegawai['hHi1'] + $hpegawai['hPjok1'] + $hpegawai['hIn1'] + $hpegawai['hPb1'] + $hpegawai['hPk1'] ?>
                    </th>
                    <th rowspan="1" colspan="1">
                        <?= $tpppk = $hpegawai['hKS2'] + $hpegawai['hipa2'] + $hpegawai['hips2'] + $hpegawai['hsen2'] + $hpegawai['htik2'] + $hpegawai['hpkn2'] + $hpegawai['hind2'] + $hpegawai['heng2'] + $hpegawai['hmat2'] + $hpegawai['hIs2'] + $hpegawai['hKa2'] + $hpegawai['hKr2'] + $hpegawai['hBu2'] + $hpegawai['hHi2'] + $hpegawai['hPjok2'] + $hpegawai['hIn2'] + $hpegawai['hPb2'] + $hpegawai['hPk2'] ?>
                    </th>
                    <th rowspan="1" colspan="1">
                        <?= $tnon = $hpegawai['hKS3'] + $hpegawai['hipa3'] + $hpegawai['hips3'] + $hpegawai['hsen3'] + $hpegawai['htik3'] + $hpegawai['hpkn3'] + $hpegawai['hind3'] + $hpegawai['heng3'] + $hpegawai['hmat3'] + $hpegawai['hIs3'] + $hpegawai['hKa3'] + $hpegawai['hKr3'] + $hpegawai['hBu3'] + $hpegawai['hHi3'] + $hpegawai['hPjok3'] + $hpegawai['hIn3'] + $hpegawai['hPb3'] + $hpegawai['hPk3'] ?>
                    </th>
                    <th rowspan="1" colspan="1">
                        <?= $tpns + $tpppk + $tnon ?>
                    </th>
                    <th rowspan="1" colspan="1">
                        <?= $spegawai['sKs'] + $spegawai['sipa'] + $spegawai['sips'] + $spegawai['ssen'] + $spegawai['stik'] + $spegawai['spkn'] + $spegawai['sind'] + $spegawai['seng'] + $spegawai['smat'] + $spegawai['sIs'] + $spegawai['sKa'] + $spegawai['sKr'] + $spegawai['sBu'] + $spegawai['sHi'] + $spegawai['sPjok'] + $spegawai['sIn'] + $spegawai['sPb'] + $spegawai['sPk'] ?>
                    </th>
                    <th rowspan="1" colspan="1">
                        <?= $tks + $tipa + $tips + $tsen + $tik + $tpkn + $tind + $teng + $tmat + $tis + $tka + $tkr + $thi + $tbu + $tpjok + $tin + $tpb + $tpk ?>
                    </th>
                    <th rowspan="1" colspan="1">
                        <?= $ks + $ipa + $ips + $sen + $tik + $pkn + $ind + $eng + $mat + $is + $ka + $kr + $hi + $bu + $pjok + $in + $pb + $pk ?>
                    </th>
                    <th rowspan="1" colspan="1"></th>
                    <!-- <th rowspan="1" colspan="1"></th> -->
                </tr>
            </tfoot>
        </table>
    <?php endif; ?>
</body>


</div>