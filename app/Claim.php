<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    //
    protected $fillable = ['repairName','insureName','claimNo','accClaimNo','accPolicyNo','accStatusCar','carIdenNo','deduction','deductionSrc','insureId','insurePhone','insureFax','policyTypeId','insuredValue','callAccidentDate','accidentDate','statusClaim','customer_id'];
    
    public function customer(){
		return $this->belongs_to('App\Customer');
	}
	public function car(){
		return $this->hasOne('App\Car');
	}
	public function contact(){
		return $this->hasOne('App\Contact');
	}
	public function offer(){
		return $this->hasOne('App\Offer');
	}
	public function costWork(){
		return $this->hasOne('App\CostWork');
	}
	public function costMaterial(){
		return $this->hasOne('App\CostMaterial');
	}
	public function image(){
		return $this->hasMany('App\Image');
	}
}
