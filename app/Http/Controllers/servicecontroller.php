<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\service;
use Carbon\Carbon;
use app\Models\User;
use illuminate\Support\Facades\Auth;
use File;




class servicecontroller extends Controller
{
    public function index()
    {
        return view('layouts\Dashboard\dashboard\service\index', ['service' => service::all(),]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts\Dashboard\dashboard\service\create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

       service::insert([

        'service_name' => $request->service_name,
        'service_description' => $request->service_description,
        'service_logo' => $request->service_logo,
            'created_at' => Carbon::now(),
        ]);

        return redirect('service');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $service= service::find($id);
        return view('layouts\Dashboard\dashboard\service\show',compact('service'));
    }


    //

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $service= service::find($id);
        return view('layouts\Dashboard\dashboard\service\edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        service::find($id)->update([
                'service_name' => $request->service_name,
                'service_description' => $request->service_description,
                'service_logo' => $request->service_logo,


            ]);

            return back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {$service= service::find($id);
        $service->delete();

        return back();

    }
}
