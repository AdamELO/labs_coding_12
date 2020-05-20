<?php

namespace App\Http\Controllers;

use App\Testimonial;
use App\Menu;
use App\Logo;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class TestimonialController extends Controller
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
        $testimonials = Testimonial::all();
        return view( 'backoffice.testimonial', compact( 'menus','logo','testimonials' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::first();
        $logo = Logo::first();
        return view( 'create.testimonial',compact('menus','logo') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate( [
            'img'=>'required',
            'name'=>'required',
            'prename'=>'required',
            'description'=>'required',
            'fonction'=>'required',
            ], [
            'img.required'=>'veuillez selectionner une image.',
            'name.required'=>'veuillez remplir le champ Nom.',
            'prename.required'=>'veuillez remplir le champ Prénom.',
            'description.required'=>'veuillez remplir le champ Description.',
            'fonction.required'=>'veuillez remplir le champ Fonction.',
            ] );
            $img = $request->file( 'img' );
            $newName = Storage::disk( 'public' )->put( '', $img );
            $testimonial = new Testimonial();
            $testimonial->img = $newName;
            $thumbnailpath = public_path( 'storage/'.$testimonial->img );
            $imgde = Image::make( $thumbnailpath )->resize( 100, 100 );
            $imgde->save( $thumbnailpath );
            $testimonial->description = $request->description;
            $testimonial->name = $request->name;
            $testimonial->prename = $request->prename;
            $testimonial->fonction = $request->fonction;
            $testimonial->save();
            return redirect()->route( 'testimonial.index' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        $menus = Menu::first();
        $logo = Logo::first();
        return view( 'edit.testimonial', compact( 'menus','logo','testimonial' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $img = $request->file( 'img' );
        if ( $img != null ) {
            Storage::disk( 'public' )->delete( $testimonial->img );
            $newName = Storage::disk( 'public' )->put( '', $img );
            $testimonial->img = $newName;
            $thumbnailpath = public_path( 'storage/'.$testimonial->img );
            $imgde = Image::make( $thumbnailpath )->resize( 100, 100 );
            $imgde->save( $thumbnailpath );
        }
        $testimonial->description = $request->description;
        $testimonial->name = $request->name;
        $testimonial->prename = $request->prename;
        $testimonial->fonction = $request->fonction;
        $testimonial->save();
        return redirect()->route( 'testimonial.index' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        Storage::disk('public')->delete($testimonial->img);
        $testimonial->delete();
        return redirect()->back();
    }
}
