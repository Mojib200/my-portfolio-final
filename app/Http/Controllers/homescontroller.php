<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\homes;
use Carbon\Carbon;
use app\Models\User;
use Intervention\Image\ImageManagerStatic as Image;
use illuminate\Support\Facades\Auth;
use File;




class homescontroller extends Controller
{
    public function index()
    {
        return view('layouts\Dashboard\dashboard\homes\index', ['homes' => homes::all(),]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts\Dashboard\dashboard\homes\create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $new_name = Auth::user()->id . "." . $request->File('profile_photo')->getClientOriginalExtension();
        $img = Image::make($request->File('profile_photo'))->resize(550, 840);
        $img->save(base_path('public/uploads/profile_photo/' . $new_name), 100);


        //return $request;
       homes::insert([

            'name' => $request->name,
            'myself' => $request->myself,
            'profile_photo' => $new_name,
            'created_at' => Carbon::now(),
        ]);
        //return back()->with('categorie_success', 'Your Categorie Data Upload Done Successfully');
        return redirect('homes');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $homes= homes::find($id);
        return view('layouts\Dashboard\dashboard\homes\show',compact('homes'));
    }


    //

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $homes= homes::find($id);
        return view('layouts\Dashboard\dashboard\homes\edit',compact('homes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        homes::find($id)->update([
                'name' => $request->name,
                'myself' => $request->myself,
               // 'categorie_photo' => new_name,

            ]);
            if($request->hasFile('profile_photo'))
            {
                unlink(base_path('public/uploads/profile_photo/'.homes::find($id)->profile_photo));
                $new_name = Auth::user()->id . Carbon::now()->format('Y-m-d'). "." . $request->file('profile_photo')->getClientOriginalExtension();
                $img = Image::make($request->file('profile_photo'))->resize(550, 840);
                $img->save(base_path('public/uploads/profile_photo/' . $new_name), 100);
                homes::find($id)->update([
                    'profile_photo' => $new_name,
                ]);


            }
            return back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {$homes= homes::find($id);
        $homes->delete();

        return back();

    }
}
