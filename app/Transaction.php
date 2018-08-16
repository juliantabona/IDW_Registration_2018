<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_id', 'payment_type', 'package_type', 'amount', 'success_state',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
