<?php

use Illuminate\Database\Seeder;

class JamkulsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $n = 1;
        DB::table('jamkuls')->insert([
            'id'            => $n++,
            'jam_ke'        => '1',
            'waktu_mulai'   => '07:00:00',
            'waktu_selesai' => '07:45:00',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('jamkuls')->insert([
            'id'            => $n++,
            'jam_ke'        => '2',
            'waktu_mulai'   => '07:45:00',
            'waktu_selesai' => '08:30:00',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('jamkuls')->insert([
            'id'            => $n++,
            'jam_ke'        => '3',
            'waktu_mulai'   => '08:30:00',
            'waktu_selesai' => '09:15:00',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('jamkuls')->insert([
            'id'            => $n++,
            'jam_ke'        => '4',
            'waktu_mulai'   => '09:15:00',
            'waktu_selesai' => '10:00:00',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('jamkuls')->insert([
            'id'            => $n++,
            'jam_ke'        => '5',
            'waktu_mulai'   => '10:00:00',
            'waktu_selesai' => '10:45:00',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('jamkuls')->insert([
            'id'            => $n++,
            'jam_ke'        => '6',
            'waktu_mulai'   => '10:45:00',
            'waktu_selesai' => '11:30:00',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('jamkuls')->insert([
            'id'            => $n++,
            'jam_ke'        => '7',
            'waktu_mulai'   => '11:30:00',
            'waktu_selesai' => '12:15:00',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('jamkuls')->insert([
            'id'            => $n++,
            'jam_ke'        => '8',
            'waktu_mulai'   => '12:15:00',
            'waktu_selesai' => '13:00:00',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('jamkuls')->insert([
            'id'            => $n++,
            'jam_ke'        => '9',
            'waktu_mulai'   => '13:00:00',
            'waktu_selesai' => '13:45:00',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('jamkuls')->insert([
            'id'            => $n++,
            'jam_ke'        => '10',
            'waktu_mulai'   => '13:45:00',
            'waktu_selesai' => '14:30:00',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('jamkuls')->insert([
            'id'            => $n++,
            'jam_ke'        => '11',
            'waktu_mulai'   => '14:30:00',
            'waktu_selesai' => '15:15:00',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('jamkuls')->insert([
            'id'            => $n++,
            'jam_ke'        => '12',
            'waktu_mulai'   => '15:15:00',
            'waktu_selesai' => '16:00:00',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('jamkuls')->insert([
            'id'            => $n++,
            'jam_ke'        => '13',
            'waktu_mulai'   => '16:00:00',
            'waktu_selesai' => '16:45:00',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('jamkuls')->insert([
            'id'            => $n++,
            'jam_ke'        => '14',
            'waktu_mulai'   => '16:45:00',
            'waktu_selesai' => '17:30:00',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('jamkuls')->insert([
            'id'            => $n++,
            'jam_ke'        => '15',
            'waktu_mulai'   => '17:30:00',
            'waktu_selesai' => '18:15:00',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('jamkuls')->insert([
            'id'            => $n++,
            'jam_ke'        => '16',
            'waktu_mulai'   => '18:15:00',
            'waktu_selesai' => '19:00:00',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('jamkuls')->insert([
            'id'            => $n++,
            'jam_ke'        => '17',
            'waktu_mulai'   => '19:00:00',
            'waktu_selesai' => '19:45:00',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
    }
}