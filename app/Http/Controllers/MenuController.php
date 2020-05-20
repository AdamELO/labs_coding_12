<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $menus = Menu::first();
        $logo = Logo::first();
        return view( 'backoffice.menu', compact( 'menus','logo' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        //
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        //
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Menu  $menu
    * @return \Illuminate\Http\Response
    */

    public function show( Menu $menu ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Menu  $menu
    * @return \Illuminate\Http\Response
    */

    public function edit( Menu $menu ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Menu  $menu
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, Menu $menu ) {
        $menu->lien1 = $request->lien1;
        $menu->lien2 = $request->lien2;
        $menu->lien3 = $request->lien3;
        $menu->lien4 = $request->lien4;
        $menu->save();
        return redirect()->route( 'menu.index' );
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Menu  $menu
    * @return \Illuminate\Http\Response
    */

    public function destroy( Menu $menu ) {
        //
    }
}
