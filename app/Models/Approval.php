<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    protected $table = 'approvals';
    protected $primaryKey = 'approval_id';

    protected $fillable = [
        'request_id',
        'supervisor_id',
        'approval_date',
        'status',
    ];

    public function request()
    {
        return $this->belongsTo(Request::class, 'request_id');
    }

    public function supervisor()
    {
        return $this->belongsTo(User::class, 'supervisor_id');
    }
}