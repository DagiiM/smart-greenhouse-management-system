<?php

namespace App\Http\Controllers;

use App\Models\System;
use App\Models\Contact;
use App\Models\Social;
use App\Models\Theme;
use App\Models\Image;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class WelcomeController extends Controller
{
  public function index()
  {
    $system = System::where('system_key','=',Config('app.key'))->first();
    $contacts=Contact::all();
    $themes=Theme::all();
    $images=Image::all();
    $socials=Social::all();
    $services=Service::all();

    if(User::all()->isEmpty())
    {
      return view('auth.register');
    }

    if (System::all()->isEmpty())
    {
      return view('system.create');
    }

    if ($contacts->isEmpty())
    {
      return view('system.contact.create');
    }

    if ($themes->isEmpty())
    {
      return view('system.theme.create');
    }

    if ($images->isEmpty())
    {
      return view('system.image.create');
    }

    if ($socials->isEmpty())
    {
      return view('system.social.create');
    }

    if ($services->isEmpty())
    {
      return view('system.service.create');
    }

    return view('welcome',compact('system','contacts','images','themes','services','socials'));
  }
}
