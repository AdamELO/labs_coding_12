<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Bannercar;
use App\Slogan;
use App\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannercarController extends Controller
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
        $slogan = Slogan::first();
        $bannercars = Bannercar::all();
        return view('backoffice.banner',compact('bannercars','menus','slogan','logo'));
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
        $slogan = Slogan::first();
        return view( 'create.banner',compact('menus','slogan','logo') );
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
            ], [
            'img.required'=>'veuillez selectionner une image.',
            ] );
            $img = $request->file( 'img' );
            $newName = Storage::disk( 'public' )->put( '', $img );
            $bannercar = new Bannercar();
            $bannercar->img = $newName;
            $bannercar->save();
            return redirect()->route( 'banner.index' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bannercar  $bannercar
     * @return \Illuminate\Http\Response
     */
    public function show(Bannercar $bannercar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bannercar  $bannercar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menus = Menu::first();
        $logo = Logo::first();
        $bannercar = Bannercar::find($id);
        return view( 'edit.banner', compact( 'bannercar','menus','logo' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bannercar  $bannercar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bannercar = Bannercar::find($id);
        $img = $request->file( 'img' );
        if ( $img != null ) {
            Storage::disk( 'public' )->delete( $bannercar->img );
            $newName = Storage::disk( 'public' )->put( '', $img );
            $bannercar->img = $newName;
        }
        $bannercar->save();
        return redirect()->route( 'banner.index' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bannercar  $bannercar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bannercar = Bannercar::find($id);
        Storage::disk('public')->delete($bannercar->img);
        $bannercar->delete();
        return redirect()->back();
    }
}
