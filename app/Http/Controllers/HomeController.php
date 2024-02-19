<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

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
    public function index(): View
    {
        $type = auth()->user()->type;

        if ($type == "2") {
            return view('managerHome');
        } elseif ($type == "1") {
            return view('adminHome');
        } elseif ($type == "0") {
            return view('Home');
        } else {
            return view('welcome');
        }
    }
}