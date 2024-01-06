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
            'namaDosen' => 'Dr. Nur Chamidah, S.Si., M.Si.',
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
            'role' => 0,
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
    }
}
