<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //
    protected $fillable = ['customerGetCarDate','customerNameGetCar','customerIdCardGetCar','customerTelGetCar','relation','repNameOfferCar','driver_Name','driver_IdCard','driver_PassportsNo','driver_Phone_No','commentOfferCar','customer_id','claim_id','car_id','contact_id'];
    
    public function customers(){
		return $this->belongs_to('App\Customer');
	}
}
