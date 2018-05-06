<?php

use Illuminate\Database\Seeder;

class TingkatansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 4; $i++) {
            DB::table('tingkatans')->insert([
                'id'         => ($i+1), 
                'tingkat'    => ($i+1),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
