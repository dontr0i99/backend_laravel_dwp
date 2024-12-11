<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    public function run()
    {
        DB::table('transactions')->insert([
            ['request_id' => 1, 'vendor_id' => 1, 'amount' => 7500000, 'status' => 'in_progress', 'created_at' => '2024-12-03 09:00:00', 'updated_at' => '2024-12-03 10:00:00'],
            ['request_id' => 2, 'vendor_id' => 3, 'amount' => 1200000, 'status' => 'completed', 'created_at' => '2024-12-02 09:30:00', 'updated_at' => '2024-12-02 11:00:00'],
            ['request_id' => 3, 'vendor_id' => 2, 'amount' => 3000000, 'status' => 'completed', 'created_at' => '2024-11-22 10:00:00', 'updated_at' => '2024-11-25 14:00:00'],
            ['request_id' => 6, 'vendor_id' => 1, 'amount' => 8500000, 'status' => 'completed', 'created_at' => '2024-11-29 11:00:00', 'updated_at' => '2024-12-01 10:00:00'],
            ['request_id' => 10, 'vendor_id' => 4, 'amount' => 5000000, 'status' => 'completed', 'created_at' => '2024-11-15 13:00:00', 'updated_at' => '2024-11-16 09:00:00'],
        ]);
    }
}
