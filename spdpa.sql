-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 09:47 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spdpa`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `bulan_periode` date NOT NULL,
  `tahun_periode` int(11) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_bulan`
--
-- Error reading structure for table spdpa.laporan_bulan: #1932 - Table 'spdpa.laporan_bulan' doesn't exist in engine
-- Error reading data for table spdpa.laporan_bulan: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `spdpa`.`laporan_bulan`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `mutasi`
--
-- Error reading structure for table spdpa.mutasi: #1932 - Table 'spdpa.mutasi' doesn't exist in engine
-- Error reading data for table spdpa.mutasi: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `spdpa`.`mutasi`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `mutasi1`
--

CREATE TABLE `mutasi1` (
  `id_pegawai` varchar(16) NOT NULL,
  `id_mts` int(11) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `uk` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nik` varchar(16) NOT NULL,
  `nama_pegawai` varchar(60) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `unit_kerja` varchar(100) NOT NULL,
  `npsn` varchar(16) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `jenjang` enum('TK','SD','SMP') NOT NULL,
  `jenis_jabatan` varchar(60) NOT NULL,
  `tugas_tambahan` varchar(60) NOT NULL,
  `status_kepeg` varchar(60) NOT NULL,
  `status` varchar(60) NOT NULL,
  `golongan` varchar(2) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') NOT NULL,
  `nuptk` varchar(20) NOT NULL,
  `no_pes_sertif` varchar(20) NOT NULL,
  `nrg` varchar(20) NOT NULL,
  `pend_terakhir` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `ket2` varchar(255) NOT NULL,
  `tmt` date NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nik`, `nama_pegawai`, `slug`, `nip`, `unit_kerja`, `npsn`, `kecamatan`, `jenjang`, `jenis_jabatan`, `tugas_tambahan`, `status_kepeg`, `status`, `golongan`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `nuptk`, `no_pes_sertif`, `nrg`, `pend_terakhir`, `jurusan`, `no_hp`, `alamat`, `ket`, `ket2`, `tmt`, `created_at`, `updated_at`, `deleted_at`) VALUES
