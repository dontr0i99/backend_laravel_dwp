<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $primaryKey = 'transaction_id';

    protected $fillable = [
        'request_id',
        'vendor_id',
        'amount',
        'status',
        'created_at',
        'updated_at',
    ];

    public function request()
    {
        return $this->belongsTo(Request::class, 'request_id');
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class, 'vendor_id');
    }
}