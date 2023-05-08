<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nette\Utils\DateTime;
use App\Models\Exam;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');

        if(auth()->user()->role == 'penjual') {
            return view('home'); //ubah ketampilan masing-masing
        } elseif(auth()->user()->role == 'pembeli') {
            return view('home');
        }
    }
}
