<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    public function invoices(){
        return $this->hasMany(Invoice::class);
    }
    public function payments(){
        return $this->belongsTo(Payment::class);
    }
}
