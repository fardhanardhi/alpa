<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class GedungsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $n = 1;
        for ($i='A'; $i <= 'S'; $i++) {
            DB::table('gedungs')->insert([
                'id'            => $n,
                'nama'          => 'A' . $i,
                'banyak_lantai' => rand (1,3),
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);
            $n++;
        }

        DB::table('gedungs')->insert([
            'id'            => $n,            
            'nama'          => 'SITI',
            'banyak_lantai' => 8,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
    }
}
