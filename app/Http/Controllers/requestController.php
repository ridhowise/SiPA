<?php
 
namespace App\Http\Controllers;
 
use App\Http\Models\requestModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Auth;
use DB;

class requestController extends BaseController
{
    public function request()
    {
        $name = Auth::user()->name;
        $bio = requestModel::where('nama', $name)->paginate(5);
        // $bio = requestModel::get();
        return view('request', ['bio' => $bio]);
    }

    public function getInput()
{
    return view('inputrequest');
}
 
public function simpanrequest(Request $request)
{
    $file = Input::file('lampiran');
 
        $destinationPath = 'uploads';
        $size = $file->getSize();
        $extension = $file->getClientOriginalExtension();
        $fileName = $file->getClientOriginalName();
        $upload_success = $file->move($destinationPath, $fileName);
         
        if ($upload_success){
            $bio = new requestModel;
            $bio->nama = $request->input('nama');
            $bio->namaaps = $request->input('namaaps');
            $bio->penjelasan = $request->input('penjelasan');
            $bio->lampiran = $fileName;
            $bio->status = $request->input('status');
            $bio->keterangan = $request->input('keterangan');

 
            $bio->save();
             
            return redirect()->action('requestController@request')->with('style', 'success')->with('alert', 'Berhasil Disimpan ! ')->with('msg', 'Menunggu persetujuan');
        
        }
    
 
}

public function getEdit($id)
{
    return view('editrequest', ['request' => requestModel::findOrFail($id)]);
}
 
public function ubahrequest(Request $request)
{
    $bio     = new requestModel;
    $id     = $request->input('id');
    $bio     = requestModel::find($id);
     
    $bio->nama = $request->input('nama');
    $bio->namaaps = $request->input('namaaps');
    $bio->penjelasan = $request->input('penjelasan');
    $bio->lampiran = $request->input('lampiran');
    $bio->status = $request->input('status');
    $bio->keterangan = $request->input('keterangan');



    $bio->save();
     
    return redirect()->action('requestaController@requesta')->with('style', 'success')->with('alert', 'Berhasil Diubah ! ')->with('msg', 'Data Diubah Di Database');
}

public function getDelete($id)
{
    $bio     = new requestModel;
    $bio     = requestModel::find($id);
    $bio->delete();
     
    return redirect()->action('requestController@request')->with('style', 'success')->with('alert', 'Berhasil Dihapus ! ')->with('msg', 'Data Dihapus Di Database');
}


public function downfunc(){
    	$bio=DB::table('request')->get();
    	return view('request',compact('downloads'));
    }

    

    
    


}



?>