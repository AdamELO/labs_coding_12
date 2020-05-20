<?php

namespace App\Http\Controllers;

use App\Titre;
use App\Menu;
use App\Logo;
use Illuminate\Http\Request;

class TitreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::first();
        $logo = Logo::first();
        $titre = Titre::first();
        return view( 'backoffice.titre', compact( 'menus','logo','titre' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function show(Titre $titre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function edit(Titre $titre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Titre $titre)
    {
        $titre->presentation = $request->presentation;
        $titre->team = $request->team;
        $titre->serviceprim = $request->serviceprim;
        $titre->service = $request->service;
        $titre->contact = $request->contact;
        $titre->testimonial = $request->testimonial;
        $titre->save();
        return redirect()->route( 'titre.index' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Titre $titre)
    {
        //
    }
}
