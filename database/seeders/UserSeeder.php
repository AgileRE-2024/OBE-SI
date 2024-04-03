<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nip' => '196901091993031000',
            'jabatanDosen' => 'Wakil Dekan I',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Dr. Eridani, M.Si',
            'password' => bcrypt('coba1234'), //password coba1234
            'email' => 'eridani@fst.unair.ac.id',
            'role' => 1,
            'status' => "Aktif Mengajar"
        ]);

        User::create([
            'nip' => '197206021998022001',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Dr. Nur Chamidah, S.Si., M.Si.', //sebenernya bukan dosen SI
            'password' => bcrypt('coba1234'), //password coba1234
            'email' => 'nur-c@fst.unair.ac.id',
            'role' => 0,
            'status' => "Aktif Mengajar"
        ]);

        User::create([
            'nip' => '196609281991021001',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Drs. Eto Wuryanto, DEA.',
            'password' => bcrypt('coba1234'), //password coba1234
            'email' => 'eto-w@fst.unair.ac.id',
            'role' => 0,
            'status' => "Aktif Mengajar"
        ]);

        User::create([
            'nip' => '198105082005012001',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Dr. Eva Hariyanti, S.Si., M.T.',
            'password' => bcrypt('coba1234'), //password coba1234
            'email' => 'eva.hariyanti@fst.unair.ac.id',
            'role' => 3,
            'status' => "Aktif Mengajar"
        ]);

        User::create([
            'nip' => '196609051991022001',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Dr. Inna Kuswandari, M.Si.',
            'password' => bcrypt('coba1234'), //password coba1234
            'email' => 'inna-k@fst.unair.ac.id',
            'role' => 0,
            'status' => "Aktif Mengajar"
        ]);


        User::create([
            'nip' => '197102111997021001',
            'namaProdi' => 'S1 Sistem Informasi',
            'jabatanDosen' => 'kps',
            'namaDosen' => 'Dr. Rimuljo Hendradi, S.Si., M.Si.',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'rimuljohendradi@fst.unair.ac.id',
            'role' => true,
            'status' => "Aktif Mengajar"
        ]);

        // ------------------------------------ Buat testing aja
        User::create([
            'nip' => '082011633029',
            'jabatanDosen' => 'kps',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Daffa Hafiizh Permadi',
            'password' => bcrypt('12345678'), //password 12345678
            'email' => 'daffagt123@gmail.com',
            'role' => 3,
            'status' => "Aktif Mengajar"
        ]);
        // ------------------------------------

        User::create([
            'nip' => '197101042008121001',
            'namaProdi' => 'S1 Sistem Informasi',
            'jabatanDosen' => 'Dosen',
            'namaDosen' => 'Taufik',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'taufik@gmail.com',
            'role' => 0,
            'status' => "Aktif Mengajar"
        ]);

        User::create([
            'nip' => '32525252523',
            'namaProdi' => 'S1 Sistem Informasi',
            'jabatanDosen' => 'Admin',
            'namaDosen' => 'Admin',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'admin@gmail.com',
            'role' => 2,
            'status' => "Aktif Bekerja"
        ]);

        User::create([
            'nip' => '198410272010122005',
            'namaProdi' => 'S1 Sistem Informasi',
            'jabatanDosen' => 'lektor',
            'namaDosen' => 'Ira Puspitasari',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'Guntur@gmail.com',
            'role' => 0,
            'status' => "Aktif Bekerja"
        ]);

        User::create([
            'nip' => '198002172005012001',
            'namaProdi' => 'S1 Sistem Informasi',
            'jabatanDosen' => 'Dosen',
            'namaDosen' => 'Indah Werdiningsih, S.Si., M.Kom.',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'indah-w@fst.unair.ac.id',
            'role' => 0,
            'status' => "Aktif Bekerja"
        ]);

        User::create([
            'nip' => '197812172005012001',
            'namaProdi' => 'S1 Sistem Informasi',
            'jabatanDosen' => 'Dosen',
            'namaDosen' => 'Endah Purwanti, S.Si., M.Kom.',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'endahpurwanti@fst.unair.ac.id',
            'role' => 0,
            'status' => "Aktif Bekerja"
        ]);
        User::create([
            'nip' => '199203222019032018',
            'namaProdi' => 'S1 Sistem Informasi',
            'jabatanDosen' => 'Dosen',
            'namaDosen' => 'Nania Nuzulita, S.Kom., M.Kom.',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'nania.nuzulita@fst.unair.ac.id',
            'role' => 0,
            'status' => "Aktif Bekerja"
        ]);
        User::create([
            'nip' => '198206062007101001',
            'namaProdi' => 'S1 Sistem Informasi',
            'jabatanDosen' => 'lektor',
            'namaDosen' => 'Faried Effendy,S.Si., M.Kom.',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'faried-e@fst.unair.ac.id',
            'role' => 0,
            'status' => "Aktif Bekerja"
        ]);
        User::create([
            'nip' => '198110282006041003',
            'namaProdi' => 'S1 Sistem Informasi',
            'jabatanDosen' => 'lektor',
            'namaDosen' => 'Dr. Indra Kharisma R, S.Kom., M.T.',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'indra.kharisma@fst.unair.ac.id',
            'role' => 3,
            'status' => "Aktif Bekerja"
        ]);
        User::create([
            'nip' => '197801262006041001',
            'jabatanDosen' => 'lektor',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Badrus Zaman, S.Kom., M.Cs.',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'badruszaman@fst.unair.ac.id',
            'role' => 1,
            'status' => "Aktif Bekerja"
        ]);
        User::create([
            'nip' => '197606162014092006',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Dr. Hanik Endang Nihayati, S.Kep.Ns., M.Kep.',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'hanik-e-n@fkp.unair.ac.id',
            'role' => 1,
            'status' => "Aktif Bekerja"
        ]);
        User::create([
            'nip' => '197502222009122001',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Dr. Prihartini Widiyanti, drg, M.Kes.',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'pwidiyanti@fst.unair.ac.id',
            'role' => 1,
            'status' => "Aktif Bekerja"
        ]);
        User::create([
            'nip' => '196902031994031001',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Puji Karyanto, S.S., M.Hum.',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'puji-k@fib.unair.ac.id',
            'role' => 1,
            'status' => "Aktif Bekerja"
        ]);
        User::create([
            'nip' => '196605041996032001',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Dr. Gadis Meinar Sari, dr., M.Kes.',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'gadis-m-s@fk.unair.ac.id',
            'role' => 1,
            'status' => "Aktif Bekerja"
        ]);
        User::create([
            'nip' => '196908152000032005',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Dr. Afif Nurul Hidayati, dr., Sp.KK',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'afif_nurulhidayati@fk.unair.ac.id',
            'role' => 1,
            'status' => "Aktif Bekerja"
        ]);
        User::create([
            'nip' => '198012242005012002',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Inge Dhamanti,SKM.,M.Kes.,M.PH.,Ph.D',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'inge-d@fkm.unair.ac.id',
            'role' => 1,
            'status' => "Aktif Bekerja"
        ]);
        User::create([
            'nip' => '196906211997032001',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Dr. RR. Juni Triastuti, S.Pi., M.Si.',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'juni.triastuti@fpk.unair.ac.id',
            'role' => 1,
            'status' => "Aktif Bekerja"
        ]);
        User::create([
            'nip' => '198206182015041001',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Dr. Andri Setiya Wahyudi, S,Kep.,Ns., M.Kep.',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'andri.setiyawahyudi@fkp.unair.ac.id',
            'role' => 1,
            'status' => "Aktif Bekerja"
        ]);
        User::create([
            'nip' => '139040676',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Nuzul Quraniati, S.Kep., Ns., M.Ng., PhD.',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'nuzul-q-a@fkp.unair.ac.id',
            'role' => 1,
            'status' => "Aktif Bekerja"
        ]);
        User::create([
            'nip' => '197703162005012001',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Dr. Ninuk Dian Kurniawati, S.Kep., Ns., MANP',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'ninuk.dk@fkp.unair.ac.id',
            'role' => 1,
            'status' => "Aktif Bekerja"
        ]);
        User::create([
            'nip' => '198604122015043101',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Diansanto Prayoga, S.KM., M.Kes.',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'diansantoprayoga@fkm.unair.ac.id ',
            'role' => 1,
            'status' => "Aktif Bekerja"
        ]);
        User::create([
            'nip' => '197107122008122001',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Purbandini, S.Si., M.Kom.',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'purbandini@fst.unair.ac.id',
            'role' => 0,
            'status' => "Aktif Bekerja"
        ]);

        User::create([
            'nip' => '198706252012122002',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Army Justitia, S.Kom, M.Kom.',
            'password' => bcrypt('coba1234'), //password coba123
            'email' => 'army-j@fst.unair.ac.id',
            'role' => 0,
            'status' => "Aktif Bekerja"
        ]);

        //pancasila
        User::create([
            'nip' => '196508061992031002',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Ikhsan Rosyid MA, S.S., M.A.',
            'password' => bcrypt('coba1234'), //password coba1234
            'email' => 'ikhsan-r-m-a@fib.unair.ac.id',
            'role' => 0,
            'status' => "Aktif Bekerja"
        ]);

        User::create([
            'nip' => '197609012003121001',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Ilham Nur Alfian, S.Psi., M.Psi., Psikolog',
            'password' => bcrypt('coba1234'), //password coba1234
            'email' => 'ilham.nuralfian@psikologi.unair.ac.id',
            'role' => 0,
            'status' => "Aktif Bekerja"
        ]);

        User::create([
            'nip' => '197603242002121001',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Syahrur Marta Dwi Susilo, S.S., M.A., Ph.D.',
            'password' => bcrypt('coba1234'), //password coba1234
            'email' => 'syahrur-m-d-s@fib.unair.ac.id',
            'role' => 0,
            'status' => "Aktif Bekerja"
        ]);

        User::create([
            'nip' => '196004211986011001',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Drs. Kartono, M. Kom.',
            'password' => bcrypt('coba1234'), //password coba1234
            'email' => 'kartono@fst.unair.ac.id',
            'role' => 0,
            'status' => "Aktif Bekerja"
        ]);
        //047
        User::create([
            'nip' => '111111111111111',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Tim Pengajar Bahasa Indonesia',
            'password' => bcrypt('coba1234'), //password coba1234
            'email' => '111111111111111@fst.unair.ac.id',
            'role' => 0,
            'status' => "Aktif Bekerja"
        ]);

        User::create([
            'nip' => '111111111111112',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Tim Pengajar Biologi',
            'password' => bcrypt('coba1234'), //password coba1234
            'email' => '111111111111112@fst.unair.ac.id',
            'role' => 0,
            'status' => "Aktif Bekerja"
        ]);

        User::create([
            'nip' => '111111111111113',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Tim Pengampu',
            'password' => bcrypt('coba1234'), //password coba1234
            'email' => '111111111111113@fst.unair.ac.id',
            'role' => 0,
            'status' => "Aktif Bekerja"
        ]);

        User::create([
            'nip' => '111111111111114',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Tim Dosen Kalkulus',
            'password' => bcrypt('coba1234'), //password coba1234
            'email' => '111111111111114@fst.unair.ac.id',
            'role' => 0,
            'status' => "Aktif Bekerja"
        ]);

        User::create([
            'nip' => '111111111111115',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Tim Dosen Kewarganegaraan',
            'password' => bcrypt('coba1234'), //password coba1234
            'email' => '111111111111115@fst.unair.ac.id',
            'role' => 0,
            'status' => "Aktif Bekerja"
        ]);

        User::create([
            'nip' => '111111111111116',
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Tim Dosen Kimia',
            'password' => bcrypt('coba1234'), //password coba1234
            'email' => '111111111111116@fst.unair.ac.id',
            'role' => 0,
            'status' => "Aktif Bekerja"
        ]);

        User::create([
            'nip' => '111111111111117', //dummy
            'jabatanDosen' => 'Dosen',
            'namaProdi' => 'S1 Sistem Informasi',
            'namaDosen' => 'Tim MKWU',
            'password' => bcrypt('coba1234'), //password coba1234
            'email' => '111111111111117@fst.unair.ac.id', //dummy
            'role' => 0,
            'status' => "Aktif Bekerja"
        ]);
    }
}
