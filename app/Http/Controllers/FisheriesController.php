<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FisheriesController extends Controller
{
  public function fisheries(){


  	return view('admin.fisheries');
  }
}
