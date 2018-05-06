<?php

use Illuminate\Database\Seeder;

class JurusansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $n = 1;
        DB::table('jurusans')->insert([
            'id'            => $n++,
            'nama'          => 'Teknik Mesin',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('jurusans')->insert([
            'id'            => $n++,
            'nama'          => 'Teknik Sipil',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('jurusans')->insert([
            'id'            => $n++,
            'nama'          => 'Teknik Elektro',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('jurusans')->insert([
            'id'            => $n++,
            'nama'          => 'Teknik Kimia',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('jurusans')->insert([
            'id'            => $n++,
            'nama'          => 'Akuntansi',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('jurusans')->insert([
            'id'            => $n++,
            'nama'          => 'Administrasi Niaga',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('jurusans')->insert([
            'id'            => $n++,
            'nama'          => 'Teknologi Informasi',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
    }
}
