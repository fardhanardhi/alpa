<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(DosensTableSeeder::class);
        $this->call(GedungsTableSeeder::class);
        $this->call(JamkulsTableSeeder::class);
        $this->call(JurusansTableSeeder::class);
        $this->call(MatkulsTableSeeder::class);
        $this->call(MengajarsTableSeeder::class);
        $this->call(TingkatansTableSeeder::class);
        $this->call(RuangansTableSeeder::class);
        $this->call(ProdisTableSeeder::class);
        $this->call(KelasTableSeeder::class);
        $this->call(MahasiswasTableSeeder::class);
        $this->call(JadwalsTableSeeder::class);
        $this->call(DataAbsensTableSeeder::class);
    }
}
