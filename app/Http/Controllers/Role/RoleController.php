<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\WebController;
use App\Models\Role;
use App\Models\Ability;
use Illuminate\Http\Request;

class RoleController extends WebController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles=Role::all();

        return $this->showAll('home.role.index',$roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $ability=Ability::all();

      return $this->showAll('home.role.create',$ability);
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

        $ability = $request->input('ability_select');

        $data=$request->all();

        $role=Role::create($data);

        $ability=$role->allowTo($ability);

        return back()->with('success','Role created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        $abilities=$role->abilities;

        return view('home.role.show',['role'=>$role,'abilities'=>$abilities]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        return $this->showOne('home.role.edit',$role);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        return back()->with('success','Role Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
      $role->delete();

      return back()->with('success','Role Deleted successfully!');
    }
}
