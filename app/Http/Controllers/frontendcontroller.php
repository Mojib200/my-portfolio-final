<?php

namespace App\Http\Controllers;

use App\Models\homes;
use App\Models\about;
use App\Models\contact;
use App\Models\protfolio;
use App\Models\service;
use Illuminate\Http\Request;

class frontendcontroller extends Controller
{
    public function index()
    {
        return view('frontendmaster.index',[
            'homes'=>homes::all(),
            'about'=>about::all(),
            'contact'=>contact::all(),
            'protfolio'=>protfolio::all(),
            'service'=>service::all(),
        ]);
    }
    public function product_details($id)
    {

        return view('frontendmaster.product_details' ,[ 'protfolio'=>protfolio::findOrfail($id),
        'homes'=>homes::all(),]);


        //$protfolio= protfolio::find($request->id);
        // $homes = homes::find($request->id);
        //
        // return view('frontendmaster.product_details',['protfolio'=>compact('protfolio'),
        // 'homes'=>compact('homes'),]);
    }
}
