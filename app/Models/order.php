<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;protected $fillable=['userID','orderDate','paymentStatus','userName','amount','itemName'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function item(){
        return $this->belongsTo('App\Models\Item');
    }

    public function payment(){
        return $this->hasOne('App\Models\payment');
    }
    
}
