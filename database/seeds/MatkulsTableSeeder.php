<?php

use Illuminate\Database\Seeder;

class MatkulsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matkuls')->insert([
            'id'            => 1,
            'nama'          => 'Kewarganegaraan',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('matkuls')->insert([
            'id'            => 2,
            'nama'          => 'Pancasila',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('matkuls')->insert([
            'id'            => 3,
            'nama'          => 'Ilmu Komunikasi Dan Organisasi',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('matkuls')->insert([
            'id'            => 4,
            'nama'          => 'Aplikasi Komputer Perkantoran',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('matkuls')->insert([
            'id'            => 5,
            'nama'          => 'Bahasa Inggris',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('matkuls')->insert([
            'id'            => 6,
            'nama'          => 'Konsep Teknologi Informasi',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('matkuls')->insert([
            'id'            => 7,
            'nama'          => 'Matematika Diskrit',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('matkuls')->insert([
            'id'            => 8,
            'nama'          => 'Keselamatan Dan Kesehatan Kerja',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('matkuls')->insert([
            'id'            => 9,
            'nama'          => 'Dasar Pemrograman',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('matkuls')->insert([
            'id'            => 10,
            'nama'          => 'Praktikum Dasar Pemrograman',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('matkuls')->insert([
            'id'            => 11,
            'nama'          => 'Agama',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('matkuls')->insert([
            'id'            => 12,
            'nama'          => 'Teknik Dokumentasi',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('matkuls')->insert([
            'id'            => 13,
            'nama'          => 'Sistem Operasi',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('matkuls')->insert([
            'id'            => 14,
            'nama'          => 'Rekayasa Perangkat Lunak',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('matkuls')->insert([
            'id'            => 15,
            'nama'          => 'Aljabar Linier',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('matkuls')->insert([
            'id'            => 16,
            'nama'          => 'Basis Data',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('matkuls')->insert([
            'id'            => 17,
            'nama'          => 'Praktikum Basis Data',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('matkuls')->insert([
            'id'            => 18,
            'nama'          => 'Algoritma Dan Struktur Data',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('matkuls')->insert([
            'id'            => 19,
            'nama'          => 'Praktikum Algoritma Dan Struktur Data',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
    }
}
