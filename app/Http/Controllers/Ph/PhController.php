<?php

namespace App\Http\Controllers\Ph;

use App\Models\Ph;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PhController extends Controller
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

     $ph = Ph::create($data);

     return back()->with('success','Created successfully!');
    }

}
