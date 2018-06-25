<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = ['firstName','lastName','idCard','tel','idLine','address'];
    public function claims(){
		return $this->has_Many('App\Claim');
	}


}
