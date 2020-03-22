<?php

namespace App\Http\Controllers;

use App\Http\Models\pendudukModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;

class raskinnController extends BaseController
{
    public function fasilitasraskin()
    {
        $bio = pendudukModel::paginate(5);
        // $bio = pendudukModel::get()->where('kategori','tm');

        // $bio = requestModel::get();
        return view('fasilitasraskin', ['bio' => $bio]);
    }
}
?>
