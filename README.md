# OBE-SI: EduHigh

## Kelompok 2 PPL PRAK I3

| Nama                      | NIM       |
| ------------------------- | --------- |
| Ali Ahmad Fahrezy         | 187221042 |
| Ardisa Vian Rishadin      | 187221066 |
| Mohammad Afrizal Haykal K | 187221003 |
| Nabila Azra Reva          | 187221028 |
| Rizal Ahmad Doni          | 187221096 |

## Project Kuliah Pembangunan Perangkat Lunak 2024

### Penjelasan umum deskripsi project

Project ini merupakan sistem informasi untuk kurikulum program studi Sistem Informasi yang berbasis web. Project ini dibangun menggunakan Framework Laravel dan menggunakan database MySQL. Project ini berisi 3 fitur, antara lain Kurikulum, Penilaian, dan RPS. Setiap fitur dilakukan pemecahan menjadi banyak fitur. Kurikulum dibagi menjadi dua fitur dibawahnya, antara lain Data dan Pemetaan. Data adalah fitur yang digunakan untuk melakukan CRUD Master Data. Data yang digunakan adalah Profil Lulusan, CPL SNDikti, CPL Prodi, Bahan Kajian, Mata Kuliah, CPMK, dan Sub-CPMK. Sedangkan Pemetaan adalah matriks hubungan antara beberapa master data. Pemetaan matriks yang tersedia adalah BK-MK, CPL-BK, CPL-BK-MK, Susunan Mata Kuliah, Organisasi Mata Kuliah, CPL SNDikti-CPL Prodi, CPL-PL, CPL-CPMK-MK, dan MK-CPMK-SUBCPMK. Fitur Penilaian adalah pemetaan yang berfungsi untuk melihat jenis-jenis penilaian berdasarkan tahun. Lalu, Fitur RPP adalah untuk menampilkan dan membuat Rencana Pembelajaran Semester. RPP menampilkan fitur mencari RPP berdasarkan tahun. Jika belum tersedia, dapat dilakukan pembuatan. Jika tersedia, dapat dilakukan pengubahan data pada RPP.

### Petunjuk Instalasi

Tools yang perlu diinstal adalah PHP Version minimal 8.4, XAMPP, Composer, dan npm.

1. Aktifkan XAMPP dengan membuka XAMPP Control Panel. Tekan tombol "Start" pada module Apache dan MySQL.
2. Setelah tools telah terpasang secara sempurna, masuk ke dalam direktori xampp yang dimana file tersebut disimpan saat dilakukan penginstallan pertama kali
3. Buatlah sebuah folder dengan nama bebas dan masuk ke dalam direktori folder baru tersebut
4. Klik kanan dan pilih Open in Terminal
5. Melakukan clone project GitHub melalui CMD atau terminal dan ketik "git clone https://github.com/AirlanggaOBE/OBE-SI.git"
6. Selanjutnya, ketik masuk ke folder OBE-SI dan ketik "composer install"
7. Selanjutnya, ketik "npm install"
8. Lalu, ketik "cp .env.example .env"
9. Ubah DB_DATABASE, DB_USERNAME, dan DB_PASSWORD sesuai Database yang diinginkan
10. Lalu, ketik "php artisan key:generate"
11. Ketik "php artisan migrate"
12. Ketik "php artisan db:seed"
13. Ketik "npm run dev"
14. Buka terminal baru di folder lokasi yang sama
15. Ketik "php artisan serve"
16. Lalu, aplikasi sudah berjalan dan melakukan pencarian di browser "http://127.0.0.1:8000"
17. Jika terdapat pesan error, coba jalankan "php artisan optimize"

### Langkah-langkah Penggunaan

1. Terdapat 3 role yaitu Admin, Kurikulum, dan Dosen
2. Role Admin (role=2) merupakan role yang mempunyai hak untuk melihat semua fitur yang ada tanpa terlibat dengan Create, Update, dan Delete pada fitur tersebut.
3. Role Kurikulum (Role=1) merupakan role yang mempunyai hak untuk melakukan Create, Update, dan Delete pada fitur kurikulum.
4. Role Dosen (Role=0) merupakan role yang mempunyai hak untuk melakukan Create dab Update pada fitur RPS
5. Username menggunakan nip dan password yang digunakan telah diencrypt yakni coba123 atau coba 1234 (Pak Indra role Dosen dan Pak Badrus role Kurikulum)

### Langkah-langkah pengujian BDD

1. Pastikan sudah laravel dusk sudah terinstall
2. Jalankan perintah php artisan dusk
3. Jika ingin menguji file tertentu gunakan perintah php artisan dusk --filter=namaFileTest
4. Jika terdapat eror jalankan php artisan dusk:chrome-driver
5. Untuk pengujian RPS skenario data tidak ditemukan, harus dipastikan data rps untuk mata kuliah SII103 tahun 2023 belum dibuat.
