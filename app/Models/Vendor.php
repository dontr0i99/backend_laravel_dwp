<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = 'vendors';
    protected $primaryKey = 'vendor_id';

    protected $fillable = [
        'name',
        'email',
        'phone_number',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'vendor_id');
    }
}
