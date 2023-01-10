<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $fillable = ['amount','creditCard','paymentStatus'];

    public function myOrder(){
        return $this->hasOne('App\Models\order');
    }
}
