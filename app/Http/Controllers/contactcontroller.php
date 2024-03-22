<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\contact;
use Carbon\Carbon;
use app\Models\User;
use illuminate\Support\Facades\Auth;
use File;




class contactcontroller extends Controller
{
    public function index()
    {
        return view('layouts\Dashboard\dashboard\contact\index', ['contact' => contact::all(),]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts\Dashboard\dashboard\contact\create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //return $request;
       contact::insert([

            'contact_name' => $request->contact_name,
            'contact_email' => $request->contact_email,
            'phone_number' => $request->phone_number,
            'myself_description' => $request->myself_description,
            'created_at' => Carbon::now(),
        ]);

        return redirect('contact');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $contact= contact::find($id);
        return view('layouts\Dashboard\dashboard\contact\show',compact('contact'));
    }


    //

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $contact= contact::find($id);
        return view('layouts\Dashboard\dashboard\contact\edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        contact::find($id)->update([
            'contact_name' => $request->contact_name,
            'contact_email' => $request->contact_email,
            'phone_number' => $request->phone_number,
            'myself_description' => $request->myself_description,
            ]);

            return back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {$contact= contact::find($id);
        $contact->delete();

        return back();

    }
}
