<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class JadwalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 50; $i++) { 
            DB::table('jadwals')->insert([
                'id'            => ($i+1),
                'hari'          => $faker->randomElement($array = array ('Senin','Selasa','Rabu','Kamis','Jumat')),
                'id_jamkul'     => rand (1,17),
                'id_kelas'      => rand (1,49),
                'id_matkul'     => rand (1,19),
                'id_dosen'      => rand (1,20),
                'id_ruangan'    => rand (1,5),
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
