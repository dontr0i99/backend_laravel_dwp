<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    /**
     * Get the division with the most requests each month.
     */
    public function topDivisionByMonth()
    {
        $report = DB::table('requests as r')
            ->join('users as u', 'r.user_id', '=', 'u.user_id')
            ->selectRaw('
                TO_CHAR(r.created_at, \'YYYY-MM\') AS bulan,
                u.division AS divisi,
                COUNT(r.request_id) AS total_permintaan
            ')
            ->groupByRaw('TO_CHAR(r.created_at, \'YYYY-MM\'), u.division')
            ->orderBy('total_permintaan', 'desc')
            ->get();

        return response()->json([
            'status' => 'success',
            'data' => $report
        ]);
    }

    /**
     * Get the most requested category each month.
     */
    public function topCategoryByMonth()
    {
        $report = DB::table('requests')
            ->selectRaw('
                TO_CHAR(created_at, \'YYYY-MM\') AS bulan,
                category AS kategori,
                COUNT(request_id) AS total_permintaan
            ')
            ->groupByRaw('TO_CHAR(created_at, \'YYYY-MM\'), category')
            ->orderByRaw('bulan, total_permintaan DESC')
            ->get();

        return response()->json([
            'status' => 'success',
            'data' => $report
        ]);
    }
}
