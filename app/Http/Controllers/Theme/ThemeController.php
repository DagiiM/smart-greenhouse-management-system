<?php

namespace App\Http\Controllers\Theme;

use App\Http\Controllers\WebController;
use App\Models\Theme;
use App\Models\Image;
use Illuminate\Http\Request;

class ThemeController extends WebController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $themes=Theme::all();

        return $this->showAll('system.theme.index',$themes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('system.theme.create');
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
       'semester'=>'required',
       'subject'=>'required',
     ];

     $this->validate($request,$rules);

     $data = $request->all();

     $theme = Theme::create($data);

    return back()->with('success','Theme created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function show(Theme $theme)
    {
        return $this->showOne('system.theme.show',$theme);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function edit(Theme $theme)
    {
          return $this->showOne('system.theme.edit',$theme);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Theme $theme)
    {

        return back()->with('success','Theme Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Theme $theme)
    {
      $theme->delete();

      return back()->with('success','Theme Deleted successfully!');
    }
}
