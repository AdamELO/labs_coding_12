<?php

namespace App\Http\Controllers;

use App\Article;
use App\Author;
use App\Categorie;
use App\CategorieArticle;
use App\Events\ArticlePublierEvent;
use App\Logo;
use App\Menu;
use App\Tag;
use App\TagArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $articles = Article::all();
        $menus = Menu::first();
        $logo = Logo::first();
        return view( 'backoffice.article', compact( 'menus', 'logo', 'articles', ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        $tags = Tag::all();
        $categories = Categorie::all();
        $menus = Menu::first();
        $logo = Logo::first();
        return view( 'create.article', compact( 'menus', 'logo', 'tags', 'categories' ) );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        $request->validate( [
            'img'=>'required',
            'text'=>'required',
            'date'=>'required',
            'titre'=>'required',
            'tags'=>'required',
            'cate'=>'required',
        ], [
            'img.required'=>'veuillez selectionner une image.',
            'text.required'=>'veuillez remplir le champ text.',
            'date.required'=>'veuillez remplir le champ date.',
            'titre.required'=>'veuillez remplir le champ titre.',
            'tags.required'=>'veuillez remplir le champ tags.',
            'cate.required'=>'veuillez remplir le champ categories.',
        ] );
        $img = $request->file( 'img' );
        $newName = Storage::disk( 'public' )->put( '', $img );
        $article = new Article();
        $article->img_article = $newName;
        $thumbnailpath = public_path( 'storage/'.$article->img_article );
        $imgde = Image::make( $thumbnailpath )->resize( 755, 270 );
        $imgde->save( $thumbnailpath );
        $article->text = $request->text;
        $article->date = $request->date;
        $article->titre = $request->titre;
        if ( Auth::user()->role_id == 2 ) {
            if ( isset( $_POST['test'] ) ) {
                $article->accept = 'checked';
            } else {
                $article->accept = 'unchecked';
            }
        } else {
            $article->accept = 'unchecked';
        }
        $article->user_id = Auth::id();
        $article->save();
        $article->categories()->attach( $request->cate );
        $article->tags()->attach( $request->tags );
        if (Auth::user()->role_id == 2) {
            if (isset( $_POST['test'] )) {
                event(new ArticlePublierEvent($article));
            }
        }

        return redirect()->route( 'article.index' );
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Article  $article
    * @return \Illuminate\Http\Response
    */

    public function show( Article $article ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Article  $article
    * @return \Illuminate\Http\Response
    */

    public function edit( Article $article ) {
        $tags = Tag::all();
        $categories = Categorie::all();
        $menus = Menu::first();
        $logo = Logo::first();
        $pivot = CategorieArticle::where('article_id', '=', $article->id)->get();
        $piv = TagArticle::where('article_id', '=', $article->id)->get();
        return view( 'edit.article', compact( 'menus', 'logo', 'article', 'tags', 'categories','pivot','piv' ) );
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Article  $article
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, Article $article ) {
        $img = $request->file( 'img' );
        if ( $img != null ) {
            Storage::disk( 'public' )->delete( $article->img_article );
            $newName = Storage::disk( 'public' )->put( '', $img );
            $article->img_article = $newName;
            $thumbnailpath = public_path( 'storage/'.$article->img_article );
            $imgde = Image::make( $thumbnailpath )->resize( 755, 270 );
            $imgde->save( $thumbnailpath );
        }
        $article->text = $request->text;
        $article->date = $request->date;
        $article->titre = $request->titre;
        if ( Auth::user()->role_id == 2 ) {
        if ( isset( $_POST['test'] ) ) {
            $article->accept = 'checked';
        } else {
            $article->accept = 'unchecked';
        }}
        $article->tags()->sync( $request->tags );
        $article->categories()->sync( $request->cate );
        $article->save();
        if (Auth::user()->role_id == 2) {
            if (isset( $_POST['test'] )) {
                event(new ArticlePublierEvent($article));
            }
        }
        return redirect()->route( 'article.index' );
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Article  $article
    * @return \Illuminate\Http\Response
    */

    public function destroy( Article $article ) {
        Storage::disk( 'public' )->delete( $article->img_article );
        $article->delete();
        return redirect()->back();
    }
}
