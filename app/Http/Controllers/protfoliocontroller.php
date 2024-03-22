<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\protfolio;
use Carbon\Carbon;
use app\Models\User;
use Intervention\Image\ImageManagerStatic as Image;
use illuminate\Support\Facades\Auth;
use File;




class protfoliocontroller extends Controller
{
    public function index()
    {
        return view('layouts\Dashboard\dashboard\protfolio\index', ['protfolio' => protfolio::all(),]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts\Dashboard\dashboard\protfolio\create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $new_name = Auth::user()->id . "." . $request->File('portfolio_photo')->getClientOriginalExtension();
        $img = Image::make($request->File('portfolio_photo'))->resize(300, 300);
        $img->save(base_path('public/uploads/portfolio_photo/' . $new_name), 100);


        //return $request;
       protfolio::insert([

            'portfolio_title' => $request->portfolio_title,
            'portfolio_description' => $request->portfolio_description,
            'portfolio_photo' => $new_name,
            'created_at' => Carbon::now(),
        ]);
        return redirect('protfolio');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $protfolio= protfolio::find($id);
        return view('layouts\Dashboard\dashboard\protfolio\show',compact('protfolio'));
    }


    //

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $protfolio= protfolio::find($id);
        return view('layouts\Dashboard\dashboard\protfolio\edit',compact('protfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        protfolio::find($id)->update([
                'portfolio_title' => $request->portfolio_title,
                'portfolio_description' => $request->portfolio_description,
               // 'categorie_photo' => new_name,

            ]);
            if($request->hasFile('portfolio_photo'))
            {
                unlink(base_path('public/uploads/portfolio_photo/'.protfolio::find($id)->portfolio_photo));
                $new_name = Auth::user()->id . Carbon::now()->format('Y-m-d'). "." . $request->file('portfolio_photo')->getClientOriginalExtension();
                $img = Image::make($request->file('portfolio_photo'))->resize(300, 300);
                $img->save(base_path('public/uploads/portfolio_photo/' . $new_name), 100);
                protfolio::find($id)->update([
                    'portfolio_photo' => $new_name,
                ]);


            }
            return back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {$protfolio= protfolio::find($id);
        $protfolio->delete();

        return back();

    }
}
