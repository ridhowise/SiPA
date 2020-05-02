<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
   protected $table = 'users';
   //disable createdate and updatedate
   public $timestamps = false;
   public function requests()
   {
       return $this->hasMany('App\Http\Models\requestModel', 'users_id');
   }
}

?>
