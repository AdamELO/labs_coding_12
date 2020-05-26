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
use App\Footer;
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
        $footer = Footer::first();
        $testimonials = Testimonial::all();
        $teams = Team::all();
        $logo = Logo::first();
        $titre = Titre::first();
        $slogan = Slogan::first();
        $bannercars = Bannercar::all();
        $services = Service::Paginate( 9 )->fragment( 'service' );
        $services1 = Service::all();
        $ready = Ready::first();
        $presentation = Presentation::first();
        $contact = Contact::first();
        $teams = Team::where( 'fonction', 'CEO' )->first();
        $teaams = Team::where( 'fonction', '!=', 'CEO' )->take( 2 )->inRandomOrder()->get();
        return view( 'index', compact( 'menus', 'bannercars', 'slogan', 'logo', 'services', 'presentation', 'titre', 'testimonials', 'services1', 'ready', 'contact', 'teams', 'teaams', 'footer' ) );
    }

    public function services() {
        $footer = Footer::first();
        $servicesprime = Service::orderBy( 'created_at', 'DESC' )->take( 6 )->get();
        $services = Service::Paginate( 9 )->fragment( 'service' );
        $contact = Contact::first();
        $titre = Titre::first();
        $logo = Logo::first();
        $menus = Menu::first();
        $articles = Article::all();
        $serviceprimbtn = Serviceprim::first();
        return view( 'services', compact( 'menus', 'logo', 'services', 'titre', 'contact', 'servicesprime', 'serviceprimbtn', 'articles', 'footer' ) );
    }

    public function blog(Request $request) {
        $articles = Article::where( 'accept', '=', 'checked' )->orderBy('created_at','DESC')->Paginate( 3 );
        $categories = Categorie::all();
        $tags = Tag::all();
        $logo = Logo::first();
        $menus = Menu::first();
        $footer = Footer::first();
        $search = $request->search;
        return view( 'blog', compact( 'menus', 'logo', 'articles', 'tags', 'categories', 'footer','search' ) );
    }

    public function blogpost( $id ) {
        $footer = Footer::first();
        $article = Article::find( $id );
        $logo = Logo::first();
        $menus = Menu::first();
        return view( 'blog-post', compact( 'menus', 'logo', 'article', 'footer' ) );
    }

    public function contact() {
        $contact = Contact::first();
        $titre = Titre::first();
        $footer = Footer::first();
        $logo = Logo::first();
        $menus = Menu::first();
        return view( 'contact', compact( 'menus', 'logo', 'titre', 'contact', 'footer' ) );
    }

    public function search( Request $request ) {
        $request->validate( [
        'search'=>'required',
        ], [
        'search.required'=>"Vous n'avez rien introduis dans le barre de recherche",
        ] );
        $menus = Menu::first();
        $logo = Logo::first();
        $commentaires = Commentaire::all();
        $categories = Categorie::all();
        $tags = Tag::all();
        $footer = Footer::first();
        $search = $request->search;
        $articles = Article::where( 'titre', 'like', "%$search%" )->orWhere('text', 'like', "%$search%")->get();
        return view( 'recherche', compact( 'menus', 'articles', 'logo', 'commentaires', 'categories', 'tags', 'search','footer' ) ) ;
    }
}
