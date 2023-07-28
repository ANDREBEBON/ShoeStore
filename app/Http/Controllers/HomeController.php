<?php

namespace App\Http\Controllers;

use App\Models\perusahan;
use App\Models\produk;
use Illuminate\Http\Request;

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
        // Panggil perusahan models
        $perusahans = perusahan::latest()->paginate(4);
        $produks = produk::latest()->paginate(4);

        //render view with home
        return view('home', compact('perusahans', 'produks'));
        return view('layouts.app',compact('perusahans', 'produks'));
    }
}