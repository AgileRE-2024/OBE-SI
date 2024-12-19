/*!999999\- enable the sandbox mode */
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
DROP TABLE IF EXISTS `bahan_kajian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bahan_kajian` (
  `kodeBK` char(10) NOT NULL,
  `namaBK` varchar(100) NOT NULL,
  `kategoriBK` tinyint(1) NOT NULL,
  `referensiBK` varchar(100) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kodeBK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `bentuks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bentuks` (
  `id_bentuk` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_bentuk` varchar(30) DEFAULT NULL,
  `deskripsi_bentuk` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_bentuk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `cpl_prodi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cpl_prodi` (
  `kodeCPL` char(10) NOT NULL,
  `deskripsiCPL` text NOT NULL,
  `referensiCPL` varchar(100) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kodeCPL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `cpl_sn_dikti`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cpl_sn_dikti` (
  `kodeCPLSN` char(10) NOT NULL,
  `deskripsiSN` text NOT NULL,
  `sumberSN` char(8) NOT NULL,
  `kategoriSN` tinyint(1) NOT NULL,
  `jenisSN` varchar(20) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kodeCPLSN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `cpmk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cpmk` (
  `kodeCPMK` char(10) NOT NULL,
  `deskripsiCPMK` text NOT NULL,
  `kodeCPL` char(10) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kodeCPMK`),
  KEY `cpmk_kodecpl_foreign` (`kodeCPL`),
  CONSTRAINT `cpmk_kodecpl_foreign` FOREIGN KEY (`kodeCPL`) REFERENCES `cpl_prodi` (`kodeCPL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `detail_bk_mk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_bk_mk` (
  `kodeBK` char(10) NOT NULL,
  `kodeMK` char(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  KEY `detail_bk_mk_kodebk_foreign` (`kodeBK`),
  KEY `detail_bk_mk_kodemk_foreign` (`kodeMK`),
  CONSTRAINT `detail_bk_mk_kodebk_foreign` FOREIGN KEY (`kodeBK`) REFERENCES `bahan_kajian` (`kodeBK`),
  CONSTRAINT `detail_bk_mk_kodemk_foreign` FOREIGN KEY (`kodeMK`) REFERENCES `mata_kuliah` (`kodeMK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `detail_cplprodi_bk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_cplprodi_bk` (
  `kodeBK` char(10) NOT NULL,
  `kodeCPL` char(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `detail_cplprodi_bk_kodebk_foreign` (`kodeBK`),
  KEY `detail_cplprodi_bk_kodecpl_foreign` (`kodeCPL`),
  CONSTRAINT `detail_cplprodi_bk_kodebk_foreign` FOREIGN KEY (`kodeBK`) REFERENCES `bahan_kajian` (`kodeBK`),
  CONSTRAINT `detail_cplprodi_bk_kodecpl_foreign` FOREIGN KEY (`kodeCPL`) REFERENCES `cpl_prodi` (`kodeCPL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `detail_kelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_kelas` (
  `nim` char(12) DEFAULT NULL,
  `kodeKelas` char(9) DEFAULT NULL,
  `SemesterAmbil` smallint(5) unsigned DEFAULT NULL,
  `NilaiAkhir` smallint(5) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `detail_kelas_nim_foreign` (`nim`),
  KEY `detail_kelas_kodekelas_foreign` (`kodeKelas`),
  CONSTRAINT `detail_kelas_kodekelas_foreign` FOREIGN KEY (`kodeKelas`) REFERENCES `kelas` (`kodeKelas`),
  CONSTRAINT `detail_kelas_nim_foreign` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `detail_metode_minggurps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_metode_minggurps` (
  `id_metode` bigint(20) unsigned NOT NULL,
  `kodeMingguRPS` char(12) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `detail_metode_minggurps_id_metode_foreign` (`id_metode`),
  KEY `detail_metode_minggurps_kodeminggurps_foreign` (`kodeMingguRPS`),
  CONSTRAINT `detail_metode_minggurps_id_metode_foreign` FOREIGN KEY (`id_metode`) REFERENCES `metodes` (`id_metode`),
  CONSTRAINT `detail_metode_minggurps_kodeminggurps_foreign` FOREIGN KEY (`kodeMingguRPS`) REFERENCES `minggu_rps` (`kodeMingguRPS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `detail_mk_cpmk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_mk_cpmk` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kodeMK` char(10) NOT NULL,
  `kodeCPMK` char(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `detail_mk_cpmk_kodemk_foreign` (`kodeMK`),
  KEY `detail_mk_cpmk_kodecpmk_foreign` (`kodeCPMK`),
  CONSTRAINT `detail_mk_cpmk_kodecpmk_foreign` FOREIGN KEY (`kodeCPMK`) REFERENCES `cpmk` (`kodeCPMK`) ON UPDATE CASCADE,
  CONSTRAINT `detail_mk_cpmk_kodemk_foreign` FOREIGN KEY (`kodeMK`) REFERENCES `mata_kuliah` (`kodeMK`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `detail_nilai_mahasiswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_nilai_mahasiswa` (
  `id_rps` char(16) DEFAULT NULL,
  `nilaiPerTeknik` char(2) NOT NULL,
  `kodePenilaian` varchar(10) DEFAULT NULL,
  `nim` char(12) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `detail_nilai_mahasiswa_id_rps_foreign` (`id_rps`),
  KEY `detail_nilai_mahasiswa_kodepenilaian_foreign` (`kodePenilaian`),
  KEY `detail_nilai_mahasiswa_nim_foreign` (`nim`),
  CONSTRAINT `detail_nilai_mahasiswa_id_rps_foreign` FOREIGN KEY (`id_rps`) REFERENCES `rps` (`id_rps`),
  CONSTRAINT `detail_nilai_mahasiswa_kodepenilaian_foreign` FOREIGN KEY (`kodePenilaian`) REFERENCES `teknik_penilaian` (`kodePenilaian`) ON DELETE CASCADE,
  CONSTRAINT `detail_nilai_mahasiswa_nim_foreign` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `detail_pl_cplprodi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_pl_cplprodi` (
  `kodePL` char(10) NOT NULL,
  `kodeCPL` char(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `detail_pl_cplprodi_kodepl_foreign` (`kodePL`),
  KEY `detail_pl_cplprodi_kodecpl_foreign` (`kodeCPL`),
  CONSTRAINT `detail_pl_cplprodi_kodecpl_foreign` FOREIGN KEY (`kodeCPL`) REFERENCES `cpl_prodi` (`kodeCPL`) ON UPDATE CASCADE,
  CONSTRAINT `detail_pl_cplprodi_kodepl_foreign` FOREIGN KEY (`kodePL`) REFERENCES `profil_lulusan` (`kodePL`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `detail_pustaka_minggurps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_pustaka_minggurps` (
  `id_pustaka` int(10) unsigned NOT NULL,
  `kodeMingguRPS` char(12) NOT NULL,
  `detail_pustaka` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `detail_pustaka_minggurps_id_pustaka_foreign` (`id_pustaka`),
  KEY `detail_pustaka_minggurps_kodeminggurps_foreign` (`kodeMingguRPS`),
  CONSTRAINT `detail_pustaka_minggurps_id_pustaka_foreign` FOREIGN KEY (`id_pustaka`) REFERENCES `pustakas` (`id_pustaka`),
  CONSTRAINT `detail_pustaka_minggurps_kodeminggurps_foreign` FOREIGN KEY (`kodeMingguRPS`) REFERENCES `minggu_rps` (`kodeMingguRPS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `detail_rps_penilaian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_rps_penilaian` (
  `id_rps` char(10) DEFAULT NULL,
  `kodePenilaian` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `detail_rps_penilaian_id_rps_foreign` (`id_rps`),
  KEY `detail_rps_penilaian_kodepenilaian_foreign` (`kodePenilaian`),
  CONSTRAINT `detail_rps_penilaian_id_rps_foreign` FOREIGN KEY (`id_rps`) REFERENCES `rps` (`id_rps`),
  CONSTRAINT `detail_rps_penilaian_kodepenilaian_foreign` FOREIGN KEY (`kodePenilaian`) REFERENCES `teknik_penilaian` (`kodePenilaian`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `detail_sn_cplprodi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_sn_cplprodi` (
  `kodeCPLSN` char(10) NOT NULL,
  `kodeCPL` char(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `detail_sn_cplprodi_kodecplsn_foreign` (`kodeCPLSN`),
  KEY `detail_sn_cplprodi_kodecpl_foreign` (`kodeCPL`),
  CONSTRAINT `detail_sn_cplprodi_kodecpl_foreign` FOREIGN KEY (`kodeCPL`) REFERENCES `cpl_prodi` (`kodeCPL`) ON UPDATE CASCADE,
  CONSTRAINT `detail_sn_cplprodi_kodecplsn_foreign` FOREIGN KEY (`kodeCPLSN`) REFERENCES `cpl_sn_dikti` (`kodeCPLSN`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `instrumen_penilaian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `instrumen_penilaian` (
  `id_instrumen_penilaian` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_instrumen_penilaian` varchar(30) DEFAULT NULL,
  `deskripsi_instrumen_penilaian` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_instrumen_penilaian`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `kelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kelas` (
  `kodeKelas` char(9) NOT NULL,
  `id_rps` char(7) DEFAULT NULL,
  `namaKelas` varchar(100) NOT NULL,
  `jadwal` text NOT NULL,
  `kuota` int(11) NOT NULL,
  `kodeMK` char(7) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kodeKelas`),
  KEY `kelas_id_rps_foreign` (`id_rps`),
  KEY `kelas_kodemk_foreign` (`kodeMK`),
  CONSTRAINT `kelas_id_rps_foreign` FOREIGN KEY (`id_rps`) REFERENCES `rps` (`id_rps`),
  CONSTRAINT `kelas_kodemk_foreign` FOREIGN KEY (`kodeMK`) REFERENCES `mata_kuliah` (`kodeMK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `komponen_penilaian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `komponen_penilaian` (
  `id_komponen_penilaian` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_komponen_penilaian` varchar(1000) NOT NULL,
  `id_rps` char(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_komponen_penilaian`),
  KEY `komponen_penilaian_id_rps_foreign` (`id_rps`),
  CONSTRAINT `komponen_penilaian_id_rps_foreign` FOREIGN KEY (`id_rps`) REFERENCES `rps` (`id_rps`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `kriteria_penilaians`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kriteria_penilaians` (
  `id_kriteria_penilaians` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kriteria_penilaians` varchar(50) DEFAULT NULL,
  `indikatorPenilaian` varchar(50) DEFAULT NULL,
  `deskripsi_kriteria_penilaians` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_kriteria_penilaians`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `mahasiswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mahasiswa` (
  `nim` char(12) NOT NULL,
  `namaMahasiswa` varchar(100) NOT NULL,
  `tahunMasuk` year(4) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `mata_kuliah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mata_kuliah` (
  `kodeMK` char(10) NOT NULL,
  `namaProdi` varchar(25) DEFAULT NULL,
  `penanggung_jawab` char(18) DEFAULT NULL,
  `pengampu` char(18) DEFAULT NULL,
  `namaMK` varchar(100) NOT NULL,
  `jenisMK` smallint(6) NOT NULL,
  `sks` int(11) NOT NULL,
  `mat_kodeMK` char(40) DEFAULT NULL,
  `semester` smallint(6) DEFAULT NULL,
  `kategoriMK` smallint(6) NOT NULL,
  `deskripsiMK` longtext DEFAULT NULL,
  `prasyaratTambahan` text DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ects` double(8,2) DEFAULT NULL,
  PRIMARY KEY (`kodeMK`),
  KEY `mata_kuliah_namaprodi_foreign` (`namaProdi`),
  KEY `mata_kuliah_penanggung_jawab_foreign` (`penanggung_jawab`),
  KEY `mata_kuliah_pengampu_foreign` (`pengampu`),
  CONSTRAINT `mata_kuliah_namaprodi_foreign` FOREIGN KEY (`namaProdi`) REFERENCES `prodi` (`namaProdi`),
  CONSTRAINT `mata_kuliah_penanggung_jawab_foreign` FOREIGN KEY (`penanggung_jawab`) REFERENCES `users` (`nip`),
  CONSTRAINT `mata_kuliah_pengampu_foreign` FOREIGN KEY (`pengampu`) REFERENCES `users` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media` (
  `id_media` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_media` varchar(100) DEFAULT NULL,
  `deskripsi_media` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_media`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `metodes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `metodes` (
  `id_metode` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_metode` varchar(100) NOT NULL,
  `deskripsi_metode` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_metode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `minggu_rps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `minggu_rps` (
  `kodeMingguRPS` char(12) NOT NULL,
  `id_rps` char(10) DEFAULT NULL,
  `id_bentuk` bigint(20) unsigned DEFAULT NULL,
  `id_media` bigint(20) unsigned DEFAULT NULL,
  `kodeSubCPMK` char(12) DEFAULT NULL,
  `luring` tinyint(1) DEFAULT NULL,
  `penugasan` varchar(100) DEFAULT NULL,
  `waktuPembelajaran` text DEFAULT NULL,
  `pengalaman_belajar` text DEFAULT NULL,
  `bahan_kajian` text DEFAULT NULL,
  `bobot_nilai` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_instrumen_penilaian` int(10) unsigned DEFAULT NULL,
  `id_teknik_penilaian` int(10) unsigned DEFAULT NULL,
  `id_komponen_penilaian` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`kodeMingguRPS`),
  KEY `minggu_rps_id_rps_foreign` (`id_rps`),
  KEY `minggu_rps_id_bentuk_foreign` (`id_bentuk`),
  KEY `minggu_rps_id_media_foreign` (`id_media`),
  KEY `minggu_rps_kodesubcpmk_foreign` (`kodeSubCPMK`),
  KEY `minggu_rps_id_komponen_penilaian_foreign` (`id_komponen_penilaian`),
  KEY `minggu_rps_id_teknik_penilaian_foreign` (`id_teknik_penilaian`),
  KEY `minggu_rps_id_instrumen_penilaian_foreign` (`id_instrumen_penilaian`),
  CONSTRAINT `minggu_rps_id_bentuk_foreign` FOREIGN KEY (`id_bentuk`) REFERENCES `bentuks` (`id_bentuk`),
  CONSTRAINT `minggu_rps_id_instrumen_penilaian_foreign` FOREIGN KEY (`id_instrumen_penilaian`) REFERENCES `instrumen_penilaian` (`id_instrumen_penilaian`),
  CONSTRAINT `minggu_rps_id_komponen_penilaian_foreign` FOREIGN KEY (`id_komponen_penilaian`) REFERENCES `komponen_penilaian` (`id_komponen_penilaian`),
  CONSTRAINT `minggu_rps_id_media_foreign` FOREIGN KEY (`id_media`) REFERENCES `media` (`id_media`),
  CONSTRAINT `minggu_rps_id_rps_foreign` FOREIGN KEY (`id_rps`) REFERENCES `rps` (`id_rps`),
  CONSTRAINT `minggu_rps_id_teknik_penilaian_foreign` FOREIGN KEY (`id_teknik_penilaian`) REFERENCES `teknik_penilaian_rps` (`id_teknik_penilaian`),
  CONSTRAINT `minggu_rps_kodesubcpmk_foreign` FOREIGN KEY (`kodeSubCPMK`) REFERENCES `subcpmk` (`kodeSubCPMK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `nilai_mahasiswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nilai_mahasiswa` (
  `kodeNilai` varchar(10) NOT NULL,
  `nim` char(12) NOT NULL,
  `kodeKelas` char(9) NOT NULL,
  `kodeRPS` char(10) NOT NULL,
  `semesterAmbil` char(2) NOT NULL,
  `nilaiAkhir` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kodeNilai`),
  KEY `nilai_mahasiswa_nim_foreign` (`nim`),
  KEY `nilai_mahasiswa_kodekelas_foreign` (`kodeKelas`),
  KEY `nilai_mahasiswa_koderps_foreign` (`kodeRPS`),
  CONSTRAINT `nilai_mahasiswa_kodekelas_foreign` FOREIGN KEY (`kodeKelas`) REFERENCES `kelas` (`kodeKelas`) ON UPDATE CASCADE,
  CONSTRAINT `nilai_mahasiswa_koderps_foreign` FOREIGN KEY (`kodeRPS`) REFERENCES `rps` (`id_rps`) ON UPDATE CASCADE,
  CONSTRAINT `nilai_mahasiswa_nim_foreign` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page` (
  `pemetaan` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pemetaan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `pengampu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengampu` (
  `id_pengampu` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_rps` char(10) NOT NULL,
  `kodeMK` char(10) NOT NULL,
  `nip` char(18) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_pengampu`),
  KEY `pengampu_id_rps_foreign` (`id_rps`),
  KEY `pengampu_kodemk_foreign` (`kodeMK`),
  KEY `pengampu_nip_foreign` (`nip`),
  CONSTRAINT `pengampu_id_rps_foreign` FOREIGN KEY (`id_rps`) REFERENCES `rps` (`id_rps`),
  CONSTRAINT `pengampu_kodemk_foreign` FOREIGN KEY (`kodeMK`) REFERENCES `mata_kuliah` (`kodeMK`),
  CONSTRAINT `pengampu_nip_foreign` FOREIGN KEY (`nip`) REFERENCES `users` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `prasyarat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prasyarat` (
  `id_mat_kodeMK` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kodeMK` char(10) NOT NULL,
  `mat_kodeMK` char(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_mat_kodeMK`),
  KEY `prasyarat_kodemk_foreign` (`kodeMK`),
  KEY `10` (`mat_kodeMK`),
  CONSTRAINT `10` FOREIGN KEY (`mat_kodeMK`) REFERENCES `mata_kuliah` (`kodeMK`),
  CONSTRAINT `prasyarat_kodemk_foreign` FOREIGN KEY (`kodeMK`) REFERENCES `mata_kuliah` (`kodeMK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `prodi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prodi` (
  `namaProdi` varchar(25) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `namaPT` varchar(25) NOT NULL,
  `akreditasi` varchar(11) NOT NULL,
  `jenjangPendidikan` varchar(4) NOT NULL,
  `gelarLulusan` varchar(5) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `tujuan` text NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`namaProdi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `profil_lulusan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profil_lulusan` (
  `kodePL` char(10) NOT NULL,
  `deskripsiPL` text NOT NULL,
  `namaPL` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kodePL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `pustakas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pustakas` (
  `id_pustaka` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_penulis` varchar(100) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `judul` varchar(300) NOT NULL,
  `penerbit` varchar(300) DEFAULT NULL,
  `referensi` varchar(200) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_pustaka`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `rps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rps` (
  `id_rps` char(10) NOT NULL,
  `nip` char(18) DEFAULT NULL,
  `kodeMK` char(10) DEFAULT NULL,
  `tahunAjaran` year(4) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `diperiksa_oleh` varchar(18) DEFAULT NULL,
  `disetujui_oleh` varchar(18) DEFAULT NULL,
  `dibuat_oleh` varchar(18) DEFAULT NULL,
  `penanggungJawab` char(18) DEFAULT NULL,
  `dosenPengampu` char(200) DEFAULT NULL,
  `detail_penilaian` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_rps`),
  KEY `rps_nip_foreign` (`nip`),
  KEY `rps_kodemk_foreign` (`kodeMK`),
  CONSTRAINT `rps_kodemk_foreign` FOREIGN KEY (`kodeMK`) REFERENCES `mata_kuliah` (`kodeMK`),
  CONSTRAINT `rps_nip_foreign` FOREIGN KEY (`nip`) REFERENCES `users` (`nip`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `subcpmk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subcpmk` (
  `kodeSubCPMK` char(12) NOT NULL,
  `deskripsiSubCPMK` text NOT NULL,
  `kodeCPMK` char(10) NOT NULL,
  `kriteriaPenilaian` text NOT NULL,
  `indikatorPenilaian` text NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kodeSubCPMK`),
  KEY `subcpmk_kodecpmk_foreign` (`kodeCPMK`),
  CONSTRAINT `subcpmk_kodecpmk_foreign` FOREIGN KEY (`kodeCPMK`) REFERENCES `cpmk` (`kodeCPMK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `teknik_penilaian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teknik_penilaian` (
  `kodePenilaian` varchar(10) NOT NULL,
  `teknikPenilaian` varchar(100) NOT NULL,
  `bobotPenilaian` int(11) NOT NULL,
  `kriteriaPenilaian` varchar(100) NOT NULL,
  `tahapPenilaian` varchar(50) NOT NULL,
  `instrumenPenilaian` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kodePenilaian`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `teknik_penilaian_rps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teknik_penilaian_rps` (
  `id_teknik_penilaian` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_teknik_penilaian` varchar(30) DEFAULT NULL,
  `deskripsi_teknik_penilaian` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_teknik_penilaian`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `nip` char(18) NOT NULL,
  `namaProdi` varchar(25) DEFAULT NULL,
  `jabatanDosen` varchar(20) DEFAULT NULL,
  `namaDosen` varchar(50) DEFAULT NULL,
  `password` varchar(1406) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`nip`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_namaprodi_foreign` (`namaProdi`),
  CONSTRAINT `users_namaprodi_foreign` FOREIGN KEY (`namaProdi`) REFERENCES `prodi` (`namaProdi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

/*!999999\- enable the sandbox mode */
INSERT INTO `migrations` VALUES (1,'2012_04_28_150137_create_Prodi_table',1);
INSERT INTO `migrations` VALUES (2,'2014_10_12_000000_create_users_table',1);
INSERT INTO `migrations` VALUES (3,'2014_10_12_100000_create_password_reset_tokens_table',1);
INSERT INTO `migrations` VALUES (4,'2014_10_12_100000_create_password_resets_table',1);
INSERT INTO `migrations` VALUES (5,'2019_08_19_000000_create_failed_jobs_table',1);
INSERT INTO `migrations` VALUES (6,'2019_12_14_000001_create_personal_access_tokens_table',1);
INSERT INTO `migrations` VALUES (7,'2022_11_19_120413_create_kriteria_penilaians_table',1);
INSERT INTO `migrations` VALUES (8,'2023_03_19_115843_create_metodes_table',1);
INSERT INTO `migrations` VALUES (9,'2023_03_19_120025_create_bentuks_table',1);
INSERT INTO `migrations` VALUES (10,'2023_03_19_120043_create_media_table',1);
INSERT INTO `migrations` VALUES (11,'2023_04_25_045801_create_CPL_SN_Dikti_table',1);
INSERT INTO `migrations` VALUES (12,'2023_04_25_050710_create_CPL_Prodi_table',1);
INSERT INTO `migrations` VALUES (13,'2023_04_25_060251_create_Detail_SN_CPLProdi_table',1);
INSERT INTO `migrations` VALUES (14,'2023_04_25_133457_create_Profil_Lulusan_table',1);
INSERT INTO `migrations` VALUES (15,'2023_04_25_133934_create_Detail_PL_CPLProdi_table',1);
INSERT INTO `migrations` VALUES (16,'2023_04_25_140446_create_Bahan_Kajian_table',1);
INSERT INTO `migrations` VALUES (17,'2023_04_25_140932_create_Detail_CPLProdi_BK_table',1);
INSERT INTO `migrations` VALUES (18,'2023_04_25_142546_create_Mata_Kuliah_table',1);
INSERT INTO `migrations` VALUES (19,'2023_04_25_142626_create_Detail_BK_MK_table',1);
INSERT INTO `migrations` VALUES (20,'2023_04_26_124622_create_RPS_table',1);
INSERT INTO `migrations` VALUES (21,'2023_04_26_140047_create_CPMK_table',1);
INSERT INTO `migrations` VALUES (22,'2023_04_26_140114_create_Detail_MK_CPMK_table',1);
INSERT INTO `migrations` VALUES (23,'2023_04_26_140134_create_SubCPMK_table',1);
INSERT INTO `migrations` VALUES (24,'2023_04_26_154908_create_Teknik_Penilaian_table',1);
INSERT INTO `migrations` VALUES (25,'2023_04_26_154909_create_Minggu_RPS_table',1);
INSERT INTO `migrations` VALUES (26,'2023_04_26_154939_create_Detail_RPS_Penilaian',1);
INSERT INTO `migrations` VALUES (27,'2023_04_28_045824_create_Mahasiswa_table',1);
INSERT INTO `migrations` VALUES (28,'2023_04_28_045856_create_Kelas_table',1);
INSERT INTO `migrations` VALUES (29,'2023_04_28_050116_create_Nilai_Mahasiswa_table',1);
INSERT INTO `migrations` VALUES (30,'2023_04_28_050125_create_Detail_Nilai_Mahasiswa_table',1);
INSERT INTO `migrations` VALUES (31,'2023_04_28_150159_create_Page_table',1);
INSERT INTO `migrations` VALUES (32,'2023_11_19_121024_create_pustakas_table',1);
INSERT INTO `migrations` VALUES (33,'2023_11_19_121913_create_prasyarat_table',1);
INSERT INTO `migrations` VALUES (34,'2023_11_19_123339_detail_kelas',1);
INSERT INTO `migrations` VALUES (35,'2023_11_19_142253_detail_pustaka_minggurps',1);
INSERT INTO `migrations` VALUES (36,'2023_12_06_114407_create_pengampu_table',1);
INSERT INTO `migrations` VALUES (37,'2023_12_10_090729_add_ects_atribut_to__mata__kuliah_table',1);
INSERT INTO `migrations` VALUES (38,'2024_04_03_023724_create_detail_metode_minggurps_table',1);
INSERT INTO `migrations` VALUES (39,'2024_04_03_024354_create_teknik_penilaian_rps',1);
INSERT INTO `migrations` VALUES (40,'2024_04_03_030915_create_instrumen_penilaian_table',1);
INSERT INTO `migrations` VALUES (41,'2024_04_30_080341_create_komponen_penilaians_table',1);
INSERT INTO `migrations` VALUES (42,'2024_05_03_031001_add_id_instrumen_penilaian_to_minggurps',1);
