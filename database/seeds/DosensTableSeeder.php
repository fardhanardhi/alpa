<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DosensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        
        for ($i=1; $i <= 20; $i++) {
            $nip1 = $faker->date($format = 'Ymd', $max = '1993-01-01');
            $nip2 = $faker->date($format = 'Ym', $max = 'now');
            
            DB::table('dosens')->insert([
                'id'            => $i,
                'nip'           => $nip1.$nip2,
                'nama'          => $faker->name,
                'jenis_kelamin' => $faker->randomElement($array = array ('L','P')),
                'password'      => bcrypt('secret'),
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
