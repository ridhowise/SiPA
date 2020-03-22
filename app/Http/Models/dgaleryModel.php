<?php
 
namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
 
class dgaleryModel extends Model
{
   protected $table = 'galery';
   //disable createdate and updatedate
   public $timestamps = false;
}
?>