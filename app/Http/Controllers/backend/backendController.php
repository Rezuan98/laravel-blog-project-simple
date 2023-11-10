<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class backendController extends Controller
{
  public function index2(){

    return view('backend.index');
  }
}
