<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests;
use App\Item;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $q = Item::get();
        var_dump('<pre>', $q[0]->category); die();
        return view('home');
    }
}
