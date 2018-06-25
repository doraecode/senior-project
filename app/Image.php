<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	protected $table = 'images';
    //
    public function claim(){
		return $this->belongs_to('App\Claim');
	}
}
