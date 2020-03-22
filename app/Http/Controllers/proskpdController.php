<?php

namespace App\Http\Controllers;

use App\Http\Models\profileModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;

class proskpdController extends BaseController
{
    public function proskpd()
    {
        $bio = profileModel::paginate(1);
        // $bio = profileModel::get();
        return view('proskpd', ['bio' => $bio]);
    }

    public function getInput()
{
    return view('inputproskpd');
}

public function simpanproskpd(Request $request)
{
    $file = Input::file('foto');
    $valfile = array('image' => $file);
    $valrules = array('image' => 'image');

    $validator = Validator::make($valfile, $valrules);
    if ($validator->fails()) {
        return redirect()->action('proskpdController@proskpd')->with('style', 'danger')->with('alert', 'Gagal Di Upload ! ')->with('msg', 'Cek Tipe File');
    }else{
        $destinationPath = 'uploads';
        $size = $file->getSize();
        $extension = $file->getClientOriginalExtension();
        $fileName = $file->getClientOriginalName();
        $upload_success = $file->move($destinationPath, $fileName);


        if ($upload_success){

          if (! function_exists('bcrypt')) {
    /**
     * Hash the given value against the bcrypt algorithm.
     *
     * @param  string  $value
     * @param  array  $options
     * @return string
     */
    function bcrypt($value, $options = [])
    {
        return app('hash')->driver('bcrypt')->make($value, $options);
    }
}
            $bio = new profileModel;
            $bio->name = $request->input('name');
            $bio->jabatan = $request->input('jabatan');
            $bio->email = $request->input('email');
            $bio->password = bcrypt ($request->input('password'));
            $bio->foto = $fileName;

            $bio->save();

            return redirect()->action('proskpdController@proskpd')->with('style', 'success')->with('alert', 'Berhasil Disimpan ! ')->with('msg', 'Data Disimpan Di Database');


}
}
}

public function showChangePasswordForm(){
    return view('auth.changepassword');
}


public function getEdit($id)
{
    return view('editproskpd', ['proskpd' => profileModel::findOrFail($id)]);
}

public function ubahproskpd(Request $request)
{

    $bio     = new profileModel;
    $id     = $request->input('id');
    $bio     = profileModel::find($id);

    $bio->name = $request->input('name');
    $bio->jabatan = $request-> input('jabatan');
    $bio->save();

    return redirect()->action('proskpdController@proskpd')->with('style', 'success')->with('alert', 'Berhasil Diubah ! ')->with('msg', 'Data Diubah Di Database');


}

public function getDelete($id)
{
    $bio     = new profileModel;
    $bio     = profileModel::find($id);
    $bio->delete();

    return redirect()->action('proskpdController@proskpd')->with('style', 'success')->with('alert', 'Berhasil Dihapus ! ')->with('msg', 'Data Dihapus Di Database');
}

}



?>
