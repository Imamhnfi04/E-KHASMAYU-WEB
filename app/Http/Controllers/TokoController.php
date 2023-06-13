<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function toko1()
    {
        return view('toko.toko1');
    }
}
