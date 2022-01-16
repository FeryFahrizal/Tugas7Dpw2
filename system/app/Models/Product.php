<?php

namespace App\Models;

class Product extends Model{
    protected $table = 'Product';

    function seller(){
        return $this->belongsTo(User::class, 'id_user');
    }
}
