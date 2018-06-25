<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
     protected $fillable = ['carRegNo','carRegProvince','car_CMFG','carModel','carModel_Year','carModelType','chassino','modelNo','engineNo','carDescId','color_Id','useColorType_Id','claim_id','customer_id'];
    
    public function claim(){
		return $this->belongs_to('App\Claim');
	}
}
