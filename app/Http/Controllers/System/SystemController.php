<?php

namespace App\Http\Controllers\System;

use App\Models\System;
use App\Models\Contact;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class SystemController extends WebController
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('system.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $rules = [
       'application_name'=>'required',
       'vision'=>'required',
       'mission'=>'required',
       'email'=>'required|email',
       'values'=>'required',
       'description'=>'required',
     ];

      $this->validate($request,$rules);


      $data = $request->all();

      $data['system_key']=config('app.key');

        $system = System::create($data);

      return back()->with('success','System created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\System  $system
     * @return \Illuminate\Http\Response
     */
    public function edit(System $system)
    {
      $system = System::where('system_key','=',Config('app.key'))->first();

      if (System::all()->isEmpty())
      {
        return view('system.create');
      }

        return $this->showOne('system.edit',$system);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\System  $system
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, System $system)
    {
        return back()->with('success','System Updated Successfully!');
    }


  }
