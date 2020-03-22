<?php
 
namespace App\Http\Controllers;
 
use App\Http\Models\skpdModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
 
class skpdController extends BaseController
{
    public function skpd()
    {
        $bio = skpdModel::paginate(5);
        // $bio = requestModel::get();
        return view('skpd', ['bio' => $bio]);
    }

    
}



?>