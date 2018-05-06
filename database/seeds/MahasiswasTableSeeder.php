<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MahasiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        $nim = 20000;
        for ($i=0; $i < 100; $i++) {
            DB::table('mahasiswas')->insert([
                'id'            => ($i+1),
                'nim'           => ('17417'.$nim++),
                'nama'          => $faker->name,
                'jenis_kelamin' => $faker->randomElement($array = array ('L','P')),
                'id_kelas'      => rand (1,49),
                'password'      => bcrypt('secret'),
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
