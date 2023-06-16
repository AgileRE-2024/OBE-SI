# OBE-SI
Project Kuliah Pembangunan Perangkat Lunak

- Penjelasan umum deskripsi project <br>
  Project ini merupakan sistem informasi untuk kurikulum program studi Sistem Informasi yang berbasis web. Project ini dibangun menggunakan Framework Laravel dan menggunakan database MySQL. Project ini berisi 3  fitur, antara lain Kurikulum, Penilaian, dan RPS. Setiap fitur dilakukan pemecahan menjadi banyak fitur. Kurikulum dibagi menjadi dua fitur dibawahnya, antara lain Data dan Pemetaan. Data adalah fitur yang digunakan untuk melakukan CRUD Master Data. Data yang digunakan adalah Profil Lulusan, CPL SNDikti, CPL Prodi, Bahan Kajian, Mata Kuliah, CPMK, dan Sub-CPMK. Sedangkan Pemetaan adalah matriks hubungan antara beberapa master data. Pemetaan matriks yang tersedia adalah BK-MK, CPL-BK, CPL-BK-MK, Susunan Mata Kuliah, Organisasi Mata Kuliah, CPL SNDikti-CPL Prodi, CPL-PL, CPL-CPMK-MK, dan MK-CPMK-SUBCPMK. Fitur Penilaian adalah pemetaan yang berfungsi untuk melihat jenis-jenis penilaian berdasarkan tahun. Lalu, Fitur RPS adalah untuk menampilkan dan membuat Rencana Pembelajaran Semester. RPS menampilkan fitur mencari RPS berdasarkan tahun. Jika belum tersedia, dapat dilakukan pembuatan. Jika tersedia, dapat dilakukan pengubahan data pada RPS.
- Petunjuk Instalasi<br>
  Tools yang perlu diinstal adalah PHP Version minimal 8.0, XAMPP, dan Composer.
    1. Setelah tools telah terpasang secara sempurna, masuk ke dalam direktori xampp yang dimana file tersebut disimpan.
    2. Masuk ke dalam direktori folder baru tersebut
    3. Klik kanan dan pilih Open in Terminal
    4. Melakukan clone project GitHub melalui CMD atau terminal dan ketik "git clone https://github.com/AirlanggaOBE/OBE-SI.git" 
    5. Selanjutnya, ketik masuk ke folder OBE-SI dan ketik "composer update"
    6. Lalu, ketik "cp .env.example .env"
    7. Kemudian buat database baru lalu buka file .env untuk merubah DB_DATABASE sesuai database yang dibuat.
    8. Lalu, ketik "php artisan key:generate"
    9. Ketik "php artisan migrate:fresh --seed"
    10. Ketik "php artisan serve"
    11. Lalu, aplikasi sudah berjalan dan melakukan pencarian di browser "http://127.0.0.1:8000"
    12. Jika terdapat pesan error, coba jalankan "php artisan optimize"
- Langkah-langkah Penggunaan
    1. Terdapat 3 role yaitu Admin, Kurikulum, dan Dosen
    2. Role Admin (role=2) merupakan role yang mempunyai hak untuk melihat semua fitur yang ada tanpa terlibat dengan Create, Update, dan Delete pada fitur tersebut.
    3. Role Kurikulum (Role=1) merupakan role yang mempunyai hak untuk melakukan Create, Update, dan Delete pada fitur kurikulum.
    4. Role Dosen (Role=0) merupakan role yang mempunyai hak untuk melakukan Create dab Update pada fitur RPS 
    5. Username menggunakan nip dan password yang digunakan telah diencrypt yakni coba123 (Pak Indra role Dosen dan Pak Badrus role Kurikulum)
- Langkah-langkah pengujian BDD
    1. Pastikan sudah laravel dusk sudah terinstall
    2. Jalankan perintah php artisan dusk
    3. Jika ingin menguji file tertentu gunakan perintah php artisan dusk --filter=namaFileTest
    4. Jika terdapat eror jalankan php artisan dusk:chrome-driver
    5. Untuk pengujian RPS skenario data tidak ditemukan, harus dipastikan data rps untuk mata kuliah SII103 tahun 2023 belum dibuat.
- Prosedur untuk kontribusi github
    1. Koordinator Github membuat branch untuk masing-masing kelompok
    2. Setiap kelompok melakukan edit sesuai fitur yang dibagikan
    3. Jika sudah selesai, perwakilan kelompok atau koordinator Github melakukan merge ke branch
