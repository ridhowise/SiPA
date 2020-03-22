<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
   protected $table = 'users';
   //disable createdate and updatedate
   public $timestamps = false;

}

?>
