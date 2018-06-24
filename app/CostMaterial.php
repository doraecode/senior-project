<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CostMaterial extends Model
{
    //
    protected $fillable = ['number','name','damageLevel','price','priceOffer','priceOk','junk'];
}
