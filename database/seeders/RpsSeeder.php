<?php

namespace Database\Seeders;

use App\Models\RPS;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //FPB Praktikum
        RPS::create([
            'id_rps' => 'SIA2052103',
            'nip' => '198206062007101001',
            'kodeMK' => 'SIA205',
            'tahunAjaran' => 2021,
            'semester' => 3,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '198206062007101001',
            'penanggungJawab' => '198206062007101001',
            'dosenPengampu' => '["198206062007101001","198002172005012001"]',
            'detail_penilaian' => 'NA = Tugas (30%), UTS (30%), UAS (30%), <em>SoftSkill</em> (10%)',
        ]);

        //Statistika Inferensi
        RPS::create([
            'id_rps' => 'MAS2342103',
            'nip' => '197102111997021001',
            'kodeMK' => 'MAS234',
            'tahunAjaran' => 2021,
            'semester' => 3,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197102111997021001',
            'penanggungJawab' => '197102111997021001',
            'dosenPengampu' => '["197102111997021001","197206021998022001"]',
            'detail_penilaian' => 'NA = UAS (30%), UTS (30%), Tugas (20%), <em>Quiz</em> (15%), <em>soft skills</em> (5%)',
        ]);

        //Statistika Deskriptif
        RPS::create([
            'id_rps' => 'MAS1182102',
            'nip' => '196609281991021001',
            'kodeMK' => 'MAS118',
            'tahunAjaran' => 2021,
            'semester' => 2,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '196609281991021001',
            'penanggungJawab' => '196609281991021001',
            'dosenPengampu' => '["196609281991021001","197206021998022001"]',
            'detail_penilaian' => 'NA = UAS (40%), UTS (40%), Tugas (20%)',
        ]);

        //Matriks dan Transformasi Linier
        RPS::create([
            'id_rps' => 'MAL1032102',
            'nip' => '197102111997021001',
            'kodeMK' => 'MAL103',
            'tahunAjaran' => 2021,
            'semester' => 2,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197102111997021001',
            'penanggungJawab' => '197102111997021001',
            'dosenPengampu' => '["197102111997021001","196609051991022001"]',
            'detail_penilaian' => 'NA = Tugas (20%), Kuis (15%), UTS (30%), UAS (30%), <em>Soft Skill</em> (5%)',
        ]);

        //Komunikasi dan Pengembangan Diri
        RPS::create([
            'id_rps' => 'MNM1062102',
            'nip' => '196902031994031001',
            'kodeMK' => 'MNM106',
            'tahunAjaran' => 2021,
            'semester' => 2,
            'diperiksa_oleh' => '',
            'disetujui_oleh' => '',
            'dibuat_oleh' => '196902031994031001',
            'penanggungJawab' => '196902031994031001',
            'dosenPengampu' => '["196902031994031001",""]',
            'detail_penilaian' => '<p>Struktur Makalah:</br>Bab I&ensp;&emsp;: Pendahuluan: latar belakang, tujuan umum dan tujuan khusus</br>Bab II&ensp;&emsp;: Tinjauan pustaka</br>Bab III &emsp;: Studi Kasus (pengembangan kelompok)</br>Bab IV&emsp;: Pembahasan</br>Bab V &emsp;: Penutup: Kesimpulan dan Saran</p><p>Pengumpulan tugas (makalah) adalah maksimal 3 hari sebelum presentasi ke dosen pengampu. Bagi kelompok yang terlambat mengumpulkan 1 hari mendapat nilai hanya 75%nya, lebih dari satu hari mendapat nilai 50%.</br>Makalah dipresentasikan sesuai dengan jadwal yang telah ditentukan dan disepakati bersama.</br>Revisi Makalah yang sudah dipresentasikan dikumpulkan maksimal 1 minggu setelah presentasi.</p><p>Dalam menentukan nilai akhir , akan dilakukan pembobotan sebagai berikut:&nbsp;</p><figure class="table"><table boder="5"><tr><th>No</th><th>Aspek</th><th>Persentase</th></tr><tr><td>1.</td><td>Ujian Tengah Semester</td><td>30%</td></tr><tr><td>2.</td><td>Ujian Akhir Semester</td><td>30%</td></tr><tr><td>3.</td><td>Penugasan makalah SGD/Roleplay</td><td>20%</td></tr><tr><td>4.</td><td>Penugasan SDL</td><td>15%</td></tr><tr><td>5.</td><td>Kehadiran</td><td>5%</td></tr></table></figure>&nbsp;<p>Penilaian kegiatan seminar/diskusi/Role Play</p><figure class="table"><table boder="1"><tr><th>No</th><th>Item yang Dinilai</th><th>Nilai</th></tr><tr><td>1.</td><td><b>Diskusi ( nilai 1-10)</b></td><td></td></tr><tr><td></td><td>a. Persiapan kelompok</td><td></td></tr><tr><td></td><td>b. Penyampaian tujuan</td><td></td></tr><tr><td></td><td>c. Kelengkapan data kasus</td><td></td></tr><tr><td></td><td>d. Analisis masalah</td><td></td></tr><tr><td></td><td>e. Ketepatan intervensi</td><td></td></tr><tr><td></td><td>f. Kemampuan merespon jawaban</td><td></td></tr><tr><td></td><td>g. Kemampuan menerima masukan</td><td></td></tr><tr><td></td><td>h. Kemampuan presentasi/penyajian</td><td></td></tr><tr><td>2.</td><td><b>Role Play ( 1-5)</b></td><td></td></tr><tr><td></td><td>a. Persiapan kelompok</td><td></td></tr><tr><td></td><td>b. Pemerataan pembagian peran</td><td></td></tr><tr><td></td><td>c. Kekompakan kelompok</td><td></td></tr><tr><td></td><td><b>TOTAL (maximal 100)</b></td><td></td></tr></table></figure>&nbsp;<p>Penilaian kegiatan SDL</p><figure class="table"><table boder="1"><tr><th>No</th><th>Item yang Dinilai</th><th>Nilai</th></tr><tr><td>1.</td><td>Kreatifitas</td><td></td></tr><tr><td>2.</td><td>Kemampuan menyampaikan ide</td><td></td></tr><tr><td>3.</td><td>Kemampuan appraisal jurnal/internet</td><td></td></tr><tr><td>4.</td><td>Kemampuan pemetaan konsep</td><td></td></tr><tr><td>5.</td><td>Berfikir kritis</td><td></td></tr></table></figure><p>Catt: SDL melakukan appraisal jurnal jurnal penelitian</p>&nbsp;<p><b>Skoring Atribut Soft Skill :</b></p><figure class="table"><table boder="1"><tr><th>Atrbut</th><th>Definisi</th><th>Indikator</th><th>Skoring</th></tr><tr><td>Disiplin (datang tepat waktu)</td><td>Hadir dalam kegiatan pembelajaran sesuai kontrak waktu</td><td>Kehadiran</td><td>1 = Tidak hadir<br/>2 = Hadir terlambat > 15 menit<br/>3 = Hadir terlambat 10-15 menit<br/>4 = Hadir terlambat < 10 menit<br/>5 = Hadir tepat waktu</td></tr><tr><td>Disiplin (pengumpulan tugas)</td><td>Tugas yang diberikan dosen dikumpulkan sesuai kontrak waktu</td><td>Tugas terkumpul</td><td>1 = Tugas terlambat 4 hari (-80%)</br>2 = Tugas terlambat 3 hari (-60%)</br>3 = Tugas terlambat 2 hari (- 40%)</br>4 = Tugas terlambat 1 hari (- 20%)</br>5 = Tugas dikumpulkan tepat waktu (100%)</td></tr><tr><td>Etika</td><td>Berperilaku sesuai norma yang ditetapkan dalam pembelajaran</td><td>Pembicaraan/Obrolan yang tidak jelas tujuannya</td><td>1 = Menghargai sesama</br>2 = Santun dalam bahasa dan sikap</br>3 = Menghormati norma yang berlaku yang ditetapkan dalam pembelajaran</td></tr><tr><td>Keaktifan</td><td>Keikutsertaan aktif dalam kegiatan pembelajaran</td><td>Partisipasi dlm (bertanya, menjawab, mengemukakan pendapat)</td><td>1 = Tidak bertanya dan tidak menjawab</br>2 = Aktif bertanya</br>3 = Aktif menjawab</br>4 = Aktif bertanya, menjawab dan menyampaikan pendapat</td></tr><tr><td>Kerjasama</td><td>Kemampuan berinteraksi dan dengan kelompok</td><td>Kontribusi secara aktif, bekerja secara produktif, menunjukkan fleksibilitas, tanggungjawab dan sikap menghargai</td><td>1 = Tidak berkomunikasi dan bekerjasama dengan tim</br>2 = Berkomunikasi dengan aktif</br>3 = Kerjasama secara produktif dengan tim</br>4 = Aktif berkomunikasi, bekerjasama tim, menunjukkan fleksibiltas, tanggungjawab dan menghargai</td></tr></table></figure>',
        ]);

        //Pengantar Kolaborasi Keilmuan
        RPS::create([
            'id_rps' => 'MNM1072102',
            'nip' => '197606162014092006',
            'kodeMK' => 'MNM107',
            'tahunAjaran' => 2021,
            'semester' => 2,
            'diperiksa_oleh' => '',
            'disetujui_oleh' => '',
            'dibuat_oleh' => '197606162014092006',
            'penanggungJawab' => '197606162014092006',
            'dosenPengampu' => '["197606162014092006","197502222009122001","196906211997032001","198206182015041001","139040676","197703162005012001","198604122015043101"]',
            'detail_penilaian' => '<p><b>TUGAS KELOMPOK</b><ol><li>SGD konsep dasar leadership dan pengambilan keputusan (Kelompok 1 dan Kelompok 2)</li><li>SGD komunikasi dan kerjasama tim (Kelompok 3 dan Kelompok 4)</li><li>SGD komunikasi kolaborasi (Kelompok 5 dan Kelompok 6)</li><li>SGD konsep dasar komunitas dan kolaborasi dalam komunitas (Kelompok 7 dan Kelompok 8)</li><li>PjBL merupakan project kelompok di kelas dengan mengangkat tema terkait dengan pilihan topik modul IPE. Topik PjBL didiskusikan dengan PJMK sejak awal jelang UTS. Pelaksanaan PjBL disepakati antara mahasiswa dan PJMK.</li><li>CPjBL merupakan project satu kelas dengan mengangkat tema terkait dengan pilihan topik modul IPE. Topik CPjBL didiskusikan dengan PJMK sejak awal jelang UTS. Pelaksanaan PjBL disepakati antara mahasiswa dan PJMK.</li><li>Seminar IPE adalah satu kelas aplikasi tema IPE yang disampaikan dalam seminar besar akhir perkuliahan IPE</li></ol></p><p>Struktur Makalah:</br>Bab I&ensp;&emsp;: Pendahuluan: latar belakang, tujuan umum dan tujuan khusus</br>Bab II&ensp;&emsp;: Tinjauan pustaka</br>Bab III &emsp;: Studi Kasus (pengembangan kelompok)</br>Bab IV&emsp;: Pembahasan</br>Bab V &emsp;: Penutup: Kesimpulan dan Saran</p><p>Pengumpulan tugas (makalah) adalah maksimal 3 hari sebelum presentasi ke dosen pengampu. Bagi kelompok yang terlambat mengumpulkan 1 hari mendapat nilai hanya 75%nya, lebih dari satu hari mendapat nilai 50%.</br>Makalah dipresentasikan sesuai dengan jadwal yang telah ditentukan dan disepakati bersama.</br>Revisi Makalah yang sudah dipresentasikan dikumpulkan maksimal 1 minggu setelah presentasi.</p><p>Dalam menentukan nilai akhir, akan dilakukan pembobotan sebagai berikut:&nbsp;</p><figure class="table"><table boder="5"><tr><th>No</th><th>Aspek</th><th>Persentase</th></tr><tr><td>1.</td><td>Ujian Tengah Semester</td><td>25%</td></tr><tr><td>2.</td><td>Ujian Akhir Semester</td><td>25%</td></tr><tr><td>3.</td><td>Penugasan makalah SGD/Roleplay</td><td>15%</td></tr><tr><td>4.</td><td>PjBL</td><td>15%</td></tr><tr><td>5.</td><td>CPjBL</td><td>15%</td></tr><tr><td>6.</td><td>Evaluasi Seminar</td><td>5%</td></tr></table></figure>&nbsp;<p>Penilaian kegiatan seminar/diskusi/Role Play</p><figure class="table"><table boder="1"><tr><th>No</th><th>Item yang Dinilai</th><th>Nilai</th></tr><tr><td>1.</td><td><b>Diskusi ( nilai 1-10)</b></td><td></td></tr><tr><td></td><td>a. Persiapan kelompok</td><td></td></tr><tr><td></td><td>b. Penyampaian tujuan</td><td></td></tr><tr><td></td><td>c. Kelengkapan data kasus</td><td></td></tr><tr><td></td><td>d. Analisis masalah</td><td></td></tr><tr><td></td><td>e. Ketepatan intervensi</td><td></td></tr><tr><td></td><td>f. Kemampuan merespon jawaban</td><td></td></tr><tr><td></td><td>g. Kemampuan menerima masukan</td><td></td></tr><tr><td></td><td>h. Kemampuan presentasi/penyajian</td><td></td></tr><tr><td>2.</td><td><b>Role Play ( 1-5)</b></td><td></td></tr><tr><td></td><td>a. Persiapan kelompok</td><td></td></tr><tr><td></td><td>b. Pemerataan pembagian peran</td><td></td></tr><tr><td></td><td>c. Kekompakan kelompok</td><td></td></tr><tr><td></td><td><b>TOTAL (maximal 100)</b></td><td></td></tr></table></figure>&nbsp;<p>Penilaian kegiatan SDL</p><figure class="table"><table boder="1"><tr><th>No</th><th>Item yang Dinilai</th><th>Nilai</th></tr><tr><td>1.</td><td>Kreatifitas</td><td></td></tr><tr><td>2.</td><td>Kekompakan</td><td></td></tr><tr><td>3.</td><td>Kebermanfaatan project</td><td></td></tr><tr><td>4.</td><td>Kemampuan menyampaikan ide</td><td></td></tr><tr><td>5.</td><td>Kolaborasi dan kerjasama tim</td><td></td></tr></table></figure><p>Catt: Item 3 kebermanfaatan project penilaian dilakukan bersama masyarakat</p>&nbsp;<p><b>Skoring Atribut Soft Skill :</b></p><figure class="table"><table boder="1"><tr><th>Atrbut</th><th>Definisi</th><th>Indikator</th><th>Skoring</th></tr><tr><td>Disiplin (datang tepat waktu)</td><td>Hadir dalam kegiatan pembelajaran sesuai kontrak waktu</td><td>Kehadiran</td><td>1 = Tidak hadir<br/>2 = Hadir terlambat > 15 menit<br/>3 = Hadir terlambat 10-15 menit<br/>4 = Hadir terlambat < 10 menit<br/>5 = Hadir tepat waktu</td></tr><tr><td>Disiplin (pengumpulan tugas)</td><td>Tugas yang diberikan dosen dikumpulkan sesuai kontrak waktu</td><td>Tugas terkumpul</td><td>1 = Tugas terlambat 4 hari (-80%)</br>2 = Tugas terlambat 3 hari (-60%)</br>3 = Tugas terlambat 2 hari (- 40%)</br>4 = Tugas terlambat 1 hari (- 20%)</br>5 = Tugas dikumpulkan tepat waktu (100%)</td></tr><tr><td>Etika</td><td>Berperilaku sesuai norma yang ditetapkan dalam pembelajaran</td><td>Pembicaraan/Obrolan yang tidak jelas tujuannya</td><td>1 = Menghargai sesama</br>2 = Santun dalam bahasa dan sikap</br>3 = Menghormati norma yang berlaku yang ditetapkan dalam pembelajaran</td></tr><tr><td>Keaktifan</td><td>Keikutsertaan aktif dalam kegiatan pembelajaran</td><td>Partisipasi dlm (bertanya, menjawab, mengemukakan pendapat)</td><td>1 = Tidak bertanya dan tidak menjawab</br>2 = Aktif bertanya</br>3 = Aktif menjawab</br>4 = Aktif bertanya, menjawab dan menyampaikan pendapat</td></tr><tr><td>Kolaborasi/Kerjasama</td><td>Kemampuan berinteraksi dan dengan kelompok</td><td>Kontribusi secara aktif, bekerja secara produktif, menunjukkan fleksibilitas, tanggungjawab dan sikap menghargai</td><td>1 = Tidak berkomunikasi dan bekerjasama dengan tim</br>2 = Berkomunikasi dengan aktif</br>3 = Kerjasama secara produktif dengan tim</br>4 = Aktif berkomunikasi, bekerjasama tim, menunjukkan fleksibiltas, tanggungjawab dan menghargai</td></tr></table></figure>',
        ]);

        //Sistem Berbasis Pengetahuan
        RPS::create([
            'id_rps' => 'SIC4012107',
            'nip' => '198002172005012001',
            'kodeMK' => 'SIC401',
            'tahunAjaran' => 2021,
            'semester' => 7,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '198002172005012001',
            'penanggungJawab' => '198002172005012001',
            'dosenPengampu' => '["198002172005012001"]',
            'detail_penilaian' => '<p>Komponen penilaian:&nbsp;</p><p>NA = UAS (30%), UTS (30%), Tugas (35%), Softskill(5%)</p>',
        ]);

        //Audit Sistem Informasi
        RPS::create([
            'id_rps' => 'SII4042107',
            'nip' => '198206062007101001',
            'kodeMK' => 'SII404',
            'tahunAjaran' => 2021,
            'semester' => 7,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '198206062007101001',
            'penanggungJawab' => '198206062007101001',
            'dosenPengampu' => '["198206062007101001", "198105082005012001"]',
            'detail_penilaian' => '<p>&nbsp;</p><p><strong>Penilaian yang diberikan berdasarkan kriteria berikut:&nbsp;</strong></p><p>1. Nilai Akhir diperoleh melalui rumus&nbsp;</p><p>35% Tugas + 30% UTS +30% UAS + 5% Softskill&nbsp;</p><p>Tugas dalam mata kuliah audit sistem informasi berkaitan dengan penyusunan dokumen perangkat audit yang dilakukan secara berkelompok menggunakan studi kasus tertentu. Setiap kelompok mahasiswa menyusun dan melakukan simulasi audit dengan studi kasus yang berbeda-beda. Perbedaan studi kasus ditentukan dari ruang lingkup audit yang dipilih, standar/kerangka kerja yang digunakan, dan bidang bisnis organisasi yang diaudit. Setiap tugas dipresentasikan pada pertemuan yang telah ditentukan, yang hasilnya digunakan sebagai dasar untuk menentukan nilai tugas (sebesar 35%). Hasil akhir dari keseluruhan tugas, akan dipresentasikan secara komprehensif oleh setiap kelompok pada saat UAS, dan menjadi nilai UAS (sebesar 30%). Sehingga prosentase nilai yang diperoleh dari pembelajaran partisipatif dan kolaboratif melalui studi kasus adalah 65%.&nbsp;</p><p>2. Pengelompokan nilai adalah sebagai berikut:</p><figure class="table"><table><tbody><tr><td>Nilai</td><td>Point</td><td>Rentang Skor</td></tr><tr><td>4</td><td>A</td><td>75 - 100</td></tr><tr><td>3.5</td><td>AB</td><td>70 - 74,99</td></tr><tr><td>3</td><td>B</td><td>65 - 69,99</td></tr><tr><td>2.5</td><td>BC</td><td>60 - 64,99</td></tr><tr><td>2</td><td>C</td><td>55 - 59,99</td></tr><tr><td>1</td><td>D</td><td>40 - 54,99</td></tr><tr><td>0</td><td>E</td><td>0 - 39,99</td></tr></tbody></table></figure><p>&nbsp;</p><p><strong>Deskripsi komponen penilaian:</strong></p><p>1. Penyusunan dokumen perangkat audit&nbsp;</p><p>Mahasiswa diminta untuk membuat dokumen perangkat audit yang minimal berupa: dokumen rencana audit, audit program, dan laporan audit. Studi kasus ditentukan berdasarkan ruang lingkup audit, standar/kerangka kerja yang digunakan, dan bidang bisnis organisasi yang diaudit. Setiap perangkan audit yang dihasilkan, harus dipresentasikan pada sesi pertemuan yang telah ditentukan dan menjadi dasar untuk penilaian komponen tugas.&nbsp;</p><p>2. UTS&nbsp;</p><p>UTS diselenggarakan sesuai dengan jadwal UTS yang telah ditetapkan oleh Universitas Airlangga. Bentuk soal UTS adalah uraian dan pilihan ganda.&nbsp;</p><p>3. UAS&nbsp;</p><p>UAS diselenggarakan sesuai dengan jadwal UAS yang telah ditetapkan oleh Universitas Airlangga. Bentuk soal UAS adalah pembahasan secara komprehensif terkait penyusunan dokumen perangkat audit dan simulasi pelaksanaan audit oleh setiap kelompok.</p>',
        ]);
        //pemograman mobile prak
        RPS::create([
            'id_rps' => 'SIS3052104',
            'nip' => '197101042008121001',
            'kodeMK' => 'SIS305',
            'tahunAjaran' => 2021,
            'semester' => 4,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197101042008121001',
            'penanggungJawab' => '197101042008121001',
            'dosenPengampu' => '197101042008121001',
            'detail_penilaian' => '<p>Komponen penilaian: </p><p> NA = Tugas (40%), UTS (25%), UAS (25%), Softskill (10%) </p><p> Tugas dalam bentuk progress proyek yang akan dikerjakan.</p>',
        ]);
        ////pemograman mobile teo
        RPS::create([
            'id_rps' => 'SIS3042104',
            'nip' => '197101042008121001',
            'kodeMK' => 'SIS304',
            'tahunAjaran' => 2021,
            'semester' => 4,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197101042008121001',
            'penanggungJawab' => '197101042008121001',
            'dosenPengampu' => '197101042008121001',
            'detail_penilaian' => '<p>Komponen penilaian: </p> <p>NA = Tugas (30%), UTS (30%), UAS (30%), Softskill (10%)</p>',
        ]);
        //pemograman web prak
        RPS::create([
            'id_rps' => 'SIS2052104',
            'nip' => '197101042008121001',
            'kodeMK' => 'SIS205',
            'tahunAjaran' => 2021,
            'semester' => 4,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197101042008121001',
            'penanggungJawab' => '197101042008121001',
            'dosenPengampu' => '197101042008121001',
            'detail_penilaian' => '<p>Komponen penilaian: </p><p>NA = Tugas (25%), UTS (30%), UAS (35%), Softskill (10%)</p>',
        ]);
        //pemograman web teo
        RPS::create([
            'id_rps' => 'SIS2042104',
            'nip' => '197101042008121001',
            'kodeMK' => 'SIS204',
            'tahunAjaran' => 2021,
            'semester' => 4,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197101042008121001',
            'penanggungJawab' => '197101042008121001',
            'dosenPengampu' => '197101042008121001',
            'detail_penilaian' => '<p>Komponen penilaian: </p><p> NA = Tugas (25%), UTS (30%), UAS (35%), Softskill (10%)</p>',
        ]);
        //sistem enterprise
        RPS::create([
            'id_rps' => 'SIS2022104',
            'nip' => '197812172005012001',
            'kodeMK' => 'SIS202',
            'tahunAjaran' => 2021,
            'semester' => 4,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197812172005012001',
            'penanggungJawab' => '197812172005012001',
            'dosenPengampu' => '["197812172005012001", "198105082005012001"]',
            'detail_penilaian' => '<p>&nbsp;</p><p><strong>Penilaian yang diberikan berdasarkan kriteria berikut:</strong></p><p>1. Nilai Akhir diperoleh melalui rumus:</p><p>Tugas (20%), UTS (25%), UAS (30%), Kuis (20%), SoftSkill (5%)</p><p>Tugas pada minggu ke 11-13 berkaitan dengan analisis, pemodelan, dan perbaikan model proses bisnis di dalam sebuah enterprise untuk suatu kasus tertentu. Mahasiswa mengerjakan tugas tersebut secara berkelompok. Setiap kelompok mengerjakan tugas dengan studi kasus yang berbeda-beda. Perbedaan studi kasus ditentukan dari lingkup proses bisnis yang dikerjakan. Setiap progress dari tugas tersebut dipresentasikan pada pertemuan yang telah ditentukan, yang hasilnya digunakan sebagai dasar untuk menentukan nilai tugas sebesar 10%. Nilai Kuis 2 dengan bobot 10% diperoleh berdasarkan laporan akhir dari tugas di minggu 11-13. Sedangkan nilai UAS dengan bobot 30% diperoleh berdasarkan presentasi dan laporan akhir yang komprehensif, terkait tugas pada minggu 11-13. Sehingga bobot nilai yang diperoleh dari pembelajaran partisipatif dan kolaboratif melalui studi kasus adalah 50%.</p><p>2. Pengelompokan nilai adalah sebagai berikut:</p><figure class="table"><table><tbody><tr><td>Nilai</td><td>Point</td><td>Rentang Skor</td></tr><tr><td>4</td><td>A</td><td>75 - 100</td></tr><tr><td>3.5</td><td>AB</td><td>70 - 74,99</td></tr><tr><td>3</td><td>B</td><td>65 - 69,99</td></tr><tr><td>2.5</td><td>BC</td><td>60 - 64,99</td></tr><tr><td>2</td><td>C</td><td>55 - 59,99</td></tr><tr><td>1</td><td>D</td><td>40 - 54,99</td></tr><tr><td>0</td><td>E</td><td>0 - 39,99</td></tr></tbody></table></figure><p>Catatan:</p><ul><li>Pada perkuliahan minggu ke 11-13, sesi ceramah hanya dilakukan untuk menyampaikan agenda perkuliahan dan mereview materi sebelumnya sekitar 10 menit. Kemudian dilakukan presentasi dan diskusi 140 menit untuk membahas hasil dari tugas yang telah diberikan sebelumnya. Studi kasus dilakukan sebagai tugas terstruktur dan dikerjakan oleh</li></ul>',
        ]);
        //APS Teori
         RPS::create([
            'id_rps' => 'SII3012104',
            'nip' => '199203222019032018',
            'kodeMK' => 'SII301',
            'tahunAjaran' => 2021,
            'semester' => 4,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197812172005012001',
            'penanggungJawab' => '198410272010122005',
            'dosenPengampu' => '198410272010122005',
            'detail_penilaian' => '<p>Komponen Penilaian:</p><p>NA = Tugas (25%), Quiz (10%), UTS (30%), UAS (30%), SoftSkill (5%)</p>',
        ]);
        //APS Prak
        RPS::create([
            'id_rps' => 'SII3142104',
            'nip' => '199203222019032018',
            'kodeMK' => 'SII314',
            'tahunAjaran' => 2021,
            'semester' => 4,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '199203222019032018',
            'penanggungJawab' => '199203222019032018',
            'dosenPengampu' => '["199203222019032018", "198002172005012001"]',
            'detail_penilaian' => '<p>Komponen Penilaian:</p><p>NA = Tugas (30%), UTS (30%), UAS (30%), SoftSkill (10%)</p><p>Keterangan:</p><p>Keseluruhan tugas yang diberi dalam mata kuliah ini diadopsi dari bentuk sederhana sistem informasi yang nyata terjadi dan digunakan oleh masyarakat</p>
',
        ]);
        //Jarkom Praktikum
        RPS::create([
            'id_rps' => 'SIJ2042104',
            'nip' => '199203222019032018',
            'kodeMK' => 'SIJ204',
            'tahunAjaran' => 2021,
            'semester' => 4,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197101042008121001',
            'penanggungJawab' => '197101042008121001',
            'dosenPengampu' => '197101042008121001',
            'detail_penilaian' => '<p>Komponen Penilaian:</p><p>NA = Laporan praktikum (60%), Presensi(30%), SoftSkill (5%)</p>',
        ]);
        //Desain Interaksi Teori
        RPS::create([
            'id_rps' => 'SII2082104',
            'nip' => '199203222019032018',
            'kodeMK' => 'SII208',
            'tahunAjaran' => 2021,
            'semester' => 4,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197812172005012001',
            'penanggungJawab' => '197812172005012001',
            'dosenPengampu' => '197812172005012001',
            'detail_penilaian' => '<p>Komponen Penilaian:</p><p>NA = Tugas (20%), Quiz(20%), UTS (25%), UAS (30%), SoftSkill (5%)</p><p>Catatan:</p><p>Tugas yang diberikan berupa tugas kelompok berupa permasalahan yang harus didiskusikan(problem based learning) kemudian dipresentasikan</p>',
        ]);
        //Inovasi Sistem Informasi dan Teknologi
        RPS::create([
            'id_rps' => 'SII2132104',
            'nip' => '199203222019032018',
            'kodeMK' => 'SII213',
            'tahunAjaran' => 2021,
            'semester' => 4,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '198410272010122005',
            'penanggungJawab' => '198410272010122005',
            'dosenPengampu' => '198410272010122005',
            'detail_penilaian' => '<p>Komponen Penilaian:</p><p>NA = Tugas Presentasi Teknologi Terkini (25%), Tugas Presentasi Studi Kasus Perusahaan yang menerapkan Disruptive Innovation (25%), UTS (10%), UAS/Menciptakan Inovasi Sistem Informasi (30%), SoftSkill (10%)</p>',
        ]);
        //KSI
        RPS::create([
            'id_rps' => 'SIS3092104',
            'nip' => '199203222019032018',
            'kodeMK' => 'SIS309',
            'tahunAjaran' => 2021,
            'semester' => 4,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197801262006041001',
            'penanggungJawab' => '197801262006041001',
            'dosenPengampu' => '197801262006041001',
            'detail_penilaian' => '<p>Komponen Penilaian:</p><p>NA = UAS (35%), UTS (30%), Quiz dan Tugas (35%), SoftSkill (5%)</p>',
        ]);
        //Kewirausahaan dan bisnis sistem informasi
        RPS::create([
            'id_rps' => 'MNW4012104',
            'nip' => '199203222019032018',
            'kodeMK' => 'MNW401',
            'tahunAjaran' => 2021,
            'semester' => 4,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '196004211986011001',
            'penanggungJawab' => '196004211986011001',
            'dosenPengampu' => '196004211986011001',
            'detail_penilaian' => '<p>Komponen Penilaian:</p><p>NA = Tugas (25%), Quiz (10%), UTS (30%), UAS (30%), SoftSkill (5%)</p>',
        ]);
        //FPB Teori
        RPS::create([
            'id_rps' => 'SIA2042103',
            'nip' => '198410272010122005',
            'kodeMK' => 'SIA204',
            'tahunAjaran' => 2021,
            'semester' => 3,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '198410272010122005',
            'penanggungJawab' => '198410272010122005',
            'dosenPengampu' => '["198410272010122005","198002172005012001"]',
            'detail_penilaian' => 'NA = Tugas (25%), Quiz (10%), UTS (30%), UAS (30%), SoftSkill (5%)',
        ]);

        //Basis Data Praktikum
        RPS::create([
            'id_rps' => 'SID2032103',
            'nip' => '197107122008122001',
            'kodeMK' => 'SID203',
            'tahunAjaran' => 2021,
            'semester' => 3,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197107122008122001',
            'penanggungJawab' => '197107122008122001',
            'dosenPengampu' => '["197107122008122001","197101042008121001", "199203222019032018"]',
            'detail_penilaian' => 'NA = Tugas (30%), UTS (30%), UAS (35%), Softskill (5%)',
        ]);

        //Basis Data Teori
        RPS::create([
            'id_rps' => 'SID2012103',
            'nip' => '198706252012122002',
            'kodeMK' => 'SID201',
            'tahunAjaran' => 2021,
            'semester' => 3,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '198706252012122002',
            'penanggungJawab' => '198706252012122002',
            'dosenPengampu' => '["198706252012122002","197101042008121001"]',
            'detail_penilaian' => '55% Tugas + 20% UTS +20% UAS + 5% Softskill',
        ]);

        //Matematika Diskrit
        RPS::create([
            'id_rps' => 'MAL2042103',
            'nip' => '197102111997021001',
            'kodeMK' => 'MAL204',
            'tahunAjaran' => 2021,
            'semester' => 3,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197102111997021001',
            'penanggungJawab' => '197102111997021001',
            'dosenPengampu' => '["197102111997021001"]',
            'detail_penilaian' => 'NA = Tugas (20%), Quiz (20%), UTS (25%), UAS (30%), SoftSkill(5%)',
        ]);

        //PBO Praktikum
        RPS::create([
            'id_rps' => 'SIR2032103',
            'nip' => '196609281991021001',
            'kodeMK' => 'SIR203',
            'tahunAjaran' => 2021,
            'semester' => 3,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '196609281991021001',
            'penanggungJawab' => '196609281991021001',
            'dosenPengampu' => '["196609281991021001"]',
            'detail_penilaian' => 'NA = UAS 20%, UTS 20%, CML (Diskusi dan presentasi) 60%',
        ]);

        //PBO Teori
        RPS::create([
            'id_rps' => 'SIR2012103',
            'nip' => '196609281991021001',
            'kodeMK' => 'SIR201',
            'tahunAjaran' => 2021,
            'semester' => 3,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '196609281991021001',
            'penanggungJawab' => '196609281991021001',
            'dosenPengampu' => '["196609281991021001"]',
            'detail_penilaian' => 'NA = UAS (35%), UTS (30%), Tugas (20%), Quiz (15%)',
        ]);

        //Agama Budha I
        RPS::create([
            'id_rps' => 'AGB1012101',
            'nip' => '197102111997021001',
            'kodeMK' => 'AGB101',
            'tahunAjaran' => 2021,
            'semester' => 1,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197102111997021001',
            'penanggungJawab' => '197102111997021001',
            'dosenPengampu' => '["197102111997021001"]',
            'detail_penilaian' => 'NA = Tugas (25%), UTS (30%), UAS (35%), SoftSkill (10%)',
        ]);

        //Agama Hindu I
        RPS::create([
            'id_rps' => 'AGH1012101',
            'nip' => '197102111997021001',
            'kodeMK' => 'AGH101',
            'tahunAjaran' => 2021,
            'semester' => 1,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197102111997021001',
            'penanggungJawab' => '197102111997021001',
            'dosenPengampu' => '["197102111997021001"]',
            'detail_penilaian' => 'NA = Tugas (25%), UTS (30%), UAS (35%), SoftSkill (10%)',
        ]);

        //Agama Islam I
        RPS::create([
            'id_rps' => 'AGI1012101',
            'nip' => '197102111997021001',
            'kodeMK' => 'AGI101',
            'tahunAjaran' => 2021,
            'semester' => 1,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197102111997021001',
            'penanggungJawab' => '197102111997021001',
            'dosenPengampu' => '["197102111997021001"]',
            'detail_penilaian' => 'NA = Tugas (25%), UTS (30%), UAS (35%), SoftSkill (10%)',
        ]);

        //Agama Konghucu I
        RPS::create([
            'id_rps' => 'AGC1012101',
            'nip' => '197102111997021001',
            'kodeMK' => 'AGC101',
            'tahunAjaran' => 2021,
            'semester' => 1,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197102111997021001',
            'penanggungJawab' => '197102111997021001',
            'dosenPengampu' => '["197102111997021001"]',
            'detail_penilaian' => 'NA = Tugas (25%), UTS (30%), UAS (35%), SoftSkill (10%)',
        ]);

        //Agama Protestan I
        RPS::create([
            'id_rps' => 'AGP1012101',
            'nip' => '197102111997021001',
            'kodeMK' => 'AGP101',
            'tahunAjaran' => 2021,
            'semester' => 1,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197102111997021001',
            'penanggungJawab' => '197102111997021001',
            'dosenPengampu' => '["197102111997021001"]',
            'detail_penilaian' => 'NA = Tugas (25%), UTS (30%), UAS (35%), SoftSkill (10%)',
        ]);

        //Agama Katolik I
        RPS::create([
            'id_rps' => 'AGK1012101',
            'nip' => '197102111997021001',
            'kodeMK' => 'AGK101',
            'tahunAjaran' => 2021,
            'semester' => 1,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197102111997021001',
            'penanggungJawab' => '197102111997021001',
            'dosenPengampu' => '["197102111997021001"]',
            'detail_penilaian' => 'NA = Tugas (25%), UTS (30%), UAS (35%), SoftSkill (10%)',
        ]);

        //Pancasila
        RPS::create([
            'id_rps' => 'AGK1012101',
            'nip' => '197102111997021001', // pak hendra dulu
            'kodeMK' => 'NOP103',
            'tahunAjaran' => 2021,
            'semester' => 1,
            'diperiksa_oleh' => '197609012003121001',
            'disetujui_oleh' => '197603242002121001',
            'dibuat_oleh' => '197102111997021001', // pak hendra dulu
            'penanggungJawab' => '196508061992031002', 
            'dosenPengampu' => '["197102111997021001"]', // pak hendra dulu
            'detail_penilaian' => 'NA = Tugas (25%), UTS (30%), UAS (35%), SoftSkill (10%)',
        ]);

        //PSI
        RPS::create([
            'id_rps' => 'SII1032101',
            'nip' => '197102111997021001',
            'kodeMK' => 'SII103',
            'tahunAjaran' => 2021,
            'semester' => 1,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197102111997021001', // pak hendra dulu
            'penanggungJawab' => '197102111997021001', 
            'dosenPengampu' => '["197102111997021001"]', 
            'detail_penilaian' => 'NA = Tugas (25%), UTS (30%), UAS (35%), SoftSkill (10%)',
        ]);

        //Alpro teo
        RPS::create([
            'id_rps' => 'MAT1012102',
            'nip' => '196004211986011001',
            'kodeMK' => 'MAT101',
            'tahunAjaran' => 2021,
            'semester' => 2,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '196004211986011001', // pak kartono dulu
            'penanggungJawab' => '196004211986011001', 
            'dosenPengampu' => '["196004211986011001"]', 
            'detail_penilaian' => 'NA = Tugas (25%), UTS (30%), UAS (35%), SoftSkill (10%)',
        ]);

        //Alpro prak
        RPS::create([
            'id_rps' => 'MAT1022102',
            'nip' => '196004211986011001',
            'kodeMK' => 'MAT102',
            'tahunAjaran' => 2021,
            'semester' => 2,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '196004211986011001', // pak kartono dulu
            'penanggungJawab' => '196004211986011001', 
            'dosenPengampu' => '["196004211986011001","198105082005012001","197101042008121001","198206062007101001","197812172005012001","197107122008122001","199203222019032018"]', 
            'detail_penilaian' => 'NA = Tugas (25%), UTS (30%), UAS (35%), SoftSkill (10%)',
        ]);

        //Bing 1
        RPS::create([
            'id_rps' => 'BAE1112102',
            'nip' => '197102111997021001', // pak hendra dulu
            'kodeMK' => 'BAE111',
            'tahunAjaran' => 2021,
            'semester' => 2,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197102111997021001', // pak hendra dulu
            'penanggungJawab' => '197102111997021001', // pak hendra dulu
            'dosenPengampu' => '["197102111997021001"]', // pak hendra dulu
            'detail_penilaian' => 'NA = Tugas (25%), UTS (30%), UAS (35%), SoftSkill (10%)',
        ]);

        //Fisdas
        RPS::create([
            'id_rps' => 'FID1122102',
            'nip' => '197102111997021001', // pak hendra dulu
            'kodeMK' => 'FID112',
            'tahunAjaran' => 2021,
            'semester' => 2,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197102111997021001', // pak hendra dulu
            'penanggungJawab' => '197102111997021001', // pak hendra dulu
            'dosenPengampu' => '["197102111997021001"]', // pak hendra dulu
            'detail_penilaian' => 'NA = Tugas (25%), UTS (30%), UAS (35%), SoftSkill (10%)',
        ]);



        //etika profesi
        RPS::create([
            'id_rps' => 'ETT3012106',
            'nip' => '198410272010122005', //bu ira
            'kodeMK' => 'ETT301',
            'tahunAjaran' => 2021,
            'semester' => 6,
            'diperiksa_oleh' => '197102111997021001', // pak hendra
            'disetujui_oleh' => '196901091993031000', // pak eridani
            'dibuat_oleh' => '198410272010122005',
            'penanggungJawab' => '198410272010122005',
            'dosenPengampu' => '["198410272010122005"]',
            'detail_penilaian' => 'NA = Tugas (25%), Kuis (15%), UTS (25%), UAS (30%), SoftSkill (5%)',
        ]);

        //manajemen layanan ti
        RPS::create([
            'id_rps' => 'MNG2062106',
            'nip' => '198110282006041003', //pak indra
            'kodeMK' => 'MNG206',
            'tahunAjaran' => 2021,
            'semester' => 6,
            'diperiksa_oleh' => '197102111997021001', // pak hendra
            'disetujui_oleh' => '196901091993031000', // pak eridani
            'dibuat_oleh' => '198410272010122005',
            'penanggungJawab' => '198110282006041003',
            'dosenPengampu' => '["198110282006041003","198105082005012001"]',
            'detail_penilaian' => 'NA = Tugas (25%), Kuis (15%), UTS (25%), UAS (30%), SoftSkill (5%)',
        ]);

        //adb
        RPS::create([
            'id_rps' => 'MAS3242107',
            'nip' => '197102111997021001', 
            'kodeMK' => 'MAS324',
            'tahunAjaran' => 2021,
            'semester' => 7,
            'diperiksa_oleh' => '197102111997021001', // pak hendra
            'disetujui_oleh' => '196901091993031000', // pak eridani
            'dibuat_oleh' => '197102111997021001',
            'penanggungJawab' => '197102111997021001',
            'dosenPengampu' => '["197102111997021001","198002172005012001"]',
            'detail_penilaian' => 'NA = Tugas (35%), UTS (30%), UAS (30%), Soft skills (5%)',
        ]);


         //computer vision
         RPS::create([
            'id_rps' => 'SIC4042107',
            'nip' => '198002172005012001', // bu indah
            'kodeMK' => 'SIC404',
            'tahunAjaran' => 2021,
            'semester' => 7,
            'diperiksa_oleh' => '197102111997021001', // pak hendra
            'disetujui_oleh' => '196901091993031000', // pak eridani
            'dibuat_oleh' => '198002172005012001',
            'penanggungJawab' => '198002172005012001',
            'dosenPengampu' => '["198002172005012001"," 197107122008122001"]',
            'detail_penilaian' => 'NA = UAS (35%), UTS (35%), Tugas (25%), Softskill (5%)',
        ]);

        //data mining
        RPS::create([
            'id_rps' => 'SIC4022107',
            'nip' => '198002172005012001', // bu indah
            'kodeMK' => 'SIC402',
            'tahunAjaran' => 2021,
            'semester' => 7,
            'diperiksa_oleh' => '197102111997021001', // pak hendra
            'disetujui_oleh' => '196901091993031000', // pak eridani
            'dibuat_oleh' => '198002172005012001',
            'penanggungJawab' => '198002172005012001',
            'dosenPengampu' => '["198002172005012001"]',
            'detail_penilaian' => 'NA = UAS (35%), UTS (30%), Tugas (30%), Softskill (5%)',
        ]);

        //biomedik
        RPS::create([
            'id_rps' => 'SIR3012107',
            'nip' => '197102111997021001', //
            'kodeMK' => 'SIR301',
            'tahunAjaran' => 2021,
            'semester' => 7,
            'diperiksa_oleh' => '197102111997021001', // pak hendra
            'disetujui_oleh' => '196901091993031000', // pak eridani
            'dibuat_oleh' => '197102111997021001',
            'penanggungJawab' => '197102111997021001',
            'dosenPengampu' => '["197102111997021001"]',
            'detail_penilaian' => 'NA = Tugas (20%), Kuis (15%), UTS (30%), UAS (30%), Soft skills (5%)',
        ]);

          //manajemen risiko 
          RPS::create([
            'id_rps' => 'MNG4022107',
            'nip' => '198105082005012001', // bu eva
            'kodeMK' => 'MNG402',
            'tahunAjaran' => 2021,
            'semester' => 7,
            'diperiksa_oleh' => '197102111997021001', // pak hendra
            'disetujui_oleh' => '196901091993031000', // pak eridani
            'dibuat_oleh' => '198105082005012001',
            'penanggungJawab' => '198105082005012001',
            'dosenPengampu' => '["198105082005012001","198002172005012001"]',
            'detail_penilaian' => 'Tugas (30%), UTS (30%), UAS (35%), SoftSkill (5%)',
        ]);


        //pengujian perangkat lunak
        RPS::create([
            'id_rps' => 'SII4082107',
            'nip' => '198110282006041003', //
            'kodeMK' => 'SII408',
            'tahunAjaran' => 2021,
            'semester' => 7,
            'diperiksa_oleh' => '197102111997021001', // pak hendra
            'disetujui_oleh' => '196901091993031000', // pak eridani
            'dibuat_oleh' => '198110282006041003',
            'penanggungJawab' => '198110282006041003',
            'dosenPengampu' => '["198110282006041003"]',
            'detail_penilaian' => '35% Tugas + 30% UTS +30% UAS + 5% Softskill',
        ]);


          //ehealth
          RPS::create([
            'id_rps' => 'SII3172107',
            'nip' => '198410272010122005', //
            'kodeMK' => 'SII317',
            'tahunAjaran' => 2021,
            'semester' => 7,
            'diperiksa_oleh' => '197102111997021001', // pak hendra
            'disetujui_oleh' => '196901091993031000', // pak eridani
            'dibuat_oleh' => '198410272010122005',
            'penanggungJawab' => '198410272010122005',
            'dosenPengampu' => '["198410272010122005"]',
            'detail_penilaian' => 'NA = Tugas (30%), UTS (30%), UAS (35%), SoftSkill (5%)',
        ]); 


        //DI Praktikum
        /*RPS::create([
            'id_rps' => 'SID2032103',
            'nip' => '197107122008122001',
            'kodeMK' => 'SID203',
            'kodeRPS' => null,
            'tahunAjaran' => 2021,
            'semester' => 3,
            'disiapkan_oleh' => '197107122008122001',
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197107122008122001',
            'versi' => 1,
            'penanggungJawab' => '197107122008122001',
            'dosenPengampu' => '["197107122008122001","197101042008121001", "199203222019032018"]',
            'detail_penilaian' => 'NA = Tugas (30%), UTS (30%), UAS (35%), Softskill (5%)',
        ]);*/

        //Bahasa Inggris II
        RPS::create([
            'id_rps' => 'BAE1122105',
            'nip' => '197102111997021001', // pak hendra dulu
            'kodeMK' => 'BAE112',
            'tahunAjaran' => 2021,
            'semester' => 5,
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197102111997021001', // pak hendra dulu
            'penanggungJawab' => '197102111997021001', // pak hendra dulu
            'dosenPengampu' => '["197102111997021001"]', // pak hendra dulu
            'detail_penilaian' => 'NA = Tugas (30%), UTS (30%), UAS (30%), SoftSkill (10%)',
        ]);

        //Manajemen Proyek Teknologi Informai
        /*RPS::create([
            'id_rps' => 'SID2032103',
            'nip' => '198105082005012001',
            'kodeMK' => 'MNG310',
            'kodeRPS' => null,
            'tahunAjaran' => 2021,
            'semester' => 3,
            'disiapkan_oleh' => '197107122008122001',
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '198105082005012001',
            'versi' => 1,
            'penanggungJawab' => '197107122008122001',
            'dosenPengampu' => '["197107122008122001","197101042008121001", "199203222019032018"]',
            'detail_penilaian' => 'NA = Tugas (30%), UTS (30%), UAS (35%), Softskill (5%)',
        ]);*/

        //Metode Kuantitatif Bisnis
        /*RPS::create([
            'id_rps' => 'SID2032103',
            'nip' => '197107122008122001',
            'kodeMK' => 'SID203',
            'kodeRPS' => null,
            'tahunAjaran' => 2021,
            'semester' => 3,
            'disiapkan_oleh' => '197107122008122001',
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197107122008122001',
            'versi' => 1,
            'penanggungJawab' => '197107122008122001',
            'dosenPengampu' => '["197107122008122001","197101042008121001", "199203222019032018"]',
            'detail_penilaian' => 'NA = Tugas (30%), UTS (30%), UAS (35%), Softskill (5%)',
        ]);*/

        //Metodologi Penelitian
        /*RPS::create([
            'id_rps' => 'SID2032103',
            'nip' => '197107122008122001',
            'kodeMK' => 'SID203',
            'kodeRPS' => null,
            'tahunAjaran' => 2021,
            'semester' => 3,
            'disiapkan_oleh' => '197107122008122001',
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197107122008122001',
            'versi' => 1,
            'penanggungJawab' => '197107122008122001',
            'dosenPengampu' => '["197107122008122001","197101042008121001", "199203222019032018"]',
            'detail_penilaian' => 'NA = Tugas (30%), UTS (30%), UAS (35%), Softskill (5%)',
        ]);*/

        //Pembangunan Aplikasi Enterprise
        /*RPS::create([
            'id_rps' => 'SID2032103',
            'nip' => '197107122008122001',
            'kodeMK' => 'SID203',
            'kodeRPS' => null,
            'tahunAjaran' => 2021,
            'semester' => 3,
            'disiapkan_oleh' => '197107122008122001',
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197107122008122001',
            'versi' => 1,
            'penanggungJawab' => '197107122008122001',
            'dosenPengampu' => '["197107122008122001","197101042008121001", "199203222019032018"]',
            'detail_penilaian' => 'NA = Tugas (30%), UTS (30%), UAS (35%), Softskill (5%)',
        ]);*/

        //Tata Kelola Teknologi Informasi
        /*RPS::create([
            'id_rps' => 'SID2032103',
            'nip' => '197107122008122001',
            'kodeMK' => 'SID203',
            'kodeRPS' => null,
            'tahunAjaran' => 2021,
            'semester' => 3,
            'disiapkan_oleh' => '197107122008122001',
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197107122008122001',
            'versi' => 1,
            'penanggungJawab' => '197107122008122001',
            'dosenPengampu' => '["197107122008122001","197101042008121001", "199203222019032018"]',
            'detail_penilaian' => 'NA = Tugas (30%), UTS (30%), UAS (35%), Softskill (5%)',
        ]);*/

        //Temu Kembali Informasi
        /*RPS::create([
            'id_rps' => 'SID2032103',
            'nip' => '197107122008122001',
            'kodeMK' => 'SID203',
            'kodeRPS' => null,
            'tahunAjaran' => 2021,
            'semester' => 3,
            'disiapkan_oleh' => '197107122008122001',
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197107122008122001',
            'versi' => 1,
            'penanggungJawab' => '197107122008122001',
            'dosenPengampu' => '["197107122008122001","197101042008121001", "199203222019032018"]',
            'detail_penilaian' => 'NA = Tugas (30%), UTS (30%), UAS (35%), Softskill (5%)',
        ]);*/

        //Teori Sistem Informasi
        /*RPS::create([
            'id_rps' => 'SID2032103',
            'nip' => '197107122008122001',
            'kodeMK' => 'SID203',
            'kodeRPS' => null,
            'tahunAjaran' => 2021,
            'semester' => 3,
            'disiapkan_oleh' => '197107122008122001',
            'diperiksa_oleh' => '197102111997021001',
            'disetujui_oleh' => '196901091993031000',
            'dibuat_oleh' => '197107122008122001',
            'versi' => 1,
            'penanggungJawab' => '197107122008122001',
            'dosenPengampu' => '["197107122008122001","197101042008121001", "199203222019032018"]',
            'detail_penilaian' => 'NA = Tugas (30%), UTS (30%), UAS (35%), Softskill (5%)',
        ]);*/
    //047
    // 1. RPS Bahasa Indonesia 
    RPS::create([
        'id_rps' => 'BAI1012101',
        'nip' => '197102111997021001', // pak hendra dulu
        'kodeMK' => 'BAI101',
        'tahunAjaran' => 2021,
        'semester' => 1,
        'diperiksa_oleh' => '197102111997021001',
        'disetujui_oleh' => '196901091993031000',
        'dibuat_oleh' => '197102111997021001', // pak hendra dulu
        'penanggungJawab' => '197102111997021001', // pak hendra dulu
        'dosenPengampu' => '["111111111111111"]', // pak hendra dulu
        'detail_penilaian' => 'NA = 20% Tugas +10% softskill + 30% UTS + 30% UAS',
    ]);
    // 1. RPS Biologi Dasar
    RPS::create([
        'id_rps' => 'BID1082101',
        'nip' => '197102111997021001', // pak hendra dulu
        'kodeMK' => 'BID108',
        'tahunAjaran' => 2021,
        'semester' => 1,
        'diperiksa_oleh' => '197102111997021001',
        'disetujui_oleh' => '196901091993031000',
        'dibuat_oleh' => '197102111997021001', // pak hendra dulu
        'penanggungJawab' => '197102111997021001', // pak hendra dulu
        'dosenPengampu' => '["111111111111112"]', // pak hendra dulu
        'detail_penilaian' => 'NA = Tugas(30%)+UTS(30%)+UAS(30%)+Soft Skill(10%)',
    ]);
    // 1. RPS Data dan Pustaka
    RPS::create([
        'id_rps' => 'SIP1072101',
        'nip' => '197102111997021001', // pak hendra dulu
        'kodeMK' => 'SIP107',
        'tahunAjaran' => 2021,
        'semester' => 1,
        'diperiksa_oleh' => '197102111997021001',
        'disetujui_oleh' => '196901091993031000',
        'dibuat_oleh' => '197102111997021001', // pak hendra dulu
        'penanggungJawab' => '197102111997021001', // pak hendra dulu
        'dosenPengampu' => '["111111111111113"]', // pak hendra dulu
        'detail_penilaian' => '•Ujian Tengah Semester (Pilihan Ganda) : 35%
        •Kuis (Pilihan Ganda) : 20%
        •Ujian Akhir Semester (Pilihan Ganda) : 35%
        •Mini Literature Review : 10%',
    ]);
    // 1. RPS Kalkulus'
    RPS::create([
        'id_rps' => 'MAA1012101',
        'nip' => '197102111997021001', // pak hendra dulu
        'kodeMK' => 'MAA101',
        'tahunAjaran' => 2021,
        'semester' => 1,
        'diperiksa_oleh' => '197102111997021001',
        'disetujui_oleh' => '196901091993031000',
        'dibuat_oleh' => '197102111997021001', // pak hendra dulu
        'penanggungJawab' => '197102111997021001', // pak hendra dulu
        'dosenPengampu' => '["111111111111114"]', // pak hendra dulu
        'detail_penilaian' => 'PAP 90% , SoftSkills 10%',
    ]);
    // 1. RPS Kewarganegaraan
    RPS::create([
        'id_rps' => 'NOP1012101',
        'nip' => '197102111997021001', // pak hendra dulu
        'kodeMK' => 'NOP101',
        'tahunAjaran' => 2021,
        'semester' => 1,
        'diperiksa_oleh' => '197102111997021001',
        'disetujui_oleh' => '196901091993031000',
        'dibuat_oleh' => '197102111997021001', // pak hendra dulu
        'penanggungJawab' => '197102111997021001', // pak hendra dulu
        'dosenPengampu' => '["111111111111115"]', // pak hendra dulu
        'detail_penilaian' => '-',
    ]);
    // 1. RPS Kimia Dasar
    RPS::create([
        'id_rps' => 'KID1072101',
        'nip' => '197102111997021001', // pak hendra dulu
        'kodeMK' => 'KID107',
        'tahunAjaran' => 2021,
        'semester' => 1,
        'diperiksa_oleh' => '197102111997021001',
        'disetujui_oleh' => '196901091993031000',
        'dibuat_oleh' => '197102111997021001', // pak hendra dulu
        'penanggungJawab' => '197102111997021001', // pak hendra dulu
        'dosenPengampu' => '["111111111111116"]', // pak hendra dulu
        'detail_penilaian' => 'NA = UTS(35%),UAS(35%), Tugas (20%), soft skills (10%).',
    ]);

    }

}
