<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CostMaterial extends Model
{
    //
    protected $fillable = ['number','name','damageLevel','price','priceOffer','priceOk','junk','customer_id','claim_id','car_id'];
    public function claim(){
		return $this->belongs_to('App\Claim');
	}
}