- Informasi lain (anggota team) <br>
<table>
                <thead style="background-color: lightgray">
                    <tr>
                        <th scope="col"> Kelompok 1</th>
                        <th scope="col"> Kelompok 2</th>
                        <th scope="col"> Kelompok 3</th>
                        <th scope="col"> Kelompok 4</th>
                        <th scope="col"> Kelompok 5</th>
                        <th scope="col"> Kelompok 6</th>
                        <th scope="col"> Kelompok 7</th>
                        <th scope="col"> Kelompok 8</th>
                        <th scope="col"> Kelompok 9</th>
                        <th scope="col"> Kelompok 10</th>
                        <th > Kelompok 11</th>                       
                    </tr>
                </thead>
                <tbody>
                        <tr >
                                <td>Yohannes Alexander Agusti Sinaga</td>
                                <td>Reyhan Bayu Pratama</td>
                                <td>Tegar Alwinata Masyhuda</td>
                                <td>Auliya Rakhman Hidayat</td>
                                <td>Mirtha Aini Paradista</td>
                                <td>Mirza Amir Faizi</td>
                                <td>Andhika Davy Pratama</td>
                                <td>Iin Mardiyana</td>
                                <td>Malvin Mikhael Moningka</td>
                                <td>Robanu Dakhayin</td>
                                <td>Oxy Setyo Hapsari</td>
                        </tr>
                        <tr >
                                <td>Ananda Elang Satriatama Setyadji</td>
                                <td>Raden Sulthan Rafi Athallah</td>
                                <td>Gede Rangga Wira Aditya</td>
                                <td>Saifullah Satria Pamungkas</td>
                                <td>Endang Nurjanah</td>
                                <td>Tio Satrio Wibisono</td>
                                <td>Sabrina Sukma Febryanti</td>
                                <td>Naurah Hedy Pramiyas</td>
                                <td>Nyoman Agus Arya Dwija Sutha</td>
                                <td>Jasmine Yulis Saputri</td>
                                <td>Annisa Rahma Putri</td>
                        </tr>
                        <tr >
                                <td>Novia Nurhasanah Arrasyid</td>
                                <td>Kharristantie Sekarlangit Suryadewi</td>
                                <td>Virda Adisty Sahar</td>
                                <td>Zalfa' Rona Warsono</td>
                                <td>Arthalia</td>
                                <td>Amelia Nabilah</td>
                                <td>Sara Perselia Angaraini</td>
                                <td>Arum Tiyas Handayani</td>
                                <td>I Gusti Ngurah Arnold Matthew Diarta</td>
                                <td>Reina Amalia Febrianti Prabowo</td>
                                <td>Radindra Brahma Adya Pranata</td>
                        </tr>
                        <tr >
                                <td>Naufal Pradipta Bagus Erlangga</td>
                                <td>Rifansyah Setia Pratama</td>
                                <td>Wira Kusuma</td>
                                <td>Ayuni Putri Kusumah</td>
                                <td>Fakhrana Almas Syah Yahrani</td>
                                <td>Tria Amalia Ramadhani</td>
                                <td>Darren Febriand Nura Somba</td>
                                <td>Fildzah Akhlaqulkarimah</td>
                                <td>Shabrina Maulidya</td>
                                <td>Nur Rahmatulisa</td>
                                <td>Brilian Febrianie</td>
                        </tr>
                        <tr >
                                <td>Adhitya Tri Wicaksana Permana</td>
                                <td>Muhammad Rahmadhani Ferdiansyah</td>
                                <td>Rahadyan Kurnia Dharmaparayana</td>
                                <td>Ijmalul Lailiyah</td>
                                <td>Asma Audah</td>
                                <td>Ima Tri Indari</td>
                                <td>Aristo Riza Muhammad</td>
                                <td>F. Totty Valentino Yohanes Rumbiak</td>
                                <td>Fahri Muhlis Abdillah</td>
                                <td>Muhammad Affan Yuan Atras</td>
                                <td>Ari Prasetyo Wibowo</td>
                        </tr>
                        <tr >
                                <td></td>
                                <td>Arya Danu Triatmodjo</td>
                                <td>Andi Permana</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Faishal Ramadhan</td>
                                <td></td>
                                <td></td>
                                <td>Wildhan Syaddad Romadhon</td>
                                <td></td>
                        </tr>                       
                </tbody>    
  </table>

https://drive.google.com/drive/folders/12lf6vOQ3mz4MStva6hrn8c5VNN6NoMEb?usp=sharing
