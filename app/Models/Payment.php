<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function merchant(){
        return $this->belongsTo(Merchant::class);
    }
    public function farmer(){
        return $this->belongsTo(Farmer::class);
    }
}
