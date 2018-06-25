<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CostWork extends Model
{
    //
    protected $fillable = ['number','name','damageLevel','price','priceOffer','priceOk','customer_id','claim_id','car_id'];
    public function claim(){
		return $this->belongs_to('App\Claim');
	}

}
