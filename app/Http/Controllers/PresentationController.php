<?php

namespace App\Http\Controllers;

use App\Logo;
use App\Menu;
use App\Presentation;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class PresentationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presentation = Presentation::first();
        $menus = Menu::first();
        $logo = Logo::first();
        return view( 'backoffice.presentation', compact( 'menus','logo','presentation' ) );
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
     * @param  \App\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function show(Presentation $presentation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function edit(Presentation $presentation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Presentation $presentation)
    {
        $img = $request->file( 'imgvideo' );
        if ( $img != null ) {
            Storage::disk( 'public' )->delete( $presentation->imgvideo );
            $newName = Storage::disk( 'public' )->put( '', $img );
            $presentation->imgvideo = $newName;
            $thumbnailpath = public_path( 'storage/'.$presentation->imgvideo );
            $imgde = Image::make( $thumbnailpath )->resize( 754, 407 );
            $imgde->save( $thumbnailpath );
        }
        $presentation->description1 = $request->desc1;
        $presentation->description2 = $request->desc2;
        $presentation->lien = $request->lien;
        $presentation->btn = $request->btn;
        $presentation->save();
        return redirect()->route( 'presentation.index' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Presentation $presentation)
    {
        //
    }
}
