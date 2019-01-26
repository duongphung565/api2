<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Reviews;
class Product extends Model
{
    public function reviews(){
      return $this->hasMany(Reviews::class);
    }
}
