<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            ['full_name' => 'Mikaela Santos', 'email' => 'mikaela.santos@example.com', 'phone' => '0917 555 0101', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Gabriel Cruz', 'email' => 'gabriel.cruz@example.com', 'phone' => '0917 555 0102', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Alyssa Mendoza', 'email' => 'alyssa.mendoza@example.com', 'phone' => '0917 555 0103', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Mateo Reyes', 'email' => 'mateo.reyes@example.com', 'phone' => '0917 555 0104', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Danica Flores', 'email' => 'danica.flores@example.com', 'phone' => '0917 555 0105', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('users')->insert([
            ['username' => 'ron.rivas', 'full_name' => 'Ron Rivas', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'mia.santos', 'full_name' => 'Mia Santos', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'noah.cruz', 'full_name' => 'Noah Cruz', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'sofia.garcia', 'full_name' => 'Sofia Garcia', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'liam.mendoza', 'full_name' => 'Liam Mendoza', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
