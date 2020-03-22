<?php
 
namespace App\Http\Controllers;
 
use App\Http\Models\dashboardModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
 
class dashboardController extends BaseController
{
    public function dashboard()
    {
        $bio = dashboardModel::paginate(5);
        // $bio = requestModel::get();
        return view('dashboard', ['bio' => $bio]);
    }

    
}



?>