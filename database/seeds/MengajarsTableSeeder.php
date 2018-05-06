<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MengajarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 40; $i++) { 
            DB::table('mengajars')->insert([
                'id_dosen'      => rand (1,20),
                'id_matkul'     => rand (1,19),
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
