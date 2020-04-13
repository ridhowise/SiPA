<?php
 
namespace App\Http\Controllers;

use App\Http\Models\aplikasiModel;
use App\Http\Models\requirementModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use DB;

class aplikasiController extends BaseController
{
    public function aplikasi()
    {
        $bio = aplikasiModel::with("requirements")->paginate(5);
        $reqq = requirementModel::get();

        // $bio = requestModel::get();
        return view('aplikasi', ['bio' => $bio]);
    }

}



?>