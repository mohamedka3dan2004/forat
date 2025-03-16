<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    public function invoices(){
        return $this->hasMany(Invoice::class);
    }
    public function payments(){
        return $this->belongsTo(Payment::class);
    }
}
