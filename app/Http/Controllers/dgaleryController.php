<?php
 
namespace App\Http\Controllers;
 
use App\Http\Models\dgaleryModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
 
class dgaleryController extends BaseController
{
    public function dgalery()
    {
        $bio = dgaleryModel::paginate(5);
        // $bio = dgaleryModel::get();
        return view('dgalery', ['bio' => $bio]);
    }

    public function getInput()
{
    return view('inputdgalery');
}
 
public function simpandgalery(Request $request)
{
     $file = Input::file('gambarone');
     $valfile = array('image' => $file);
     $valrules = array('image' => 'image');
     
    $validator = Validator::make($valfile, $valrules);
    if ($validator->fails()) {
        return redirect()->action('dgaleryController@dgalery')->with('style', 'danger')->with('alert', 'Gagal Di Upload ! ')->with('msg', 'Cek Tipe File');
    }else{
        $destinationPath = 'uploads';
        $size = $file->getSize();
        $extension = $file->getClientOriginalExtension();
        $fileName = $file->getClientOriginalName();
        $upload_success = $file->move($destinationPath, $fileName);
         
        if ($upload_success){
            $bio = new dgaleryModel;
            $bio->gambarone = $fileName;
            $bio->data_title = $request->input('data_title');

 
            $bio->save();
             
            return redirect()->action('dgaleryController@dgalery')->with('style', 'success')->with('alert', 'Berhasil Disimpan ! ')->with('msg', 'Data Disimpan Di Database');
        
    
        }
    }
}

public function getEdit($id)
{
    return view('editdgalery', ['dgalery' => dgaleryModel::findOrFail($id)]);
}
 
public function ubahdgalery(Request $request)
{
    $bio     = new dgaleryModel;
    $id     = $request->input('id');
    $bio     = dgaleryModel::find($id);
     
    $bio->data_title = $request->input('data_title');
    $bio->save();
     
    return redirect()->action('dgaleryController@dgalery')->with('style', 'success')->with('alert', 'Berhasil Diubah ! ')->with('msg', 'Data Diubah Di Database');
}

public function getDelete($id)
{
    $bio     = new dgaleryModel;
    $bio     = dgaleryModel::find($id);
    $bio->delete();
     
    return redirect()->action('dgaleryController@dgalery')->with('style', 'success')->with('alert', 'Berhasil Dihapus ! ')->with('msg', 'Data Dihapus Di Database');
}

}



?>