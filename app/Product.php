<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','description','imageUrl','price','slug']; 

    /* public function getRouteKeyName() {
        return 'slug';
    } */
}
