<?php

namespace App\Http\Controllers;

use App\Bannercar;
use App\Ready;
use App\Menu;
use App\Logo;
use App\Contact;
use App\Titre;
use App\Presentation;
use App\Slogan;
use App\Service;
use App\Icon;
use App\User;
use App\Tag;
use App\Author;
use App\Article;
use App\Team;
use App\Serviceprim;
use App\Testimonial;
use App\Commentaire;
use App\Categorie;
use App\CategorieArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class HtmlController extends Controller {
    public function home() {
        $menus = Menu::first();
        $testimonials = Testimonial::all();
        $teams = Team::all();
        $logo = Logo::first();
        $titre = Titre::first();
        $slogan = Slogan::first();
        $bannercars = Bannercar::all();
        $services = Service::Paginate(9)->fragment('service');
        $services1 = Service::all();
        $ready = Ready::first();
        $presentation = Presentation::first();
        $contact = Contact::first();
        $teams = Team::where('fonction','CEO')->first();
        $teaams = Team::where('fonction','!=','CEO')->take(2)->inRandomOrder()->get();
        return view( 'index', compact( 'menus','bannercars','slogan','logo','services','presentation','titre','testimonials','services1','ready','contact','teams','teaams' ) );
    }

    public function services() {
        $servicesprime = Service::orderBy('created_at','DESC')->take(6)->get();
        $services = Service::Paginate(9)->fragment('service');
        $contact = Contact::first();
        $titre = Titre::first();
        $logo = Logo::first();
        $menus = Menu::first();
        $articles = Article::all();
        $serviceprimbtn = Serviceprim::first();
        return view( 'services', compact( 'menus','logo','services','titre','contact','servicesprime',"serviceprimbtn",'articles') );
    }

    public function blog() {
        $articles = Article::Paginate(3);
        $categories = Categorie::all();
        $tags = Tag::all();
        $logo = Logo::first();
        $menus = Menu::first();
        return view( 'blog', compact( 'menus','logo','articles','tags','categories' ) );
    }

    public function blogpost($id) {
        $article = Article::find($id);
        $logo = Logo::first();
        $menus = Menu::first();
        return view( 'blog-post', compact( 'menus','logo','article' ) );
    }

    public function contact() {
        $contact = Contact::first();
        $titre = Titre::first();
        $logo = Logo::first();
        $menus = Menu::first();
        return view( 'contact', compact( 'menus','logo','titre','contact' ) );
    }
}
