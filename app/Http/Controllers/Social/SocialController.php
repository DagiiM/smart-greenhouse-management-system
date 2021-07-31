<?php

namespace App\Http\Controllers\Social;

use App\Http\Controllers\WebController;
use App\Models\Social;
use App\Models\Service;
use Illuminate\Http\Request;

class SocialController extends WebController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socials=Social::all();

        return $this->showAll('system.social.index',$socials);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('system.social.create');
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
       'name'=>'required',
       'url'=>'required',
     ];

     $this->validate($request,$rules);

     $data = $request->all();

     $social = Social::create($data);


     return back()->with('success','Social Link created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function show(Social $social)
    {
        return $this->showOne('system.social.show',$social);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function edit(Social $social)
    {
        return $this->showOne('system.social.edit',$social);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Social $social)
    {


        return back()->with('success','Social Link Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function destroy(Social $social)
    {
      $social->delete();

      return back()->with('success','Social Link Deleted successfully!');
    }
}
