<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class Account extends Model implements Authenticatable
{

	use \Illuminate\Auth\Authenticatable;

   public function landslides(){
   		return $this->hasMany(LandSlide::class);
   }

   public function getId()
			{
		  return $this->id;
		}


}
