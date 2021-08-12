<?php

namespace App\Http\Controllers\Temperature;

use App\Models\Temperature;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemperatureController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $rules = [
       'value'=>'required',
     ];

     $this->validate($request,$rules);

     $data = $request->all();

     $temperature = Temperature::create($data);

     return back()->with('success','Created successfully!');
    }

}
