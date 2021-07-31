<?php

namespace App\Http\Controllers\Ability;

use App\Models\Ability;
use App\Http\Controllers\WebController;
use Illuminate\Http\Request;

class AbilityController extends WebController
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $abilities=Ability::all();

      return $this->showAll('home.ability.index',$abilities);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('home.ability.create');
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
     'description'=>'required',
   ];

   $this->validate($request,$rules);

   $data = $request->all();

   $ability = Ability::create($data);

   return back()->with('success','Ability created successfully!');

  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Ability  $ability
   * @return \Illuminate\Http\Response
   */
  public function show(Ability $ability)
  {
    return $this->showOne('home.ability.show',$ability);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Ability  $ability
   * @return \Illuminate\Http\Response
   */
  public function edit(Ability $ability)
  {
    return $this->showOne('home.ability.edit',$ability);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Ability  $ability
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Ability $ability)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Ability  $ability
   * @return \Illuminate\Http\Response
   */
  public function destroy(Ability $ability)
  {
      $ability->delete();

      return back()->with('success','Ability Deleted successfully!');
  }
}
