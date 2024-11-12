CREATE TABLE IF NOT EXISTS "migrations"(
  "id" integer primary key autoincrement not null,
  "migration" varchar not null,
  "batch" integer not null
);
CREATE TABLE IF NOT EXISTS "prodi"(
  "namaProdi" varchar not null,
  "fakultas" varchar not null,
  "namaPT" varchar not null,
  "akreditasi" varchar not null,
  "jenjangPendidikan" varchar not null,
  "gelarLulusan" varchar not null,
  "visi" text not null,
  "misi" text not null,
  "tujuan" text not null,
  "deleted_at" datetime,
  "created_at" datetime,
  "updated_at" datetime,
  primary key("namaProdi")
);
CREATE TABLE IF NOT EXISTS "users"(
  "nip" varchar not null,
  "namaProdi" varchar,
  "jabatanDosen" varchar,
  "namaDosen" varchar,
  "password" varchar,
  "email" varchar,
  "role" tinyint(1) not null default '0',
  "remember_token" varchar,
  "status" varchar,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("namaProdi") references "prodi"("namaProdi") on delete restrict,
  primary key("nip")
);
CREATE UNIQUE INDEX "users_email_unique" on "users"("email");
CREATE TABLE IF NOT EXISTS "password_reset_tokens"(
  "email" varchar not null,
  "token" varchar not null,
  "created_at" datetime,
  primary key("email")
);
CREATE TABLE IF NOT EXISTS "password_resets"(
  "email" varchar not null,
  "token" varchar not null,
  "created_at" datetime,
  primary key("email")
);
CREATE TABLE IF NOT EXISTS "failed_jobs"(
  "id" integer primary key autoincrement not null,
  "uuid" varchar not null,
  "connection" text not null,
  "queue" text not null,
  "payload" text not null,
  "exception" text not null,
  "failed_at" datetime not null default CURRENT_TIMESTAMP
);
CREATE UNIQUE INDEX "failed_jobs_uuid_unique" on "failed_jobs"("uuid");
CREATE TABLE IF NOT EXISTS "personal_access_tokens"(
  "id" integer primary key autoincrement not null,
  "tokenable_type" varchar not null,
  "tokenable_id" integer not null,
  "name" varchar not null,
  "token" varchar not null,
  "abilities" text,
  "last_used_at" datetime,
  "expires_at" datetime,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE INDEX "personal_access_tokens_tokenable_type_tokenable_id_index" on "personal_access_tokens"(
  "tokenable_type",
  "tokenable_id"
);
CREATE UNIQUE INDEX "personal_access_tokens_token_unique" on "personal_access_tokens"(
  "token"
);
CREATE TABLE IF NOT EXISTS "kriteria_penilaians"(
  "id_kriteria_penilaians" integer primary key autoincrement not null,
  "nama_kriteria_penilaians" varchar,
  "indikatorPenilaian" varchar,
  "deskripsi_kriteria_penilaians" varchar,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE TABLE IF NOT EXISTS "metodes"(
  "id_metode" integer primary key autoincrement not null,
  "nama_metode" varchar not null,
  "deskripsi_metode" varchar,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE TABLE IF NOT EXISTS "bentuks"(
  "id_bentuk" integer primary key autoincrement not null,
  "nama_bentuk" varchar,
  "deskripsi_bentuk" varchar,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE TABLE IF NOT EXISTS "media"(
  "id_media" integer primary key autoincrement not null,
  "nama_media" varchar,
  "deskripsi_media" varchar,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE TABLE IF NOT EXISTS "cpl_sn_dikti"(
  "kodeCPLSN" varchar not null,
  "deskripsiSN" text not null,
  "sumberSN" varchar not null,
  "kategoriSN" tinyint(1) not null,
  "jenisSN" varchar not null,
  "deleted_at" datetime,
  "created_at" datetime,
  "updated_at" datetime,
  primary key("kodeCPLSN")
);
CREATE TABLE IF NOT EXISTS "cpl_prodi"(
  "kodeCPL" varchar not null,
  "deskripsiCPL" text not null,
  "referensiCPL" varchar not null,
  "deleted_at" datetime,
  "created_at" datetime,
  "updated_at" datetime,
  primary key("kodeCPL")
);
CREATE TABLE IF NOT EXISTS "detail_sn_cplprodi"(
  "kodeCPLSN" varchar not null,
  "kodeCPL" varchar not null,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("kodeCPLSN") references "cpl_sn_dikti"("kodeCPLSN") on delete restrict on update cascade,
  foreign key("kodeCPL") references "cpl_prodi"("kodeCPL") on delete restrict on update cascade
);
CREATE TABLE IF NOT EXISTS "profil_lulusan"(
  "kodePL" varchar not null,
  "deskripsiPL" text not null,
  "namaPL" varchar,
  "created_at" datetime,
  "updated_at" datetime,
  primary key("kodePL")
);
CREATE TABLE IF NOT EXISTS "detail_pl_cplprodi"(
  "kodePL" varchar not null,
  "kodeCPL" varchar not null,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("kodePL") references "profil_lulusan"("kodePL") on delete restrict on update cascade,
  foreign key("kodeCPL") references "cpl_prodi"("kodeCPL") on delete restrict on update cascade
);
CREATE TABLE IF NOT EXISTS "bahan_kajian"(
  "kodeBK" varchar not null,
  "namaBK" varchar not null,
  "kategoriBK" tinyint(1) not null,
  "referensiBK" varchar not null,
  "deleted_at" datetime,
  "created_at" datetime,
  "updated_at" datetime,
  primary key("kodeBK")
);
CREATE TABLE IF NOT EXISTS "detail_cplprodi_bk"(
  "kodeBK" varchar not null,
  "kodeCPL" varchar not null,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("kodeBK") references "bahan_kajian"("kodeBK") on delete restrict,
  foreign key("kodeCPL") references "cpl_prodi"("kodeCPL") on delete restrict
);
CREATE TABLE IF NOT EXISTS "mata_kuliah"(
  "kodeMK" varchar not null,
  "namaProdi" varchar,
  "penanggung_jawab" varchar,
  "pengampu" varchar,
  "namaMK" varchar not null,
  "jenisMK" integer not null,
  "sks" integer not null,
  "mat_kodeMK" varchar,
  "semester" integer,
  "kategoriMK" integer not null,
  "deskripsiMK" text,
  "prasyaratTambahan" text,
  "deleted_at" datetime,
  "created_at" datetime,
  "updated_at" datetime,
  "ects" float,
  foreign key("namaProdi") references "prodi"("namaProdi") on delete restrict,
  foreign key("penanggung_jawab") references "users"("nip") on delete restrict,
  foreign key("pengampu") references "users"("nip") on delete restrict,
  primary key("kodeMK")
);
CREATE TABLE IF NOT EXISTS "detail_bk_mk"(
  "kodeBK" varchar not null,
  "kodeMK" varchar not null,
  "created_at" datetime not null default CURRENT_TIMESTAMP,
  foreign key("kodeBK") references "bahan_kajian"("kodeBK") on delete restrict,
  foreign key("kodeMK") references "mata_kuliah"("kodeMK") on delete restrict
);
CREATE TABLE IF NOT EXISTS "rps"(
  "id_rps" varchar not null,
  "nip" varchar,
  "kodeMK" varchar,
  "tahunAjaran" integer,
  "semester" integer,
  "diperiksa_oleh" varchar,
  "disetujui_oleh" varchar,
  "dibuat_oleh" varchar,
  "penanggungJawab" varchar,
  "dosenPengampu" varchar,
  "detail_penilaian" text,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("nip") references "users"("nip") on delete restrict on update cascade,
  foreign key("kodeMK") references "mata_kuliah"("kodeMK") on delete restrict,
  primary key("id_rps")
);
CREATE TABLE IF NOT EXISTS "cpmk"(
  "kodeCPMK" varchar not null,
  "deskripsiCPMK" text not null,
  "kodeCPL" varchar not null,
  "deleted_at" datetime,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("kodeCPL") references "cpl_prodi"("kodeCPL") on delete restrict,
  primary key("kodeCPMK")
);
CREATE TABLE IF NOT EXISTS "detail_mk_cpmk"(
  "id" integer primary key autoincrement not null,
  "kodeMK" varchar not null,
  "kodeCPMK" varchar not null,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("kodeMK") references "mata_kuliah"("kodeMK") on delete restrict on update cascade,
  foreign key("kodeCPMK") references "cpmk"("kodeCPMK") on delete restrict on update cascade
);
CREATE TABLE IF NOT EXISTS "subcpmk"(
  "kodeSubCPMK" varchar not null,
  "deskripsiSubCPMK" text not null,
  "kodeCPMK" varchar not null,
  "kriteriaPenilaian" text not null,
  "indikatorPenilaian" text not null,
  "deleted_at" datetime,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("kodeCPMK") references "cpmk"("kodeCPMK") on delete restrict,
  primary key("kodeSubCPMK")
);
CREATE TABLE IF NOT EXISTS "teknik_penilaian"(
  "kodePenilaian" varchar not null,
  "teknikPenilaian" varchar not null,
  "bobotPenilaian" integer not null,
  "kriteriaPenilaian" varchar not null,
  "tahapPenilaian" varchar not null,
  "instrumenPenilaian" varchar not null,
  "created_at" datetime,
  "updated_at" datetime,
  primary key("kodePenilaian")
);
CREATE TABLE IF NOT EXISTS "detail_rps_penilaian"(
  "id_rps" varchar,
  "kodePenilaian" varchar,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("id_rps") references "rps"("id_rps") on delete restrict,
  foreign key("kodePenilaian") references "teknik_penilaian"("kodePenilaian") on delete restrict
);
CREATE TABLE IF NOT EXISTS "mahasiswa"(
  "nim" varchar not null,
  "namaMahasiswa" varchar not null,
  "tahunMasuk" integer not null,
  "deleted_at" datetime,
  "created_at" datetime,
  "updated_at" datetime,
  primary key("nim")
);
CREATE TABLE IF NOT EXISTS "kelas"(
  "kodeKelas" varchar not null,
  "id_rps" varchar,
  "namaKelas" varchar not null,
  "jadwal" text not null,
  "kuota" integer not null,
  "kodeMK" varchar not null,
  "deleted_at" datetime,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("id_rps") references "rps"("id_rps") on delete restrict,
  foreign key("kodeMK") references "mata_kuliah"("kodeMK") on delete restrict,
  primary key("kodeKelas")
);
CREATE TABLE IF NOT EXISTS "nilai_mahasiswa"(
  "kodeNilai" varchar not null,
  "nim" varchar not null,
  "kodeKelas" varchar not null,
  "kodeRPS" varchar not null,
  "semesterAmbil" varchar not null,
  "nilaiAkhir" integer,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("nim") references "mahasiswa"("nim") on delete restrict on update cascade,
  foreign key("kodeKelas") references "kelas"("kodeKelas") on delete restrict on update cascade,
  foreign key("kodeRPS") references "rps"("id_rps") on delete restrict on update cascade,
  primary key("kodeNilai")
);
CREATE TABLE IF NOT EXISTS "detail_nilai_mahasiswa"(
  "id_rps" varchar,
  "nilaiPerTeknik" varchar not null,
  "kodePenilaian" varchar,
  "nim" varchar,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("id_rps") references "rps"("id_rps") on delete restrict,
  foreign key("kodePenilaian") references "teknik_penilaian"("kodePenilaian") on delete cascade,
  foreign key("nim") references "mahasiswa"("nim") on delete cascade
);
CREATE TABLE IF NOT EXISTS "page"(
  "pemetaan" varchar not null,
  "deskripsi" text not null,
  "created_at" datetime,
  "updated_at" datetime,
  primary key("pemetaan")
);
CREATE TABLE IF NOT EXISTS "pustakas"(
  "id_pustaka" integer primary key autoincrement not null,
  "nama_penulis" varchar,
  "tahun" integer,
  "judul" varchar not null,
  "penerbit" varchar,
  "referensi" varchar,
  "deleted_at" datetime,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE TABLE IF NOT EXISTS "prasyarat"(
  "id_mat_kodeMK" integer primary key autoincrement not null,
  "kodeMK" varchar not null,
  "mat_kodeMK" varchar,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("kodeMK") references "mata_kuliah"("kodeMK") on delete restrict,
  foreign key("mat_kodeMK") references "mata_kuliah"("kodeMK") on delete restrict
);
CREATE TABLE IF NOT EXISTS "detail_kelas"(
  "nim" varchar,
  "kodeKelas" varchar,
  "SemesterAmbil" integer,
  "NilaiAkhir" integer,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("nim") references "mahasiswa"("nim"),
  foreign key("kodeKelas") references "kelas"("kodeKelas")
);
CREATE TABLE IF NOT EXISTS "detail_pustaka_minggurps"(
  "id_pustaka" integer not null,
  "kodeMingguRPS" varchar not null,
  "detail_pustaka" text,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("id_pustaka") references "pustakas"("id_pustaka") on delete restrict,
  foreign key("kodeMingguRPS") references "minggu_rps"("kodeMingguRPS") on delete restrict
);
CREATE TABLE IF NOT EXISTS "pengampu"(
  "id_pengampu" integer primary key autoincrement not null,
  "id_rps" varchar not null,
  "kodeMK" varchar not null,
  "nip" varchar,
  "created_at" datetime not null default CURRENT_TIMESTAMP,
  foreign key("id_rps") references "rps"("id_rps") on delete restrict,
  foreign key("kodeMK") references "mata_kuliah"("kodeMK") on delete restrict,
  foreign key("nip") references "users"("nip") on delete restrict
);
CREATE TABLE IF NOT EXISTS "detail_metode_minggurps"(
  "id_metode" integer not null,
  "kodeMingguRPS" varchar not null,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("id_metode") references "metodes"("id_metode") on delete restrict,
  foreign key("kodeMingguRPS") references "minggu_rps"("kodeMingguRPS") on delete restrict
);
CREATE TABLE IF NOT EXISTS "teknik_penilaian_rps"(
  "id_teknik_penilaian" integer primary key autoincrement not null,
  "nama_teknik_penilaian" varchar,
  "deskripsi_teknik_penilaian" varchar,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE TABLE IF NOT EXISTS "instrumen_penilaian"(
  "id_instrumen_penilaian" integer primary key autoincrement not null,
  "nama_instrumen_penilaian" varchar,
  "deskripsi_instrumen_penilaian" varchar,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE TABLE IF NOT EXISTS "komponen_penilaian"(
  "id_komponen_penilaian" integer primary key autoincrement not null,
  "nama_komponen_penilaian" varchar not null,
  "id_rps" varchar,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("id_rps") references "rps"("id_rps") on delete restrict
);
CREATE TABLE IF NOT EXISTS "minggu_rps"(
  "kodeMingguRPS" varchar not null,
  "id_rps" varchar,
  "id_bentuk" integer,
  "id_media" integer,
  "kodeSubCPMK" varchar,
  "luring" tinyint(1),
  "penugasan" varchar,
  "waktuPembelajaran" text,
  "pengalaman_belajar" text,
  "bahan_kajian" text,
  "bobot_nilai" integer not null,
  "created_at" datetime,
  "updated_at" datetime,
  "id_instrumen_penilaian" integer,
  "id_teknik_penilaian" integer,
  "id_komponen_penilaian" integer,
  foreign key("id_instrumen_penilaian") references "instrumen_penilaian"("id_instrumen_penilaian") on delete restrict on update no action,
  foreign key("id_teknik_penilaian") references "teknik_penilaian_rps"("id_teknik_penilaian") on delete restrict on update no action,
  foreign key("id_komponen_penilaian") references "komponen_penilaian"("id_komponen_penilaian") on delete restrict on update no action,
  foreign key("id_rps") references "rps"("id_rps") on delete restrict on update no action,
  foreign key("id_bentuk") references "bentuks"("id_bentuk") on delete restrict on update no action,
  foreign key("id_media") references "media"("id_media") on delete restrict on update no action,
  foreign key("kodeSubCPMK") references "subcpmk"("kodeSubCPMK") on delete restrict on update no action,

  );

  CREATE TABLE IF NOT EXISTS "level_LO" (
    "kode" varchar not null,
    "cognitive_level" varchar not null,
    "created_at" datetime,
    "updated_at" datetime,
    "kata_kerja" varchar not null,
    primary key ("kode")
  );


INSERT INTO migrations VALUES(1,'2012_04_28_150137_create_Prodi_table',1);
INSERT INTO migrations VALUES(2,'2014_10_12_000000_create_users_table',1);
INSERT INTO migrations VALUES(3,'2014_10_12_100000_create_password_reset_tokens_table',1);
INSERT INTO migrations VALUES(4,'2014_10_12_100000_create_password_resets_table',1);
INSERT INTO migrations VALUES(5,'2019_08_19_000000_create_failed_jobs_table',1);
INSERT INTO migrations VALUES(6,'2019_12_14_000001_create_personal_access_tokens_table',1);
INSERT INTO migrations VALUES(7,'2022_11_19_120413_create_kriteria_penilaians_table',1);
INSERT INTO migrations VALUES(8,'2023_03_19_115843_create_metodes_table',1);
INSERT INTO migrations VALUES(9,'2023_03_19_120025_create_bentuks_table',1);
INSERT INTO migrations VALUES(10,'2023_03_19_120043_create_media_table',1);
INSERT INTO migrations VALUES(11,'2023_04_25_045801_create_CPL_SN_Dikti_table',1);
INSERT INTO migrations VALUES(12,'2023_04_25_050710_create_CPL_Prodi_table',1);
INSERT INTO migrations VALUES(13,'2023_04_25_060251_create_Detail_SN_CPLProdi_table',1);
INSERT INTO migrations VALUES(14,'2023_04_25_133457_create_Profil_Lulusan_table',1);
INSERT INTO migrations VALUES(15,'2023_04_25_133934_create_Detail_PL_CPLProdi_table',1);
INSERT INTO migrations VALUES(16,'2023_04_25_140446_create_Bahan_Kajian_table',1);
INSERT INTO migrations VALUES(17,'2023_04_25_140932_create_Detail_CPLProdi_BK_table',1);
INSERT INTO migrations VALUES(18,'2023_04_25_142546_create_Mata_Kuliah_table',1);
INSERT INTO migrations VALUES(19,'2023_04_25_142626_create_Detail_BK_MK_table',1);
INSERT INTO migrations VALUES(20,'2023_04_26_124622_create_RPS_table',1);
INSERT INTO migrations VALUES(21,'2023_04_26_140047_create_CPMK_table',1);
INSERT INTO migrations VALUES(22,'2023_04_26_140114_create_Detail_MK_CPMK_table',1);
INSERT INTO migrations VALUES(23,'2023_04_26_140134_create_SubCPMK_table',1);
INSERT INTO migrations VALUES(24,'2023_04_26_154908_create_Teknik_Penilaian_table',1);
INSERT INTO migrations VALUES(25,'2023_04_26_154909_create_Minggu_RPS_table',1);
INSERT INTO migrations VALUES(26,'2023_04_26_154939_create_Detail_RPS_Penilaian',1);
INSERT INTO migrations VALUES(27,'2023_04_28_045824_create_Mahasiswa_table',1);
INSERT INTO migrations VALUES(28,'2023_04_28_045856_create_Kelas_table',1);
INSERT INTO migrations VALUES(29,'2023_04_28_050116_create_Nilai_Mahasiswa_table',1);
INSERT INTO migrations VALUES(30,'2023_04_28_050125_create_Detail_Nilai_Mahasiswa_table',1);
INSERT INTO migrations VALUES(31,'2023_04_28_150159_create_Page_table',1);
INSERT INTO migrations VALUES(32,'2023_11_19_121024_create_pustakas_table',1);
INSERT INTO migrations VALUES(33,'2023_11_19_121913_create_prasyarat_table',1);
INSERT INTO migrations VALUES(34,'2023_11_19_123339_detail_kelas',1);
INSERT INTO migrations VALUES(35,'2023_11_19_142253_detail_pustaka_minggurps',1);
INSERT INTO migrations VALUES(36,'2023_12_06_114407_create_pengampu_table',1);
INSERT INTO migrations VALUES(37,'2023_12_10_090729_add_ects_atribut_to__mata__kuliah_table',1);
INSERT INTO migrations VALUES(38,'2024_04_03_023724_create_detail_metode_minggurps_table',1);
INSERT INTO migrations VALUES(39,'2024_04_03_024354_create_teknik_penilaian_rps',1);
INSERT INTO migrations VALUES(40,'2024_04_03_030915_create_instrumen_penilaian_table',1);
INSERT INTO migrations VALUES(41,'2024_04_30_080341_create_komponen_penilaians_table',1);
INSERT INTO migrations VALUES(42,'2024_05_03_031001_add_id_instrumen_penilaian_to_minggurps',1);
INSERT INTO migrations VALUES(43,'2024_05_06_031751_change_bobot_type_in_minggu_rps_table',1);
