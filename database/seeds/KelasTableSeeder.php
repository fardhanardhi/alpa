<?php

use Illuminate\Database\Seeder;

class KelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $n = 1;
        // TI
        for ($j=0; $j < 4; $j++) { 
            for ($i='A'; $i <= 'G'; $i++) {
                DB::table('kelas')->insert([
                    'id'            => $n,
                    'id_prodi'      => 19,
                    'id_tingkatan'  => ($j+1),
                    'huruf'         => $i,
                    'created_at'    => date('Y-m-d H:i:s'),
                    'updated_at'    => date('Y-m-d H:i:s'),
                ]);
                $n++;
            }
        }
        
        // MI
        for ($j=0; $j < 3; $j++) { 
            for ($i='A'; $i <= 'G'; $i++) {
                DB::table('kelas')->insert([
                    'id'            => $n,
                    'id_prodi'      => 18,
                    'id_tingkatan'  => ($j+1),
                    'huruf'         => $i,
                    'created_at'    => date('Y-m-d H:i:s'),
                    'updated_at'    => date('Y-m-d H:i:s'),
                ]);
                $n++;
            }
        }
    }
}
