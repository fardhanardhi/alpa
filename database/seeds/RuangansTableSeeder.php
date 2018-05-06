<?php

use Illuminate\Database\Seeder;

class RuangansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $n = 1;
        DB::table('ruangans')->insert([
            'id'            => $n++,            
            'nama'          => 'KR.01',
            'id_gedung'     => 6,
            'lantai'        => 1,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('ruangans')->insert([
            'id'            => $n++,            
            'nama'          => 'KR.02',
            'id_gedung'     => 6,
            'lantai'        => 1,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('ruangans')->insert([
            'id'            => $n++,            
            'nama'          => 'KR.03',
            'id_gedung'     => 6,
            'lantai'        => 2,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('ruangans')->insert([
            'id'            => $n++,            
            'nama'          => 'LPR.1',
            'id_gedung'     => 20,
            'lantai'        => 7,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('ruangans')->insert([
            'id'            => $n++,            
            'nama'          => 'KB.03',
            'id_gedung'     => 20,
            'lantai'        => 7,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
    }
}
