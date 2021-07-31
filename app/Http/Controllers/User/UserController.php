<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Role;
use App\Http\Controllers\WebController;
use Illuminate\Http\Request;

class UserController extends WebController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();

        return $this->showAll('home.users.index',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
       'firstname'=>'required',
       'lastname'=>'required',
       'bio'=>'required',
       'mobile' => 'required|string|min:8|max:12|unique:users',
       'email'=>'required|email|unique:users',
       'password'=>'required|min:6|confirmed',
       'gender'=>'required',
     ];

      $man = "Male";
      $woman = "Female";

      $this->validate($request,$rules);

      $data = $request->all();
      $data['password'] = bcrypt($request->password);
      $data['verified'] = User::UNVERIFIED_USER;

      if (strcmp($request->gender, $woman))
       {
        $picture='profile/default_male_image.png';
      }

      elseif (strcmp($request->gender, $man))
      {
        $picture='profile/default_female_image.png';
      }

      $data['picture']=$picture;

      $data['cover_image'] ='profile/default_cover_image.jpg';

      $data['verification_token'] = User::generateVerificationCode();

      $user = User::create($data);

      return view('auth.login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
      $roles=$user->roles;
      $data=$user;
      return view('home.users.show',['data'=>$data,'roles'=>$roles]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $role=Role::all();
        $roles=$user->roles;
        return view('home.users.edit',['user'=>$user,'role'=>$role,'roles'=>$roles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $rules = [
          'mobile'=>'mobile|unique:users,mobile'.$user->id,
          'email'=>'email|unique:users,email,'.$user->id,
          'password'=>'min:6|confirmed',
        ];

        if($request->has('firstname'))
        {
          $user->firstname=$request->firstname;
        }
        if($request->has('lastname'))
        {
          $user->lastname=$request->lastname;
        }

        if($request->has('mobile'))
        {
          $user->mobile=$request->mobile;
        }

        if($request->has('country'))
        {
          $user->country=$request->country;
        }

        if($request->has('city'))
        {
          $user->city=$request->city;
        }

        if($request->has('bio'))
        {
          $bio->mobile=$request->bio;
        }


      if ($request->has('email')&&($user->email != $request->email))
            {
              $user->verified=User::UNVERIFIED_USER;
              $user->verification_token=User::generateVerificationCode();
              $user->email_verified_at=null;
              $user->email=$request->email;
            }

        if($request->has('password'))
        {
              $user->password=bcrypt($request->password);
            }

        if(!$user->isDirty())
        {
          return back()->with('error','Please specify a different value to update');
        }

        $user->save();

        return back()->with('success','User Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('success','User Deleted successfully!');
    }
}
