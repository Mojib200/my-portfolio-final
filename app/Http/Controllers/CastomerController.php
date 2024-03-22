<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Castomer;
use Carbon\Carbon;
use app\Models\User;
use illuminate\Support\Facades\Auth;
use File;




class castomercontroller extends Controller
{
    public function index()
    {
        return view('layouts\Dashboard\dashboard\castomer\index', ['castomer' => castomer::all(),]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       // return view('frontendmaster\index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //return $request;
       castomer::insert([

            'castomer_name' => $request->castomer_name,
            'castomer_email' => $request->castomer_email ,
            'castomer_description' => $request->castomer_description,
            'created_at' => Carbon::now(),
        ]);

        return back();

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // $castomer= castomer::find($id);
        // return view('layouts\Dashboard\dashboard\castomer\show',compact('castomer'));
    }


    //

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // $castomer= castomer::find($id);
        // return view('layouts\Dashboard\dashboard\castomer\edit',compact('castomer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        // castomer::find($id)->update([
        //     'castomer_name' => $request->castomer_name,
        //     'castomer_email' => $request->castomer_email,
        //     'myself_description' => $request->myself_description,
        //     ]);

        //     return back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {$castomer= castomer::find($id);
        $castomer->delete();

        return back();

    }
}
