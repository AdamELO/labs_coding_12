<?php

namespace App\Http\Controllers;

use App\Bannercar;
use App\Menu;
use App\Logo;
use App\Titre;
use App\Presentation;
use App\Slogan;
use App\Service;
use App\Icon;
use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class HtmlController extends Controller {
    public function home() {
        $menus = Menu::first();
        $testimonials = Testimonial::all();
        $logo = Logo::first();
        $titre = Titre::first();
        $slogan = Slogan::first();
        $bannercars = Bannercar::all();
        $services = Service::Paginate(9);
        $services1 = Service::all();
        $presentation = Presentation::first();
        return view( 'index', compact( 'menus','bannercars','slogan','logo','services','presentation','titre','testimonials','services1' ) );
    }

    public function services() {
        $services = Service::Paginate(9);
        $titre = Titre::first();
        $logo = Logo::first();
        $menus = Menu::first();
        return view( 'services', compact( 'menus','logo','services','titre') );
    }

    public function blog() {
        $logo = Logo::first();
        $menus = Menu::first();
        return view( 'blog', compact( 'menus','logo' ) );
    }

    public function blogpost() {
        $logo = Logo::first();
        $menus = Menu::first();
        return view( 'blogpost', compact( 'menus','logo' ) );
    }

    public function contact() {
        $titre = Titre::first();
        $logo = Logo::first();
        $menus = Menu::first();
        return view( 'contact', compact( 'menus','logo','titre' ) );
    }
}
