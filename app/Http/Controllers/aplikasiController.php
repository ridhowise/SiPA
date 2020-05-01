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
        $bio = aplikasiModel::with("requirements")->where('status', '1')->paginate(8);
        $reqq = requirementModel::get();

        // $bio = requestModel::get();
        return view('aplikasi', ['bio' => $bio]);
    }
    
      
    public function getEdit($id)
    {
        return view('editaplikasi', ['aplikasi' => aplikasiModel::findOrFail($id)]);
    }
     
    public function ubahaplikasi(Request $request)
    {
     
        $bio     = new aplikasiModel;
        $id     = $request->input('id');
        $bio     = aplikasiModel::find($id);
     
        $bio->aplikasi = $request->input('aplikasi');
        $bio->maintenance = $request->input('maintenance');
        $bio->link = $request->input('link');



        $bio->save();
        
         
        return redirect()->action('aplikasiController@aplikasi')->with('style', 'success')->with('alert', 'Berhasil Diubah ! ')->with('msg', 'Data Diubah Di Database');
        
        
    }
}


?>