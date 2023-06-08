<?php

namespace App\Http\Controllers\penjual;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenjualController extends Controller
{
    public function index()
    {
        return view('admin');
    }
}
