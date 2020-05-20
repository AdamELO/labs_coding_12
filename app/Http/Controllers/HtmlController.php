<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HtmlController extends Controller {
    public function home() {
        $menus = Menu::first();
        return view( 'index', compact( 'menus' ) );
    }

    public function services() {
        $menus = Menu::first();
        return view( 'services', compact( 'menus') );
    }

    public function blog() {
        $menus = Menu::first();
        return view( 'blog', compact( 'menus' ) );
    }

    public function blogpost() {
        $menus = Menu::first();
        return view( 'blogpost', compact( 'menus' ) );
    }

    public function contact() {
        $menus = Menu::first();
        return view( 'contact', compact( 'menus' ) );
    }
}
