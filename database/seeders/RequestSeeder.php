<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RequestSeeder extends Seeder
{
    public function run()
    {
        DB::table('requests')->insert([
            ['user_id' => 1, 'request_status' => 'pending', 'category' => 'Peralatan IT', 'description' => 'Permintaan laptop baru untuk karyawan', 'created_at' => '2024-12-01 10:00:00', 'updated_at' => '2024-12-01 10:00:00'],
            ['user_id' => 1, 'request_status' => 'approved', 'category' => 'Perlengkapan Kantor', 'description' => 'Permintaan tinta printer', 'created_at' => '2024-12-01 11:00:00', 'updated_at' => '2024-12-02 08:00:00'],
            ['user_id' => 1, 'request_status' => 'completed', 'category' => 'Furniture', 'description' => 'Permintaan kursi kantor ergonomis', 'created_at' => '2024-11-20 09:00:00', 'updated_at' => '2024-11-25 16:00:00'],
            ['user_id' => 2, 'request_status' => 'rejected', 'category' => 'Training', 'description' => 'Permintaan dana untuk pelatihan SDM', 'created_at' => '2024-12-01 14:00:00', 'updated_at' => '2024-12-01 15:00:00'],
            ['user_id' => 2, 'request_status' => 'pending', 'category' => 'Rekrutmen', 'description' => 'Permintaan iklan lowongan pekerjaan', 'created_at' => '2024-12-03 08:00:00', 'updated_at' => '2024-12-03 08:00:00'],
            ['user_id' => 3, 'request_status' => 'approved', 'category' => 'Pengadaan Barang', 'description' => 'Permintaan komputer untuk ruang meeting', 'created_at' => '2024-11-29 10:00:00', 'updated_at' => '2024-11-30 08:00:00'],
            ['user_id' => 4, 'request_status' => 'completed', 'category' => 'Acara Kantor', 'description' => 'Permintaan dekorasi untuk acara akhir tahun', 'created_at' => '2024-11-25 09:00:00', 'updated_at' => '2024-11-27 16:00:00'],
            ['user_id' => 5, 'request_status' => 'rejected', 'category' => 'Transportasi', 'description' => 'Permintaan anggaran transportasi untuk meeting luar kota', 'created_at' => '2024-12-01 12:00:00', 'updated_at' => '2024-12-02 10:00:00'],
            ['user_id' => 5, 'request_status' => 'pending', 'category' => 'Konsumsi', 'description' => 'Permintaan snack untuk rapat bulanan', 'created_at' => '2024-12-03 10:00:00', 'updated_at' => '2024-12-03 10:00:00'],
            ['user_id' => 1, 'request_status' => 'approved', 'category' => 'Software', 'description' => 'Permintaan lisensi software desain', 'created_at' => '2024-11-15 11:00:00', 'updated_at' => '2024-11-16 08:00:00']
        ]);
    }
}

