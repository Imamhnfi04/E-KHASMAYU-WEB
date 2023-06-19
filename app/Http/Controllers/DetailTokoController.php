<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailTokoController extends Controller
{
   public function index()
   {
    return view('toko.detailtoko');
   }
}