('3306147003900001', 'Siti Munfaizah', 'siti-munfaizah', '-', 'SD Negeri Banyumanik 03', '20329396', 'BANYUMANIK', 'SD', 'Guru Pendidikan Agama Islam', '-', 'NON PNS', 'Aktif', '-', 'Perempuan', 'Purworejo', '1990-03-30', 'Islam', '-', '-', '-', 'S1/D4', 'Pendidikan Agama Islam', '089620730975', 'DURIAN UTARA IV-8', '-', '-', '0000-00-00', '2022-11-29', '2022-11-29', '0000-00-00'),
('3309082501850002', 'AGUS SALIM, S.Pd', 'agus-salim-spd', '198501252015021001', 'SD NEGERI BANYUMANIK 01', '20331643', 'BANYUMANIK', 'SD', 'GURU KELAS', '-', 'PNS', 'Aktif', '3a', 'Laki-Laki', 'BOYOLALI', '1985-01-25', 'Islam', '2457763663200002', '201502752077', '210271189656', 'S1/D4', 'PGSD', '085647311302', 'SOPATEN RT.07 RW.03 BOYOLALI', 'KELAS 5', '-', '0000-00-00', '2022-11-29', '2022-11-29', '0000-00-00'),
('3309121008780001', 'AGUS SETYONO, S.Pd', 'agus-setyono-spd', '197808102010011018', 'SD NEGERI BANYUMANIK 01', '20331643', 'BANYUMANIK', 'SD', 'GURU KELAS', '-', 'PNS', 'Aktif', '3a', 'Laki-Laki', 'BOYOLALI', '1978-08-10', 'Islam', '6142756658200003', '-', '-', 'S1/D4', 'PGSD', '089682330834', 'JL.BERDIKARI RT.05 RW.07 SRONDOL KULON', 'KELAS 4', '-', '0000-00-00', '2022-11-29', '2022-11-29', '0000-00-00'),
('3314152109900005', 'AGUS SETYO WIBOWO, S.Pd', 'agus-setyo-wibowo-spd', '199009212022211008', 'SD Negeri Banyumanik 03', '20329396', 'BANYUMANIK', 'SD', 'Guru Pendidikan Jasmani, Olah Raga dan Kesehatan', '-', 'PPPK', 'Aktif', 'IX', 'Laki-Laki', 'SRAGEN', '1990-09-21', 'Islam', '5253768669130073', '201431738', '182201121371', 'S1/D4', 'PENDIDIKAN JASMANI, KESEHATAN DAN REKREASI', '085727467468', 'RT. 005 RW.001 GOTONG ROYONG, KEL./DESA TINJOMOYO, KEC.BANYUMANIK, SRAGEN', '-', '-', '0000-00-00', '2022-11-29', '2022-11-29', '0000-00-00'),
('3321010104650001', 'PARNA, S.Pd', 'parna-spd', '196504011992081001', 'SD NEGERI BANYUMANIK 03', '20329396', 'BANYUMANIK', 'SD', 'Kepala Sekolah', 'Kepala Sekolah', 'PNS', 'Aktif', '4a', 'Laki-Laki', 'Gng. Kidul', '1965-04-01', 'Islam', '4733743644200062', '13036302710931', '130271723070', 'S1/D4', 'Pendidikan Matematika', '081575640030', 'JL.PUCANGSARI III/4 PERUM PUCANG GADING, Mranggen, Demak ', '-', '-', '0000-00-00', '2022-11-29', '2022-11-29', '0000-00-00'),
('3321110611970002', 'Agung Hardiansyah', 'agung-hardiansyah', '-', 'SD Negeri Banyumanik 03', '20329396', 'BANYUMANIK', 'SD', 'Guru Kelas', '-', 'NON PNS', 'Aktif', '-', 'Laki-Laki', 'Demak', '1997-11-06', '', '-', '-', '-', 'S1/D4', 'PGSD', '0895385964088', 'JL. KALIJAJAR NO. 125 RT 01 RW 08 BINTORO DEMAK', '-', '-', '0000-00-00', '2022-11-29', '2022-11-29', '0000-00-00'),
('3322031812870001', 'FARIT BUDIONO', 'farit-budiono', '-', 'SD NEGERI BANYUMANIK 01', '20331643', 'BANYUMANIK', 'SD', 'Penjaga Sekolah/Pramu Kebersihan SD', '-', 'NON PNS', 'Aktif', '-', 'Laki-Laki', 'KAB. SEMARANG', '1987-12-18', 'Islam', '1550765667110023', '-', '-', 'SMA/SEDERAJAT', 'Mesin', '085728815424', 'Deresan RT.01 RW.04 Susukan Kab. Semarang', 'PENJAGA', '-', '0000-00-00', '2022-11-29', '2022-11-29', '0000-00-00'),
('3322156505710001', 'RAHAYU NUR ISWATI, S.Ag.', 'rahayu-nur-iswati-sag', '197105252008012013', 'SD NEGERI BANYUMANIK 02', '20331656', 'BANYUMANIK', 'SD', 'Kepala Sekolah', 'Plt. Kepala Sekolah', 'PNS', 'Aktif', '3c', 'Perempuan', 'KAB. SEMARANG', '1971-05-25', 'Islam', '9857749651300142', '11036302710553', '131272218144', 'S1/D4', 'Pend. Agama Islam', '087832589669', 'Kemasan RT.5 RW.5 Klepu Karangjati Kab Semarang', 'PAI 2,4,6', '-', '0000-00-00', '2022-11-29', '2022-11-29', '0000-00-00'),
('3324122105950002', 'ADITYA FAJAR WISAMBUDHI, S.Pd', 'aditya-fajar-wisambudhi-spd', '199505212022211002', 'SD Negeri Banyumanik 02', '20331656', 'BANYUMANIK', 'SD', 'Guru Pendidikan Jasmani, Olah Raga dan Kesehatan', '-', 'PPPK', 'Aktif', 'IX', 'Laki-Laki', 'KENDAL', '1995-05-21', 'Islam', '5853773674130142', '-', '-', 'S1/D4', 'PENDIDIKAN KEPELATIHAN OLAH RAGA', '085727706875', 'RT 06/04 BANYUMANIK, KEC. BANYUMANIK, KOTA SEMARANG. JL. ASRI III/13, KEL./DESA BANYUMANIK, KEC.BANYUMANIK, KENDAL', '-', '-', '0000-00-00', '2022-11-29', '2022-11-29', '0000-00-00'),
('3372014712810006', 'YF. ARNIES NATALIA, S.S', 'yf-arnies-natalia-ss', '-', 'SD NEGERI BANYUMANIK 02', '20331656', 'BANYUMANIK', 'SD', 'TENAGA ADMINISTRASI', '-', 'NON PNS', 'Aktif', '-', 'Perempuan', 'SURAKARTA', '1981-12-07', 'Katholik', '-', '-', '-', 'S1/D4', 'Bahasa dan Sastra Inggris', '081229234924', 'JL. KH Samanhudi No.124 Rt/Rw 01/03 Sondakan Laweyan Surakarta', 'ADMIN', '-', '0000-00-00', '2022-11-29', '2022-11-29', '0000-00-00'),
('3373022904710001', 'SUGENG PRIYANTO', 'sugeng-priyanto', '-', 'SD NEGERI BANYUMANIK 02', '20331656', 'BANYUMANIK', 'SD', 'Penjaga Sekolah/Pramu Kebersihan SD', '-', 'NON PNS', 'Aktif', '-', 'Laki-Laki', 'SEMARANG', '1971-04-29', 'Islam', '-', '-', '-', 'SMA/SEDERAJAT', 'Otomotif', '085741234991', 'Jl. Perengrejo 32/525 A Rt 07/03 Tingkir Salatiga', 'PENJAGA', '-', '0000-00-00', '2022-11-29', '2022-11-29', '0000-00-00'),
('3374096405810003', 'MAYKE DIAN MALTAWATI', 'mayke-dian-maltawati', '-', 'SD NEGERI BANYUMANIK 01', '20331643', 'BANYUMANIK', 'SD', 'TENAGA ADMINISTRASI', '-', 'NON PNS', 'Aktif', '-', 'Perempuan', 'SEMARANG', '1981-05-24', 'Kristen', '-', '-', '-', 'SMA/SEDERAJAT', 'IPA', '081325520303', 'JL. SANGGUNG UTARA IV/36 RT.06 RW.06 CANDISARI', 'ADMIN', '-', '0000-00-00', '2022-11-29', '2022-11-29', '0000-00-00'),
('3374106809650003', 'SUSANA TRI WIGIARTI', 'susana-tri-wigiarti', '196509282007012014', 'SD NEGERI BANYUMANIK 03', '20329396', 'BANYUMANIK', 'SD', 'Guru Pendidikan Agama Katholik', '-', 'PNS', 'Aktif', '3a', 'Perempuan', 'SEMARANG', '1965-09-28', 'Katholik', '0260743644300053', '15036313020005', '151302101043', 'S1/D4', 'PASTORAL KATEKETIK', '081326023529', 'BUKIT KENCANA JAYA A1/02 METESEH TEMBALANG SEMARANG', 'PAKA', '-', '0000-00-00', '2022-11-29', '2022-11-29', '0000-00-00'),
('3374111005670001', 'SUNGABDI, S.Pd', 'sungabdi-spd', '196705101988061003', 'SD NEGERI BANYUMANIK 01', '20331643', 'BANYUMANIK', 'SD', 'Guru Pendidikan Jasmani, Olah Raga dan Kesehatan', '-', 'PNS', 'Aktif', '3d', 'Laki-Laki', 'SEMARANG', '1967-05-10', 'Islam', '2842745648110072', '201501136098', '212201151641', 'S1/D4', 'PJOK', '081914588702', 'JL.KRESNA RT.02 RW.09 BANYUMANIK', 'PJOK I-VI', '-', '0000-00-00', '2022-11-29', '2022-11-29', '0000-00-00'),
('3374111009910001', 'SERO ADI MURVIANTO, S.Pd', 'sero-adi-murvianto-spd', '199109102022211007', 'SD Negeri Banyumanik 03', '20329396', 'BANYUMANIK', 'SD', 'GURU KELAS', '-', 'PPPK', 'Aktif', 'IX', 'Laki-Laki', 'SEMARANG', '1991-09-10', 'Islam', '-', '-', '-', 'S1/D4', 'PENDIDIKAN GURU SEKOLAH DASAR', '089667741623', 'RT001 RW003 ASRAMA EX BRIGIF V RT001 RW003 KELURAHAN SRONDOL KULON KECAMATAN BANYUMANIK SEMARANG, KEL./DESA SRONDOL KULON, KEC.BANYUMANIK, SEMARANG', '-', '-', '0000-00-00', '2022-11-29', '2022-11-29', '0000-00-00'),
('3374111212640002', 'ABDUL RAHIM, S.Pd.I', 'abdul-rahim-spdi', '196412122008011002', 'SD NEGERI BANYUMANIK 01', '20331643', 'BANYUMANIK', 'SD', 'Guru Pendidikan Agama Islam', '-', 'PNS', 'Aktif', '3a', 'Laki-Laki', 'MAGELANG', '1964-12-12', 'Islam', '1544742646110083', '13036312720199', '131272262126', 'S1/D4', 'PAI', '085640359722', 'JL.BANGUNHARJO RT.07 RW.5 BANYUMANIK', 'PAI I-VI', '-', '0000-00-00', '2022-11-29', '2022-11-29', '0000-00-00'),
('3374111701850003', 'AHMAD IMRONI, S.Pd', 'ahmad-imroni-spd', '198501172022211007', 'SD Negeri Banyumanik 03', '20329396', 'BANYUMANIK', 'SD', 'GURU KELAS', '-', 'PPPK', 'Aktif', 'IX', 'Laki-Laki', 'BLORA', '1985-01-17', 'Islam', '6449763665110022', '', '', 'S1/D4', 'PENDIDIKAN GURU SEKOLAH DASAR', '081325977751', 'RT. 006 RW. 004 JURANG BLIMBING, KEL./DESA TEMBALANG, KEC.TEMBALANG, BLORA', '-', '-', '0000-00-00', '2022-11-29', '2022-11-29', '0000-00-00'),
('3374114205670002', 'SUPIYAH, S.Pd', 'supiyah-spd', '196705021993072001', 'SD NEGERI BANYUMANIK 02', '20331656', 'BANYUMANIK', 'SD', 'GURU KELAS', '-', 'PNS', 'Aktif', '3c', 'Perempuan', 'BOYOLALI', '1967-05-02', 'Islam', '8834745647210112', '12036302710945', '120271424068', 'S1/D4', 'PPKn', '08112726019', 'Jl. Sendang Elo Rt. 08/02 Banyumanik', 'KELAS 3', '-', '0000-00-00', '2022-11-29', '2022-11-29', '0000-00-00'),
('3374114404630001', 'KISTIYOWATI', 'kistiyowati', '196304041991032006', 'SD NEGERI BANYUMANIK 03', '20329396', 'BANYUMANIK', 'SD', 'GURU KELAS', '-', 'PNS', 'Aktif', '4a', 'Perempuan', 'KARANGANYAR', '1963-04-04', 'Islam', '8736741642300082', '12036302710591', '120271517073', 'S1/D4', 'PGSD', '081326745931', 'JL ONDORANTE RT 01 RW 04 BANYUMANIK SEMARANG', 'KELAS 6', 'PURNA 1 MEI 2023', '0000-00-00', '2022-11-29', '2022-11-29', '0000-00-00'),
('3374114409650001', 'SEJATI, S.Pd', 'sejati-spd', '196509041993012001', 'SD NEGERI BANYUMANIK 02', '20331656', 'BANYUMANIK', 'SD', 'GURU KELAS', '-', 'PNS', 'Aktif', '3d', 'Perempuan', 'SEMARANG', '1965-09-04', 'Islam', '6236743646210083', '12036302710767', '120271314065', 'S1/D4', 'PPKn', '081931919086', 'Jl. Berdikari I No. 44 Rt. 06/07 Banyumanik', 'KELAS 5', '-', '0000-00-00', '2022-11-29', '2022-11-29', '0000-00-00'),
('3374114803630001', 'DJUMIATI, S.Pd', 'djumiati-spd', '196303082002122001', 'SD NEGERI BANYUMANIK 01', '20331643', 'BANYUMANIK', 'SD', 'GURU KELAS', '-', 'PNS', 'Aktif', '3b', 'Perempuan', 'SEMARANG', '1963-03-08', 'Islam', '9640741644300022', '11036302710512', '110271015052', 'S1/D4', 'PGSD', '081390496196', 'JL. MULAWARMAN II/28 BANYUMANIK', 'KELAS 6', 'PURNA 1 APRIL 2023', '0000-00-00', '2022-11-29', '2022-11-29', '0000-00-00'),
('3374114803930004', 'WIDHA WIDURI WIDYAWATI PRATIWI, S.Pd.', 'widha-widuri-widyawati-pratiwi-spd', '199303082022212024', 'SD Negeri Banyumanik 02', '20331656', 'BANYUMANIK', 'SD', 'GURU KELAS', '-', 'PPPK', 'Aktif', 'IX', 'Perempuan', 'SEMARANG', '1993-03-08', 'Islam', '4640771672130092', '-', '-', 'S1/D4', 'PENDIDIKAN GURU SEKOLAH DASAR', '085842770037', 'RT 005 RW 001 JL. GEDAWANG RAYA, KEL./DESA GEDAWANG, KEC.BANYUMANIK, SEMARANG', '-', '-', '0000-00-00', '2022-11-29', '2022-11-29', '0000-00-00'),
('3374115103670001', 'PARSINAH, S.PdI. M.Kom', 'parsinah-spdi-mkom', '196703112007012016', 'SD NEGERI BANYUMANIK 02', '20331656', 'BANYUMANIK', 'SD', 'Guru Pendidikan Agama Islam', '-', 'PNS', 'Aktif', '3c', 'Perempuan', 'BANJARNEGARA', '1967-03-11', 'Islam', '3643745648210062', '12036312720172', '121272243183', 'S1/D4', 'PAI', '085727108205', 'Jl. Sendang Elo Rt. 08/02 Banyumanik', 'PAI I-VI', '-', '0000-00-00', '2022-11-29', '2022-11-29', '0000-00-00'),
('3374115810850003', 'SISKA ROCHMANITA KUSTIYOASIH', 'siska-rochmanita-kustiyoasih', '198510182011012010', 'SD NEGERI BANYUMANIK 03', '20329396', 'BANYUMANIK', 'SD', 'GURU KELAS', '-', 'PNS', 'Aktif', '3b', 'Perempuan', 'PROBOLINGGO', '1985-10-18', 'Islam', '5350763665300013', '17036302710292', '180271179490', 'S1/D4', 'PGSD', '085236372711', 'ASRAMA WIRATAMA JL AKASIA PUDAKPAYUNG BANYUMANIK SEMARANG', 'KELAS 1', '-', '0000-00-00', '2022-11-29', '2022-11-29', '0000-00-00'),
('3374116005830001', 'ERRA MAY HILDA, S.Pd.', 'erra-may-hilda-spd', '198305202022212026', 'SD Negeri Banyumanik 01', '20331643', 'BANYUMANIK', 'SD', 'GURU KELAS', '-', 'PPPK', 'Aktif', 'IX', 'Perempuan', 'SEMARANG', '1983-05-20', 'Islam', '7852761662210162', '201501130481', '200271195520', 'S1/D4', 'PENDIDIKAN GURU SEKOLAH DASAR', '087832241683', 'NO. 167 RT 001/ RW 002 MERANTI TIMUR DALAM II, KEL./DESA PADANGSARI, KEC.BANYUMANIK, SEMARANG', '-', '-', '0000-00-00', '2022-11-29', '2022-11-29', '0000-00-00'),
('3374116104760003', 'HESTI SULISTYO RINI, S.Pd.', 'hesti-sulistyo-rini-spd', '197604212022212004', 'SD Negeri Banyumanik 02', '20331656', 'BANYUMANIK', 'SD', 'GURU KELAS', '-', 'PPPK', 'Aktif', 'IX', 'Perempuan', 'SEMARANG', '1976-04-21', 'Islam', '8753754655210102', '-', '-', 'S1/D4', 'PENDIDIKAN GURU SEKOLAH DASAR', '082135094668', 'RT 003 RW 002 SENDANG GEDE, KEL./DESA BANYUMANIK, KEC.BANYUMANIK, SEMARANG', '-', '-', '0000-00-00', '2022-11-29', '2022-11-29', '0000-00-00'),
('3374116109650005', 'RUMIATI, S.Pd., M.Si.', 'rumiati-spd-msi', '196509211988062002', 'SD NEGERI BANYUMANIK 01', '20331643', 'BANYUMANIK', 'SD', 'Kepala Sekolah', 'Kepala Sekolah', 'PNS', 'Aktif', '4a', 'Perempuan', 'SEMARANG', '1965-09-21', 'Islam', '8253743644300043', '11036302710551', '110271240036', 'S2', 'MANAJEMEN PENDIDIKAN', '085727365366', 'SANINTEN TIMUR IV/21 SRONDOL WETAN BANYUMANIK', 'KS', '-', '0000-00-00', '2022-11-29', '2022-11-29', '0000-00-00'),
('3374116612790005', 'WIWIN PROWANTI, S.Pd', 'wiwin-prowanti-spd', '197912262022212011', 'SD Negeri Banyumanik 02', '20331656', 'BANYUMANIK', 'SD', 'GURU KELAS', '-', 'PPPK', 'Aktif', 'IX', 'Perempuan', 'SEMARANG', '1979-12-26', 'Islam', '1558757659300043', '-', '-', 'S1/D4', 'PENDIDIKAN GURU SEKOLAH DASAR', '088221045196', 'NO. 136 RT 05 RW 03 JATIUHUR, KEL./DESA NGESREP, KEC.BANYUMANIK, SEMARANG', '-', '-', '0000-00-00', '2022-11-29', '2022-11-29', '0000-00-00'),
('3374124709950001', 'MIFTAKHUL JANNAH, S.Pd.', 'miftakhul-jannah-spd', '199509072022212008', 'SD Negeri Banyumanik 03', '20329396', 'BANYUMANIK', 'SD', 'GURU KELAS', '-', 'PPPK', 'Aktif', 'IX', 'Perempuan', 'SEMARANG', '1995-09-07', 'Islam', '5239773674230133', '-', '-', 'S1/D4', 'PENDIDIKAN GURU SEKOLAH DASAR', '082322157701', 'RT.02 RW.06 JOGOPRONO, KEL./DESA SADENG, KEC.GUNUNG PATI, SEMARANG', '-', '-', '0000-00-00', '2022-11-29', '2022-11-29', '0000-00-00'),
('3374125609950001', 'MAZIDATUR ROHMAH, S.Pd', 'mazidatur-rohmah-spd', '199509162022212013', 'SD Negeri Banyumanik 01', '20331643', 'BANYUMANIK', 'SD', 'GURU KELAS', ' ', 'PPPK', 'Aktif', 'IX', 'Perempuan', 'SEMARANG', '1995-09-16', 'Islam', '-', '-', '-', 'S1/D4', 'PENDIDIKAN GURU MADRASAH IBTIDAIYAH', '085740589107', 'RT 01 RW 02 KARANGGENENG, KEL./DESA SUMURREJO, KEC.GUNUNG PATI, SEMARANG', '-', '-', '0000-00-00', '2022-11-29', '2022-11-29', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `npsn` varchar(16) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `jenjang` enum('TK','SD','SMP') NOT NULL,
  `rombel` int(11) NOT NULL,
  `kepala_sekolah` int(11) NOT NULL,
  `guru_kelas` int(11) NOT NULL,
  `guru_pai` int(11) NOT NULL,
  `guru_katholik` int(11) NOT NULL,
  `guru_kristen` int(11) NOT NULL,
  `guru_budha` int(11) NOT NULL,
  `guru_hindu` int(11) NOT NULL,
  `guru_pjok` int(11) NOT NULL,
  `guru_inklusi` int(11) NOT NULL,
  `guru_ipa` int(11) NOT NULL,
  `guru_ips` int(11) NOT NULL,
  `guru_senbud` int(11) NOT NULL,
  `guru_tik` int(11) NOT NULL,
  `guru_pkn` int(11) NOT NULL,
  `guru_indo` int(11) NOT NULL,
  `guru_eng` int(11) NOT NULL,
  `guru_mat` int(11) NOT NULL,
  `pramu_bakti` int(11) NOT NULL,
  `penjaga_kebersihan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`npsn`, `nama_sekolah`, `slug`, `kecamatan`, `jenjang`, `rombel`, `kepala_sekolah`, `guru_kelas`, `guru_pai`, `guru_katholik`, `guru_kristen`, `guru_budha`, `guru_hindu`, `guru_pjok`, `guru_inklusi`, `guru_ipa`, `guru_ips`, `guru_senbud`, `guru_tik`, `guru_pkn`, `guru_indo`, `guru_eng`, `guru_mat`, `pramu_bakti`, `penjaga_kebersihan`) VALUES
('20328544', 'SD NEGERI CEPOKO', 'sd-negeri-cepoko', 'GUNUNGPATI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328546', 'SD NEGERI GISIKDRONO 01', 'sd-negeri-gisikdrono-01', 'SEMARANG BARAT', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328549', 'SD NEGERI TAWANG MAS 02', 'sd-negeri-tawang-mas-02', 'SEMARANG BARAT', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328554', 'SD NEGERI TEMBALANG', 'sd-negeri-tembalang', 'TEMBALANG', 'SD', 12, 1, 12, 2, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328559', 'SD NEGERI TLOGOSARI WETAN 02', 'sd-negeri-tlogosari-wetan-02', 'PEDURUNGAN', 'SD', 12, 1, 12, 2, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328560', 'SD NEGERI KEMBANGSARI 01', 'sd-negeri-kembangsari-01', 'SEMARANG TENGAH', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
('20328561', 'SD NEGERI WONOPLEMBON 01', 'sd-negeri-wonoplembon-01', 'MIJEN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328562', 'SD NEGERI WONOPLEMBON 02', 'sd-negeri-wonoplembon-02', 'MIJEN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328564', 'SD NEGERI WONOLOPO 03', 'sd-negeri-wonolopo-03', 'MIJEN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328565', 'SD Negeri Wonolopo 02', 'sd-negeri-wonolopo-02', 'MIJEN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328566', 'SD NEGERI WONOLOPO 01', 'sd-negeri-wonolopo-01', 'MIJEN', 'SD', 13, 1, 13, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328568', 'SD NEGERI PUDAKPAYUNG 02', 'sd-negeri-pudakpayung-02', 'BANYUMANIK', 'SD', 10, 1, 10, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328569', 'SD NEGERI SRONDOL WETAN 05', 'sd-negeri-srondol-wetan-05', 'BANYUMANIK', 'SD', 12, 1, 12, 2, 1, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328570', 'SD NEGERI SRONDOL WETAN 04', 'sd-negeri-srondol-wetan-04', 'BANYUMANIK', 'SD', 12, 1, 12, 2, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328571', 'SD NEGERI GEBANGSARI 01', 'sd-negeri-gebangsari-01', 'GENUK', 'SD', 13, 1, 13, 2, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328573', 'SD NEGERI TRIMULYO 02', 'sd-negeri-trimulyo-02', 'GENUK', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328574', 'SD NEGERI KARANGROTO 04', 'sd-negeri-karangroto-04', 'GENUK', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328577', 'SD NEGERI PANDEAN LAMPER 01', 'sd-negeri-pandean-lamper-01', 'GAYAMSARI', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328578', 'SD NEGERI TAMBAKREJO 02', 'sd-negeri-tambakrejo-02', 'GAYAMSARI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328579', 'SD NEGERI SENDANGMULYO 03', 'sd-negeri-sendangmulyo-03', 'TEMBALANG', 'SD', 18, 1, 18, 3, 1, 1, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3),
('20328581', 'SD NEGERI TANDANG 03', 'sd-negeri-tandang-03', 'TEMBALANG', 'SD', 17, 1, 17, 2, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328583', 'SD NEGERI TRIMULYO 01', 'sd-negeri-trimulyo-01', 'GENUK', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328585', 'SD NEGERI SAMBIREJO 01', 'sd-negeri-sambirejo-01', 'GAYAMSARI', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328587', 'SD NEGERI PONGANGAN', 'sd-negeri-pongangan', 'GUNUNGPATI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328588', 'SD Negeri Rejosari 03', 'sd-negeri-rejosari-03', 'SEMARANG TIMUR', 'SD', 12, 1, 12, 2, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328589', 'SD NEGERI KARANGANYAR 02', 'sd-negeri-karanganyar-02', 'TUGU', 'SD', 7, 1, 7, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328590', 'SD NEGERI KARANGANYAR 01', 'sd-negeri-karanganyar-01', 'TUGU', 'SD', 10, 1, 10, 2, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328591', 'SD NEGERI PLALANGAN 03', 'sd-negeri-plalangan-03', 'GUNUNGPATI', 'SD', 8, 1, 8, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328593', 'SD NEGERI SADENG 01', 'sd-negeri-sadeng-01', 'GUNUNGPATI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328595', 'SD NEGERI KUNINGAN 04', 'sd-negeri-kuningan-04', 'SEMARANG UTARA', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328596', 'SD NEGERI TAMBANGAN 01', 'sd-negeri-tambangan-01', 'MIJEN', 'SD', 12, 1, 12, 2, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328597', 'SD NEGERI GEBANGSARI 02', 'sd-negeri-gebangsari-02', 'GENUK', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328598', 'SD NEGERI GUNUNGPATI 01', 'sd-negeri-gunungpati-01', 'GUNUNGPATI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328600', 'SD NEGERI KEMIJEN 03', 'sd-negeri-kemijen-03', 'SEMARANG TIMUR', 'SD', 12, 1, 12, 2, 1, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328602', 'SD NEGERI REJOSARI 02', 'sd-negeri-rejosari-02', 'SEMARANG TIMUR', 'SD', 12, 1, 12, 2, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328604', 'SD NEGERI PANDEAN LAMPER 03', 'sd-negeri-pandean-lamper-03', 'GAYAMSARI', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328605', 'SD NEGERI TUGUREJO 03', 'sd-negeri-tugurejo-03', 'TUGU', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328606', 'SD NEGERI PAKINTELAN 01', 'sd-negeri-pakintelan-01', 'GUNUNGPATI', 'SD', 6, 1, 6, 1, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328607', 'SD NEGERI SEMBUNGHARJO 02', 'sd-negeri-sembungharjo-02', 'GENUK', 'SD', 8, 1, 8, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328608', 'SD NEGERI KROBOKAN', 'sd-negeri-krobokan', 'SEMARANG BARAT', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328609', 'SD NEGERI KEMBANGARUM 02', 'sd-negeri-kembangarum-02', 'SEMARANG BARAT', 'SD', 12, 1, 12, 2, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328611', 'SD NEGERI NGALIYAN 05', 'sd-negeri-ngaliyan-05', 'NGALIYAN', 'SD', 6, 1, 6, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328612', 'SD NEGERI WATES 02', 'sd-negeri-wates-02', 'NGALIYAN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328619', 'SD NEGERI GAJAHMUNGKUR 02', 'sd-negeri-gajahmungkur-02', 'GAJAHMUNGKUR', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328620', 'SD NEGERI WONOSARI 02', 'sd-negeri-wonosari-02', 'NGALIYAN', 'SD', 12, 1, 12, 2, 0, 1, 0, 0, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328621', 'SD NEGERI WONOSARI 01', 'sd-negeri-wonosari-01', 'NGALIYAN', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328622', 'SD NEGERI KALIPANCUR 01', 'sd-negeri-kalipancur-01', 'NGALIYAN', 'SD', 11, 1, 11, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328624', 'SD NEGERI NGEMPLAK SIMONGAN 02', 'sd-negeri-ngemplak-simongan-02', 'SEMARANG BARAT', 'SD', 12, 1, 12, 2, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328625', 'SD NEGERI NGEMPLAK SIMONGAN 01', 'sd-negeri-ngemplak-simongan-01', 'SEMARANG BARAT', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328626', 'SD NEGERI SENDANGMULYO 02', 'sd-negeri-sendangmulyo-02', 'TEMBALANG', 'SD', 18, 1, 18, 3, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328628', 'SD NEGERI KARANGREJO 02', 'sd-negeri-karangrejo-02', 'GAJAHMUNGKUR', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328630', 'SD NEGERI MANGKANG KULON 02', 'sd-negeri-mangkang-kulon-02', 'TUGU', 'SD', 6, 1, 6, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328631', 'SD NEGERI KARANGAYU 03', 'sd-negeri-karangayu-03', 'SEMARANG BARAT', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328634', 'SD NEGERI JOMBLANG 01', 'sd-negeri-jomblang-01', 'CANDISARI', 'SD', 18, 1, 18, 3, 0, 1, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328635', 'SD NEGERI NGALIYAN 01', 'sd-negeri-ngaliyan-01', 'NGALIYAN', 'SD', 24, 1, 24, 4, 1, 1, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3),
('20328638', 'SD NEGERI PENDRIKAN LOR 02', 'sd-negeri-pendrikan-lor-02', 'SEMARANG TENGAH', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328639', 'SD NEGERI TLOGOSARI KULON 01', 'sd-negeri-tlogosari-kulon-01', 'PEDURUNGAN', 'SD', 8, 1, 8, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328640', 'SD NEGERI MANYARAN 02', 'sd-negeri-manyaran-02', 'SEMARANG BARAT', 'SD', 12, 1, 12, 2, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328641', 'SD NEGERI MANYARAN 01', 'sd-negeri-manyaran-01', 'SEMARANG BARAT', 'SD', 18, 1, 18, 3, 0, 1, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328642', 'SD NEGERI KEMBANGARUM 03', 'sd-negeri-kembangarum-03', 'SEMARANG BARAT', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328643', 'SD NEGERI PEDALANGAN 02', 'sd-negeri-pedalangan-02', 'BANYUMANIK', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328644', 'SD NEGERI PUDAKPAYUNG 03', 'sd-negeri-pudakpayung-03', 'BANYUMANIK', 'SD', 7, 1, 7, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328645', 'SD NEGERI LEMPONGSARI', 'sd-negeri-lempongsari', 'GAJAHMUNGKUR', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328647', 'SD NEGERI SRONDOL KULON 02', 'sd-negeri-srondol-kulon-02', 'BANYUMANIK', 'SD', 19, 1, 19, 3, 0, 1, 0, 0, 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3),
('20328648', 'SD NEGERI PETOMPON 01', 'sd-negeri-petompon-01', 'GAJAHMUNGKUR', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328650', 'SD NEGERI GUNUNGPATI 02', 'sd-negeri-gunungpati-02', 'GUNUNGPATI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328651', 'SD NEGERI KARANGAYU 02', 'sd-negeri-karangayu-02', 'SEMARANG BARAT', 'SD', 15, 1, 15, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328653', 'SD NEGERI SENDANGMULYO 01', 'sd-negeri-sendangmulyo-01', 'TEMBALANG', 'SD', 20, 1, 20, 3, 0, 1, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328654', 'SD NEGERI KARANGROTO 03', 'sd-negeri-karangroto-03', 'GENUK', 'SD', 8, 1, 8, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328656', 'SD NEGERI GENUKSARI 02', 'sd-negeri-genuksari-02', 'GENUK', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328659', 'SD NEGERI KARANGROTO 02', 'sd-negeri-karangroto-02', 'GENUK', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328660', 'SD NEGERI KARANGROTO 01', 'sd-negeri-karangroto-01', 'GENUK', 'SD', 10, 1, 10, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328664', 'SD NEGERI BOJONG SALAMAN 02', 'sd-negeri-bojong-salaman-02', 'SEMARANG BARAT', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328665', 'SD NEGERI KARANGAYU 01', 'sd-negeri-karangayu-01', 'SEMARANG BARAT', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328668', 'SD NEGERI TLOGOSARI WETAN 01', 'sd-negeri-tlogosari-wetan-01', 'PEDURUNGAN', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328669', 'SD NEGERI KALIBANTENG KIDUL 02', 'sd-negeri-kalibanteng-kidul-02', 'SEMARANG BARAT', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328670', 'SD NEGERI KALIBANTENG KIDUL 03', 'sd-negeri-kalibanteng-kidul-03', 'SEMARANG BARAT', 'SD', 12, 1, 12, 2, 1, 1, 0, 0, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328672', 'SD NEGERI GENUKSARI 01', 'sd-negeri-genuksari-01', 'GENUK', 'SD', 18, 1, 18, 3, 0, 1, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3),
('20328673', 'SD NEGERI TEGALSARI 01', 'sd-negeri-tegalsari-01', 'CANDISARI', 'SD', 9, 1, 9, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328675', 'SD NEGERI NGADIRGO 02', 'sd-negeri-ngadirgo-02', 'MIJEN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328676', 'SD NEGERI NGADIRGO 01', 'sd-negeri-ngadirgo-01', 'MIJEN', 'SD', 9, 1, 9, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328680', 'SD NEGERI TAMBAKAJI 01', 'sd-negeri-tambakaji-01', 'NGALIYAN', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328681', 'SD NEGERI PURWOYOSO 04', 'sd-negeri-purwoyoso-04', 'NGALIYAN', 'SD', 12, 1, 12, 2, 1, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328684', 'SD NEGERI NGIJO 01', 'sd-negeri-ngijo-01', 'GUNUNGPATI', 'SD', 6, 1, 6, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328685', 'SD NEGERI PETOMPON 02', 'sd-negeri-petompon-02', 'GAJAHMUNGKUR', 'SD', 18, 1, 18, 3, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328686', 'SD NEGERI BOJONG SALAMAN 01', 'sd-negeri-bojong-salaman-01', 'SEMARANG BARAT', 'SD', 12, 1, 12, 2, 1, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328687', 'SD Negeri Muktiharjo Lor', 'sd-negeri-muktiharjo-lor', 'GENUK', 'SD', 15, 1, 15, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328688', 'SD NEGERI TLOGOSARI KULON 06', 'sd-negeri-tlogosari-kulon-06', 'PEDURUNGAN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328689', 'SD NEGERI KRAMAS', 'sd-negeri-kramas', 'TEMBALANG', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328691', 'SD NEGERI TAMBAKAJI 02', 'sd-negeri-tambakaji-02', 'NGALIYAN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328692', 'SD NEGERI LAMPER TENGAH 02', 'sd-negeri-lamper-tengah-02', 'SEMARANG SELATAN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328693', 'SD NEGERI GISIKDRONO 02', 'sd-negeri-gisikdrono-02', 'SEMARANG BARAT', 'SD', 24, 1, 24, 4, 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328694', 'SD NEGERI TLOGOSARI KULON 04', 'sd-negeri-tlogosari-kulon-04', 'PEDURUNGAN', 'SD', 6, 1, 6, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328695', 'SD NEGERI PATEMON 01', 'sd-negeri-patemon-01', 'GUNUNGPATI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328696', 'SD NEGERI KEDUNGPANE 01', 'sd-negeri-kedungpane-01', 'MIJEN', 'SD', 6, 1, 6, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328697', 'SD NEGERI KARANGMALANG', 'sd-negeri-karangmalang', 'MIJEN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328698', 'SD NEGERI JATIBARANG 03', 'sd-negeri-jatibarang-03', 'MIJEN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328699', 'SD NEGERI SUMURREJO 01', 'sd-negeri-sumurrejo-01', 'GUNUNGPATI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328700', 'SD NEGERI JATIBARANG 02', 'sd-negeri-jatibarang-02', 'MIJEN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328701', 'SD NEGERI JATIBARANG 01', 'sd-negeri-jatibarang-01', 'MIJEN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328706', 'SD NEGERI PEKUNDEN', 'sd-negeri-pekunden', 'SEMARANG TENGAH', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328707', 'SD NEGERI SRONDOL WETAN 01', 'sd-negeri-srondol-wetan-01', 'BANYUMANIK', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328708', 'SD NEGERI SUKOREJO 02', 'sd-negeri-sukorejo-02', 'GUNUNGPATI', 'SD', 6, 1, 6, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328709', 'SD NEGERI POLAMAN', 'sd-negeri-polaman', 'MIJEN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328710', 'SD NEGERI PURWOSARI 02 MIJEN', 'sd-negeri-purwosari-02-mijen', 'MIJEN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328711', 'SD NEGERI MLATIHARJO 02', 'sd-negeri-mlatiharjo-02', 'SEMARANG TIMUR', 'SD', 7, 1, 7, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328713', 'SD NEGERI MLATIHARJO 01', 'sd-negeri-mlatiharjo-01', 'SEMARANG TIMUR', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328714', 'SD NEGERI JOMBLANG 05', 'sd-negeri-jomblang-05', 'CANDISARI', 'SD', 9, 1, 9, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328716', 'SD NEGERI KEMIJEN 01', 'sd-negeri-kemijen-01', 'SEMARANG TIMUR', 'SD', 11, 1, 11, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328717', 'SD NEGERI TLOGOSARI KULON 02', 'sd-negeri-tlogosari-kulon-02', 'PEDURUNGAN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328718', 'SD NEGERI TAMBAKAJI 05', 'sd-negeri-tambakaji-05', 'NGALIYAN', 'SD', 8, 1, 8, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328720', 'SD NEGERI NGADIRGO 03', 'sd-negeri-ngadirgo-03', 'MIJEN', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328721', 'SD NEGERI CANGKIRAN 01', 'sd-negeri-cangkiran-01', 'MIJEN', 'SD', 6, 1, 6, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328722', 'SD NEGERI PURWOSARI 01 MIJEN', 'sd-negeri-purwosari-01-mijen', 'MIJEN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0),
('20328723', 'SD NEGERI TANDANG 02', 'sd-negeri-tandang-02', 'TEMBALANG', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328725', 'SD NEGERI TANDANG 01', 'sd-negeri-tandang-01', 'TEMBALANG', 'SD', 18, 1, 18, 3, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328726', 'SD NEGERI TUGUREJO 02', 'sd-negeri-tugurejo-02', 'TUGU', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328727', 'SD NEGERI PURWOYOSO 01', 'sd-negeri-purwoyoso-01', 'NGALIYAN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328728', 'SD NEGERI TAMBAKAJI 04', 'sd-negeri-tambakaji-04', 'NGALIYAN', 'SD', 14, 1, 14, 2, 1, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328730', 'SD NEGERI KARANGKIDUL', 'sd-negeri-karangkidul', 'SEMARANG TENGAH', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328731', 'SD NEGERI KEMBANGARUM 01', 'sd-negeri-kembangarum-01', 'SEMARANG BARAT', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328732', 'SD NEGERI SEKARAN 01', 'sd-negeri-sekaran-01', 'GUNUNGPATI', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328736', 'SD NEGERI TINJOMOYO 01', 'sd-negeri-tinjomoyo-01', 'BANYUMANIK', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328738', 'SD NEGERI SAMPANGAN 01', 'sd-negeri-sampangan-01', 'GAJAHMUNGKUR', 'SD', 12, 1, 12, 2, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328740', 'SD NEGERI GISIKDRONO 03', 'sd-negeri-gisikdrono-03', 'SEMARANG BARAT', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328742', 'SD NEGERI KUNINGAN 02', 'sd-negeri-kuningan-02', 'SEMARANG UTARA', 'SD', 10, 1, 10, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328744', 'SD NEGERI TAMBAKAJI 03', 'sd-negeri-tambakaji-03', 'NGALIYAN', 'SD', 11, 1, 11, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328745', 'SD NEGERI SEKAYU', 'sd-negeri-sekayu', 'SEMARANG TENGAH', 'SD', 6, 1, 6, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328746', 'SD NEGERI PESANTREN', 'sd-negeri-pesantren', 'MIJEN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328747', 'SD NEGERI JATISARI', 'sd-negeri-jatisari', 'MIJEN', 'SD', 14, 1, 14, 2, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328751', 'SD NEGERI SIWALAN', 'sd-negeri-siwalan', 'GAYAMSARI', 'SD', 12, 1, 12, 2, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328752', 'SD NEGERI TAMBAKREJO 01', 'sd-negeri-tambakrejo-01', 'GAYAMSARI', 'SD', 9, 1, 9, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20328754', 'SD NEGERI SAWAH BESAR 02', 'sd-negeri-sawah-besar-02', 'GAYAMSARI', 'SD', 12, 1, 12, 2, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20328757', 'SD Negeri Kuningan 01', 'sd-negeri-kuningan-01', 'SEMARANG UTARA', 'SD', 16, 1, 16, 2, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329208', 'SD NEGERI MANGKANG KULON 03', 'sd-negeri-mangkang-kulon-03', 'TUGU', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329210', 'SD NEGERI BENDUNGAN', 'sd-negeri-bendungan', 'GAJAHMUNGKUR', 'SD', 12, 1, 12, 2, 1, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20329211', 'SD NEGERI GAJAHMUNGKUR 01', 'sd-negeri-gajahmungkur-01', 'GAJAHMUNGKUR', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329213', 'SD NEGERI JOMBLANG 02', 'sd-negeri-jomblang-02', 'CANDISARI', 'SD', 12, 1, 12, 2, 1, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329214', 'SD NEGERI PODOREJO 03', 'sd-negeri-podorejo-03', 'NGALIYAN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329215', 'SD NEGERI SUKOREJO 03', 'sd-negeri-sukorejo-03', 'GUNUNGPATI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329217', 'SD NEGERI WONOTINGAL', 'sd-negeri-wonotingal', 'CANDISARI', 'SD', 24, 1, 24, 4, 1, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20329219', 'SD NEGERI KARANGANYAR GUNUNG 01', 'sd-negeri-karanganyar-gunung-01', 'CANDISARI', 'SD', 12, 1, 12, 2, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20329221', 'SD NEGERI KALIWIRU', 'sd-negeri-kaliwiru', 'CANDISARI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329224', 'SD NEGERI GAJAHMUNGKUR 04', 'sd-negeri-gajahmungkur-04', 'GAJAHMUNGKUR', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329226', 'SD NEGERI BANGETAYU KULON', 'sd-negeri-bangetayu-kulon', 'GENUK', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329227', 'SD NEGERI TLOGOSARI KULON 05', 'sd-negeri-tlogosari-kulon-05', 'PEDURUNGAN', 'SD', 7, 1, 7, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329228', 'SD NEGERI TLOGOSARI KULON 03', 'sd-negeri-tlogosari-kulon-03', 'PEDURUNGAN', 'SD', 6, 1, 6, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329231', 'SD NEGERI LAMPER KIDUL 01', 'sd-negeri-lamper-kidul-01', 'SEMARANG SELATAN', 'SD', 12, 1, 12, 2, 1, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20329233', 'SD NEGERI BENDAN NGISOR', 'sd-negeri-bendan-ngisor', 'GAJAHMUNGKUR', 'SD', 12, 1, 12, 2, 1, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329235', 'SD Negeri Ngaliyan 04', 'sd-negeri-ngaliyan-04', 'NGALIYAN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329236', 'SD NEGERI PODOREJO 02', 'sd-negeri-podorejo-02', 'NGALIYAN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329238', 'SD NEGERI GUNUNGPATI 03', 'sd-negeri-gunungpati-03', 'GUNUNGPATI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329239', 'SD NEGERI PAKINTELAN 03', 'sd-negeri-pakintelan-03', 'GUNUNGPATI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329242', 'SD NEGERI TLOGOMULYO', 'sd-negeri-tlogomulyo', 'PEDURUNGAN', 'SD', 9, 1, 9, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329243', 'SD NEGERI GEDAWANG 02', 'sd-negeri-gedawang-02', 'BANYUMANIK', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329245', 'SD NEGERI NONGKOSAWIT 02', 'sd-negeri-nongkosawit-02', 'GUNUNGPATI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329247', 'SD NEGERI NGIJO 02', 'sd-negeri-ngijo-02', 'GUNUNGPATI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
('20329249', 'SD NEGERI TAWANG MAS 01', 'sd-negeri-tawang-mas-01', 'SEMARANG BARAT', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20329250', 'SD NEGERI NGALIYAN 02', 'sd-negeri-ngaliyan-02', 'NGALIYAN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329254', 'SD NEGERI SUKOREJO 01', 'sd-negeri-sukorejo-01', 'GUNUNGPATI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329255', 'SD NEGERI SADENG 03', 'sd-negeri-sadeng-03', 'GUNUNGPATI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329256', 'SD NEGERI SEKARAN 02', 'sd-negeri-sekaran-02', 'GUNUNGPATI', 'SD', 9, 1, 9, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329260', 'SD NEGERI BARUSARI 01', 'sd-negeri-barusari-01', 'SEMARANG SELATAN', 'SD', 11, 1, 11, 2, 0, 0, 0, 0, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20329262', 'SD NEGERI MANGKANG WETAN 02', 'sd-negeri-mangkang-wetan-02', 'TUGU', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329263', 'SD NEGERI DADAPSARI', 'sd-negeri-dadapsari', 'SEMARANG UTARA', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329264', 'SD NEGERI SAWAH BESAR 01', 'sd-negeri-sawah-besar-01', 'GAYAMSARI', 'SD', 12, 1, 12, 2, 1, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20329265', 'SD NEGERI KEMIJEN 04', 'sd-negeri-kemijen-04', 'SEMARANG TIMUR', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20329266', 'SD NEGERI PANDEAN LAMPER 04', 'sd-negeri-pandean-lamper-04', 'GAYAMSARI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329268', 'SD NEGERI KEMIJEN 02', 'sd-negeri-kemijen-02', 'SEMARANG TIMUR', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329270', 'SD NEGERI KARANG TEMPEL', 'sd-negeri-karang-tempel', 'SEMARANG TIMUR', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329272', 'SD NEGERI LAMPER LOR', 'sd-negeri-lamper-lor', 'SEMARANG SELATAN', 'SD', 6, 1, 6, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329273', 'SD NEGERI SENDANGGUWO 02', 'sd-negeri-sendangguwo-02', 'TEMBALANG', 'SD', 6, 1, 6, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329276', 'SD NEGERI MANGKANG WETAN 03', 'sd-negeri-mangkang-wetan-03', 'TUGU', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329277', 'SD NEGERI GAJAHMUNGKUR 03', 'sd-negeri-gajahmungkur-03', 'GAJAHMUNGKUR', 'SD', 6, 1, 6, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329278', 'SD NEGERI PLEBURAN 03', 'sd-negeri-pleburan-03', 'SEMARANG SELATAN', 'SD', 12, 1, 12, 2, 1, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20329279', 'SD NEGERI CANGKIRAN 02', 'sd-negeri-cangkiran-02', 'MIJEN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0),
('20329280', 'SD NEGERI KEDUNGPANE 02', 'sd-negeri-kedungpane-02', 'MIJEN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329281', 'SD NEGERI KALIBANTENG KULON 02', 'sd-negeri-kalibanteng-kulon-02', 'SEMARANG BARAT', 'SD', 12, 1, 12, 2, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20329282', 'SD NEGERI MANGKANG WETAN 01', 'sd-negeri-mangkang-wetan-01', 'TUGU', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329283', 'SD NEGERI BULUSTALAN', 'sd-negeri-bulustalan', 'SEMARANG SELATAN', 'SD', 12, 1, 12, 2, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20329284', 'SD NEGERI TUGUREJO 01', 'sd-negeri-tugurejo-01', 'TUGU', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20329285', 'SD NEGERI RANDUGARUT', 'sd-negeri-randugarut', 'TUGU', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329286', 'SD NEGERI MANGUNHARJO TUGU', 'sd-negeri-mangunharjo-tugu', 'TUGU', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329287', 'SD NEGERI BANDARHARJO 02', 'sd-negeri-bandarharjo-02', 'SEMARANG UTARA', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20329288', 'SD NEGERI BANGUNHARJO', 'sd-negeri-bangunharjo', 'SEMARANG TENGAH', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20329289', 'SD NEGERI PETERONGAN', 'sd-negeri-peterongan', 'SEMARANG SELATAN', 'SD', 14, 1, 14, 2, 1, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20329290', 'SD NEGERI CANDI 02', 'sd-negeri-candi-02', 'CANDISARI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329291', 'SD NEGERI PURWOYOSO 02', 'sd-negeri-purwoyoso-02', 'NGALIYAN', 'SD', 12, 1, 12, 2, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20329293', 'SD NEGERI WONODRI', 'sd-negeri-wonodri', 'SEMARANG SELATAN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329294', 'SD NEGERI PLEBURAN 04', 'sd-negeri-pleburan-04', 'SEMARANG SELATAN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329295', 'SD NEGERI PLEBURAN 02', 'sd-negeri-pleburan-02', 'SEMARANG SELATAN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329298', 'SD NEGERI KARANGREJO 01', 'sd-negeri-karangrejo-01', 'GAJAHMUNGKUR', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329301', 'SD NEGERI SAMBIREJO 02', 'sd-negeri-sambirejo-02', 'GAYAMSARI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329302', 'SD NEGERI KANDRI 01', 'sd-negeri-kandri-01', 'GUNUNGPATI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329304', 'SD NEGERI BULU LOR', 'sd-negeri-bulu-lor', 'SEMARANG UTARA', 'SD', 18, 1, 18, 3, 0, 1, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329305', 'SD NEGERI BRUMBUNGAN', 'sd-negeri-brumbungan', 'SEMARANG TENGAH', 'SD', 12, 1, 12, 2, 1, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20329306', 'SD NEGERI PURWOYOSO 03', 'sd-negeri-purwoyoso-03', 'NGALIYAN', 'SD', 18, 1, 18, 3, 1, 1, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20329307', 'SD NEGERI SENDANGMULYO 04', 'sd-negeri-sendangmulyo-04', 'TEMBALANG', 'SD', 20, 1, 20, 3, 0, 1, 0, 0, 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 4),
('20329309', 'SD NEGERI SARIREJO', 'sd-negeri-sarirejo', 'SEMARANG TIMUR', 'SD', 18, 1, 18, 3, 0, 1, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20329311', 'SD NEGERI MANGUNSARI 01', 'sd-negeri-mangunsari-01', 'GUNUNGPATI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329312', 'SD NEGERI NONGKOSAWIT 01', 'sd-negeri-nongkosawit-01', 'GUNUNGPATI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329313', 'SD NEGERI PLALANGAN 01', 'sd-negeri-plalangan-01', 'GUNUNGPATI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329314', 'SD NEGERI TEGALSARI 03', 'sd-negeri-tegalsari-03', 'CANDISARI', 'SD', 7, 1, 7, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329328', 'SD NEGERI LAMPER KIDUL 02', 'sd-negeri-lamper-kidul-02', 'SEMARANG SELATAN', 'SD', 24, 1, 24, 4, 1, 1, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3),
('20329331', 'SD NEGERI KANDRI 02', 'sd-negeri-kandri-02', 'GUNUNGPATI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329332', 'SD NEGERI JATIREJO', 'sd-negeri-jatirejo', 'GUNUNGPATI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329334', 'SD NEGERI KALISEGORO', 'sd-negeri-kalisegoro', 'GUNUNGPATI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329335', 'SD NEGERI SAMBIROTO 02', 'sd-negeri-sambiroto-02', 'TEMBALANG', 'SD', 12, 1, 12, 2, 1, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329336', 'SD NEGERI SAMBIROTO 01', 'sd-negeri-sambiroto-01', 'TEMBALANG', 'SD', 12, 1, 12, 2, 0, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20329339', 'SD NEGERI PLEBURAN 01', 'sd-negeri-pleburan-01', 'SEMARANG SELATAN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329369', 'SD NEGERI REJOSARI 01', 'sd-negeri-rejosari-01', 'SEMARANG TIMUR', 'SD', 24, 1, 24, 4, 0, 1, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20329371', 'SD NEGERI KALIPANCUR 02', 'sd-negeri-kalipancur-02', 'NGALIYAN', 'SD', 6, 1, 6, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329372', 'SD NEGERI GONDORIYO', 'sd-negeri-gondoriyo', 'NGALIYAN', 'SD', 4, 1, 4, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329375', 'SD NEGERI TEGALSARI 02', 'sd-negeri-tegalsari-02', 'CANDISARI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329376', 'SD NEGERI KARANGANYAR GUNUNG 02', 'sd-negeri-karanganyar-gunung-02', 'CANDISARI', 'SD', 18, 1, 18, 3, 0, 0, 0, 0, 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20329379', 'SD NEGERI JOMBLANG 03', 'sd-negeri-jomblang-03', 'CANDISARI', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329382', 'SD NEGERI SUMURREJO 02', 'sd-negeri-sumurrejo-02', 'GUNUNGPATI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329383', 'SD NEGERI SADENG 02', 'sd-negeri-sadeng-02', 'GUNUNGPATI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0),
('20329384', 'SD NEGERI BANGETAYU WETAN 01', 'sd-negeri-bangetayu-wetan-01', 'GENUK', 'SD', 12, 1, 12, 2, 1, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20329385', 'SD NEGERI TAMBAKREJO 03', 'sd-negeri-tambakrejo-03', 'GAYAMSARI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329386', 'SD NEGERI PANDEAN LAMPER 02', 'sd-negeri-pandean-lamper-02', 'GAYAMSARI', 'SD', 6, 1, 6, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329387', 'SD NEGERI CANDI 03', 'sd-negeri-candi-03', 'CANDISARI', 'SD', 6, 1, 6, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329388', 'SD NEGERI KALIGAWE', 'sd-negeri-kaligawe', 'GAYAMSARI', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20329389', 'SD NEGERI GAYAMSARI 02', 'sd-negeri-gayamsari-02', 'GAYAMSARI', 'SD', 12, 1, 12, 2, 1, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20329390', 'SD NEGERI PLALANGAN 02', 'sd-negeri-plalangan-02', 'GUNUNGPATI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329391', 'SD NEGERI SENDANGGUWO 01', 'sd-negeri-sendangguwo-01', 'TEMBALANG', 'SD', 14, 1, 14, 2, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20329393', 'SD NEGERI SAMBIROTO 03', 'sd-negeri-sambiroto-03', 'TEMBALANG', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329394', 'SD NEGERI BUBAKAN', 'sd-negeri-bubakan', 'MIJEN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329395', 'SD NEGERI BUGANGAN 02', 'sd-negeri-bugangan-02', 'SEMARANG TIMUR', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329396', 'SD NEGERI BANYUMANIK 03', 'sd-negeri-banyumanik-03', 'BANYUMANIK', 'SD', 6, 1, 6, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329398', 'SD NEGERI TAMBAKHARJO', 'sd-negeri-tambakharjo', 'SEMARANG BARAT', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329401', 'SD NEGERI GAYAMSARI 01', 'sd-negeri-gayamsari-01', 'GAYAMSARI', 'SD', 11, 1, 11, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329403', 'SD NEGERI SAMPANGAN 02', 'sd-negeri-sampangan-02', 'GAJAHMUNGKUR', 'SD', 12, 1, 12, 2, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329404', 'SD NEGERI BUGANGAN 01', 'sd-negeri-bugangan-01', 'SEMARANG TIMUR', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329406', 'SD NEGERI PENDRIKAN LOR 03', 'sd-negeri-pendrikan-lor-03', 'SEMARANG TENGAH', 'SD', 12, 1, 12, 2, 1, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20329407', 'SD NEGERI BANYUMANIK 04', 'sd-negeri-banyumanik-04', 'BANYUMANIK', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329409', 'SD NEGERI ROWOSARI 02', 'sd-negeri-rowosari-02', 'TEMBALANG', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329411', 'SD NEGERI JATINGALEH 02', 'sd-negeri-jatingaleh-02', 'CANDISARI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329414', 'SD NEGERI PURWOSARI 01', 'sd-negeri-purwosari-01', 'SEMARANG UTARA', 'SD', 9, 1, 9, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329416', 'SD NEGERI KUNINGAN 03', 'sd-negeri-kuningan-03', 'SEMARANG UTARA', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
('20329419', 'SD NEGERI BRINGIN 02', 'sd-negeri-bringin-02', 'NGALIYAN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20329421', 'SD NEGERI SEMBUNGHARJO 01', 'sd-negeri-sembungharjo-01', 'GENUK', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20331643', 'SD NEGERI BANYUMANIK 01', 'sd-negeri-banyumanik-01', 'BANYUMANIK', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20331649', 'SD NEGERI NGESREP 02', 'sd-negeri-ngesrep-02', 'BANYUMANIK', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20331655', 'SD NEGERI SRONDOL WETAN 06', 'sd-negeri-srondol-wetan-06', 'BANYUMANIK', 'SD', 12, 1, 12, 2, 1, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20331656', 'SD NEGERI BANYUMANIK 02', 'sd-negeri-banyumanik-02', 'BANYUMANIK', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20331658', 'SD NEGERI TINJOMOYO 03', 'sd-negeri-tinjomoyo-03', 'BANYUMANIK', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20331659', 'SD NEGERI NGESREP 01', 'sd-negeri-ngesrep-01', 'BANYUMANIK', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20331661', 'SD NEGERI PANDEAN LAMPER 05', 'sd-negeri-pandean-lamper-05', 'GAYAMSARI', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20331662', 'SD NEGERI CANDI 01', 'sd-negeri-candi-01', 'CANDISARI', 'SD', 24, 1, 24, 4, 0, 1, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20331663', 'SD NEGERI PADANGSARI 02', 'sd-negeri-padangsari-02', 'BANYUMANIK', 'SD', 18, 1, 18, 3, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3),
('20331665', 'SD NEGERI SRONDOL KULON 01', 'sd-negeri-srondol-kulon-01', 'BANYUMANIK', 'SD', 10, 1, 10, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20331667', 'SD NEGERI GEDAWANG 01', 'sd-negeri-gedawang-01', 'BANYUMANIK', 'SD', 6, 1, 6, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20331668', 'SD NEGERI JATINGALEH 01', 'sd-negeri-jatingaleh-01', 'CANDISARI', 'SD', 18, 1, 18, 3, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20331669', 'SD NEGERI JABUNGAN', 'sd-negeri-jabungan', 'BANYUMANIK', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20331672', 'SD NEGERI PADANGSARI 01', 'sd-negeri-padangsari-01', 'BANYUMANIK', 'SD', 7, 1, 7, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20331673', 'SD NEGERI PEDALANGAN 01', 'sd-negeri-pedalangan-01', 'BANYUMANIK', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
('20331675', 'SD NEGERI PUDAKPAYUNG 01', 'sd-negeri-pudakpayung-01', 'BANYUMANIK', 'SD', 14, 1, 14, 2, 1, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20331676', 'SD NEGERI TINJOMOYO 02', 'sd-negeri-tinjomoyo-02', 'BANYUMANIK', 'SD', 6, 1, 6, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20331680', 'SD NEGERI SRONDOL KULON 03', 'sd-negeri-srondol-kulon-03', 'BANYUMANIK', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20331682', 'SD NEGERI NGESREP 03', 'sd-negeri-ngesrep-03', 'BANYUMANIK', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20331684', 'SD NEGERI SRONDOL WETAN 02', 'sd-negeri-srondol-wetan-02', 'BANYUMANIK', 'SD', 12, 1, 12, 2, 1, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20331686', 'SD NEGERI SRONDOL WETAN 03', 'sd-negeri-srondol-wetan-03', 'BANYUMANIK', 'SD', 12, 1, 12, 2, 1, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20331687', 'SD NEGERI PEDALANGAN 03', 'sd-negeri-pedalangan-03', 'BANYUMANIK', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20337650', 'SD NEGERI GEMAH', 'sd-negeri-gemah', 'PEDURUNGAN', 'SD', 12, 1, 12, 2, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20337651', 'SD NEGERI KALICARI 02', 'sd-negeri-kalicari-02', 'PEDURUNGAN', 'SD', 9, 1, 9, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20337652', 'SD NEGERI PANGGUNG KIDUL', 'sd-negeri-panggung-kidul', 'SEMARANG UTARA', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20337657', 'SD NEGERI SUMURBOTO', 'sd-negeri-sumurboto', 'BANYUMANIK', 'SD', 12, 1, 12, 2, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20337658', 'SD NEGERI PURWOYOSO 06', 'sd-negeri-purwoyoso-06', 'NGALIYAN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20337659', 'SD NEGERI ROWOSARI 01', 'sd-negeri-rowosari-01', 'TEMBALANG', 'SD', 11, 1, 11, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20337662', 'SD NEGERI PANGGUNG LOR', 'sd-negeri-panggung-lor', 'SEMARANG UTARA', 'SD', 6, 1, 6, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20337663', 'SD NEGERI PURWOSARI 02', 'sd-negeri-purwosari-02', 'SEMARANG UTARA', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20337664', 'SD NEGERI TANJUNG MAS', 'sd-negeri-tanjung-mas', 'SEMARANG UTARA', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20337667', 'SD NEGERI TAMBANGAN 02', 'sd-negeri-tambangan-02', 'MIJEN', 'SD', 8, 1, 8, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20337668', 'SD NEGERI MUKTIHARJO KIDUL 02', 'sd-negeri-muktiharjo-kidul-02', 'PEDURUNGAN', 'SD', 8, 1, 8, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
('20337670', 'SD NEGERI NGALIYAN 03', 'sd-negeri-ngaliyan-03', 'NGALIYAN', 'SD', 9, 1, 9, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20337671', 'SD NEGERI MUKTIHARJO KIDUL 01', 'sd-negeri-muktiharjo-kidul-01', 'PEDURUNGAN', 'SD', 12, 1, 12, 2, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20337674', 'SD NEGERI MUKTIHARJO KIDUL 04', 'sd-negeri-muktiharjo-kidul-04', 'PEDURUNGAN', 'SD', 6, 1, 6, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20337677', 'SD NEGERI GEBANGSARI 03', 'sd-negeri-gebangsari-03', 'GENUK', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20337679', 'SD NEGERI PALEBON 02', 'sd-negeri-palebon-02', 'PEDURUNGAN', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20337680', 'SD NEGERI KALICARI 01', 'sd-negeri-kalicari-01', 'PEDURUNGAN', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20337681', 'SD NEGERI PALEBON 03', 'sd-negeri-palebon-03', 'PEDURUNGAN', 'SD', 12, 1, 12, 2, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2),
('20337682', 'SD NEGERI PEDURUNGAN KIDUL 01', 'sd-negeri-pedurungan-kidul-01', 'PEDURUNGAN', 'SD', 11, 1, 11, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20337683', 'SD NEGERI PEDURUNGAN KIDUL 03', 'sd-negeri-pedurungan-kidul-03', 'PEDURUNGAN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20337684', 'SD NEGERI WONOSARI 03', 'sd-negeri-wonosari-03', 'NGALIYAN', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20337687', 'SD NEGERI PEDURUNGAN KIDUL 02', 'sd-negeri-pedurungan-kidul-02', 'PEDURUNGAN', 'SD', 12, 1, 12, 2, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20337691', 'SD NEGERI PEDURUNGAN KIDUL 04', 'sd-negeri-pedurungan-kidul-04', 'PEDURUNGAN', 'SD', 8, 1, 8, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20337693', 'SD NEGERI PEDURUNGAN LOR 01', 'sd-negeri-pedurungan-lor-01', 'PEDURUNGAN', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20337694', 'SD NEGERI MUKTIHARJO KIDUL 03', 'sd-negeri-muktiharjo-kidul-03', 'PEDURUNGAN', 'SD', 7, 1, 7, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20337695', 'SD NEGERI PEDURUNGAN LOR 02', 'sd-negeri-pedurungan-lor-02', 'PEDURUNGAN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20337696', 'SD NEGERI PEDURUNGAN KIDUL 05', 'sd-negeri-pedurungan-kidul-05', 'PEDURUNGAN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20337697', 'SD NEGERI PETOMPON 03', 'sd-negeri-petompon-03', 'GAJAHMUNGKUR', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20337698', 'SD NEGERI PEDURUNGAN TENGAH 01', 'sd-negeri-pedurungan-tengah-01', 'PEDURUNGAN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20337700', 'SD NEGERI PEDURUNGAN TENGAH 02', 'sd-negeri-pedurungan-tengah-02', 'PEDURUNGAN', 'SD', 14, 1, 14, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20337701', 'SD NEGERI PENGGARON KIDUL', 'sd-negeri-penggaron-kidul', 'PEDURUNGAN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20337703', 'SD NEGERI PLAMONGANSARI 02', 'sd-negeri-plamongansari-02', 'PEDURUNGAN', 'SD', 6, 1, 6, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20337726', 'SD NEGERI PENDRIKAN LOR 01', 'sd-negeri-pendrikan-lor-01', 'SEMARANG TENGAH', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20337728', 'SD NEGERI SALAMAN MLOYO', 'sd-negeri-salaman-mloyo', 'SEMARANG BARAT', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20337734', 'SD NEGERI BARUSARI 02', 'sd-negeri-barusari-02', 'SEMARANG SELATAN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20337738', 'SD NEGERI LAMPER TENGAH 01', 'sd-negeri-lamper-tengah-01', 'SEMARANG SELATAN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20337742', 'SD NEGERI BULUSAN', 'sd-negeri-bulusan', 'TEMBALANG', 'SD', 14, 1, 14, 2, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20337747', 'SD NEGERI GABAHAN', 'sd-negeri-gabahan', 'SEMARANG TENGAH', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20337750', 'SD NEGERI KEMBANGSARI 02', 'sd-negeri-kembangsari-02', 'SEMARANG TENGAH', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20337757', 'SD NEGERI MIROTO', 'sd-negeri-miroto', 'SEMARANG TENGAH', 'SD', 12, 1, 12, 2, 1, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20337759', 'SD NEGERI PLAMONGANSARI 01', 'sd-negeri-plamongansari-01', 'PEDURUNGAN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20337762', 'SD NEGERI MANGUNHARJO', 'sd-negeri-mangunharjo', 'TEMBALANG', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20337763', 'SD NEGERI METESEH', 'sd-negeri-meteseh', 'TEMBALANG', 'SD', 14, 1, 14, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20337764', 'SD NEGERI MANYARAN 03', 'sd-negeri-manyaran-03', 'SEMARANG BARAT', 'SD', 12, 1, 12, 2, 1, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20337765', 'SD NEGERI PENDRIKAN KIDUL', 'sd-negeri-pendrikan-kidul', 'SEMARANG TENGAH', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20337780', 'SD NEGERI BRINGIN 01', 'sd-negeri-bringin-01', 'NGALIYAN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20337781', 'SD NEGERI WATES 01', 'sd-negeri-wates-01', 'NGALIYAN', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20337850', 'SD NEGERI PATEMON 02', 'sd-negeri-patemon-02', 'GUNUNGPATI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0),
('20337851', 'SD NEGERI BANGETAYU WETAN 02', 'sd-negeri-bangetayu-wetan-02', 'GENUK', 'SD', 15, 1, 15, 2, 1, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20337856', 'SD NEGERI MANGKANG KULON 01', 'sd-negeri-mangkang-kulon-01', 'TUGU', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20338141', 'SD NEGERI KEDUNGMUNDU', 'sd-negeri-kedungmundu', 'TEMBALANG', 'SD', 9, 1, 9, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20338413', 'SD NEGERI PAKINTELAN 02', 'sd-negeri-pakintelan-02', 'GUNUNGPATI', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20338414', 'SD NEGERI PODOREJO 01', 'sd-negeri-podorejo-01', 'NGALIYAN', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20338415', 'SD NEGERI BUGANGAN 03', 'sd-negeri-bugangan-03', 'SEMARANG TIMUR', 'SD', 24, 1, 24, 4, 1, 1, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20338416', 'SD NEGERI KALIBANTENG KULON 01', 'sd-negeri-kalibanteng-kulon-01', 'SEMARANG BARAT', 'SD', 6, 1, 6, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('20338417', 'SD NEGERI KALIBANTENG KIDUL 01', 'sd-negeri-kalibanteng-kidul-01', 'SEMARANG BARAT', 'SD', 18, 1, 18, 3, 0, 1, 0, 1, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20338418', 'SD NEGERI TANDANG 04', 'sd-negeri-tandang-04', 'TEMBALANG', 'SD', 12, 1, 12, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20338419', 'SD NEGERI KRAPYAK', 'sd-negeri-krapyak', 'SEMARANG BARAT', 'SD', 17, 1, 17, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('20338720', 'SD NEGERI PALEBON 01', 'sd-negeri-palebon-01', 'PEDURUNGAN', 'SD', 12, 1, 12, 2, 0, 1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2),
('69980337', 'SD NEGERI KALICARI 03', 'sd-negeri-kalicari-03', 'PEDURUNGAN', 'SD', 6, 1, 6, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(60) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `akses` enum('TK','SD','SMP','Semua','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama_user`, `slug`, `username`, `password`, `akses`) VALUES
(1, 'Admin', 'admin', 'admin', '123', 'Admin'),
(2, 'TK', 'tk', 'tk', '123', 'TK'),
(3, 'sd', 'sd', 'sd', '123', 'SD'),
(4, 'smp', 'smp', 'smp', '123', 'SMP'),
(5, 'Semua', 'semua', 'semua', '123\r\n', 'Semua');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mutasi1`
--
ALTER TABLE `mutasi1`
  ADD PRIMARY KEY (`id_mts`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `skl` (`npsn`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`npsn`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mutasi1`
--
ALTER TABLE `mutasi1`
  MODIFY `id_mts` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `skl` FOREIGN KEY (`npsn`) REFERENCES `sekolah` (`npsn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
