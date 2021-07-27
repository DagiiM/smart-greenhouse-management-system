<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\WebResponser;


class WebController extends Controller
{

  use WebResponser;

  public function __construct()
  {

  }
}
