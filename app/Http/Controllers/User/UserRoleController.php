<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\WebController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserRoleController extends WebController
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(User $user)
  {
      $roles=$user->roles;

      return view('home.users.role.index',['roles'=>$roles,'user'=>$user]);
  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
      //All roles
       $collection = Role::all();
       //Users Current roles
       $role=$user->roles;
       //roles for the User To Join in
       $roles=$collection->diff($role);

      return view('home.users.role.create',['roles'=>$roles,'role'=>$role,'user'=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,User $user)
    {
      $rules=[
        'role'=>'required',
      ];

      $this->validate($request,$rules);

      $data = $request->all();

      $user->assignRole($data['role']);

      $user->save();

      return back()->with('success','Updated Role Sucessfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user,Role $role)
    {
      $user->roles()->detach($role);

      return back()->with('success','Role Detached Successfully');
    }
}
