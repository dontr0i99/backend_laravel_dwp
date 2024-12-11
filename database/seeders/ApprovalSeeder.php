<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApprovalSeeder extends Seeder
{
    public function run()
    {
        DB::table('approvals')->insert([
            ['request_id' => 1, 'supervisor_id' => 2, 'approval_date' => '2024-12-01 15:00:00', 'status' => 'approved'],
            ['request_id' => 2, 'supervisor_id' => 2, 'approval_date' => '2024-12-02 09:00:00', 'status' => 'approved'],
            ['request_id' => 3, 'supervisor_id' => 2, 'approval_date' => '2024-11-21 12:00:00', 'status' => 'approved'],
            ['request_id' => 4, 'supervisor_id' => 2, 'approval_date' => '2024-12-01 15:00:00', 'status' => 'rejected'],
            ['request_id' => 10, 'supervisor_id' => 2, 'approval_date' => '2024-11-16 09:00:00', 'status' => 'approved'],
        ]);
    }
}
