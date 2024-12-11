<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'ahmad_fauzi',
                'email' => 'ahmad.fauzi@example.com',
                'password' => Hash::make('12345678'),
                'role' => 'requester',
                'division' => 'Teknologi Informasi',
            ],
            [
                'username' => 'siti_nurhaliza',
                'email' => 'siti.nurhaliza@example.com',
                'password' => Hash::make('12345678'),
                'role' => 'supervisor',
                'division' => 'Keuangan',
            ],
            [
                'username' => 'budi_prasetyo',
                'email' => 'budi.prasetyo@example.com',
                'password' => Hash::make('12345678'),
                'role' => 'purchaser',
                'division' => 'Pengadaan',
            ],
            [
                'username' => 'nurul_hidayah',
                'email' => 'nurul.hidayah@example.com',
                'password' => Hash::make('12345678'),
                'role' => 'requester',
                'division' => 'Sumber Daya Manusia',
            ],
            [
                'username' => 'rendi_saputra',
                'email' => 'rendi.saputra@example.com',
                'password' => Hash::make('12345678'),
                'role' => 'requester',
                'division' => 'Operasional',
            ],
        ]);
    }
}

