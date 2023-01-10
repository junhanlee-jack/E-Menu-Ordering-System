<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class foodCategory extends Model
{
    use HasFactory;
    protected $fillable = ['CategoryName'];

    public function foodCategory(){
    return $this -> hasMany('App\Models\item');
    }
}
