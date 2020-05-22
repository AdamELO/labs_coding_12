<?php

namespace App\Http\Controllers;

use App\Team;
use App\Menu;
use App\Logo;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;


class TeamController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $menus = Menu::first();
        $logo = Logo::first();
        $teams = Team::all();
        return view( 'backoffice.team', compact( 'menus', 'logo', 'teams' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        $menus = Menu::first();
        $logo = Logo::first();
        return view( 'create.team', compact( 'menus', 'logo' ) );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        $request->validate( [
            'name'=>'required',
            'prename'=>'required',
            'fonction'=>'required',
            'img'=>'required',
        ], [
            'name.required'=>'Le champ nom est obligatoire.',
            'prename.required'=>'Le champ prénom est obligatoire.',
            'fonction.required'=>'Le champ fonction est obligatoire.',
            'img.required'=>'Le champ img est obligatoire.',
        ] );
        $img = $request->file( 'img' );
        $newName = Storage::disk( 'public' )->put( '', $img );
        $team = new Team();
        $team->img = $newName;
        $thumbnailpath = public_path( 'storage/'.$team->img );
        $imgde = Image::make( $thumbnailpath )->resize( 360, 448 );
        $imgde->save( $thumbnailpath );
        $team->name = $request->name;
        $team->prename = $request->prename;
        $team->fonction = $request->fonction;
        $team->save();
        return redirect()->route( 'team.index' );
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Team  $team
    * @return \Illuminate\Http\Response
    */

    public function show( Team $team ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Team  $team
    * @return \Illuminate\Http\Response
    */

    public function edit( Team $team ) {
        $menus = Menu::first();
        $logo = Logo::first();
        return view( 'edit.team', compact( 'menus', 'logo', 'team' ) );
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Team  $team
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, Team $team ) {
        $img = $request->file( 'img' );
        if ( $img != null ) {
            Storage::disk( 'public' )->delete( $team->img );
            $newName = Storage::disk( 'public' )->put( '', $img );
            $team->img = $newName;
            $thumbnailpath = public_path( 'storage/'.$team->img );
            $imgde = Image::make( $thumbnailpath )->resize( 360, 448 );
            $imgde->save( $thumbnailpath );
        }
        $team->name = $request->name;
        $team->prename = $request->prename;
        $team->fonction = $request->fonction;
        $team->save();
        return redirect()->route( 'team.index' );
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Team  $team
    * @return \Illuminate\Http\Response
    */

    public function destroy( Team $team ) {
        Storage::disk('public')->delete($team->img);
        $team->delete();
        return redirect()->back();
    }
}
