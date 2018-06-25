<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CostEtc extends Model
{
    //
    public function claim(){
		return $this->belongs_to('App\Claim');
	}

}
