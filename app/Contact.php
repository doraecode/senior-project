<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $fillable = ['repContactName','carRepairDate','repGetCarName','hopeFinish','levelOilGetCar','levelOilOfferCar','kmGetCar','kmOfferCar','itemInCar','lossOther','estimateLabor','typeRepair','estimatePart','appointmentsGetCar','completeCarDate','customer_id','contactDate','claim_id','car_id'];
    
    public function claim(){
		return $this->belongs_to('App\Claim');
	}
}
