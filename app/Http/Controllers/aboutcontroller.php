<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\about;
use Carbon\Carbon;
use app\Models\User;
use Intervention\Image\ImageManagerStatic as Image;
use illuminate\Support\Facades\Auth;
use File;




class aboutcontroller extends Controller
{
    public function index()
    {
        return view('layouts\Dashboard\dashboard\about\index', ['about' => about::all(),]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts\Dashboard\dashboard\about\\create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $new_name = Auth::user()->id . "." . $request->File('about_photo')->getClientOriginalExtension();
        $img = Image::make($request->File('about_photo'))->resize(550, 840);
        $img->save(base_path('public/uploads/about_photo/' . $new_name), 100);


        //return $request;
       about::insert([
        'myself_long_description' => $request->myself_long_description,
        'about_photo' => $new_name,
            'exam_name_ssc' => $request->exam_name_ssc,
            'exam_year_ssc' => $request->exam_year_ssc,
            'exam_name_hsc' => $request->exam_name_hsc,
            'exam_year_hsc' => $request->exam_year_hsc,
            'created_at' => Carbon::now(),
        ]);
        //return back()->with('categorie_success', 'Your Categorie Data Upload Done Successfully');
        return redirect('about');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $about= about::find($id);
        return view('layouts\Dashboard\dashboard\about\show',compact('about'));
    }


    //

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $about= about::find($id);
        return view('layouts\Dashboard\dashboard\about\edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        about::find($id)->update([
            'myself_long_description' => $request->myself_long_description,
                'exam_name_ssc' => $request->exam_name_ssc,
                'exam_year_ssc' => $request->exam_year_ssc,
                'exam_name_hsc' => $request->exam_name_hsc,
                'exam_year_hsc' => $request->exam_year_hsc,

            ]);
            if($request->hasFile('about_photo'))
            {
                unlink(base_path('public/uploads/about_photo/'.about::find($id)->about_photo));
                $new_name = Auth::user()->id . Carbon::now()->format('Y-m-d'). "." . $request->file('about_photo')->getClientOriginalExtension();
                $img = Image::make($request->file('about_photo'))->resize(550, 840);
                $img->save(base_path('public/uploads/about_photo/' . $new_name), 100);
                about::find($id)->update([
                    'about_photo' => $new_name,
                ]);


            }
            return back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {$about= about::find($id);
        $about->delete();

        return back();

    }
}
