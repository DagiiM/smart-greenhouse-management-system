<?php

namespace App\Http\Controllers\Moisture;

use App\Models\Moisture;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MoistureController extends Controller
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

     $moisture = Moisture::create($data);

     return back()->with('success','Created successfully!');
    }

}
