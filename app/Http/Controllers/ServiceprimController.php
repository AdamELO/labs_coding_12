<?php

namespace App\Http\Controllers;

use App\Serviceprim;
use App\Menu;
use App\Logo;
use Illuminate\Http\Request;

class ServiceprimController extends Controller
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
        $serviceprim = Serviceprim::first();
        return view( 'backoffice.serviceprim', compact( 'menus', 'logo', 'serviceprim' ) );
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
     * @param  \App\Serviceprim  $serviceprim
     * @return \Illuminate\Http\Response
     */
    public function show(Serviceprim $serviceprim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Serviceprim  $serviceprim
     * @return \Illuminate\Http\Response
     */
    public function edit(Serviceprim $serviceprim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Serviceprim  $serviceprim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Serviceprim $serviceprim)
    {
        $serviceprim->btn = $request->btn;
        $serviceprim->save();
        return redirect()->route( 'serviceprim.index' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Serviceprim  $serviceprim
     * @return \Illuminate\Http\Response
     */
    public function destroy(Serviceprim $serviceprim)
    {
        //
    }
}
