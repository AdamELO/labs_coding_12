<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Logo;
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
        $menus = Menu::first();
        $logo = Logo::first();
        return view('profil',compact('menus','logo'));
    }
}
