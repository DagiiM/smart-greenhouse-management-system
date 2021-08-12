<?php

namespace App\Http\Controllers\Humidity;

use App\Models\Humidity;
use App\Http\Controllers\WebController;
use Illuminate\Http\Request;

class HumidityController extends WebController
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

     $humidity = Humidity::create($data);

     return back()->with('success','Created successfully!');
    }

}
