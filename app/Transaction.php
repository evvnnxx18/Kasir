<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Transaction as Detail;

class Transaction extends Model
{
    //
    protected $guard = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function details()
    {
        return $this->hasMany(Detail::class);
    }

}
