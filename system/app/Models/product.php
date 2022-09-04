<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model{
    public $timestamps = false;
    protected $table = 'product';

  function seller(){
    return $this->belongsTo(User::class, 'id_user');
  }
}