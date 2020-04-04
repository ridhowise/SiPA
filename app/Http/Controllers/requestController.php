<?php
 
namespace App\Http\Controllers;
 
use App\Http\Models\requestModel;
use App\Http\Models\requirementModel;
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
        $bio = requestModel::with("requirements")->where('nama', $name)->paginate(5);
        $reqq = requirementModel::get();
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

            $syarats = $request->input('syarat');
            foreach($syarats as $syarat) {
                $reqq = new requirementModel();
                $reqq->syarat = $syarat;
                $reqq->checkbox = false;
                $reqq->request_id = $bio->id;
                $reqq->save();
            }

            return redirect()->action('requestController@request')->with('style', 'success')->with('alert', 'Berhasil Disimpan ! ')->with('msg', 'Menunggu persetujuan');
        
        }
    
 
}

public function getEdit($id)
{
    return view('editrequest', ['request' => requestModel::with("requirements")->findOrFail($id)]);
}
 
public function ubahrequest(Request $request)
{
    $id     = $request->input('id');
    $bio     = requestModel::find($id);
     
    $bio->namaaps = $request->input('namaaps');
    $bio->status = $request->input('status');
    $bio->keterangan = $request->input('keterangan');



    $bio->save();
     

       $checkboxs = $request->input('checkbox');
        $ids = $request->input('ids');
            foreach($ids as $key => $requirement_id) {
                $check_box = false;
                if(isset($checkboxs[$key]) === true) {
                    $check_box = true;
                } else {
                    $check_box = false;
                }
                $reqq     = requirementModel::find($requirement_id);
                $reqq->checkbox = $check_box;
                $reqq->save();
            }
     
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