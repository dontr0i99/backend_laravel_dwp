<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VendorSeeder extends Seeder
{
    public function run()
    {
        DB::table('vendors')->insert([
            ['name' => 'PT Teknologi Sejahtera', 'email' => 'kontak@teknologisejahtera.co.id', 'phone_number' => '081234567890'],
            ['name' => 'CV Dunia Furniture', 'email' => 'info@duniafurniture.com', 'phone_number' => '082345678901'],
            ['name' => 'UD Alat Kantor Jaya', 'email' => 'support@alatkantorjaya.co.id', 'phone_number' => '083456789012'],
            ['name' => 'PT Solusi Software', 'email' => 'support@solusisoftware.co.id', 'phone_number' => '081298765432'],
            ['name' => 'CV Event Planner', 'email' => 'contact@eventplanner.co.id', 'phone_number' => '089876543210'],
        ]);
    }
}

