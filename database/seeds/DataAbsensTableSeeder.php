<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DataAbsensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 150; $i++) { 
            $st = $faker->randomElement($array = array ('M','S','I','A'));
            if ($st == 'A') {
                $jum = rand (1,3);
            }
            else {
                $jum = null;
            }
            DB::table('data_absens')->insert([
                'id'            => ($i+1),
                'id_mahasiswa'  => rand (1,100),
                'id_jadwal'     => rand (1,50),
                'status'        => $st,
                'jumlah_jam'    => $jum,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
