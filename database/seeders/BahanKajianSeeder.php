<?php

namespace Database\Seeders;

use App\Models\Bahan_Kajian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BahanKajianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $knowledgeAreas = [
            ['kodeBK' => 'BK01', 'namaBK' => 'Foundation of Information Systems', 'kategoriBK' => true, 'referensiBK' => 'IS2020'],
            ['kodeBK' => 'BK02', 'namaBK' => 'Data / information Management', 'kategoriBK' => true, 'referensiBK' => 'IS2020'],
            ['kodeBK' => 'BK03', 'namaBK' => 'IT Infrastructure', 'kategoriBK' => true, 'referensiBK' => 'IS2020'],
            ['kodeBK' => 'BK04', 'namaBK' => 'IS Project Management', 'kategoriBK' => true, 'referensiBK' => 'IS2020'],
            ['kodeBK' => 'BK05', 'namaBK' => 'Systems Analysis & Design', 'kategoriBK' => true, 'referensiBK' => 'IS2020'],
            ['kodeBK' => 'BK06', 'namaBK' => 'IS Management and Strategy', 'kategoriBK' => true, 'referensiBK' => 'IS2020'],
            ['kodeBK' => 'BK07', 'namaBK' => 'Application Development / Programming', 'kategoriBK' => true, 'referensiBK' => 'IS2020'],
            ['kodeBK' => 'BK08', 'namaBK' => 'Secure Computing', 'kategoriBK' => true, 'referensiBK' => 'IS2020'],
            ['kodeBK' => 'BK09', 'namaBK' => 'Ethics, use and implications for society', 'kategoriBK' => true, 'referensiBK' => 'IS2020'],
            ['kodeBK' => 'BK10', 'namaBK' => 'Praktikum', 'kategoriBK' => true, 'referensiBK' => 'IS2020'],
            ['kodeBK' => 'BK11', 'namaBK' => 'Mathematics and statistics', 'kategoriBK' => true, 'referensiBK' => 'IABEE'],
            ['kodeBK' => 'BK12', 'namaBK' => 'Data / Business Analytics', 'kategoriBK' => false, 'referensiBK' => 'IS2020'],
            ['kodeBK' => 'BK13', 'namaBK' => 'Personality Development', 'kategoriBK' => false, 'referensiBK' => 'IABEE'],
            ['kodeBK' => 'BK14', 'namaBK' => 'Business Process Management', 'kategoriBK' => false, 'referensiBK' => 'IS2020/ASIIN'],
            ['kodeBK' => 'BK15', 'namaBK' => 'Enterprise Architecture', 'kategoriBK' => false, 'referensiBK' => 'CC2020'],
            ['kodeBK' => 'BK16', 'namaBK' => 'User Interface Design', 'kategoriBK' => false, 'referensiBK' => 'IS2020'],
            ['kodeBK' => 'BK17', 'namaBK' => 'Emerging Technologies', 'kategoriBK' => false, 'referensiBK' => 'IS2020'],
            ['kodeBK' => 'BK18', 'namaBK' => 'Digital Innovation', 'kategoriBK' => false, 'referensiBK' => 'IS2020'],
            ['kodeBK' => 'BK19', 'namaBK' => 'Foundation of Science', 'kategoriBK' => true, 'referensiBK' => '-'],
        ];

        foreach ($knowledgeAreas as $knowledgeArea) {
            Bahan_Kajian::create($knowledgeArea);
        }

        // Bahan_Kajian::create([
        //     'kodeBK' => 'BK01',
        //     'namaBK' => 'Foundation of Information Systems',
        //     'kategoriBK' => TRUE,
        //     "referensiBK" => 'IS2020',
        // ]);

        // Bahan_Kajian::create([
        //     'kodeBK' => 'BK02',
        //     'namaBK' => 'Data/Information Management',
        //     'kategoriBK' => TRUE,
        //     "referensiBK" => 'IS2020',
        // ]);

        // Bahan_Kajian::create([
        //     'kodeBK' => 'BK03',
        //     'namaBK' => 'IT Infrastructure',
        //     'kategoriBK' => TRUE,
        //     "referensiBK" => 'IS2020',
        // ]);

        // Bahan_Kajian::create([
        //     'kodeBK' => 'BK04',
        //     'namaBK' => 'IS Project Management',
        //     'kategoriBK' => TRUE,
        //     "referensiBK" => 'IS2020',
        // ]);

        // Bahan_Kajian::create([
        //     'kodeBK' => 'BK06',
        //     'namaBK' => 'IS Management and Strategy',
        //     'kategoriBK' => TRUE,
        //     "referensiBK" => 'IS2020',
        // ]);

        // Bahan_Kajian::create([
        //     'kodeBK' => 'BK07',
        //     'namaBK' => 'Application Development / Programming',
        //     'kategoriBK' => TRUE,
        //     "referensiBK" => 'IS2020',
        // ]);

        // Bahan_Kajian::create([
        //     'kodeBK' => 'BK08',
        //     'namaBK' => 'Secure Computing',
        //     'kategoriBK' => TRUE,
        //     "referensiBK" => 'IS2020',
        // ]);

        // Bahan_Kajian::create([
        //     'kodeBK' => 'BK09',
        //     'namaBK' => 'Ethics, use and implication for society',
        //     'kategoriBK' => TRUE,
        //     "referensiBK" => 'IS2020',
        // ]);

        // Bahan_Kajian::create([
        //     'kodeBK' => 'BK10',
        //     'namaBK' => 'Praktikum',
        //     'kategoriBK' => TRUE,
        //     "referensiBK" => 'IS2020',
        // ]);

        // Bahan_Kajian::create([
        //     'kodeBK' => 'BK11',
        //     'namaBK' => 'Mathematics and statistics',
        //     'kategoriBK' => TRUE,
        //     "referensiBK" => 'IS2020',
        // ]);

        // Bahan_Kajian::create([
        //     'kodeBK' => 'BK12',
        //     'namaBK' => 'Data / Business Analytics',
        //     'kategoriBK' => TRUE,
        //     "referensiBK" => 'IS2020',
        // ]);

        // Bahan_Kajian::create([
        //     'kodeBK' => 'BK13',
        //     'namaBK' => 'Personality Development',
        //     'kategoriBK' => TRUE,
        //     "referensiBK" => 'IS2020',
        // ]);

        // Bahan_Kajian::create([
        //     'kodeBK' => 'BK14',
        //     'namaBK' => 'Business Process Management',
        //     'kategoriBK' => TRUE,
        //     "referensiBK" => 'IS2020',
        // ]);

        // Bahan_Kajian::create([
        //     'kodeBK' => 'BK15',
        //     'namaBK' => 'Enterprise Architecture',
        //     'kategoriBK' => TRUE,
        //     "referensiBK" => 'IS2020',
        // ]);

        // Bahan_Kajian::create([
        //     'kodeBK' => 'BK16',
        //     'namaBK' => 'User Interface Design',
        //     'kategoriBK' => TRUE,
        //     "referensiBK" => 'IS2020',
        // ]);

        // Bahan_Kajian::create([
        //     'kodeBK' => 'BK17',
        //     'namaBK' => 'Emerging Technologies',
        //     'kategoriBK' => TRUE,
        //     "referensiBK" => 'IS2020',
        // ]);

        // Bahan_Kajian::create([
        //     'kodeBK' => 'BK18',
        //     'namaBK' => 'Digital Innovation',
        //     'kategoriBK' => TRUE,
        //     "referensiBK" => 'IS2020',
        // ]);

        // Bahan_Kajian::create([
        //     'kodeBK' => 'BK19',
        //     'namaBK' => 'Foundation of Science',
        //     'kategoriBK' => TRUE,
        //     "referensiBK" => 'IS2020',
        // ]);
    }
}
