<?php

namespace App\Http\Controllers;

use App\Http\Models\dgaleryModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;

class GaleryController extends BaseController
{
    public function galery()
    {
        $bio = dgaleryModel::paginate(6);
        // $bio = requestModel::get();
        return view('galery', ['bio' => $bio]);
    }
}
?>
