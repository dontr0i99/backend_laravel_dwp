<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $table = 'requests';
    protected $primaryKey = 'request_id';

    protected $fillable = [
        'user_id',
        'request_status',
        'category',
        'description',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function approvals()
    {
        return $this->hasMany(Approval::class, 'request_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'request_id');
    }
}