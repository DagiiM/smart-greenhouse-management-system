<?php

namespace App\Http\Controllers;

use App\Models\Humidity;
use App\Models\Ph;
use App\Models\Temperature;
use App\Models\Moisture;
use Illuminate\Http\Request;

class DashboardController extends WebController
{
  public function index()
  {
    $humidity=Humidity::all();
    $humidity=$humidity->last();
    $ph=Ph::all();
    $ph=$ph->last();
    $temperature=Temperature::all();
    $temperature=$temperature->last();
    $moisture=Moisture::all();
    $moisture=$moisture->last();

    return view('dashboard',['humidity'=>$humidity,'ph'=>$ph,'moisture'=>$moisture,'temperature'=>$temperature]);
  }
}
