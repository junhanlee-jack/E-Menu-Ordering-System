<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    protected $fillable=['itemId','quantity','userID','date','orderID'];

    public function myCart(){
        return $this->hasMany('App\Models\item');
    }

    public function User(){
        return $this->belongsTo('App\Models\user');
    }
}
