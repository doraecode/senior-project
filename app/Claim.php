<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    //
    public function customers(){
		return $this->belongs_to('Customer');
	}
}
