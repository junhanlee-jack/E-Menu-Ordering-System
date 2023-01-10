<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','price','image','quantity','categoryID'];

    public function item(){
        return $this->belongsTo('App\Models\foodCategory');
    }
}
