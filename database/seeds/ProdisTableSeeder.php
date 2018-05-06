<?php

use Illuminate\Database\Seeder;

class ProdisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $n = 1;
        DB::table('prodis')->insert([
            'id'            => $n++,            
            'nama'          => 'Teknik Elektronika',
            'kode'          => 'TE',
            'id_jurusan'    => 3,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('prodis')->insert([
            'id'            => $n++,            
            'nama'          => 'Teknik Listrik',
            'kode'          => 'TL',
            'id_jurusan'    => 3,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('prodis')->insert([
            'id'            => $n++,            
            'nama'          => 'Teknik Telekomunikasi',
            'kode'          => 'TT',
            'id_jurusan'    => 3,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('prodis')->insert([
            'id'            => $n++,            
            'nama'          => 'Sistem Kelistrikan',
            'kode'          => 'SK',
            'id_jurusan'    => 3,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('prodis')->insert([
            'id'            => $n++,            
            'nama'          => 'Teknik Jaringan Telekomunikasi Digital',
            'kode'          => 'TJ',
            'id_jurusan'    => 3,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('prodis')->insert([
            'id'            => $n++,            
            'nama'          => 'Teknik Elektronika',
            'kode'          => 'TE',
            'id_jurusan'    => 3,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('prodis')->insert([
            'id'            => $n++,            
            'nama'          => 'Teknik Mesin',
            'kode'          => 'TM',
            'id_jurusan'    => 1,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('prodis')->insert([
            'id'            => $n++,            
            'nama'          => 'Otomotif Elektronik',
            'kode'          => 'OE',
            'id_jurusan'    => 1,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('prodis')->insert([
            'id'            => $n++,            
            'nama'          => 'Mesin Produksi dan Perawatan',
            'kode'          => 'MP',
            'id_jurusan'    => 1,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('prodis')->insert([
            'id'            => $n++,            
            'nama'          => 'Teknik Sipil',
            'kode'          => 'TS',
            'id_jurusan'    => 2,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('prodis')->insert([
            'id'            => $n++,            
            'nama'          => 'Mesin Produksi dan Perawatan',
            'kode'          => 'MP',
            'id_jurusan'    => 2,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('prodis')->insert([
            'id'            => $n++,            
            'nama'          => 'Teknik Kimia',
            'kode'          => 'TK',
            'id_jurusan'    => 4,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('prodis')->insert([
            'id'            => $n++,            
            'nama'          => 'Teknologi Kimia Industri',
            'kode'          => 'TKI',
            'id_jurusan'    => 4,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('prodis')->insert([
            'id'            => $n++,            
            'nama'          => 'Akuntansi',
            'kode'          => 'AK',
            'id_jurusan'    => 5,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('prodis')->insert([
            'id'            => $n++,            
            'nama'          => 'Akuntansi Manajemen',
            'kode'          => 'AM',
            'id_jurusan'    => 5,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('prodis')->insert([
            'id'            => $n++,            
            'nama'          => 'Administrasi Bisnis',
            'kode'          => 'AB',
            'id_jurusan'    => 6,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('prodis')->insert([
            'id'            => $n++,            
            'nama'          => 'Manajemen Pemasaran',
            'kode'          => 'MP',
            'id_jurusan'    => 6,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('prodis')->insert([
            'id'            => $n++,            
            'nama'          => 'Manajemen Informatika',
            'kode'          => 'MI',
            'id_jurusan'    => 7,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('prodis')->insert([
            'id'            => $n++,            
            'nama'          => 'Teknik Informatika',
            'kode'          => 'TI',
            'id_jurusan'    => 7,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
    }
}
