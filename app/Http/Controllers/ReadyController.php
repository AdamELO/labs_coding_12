<?php

namespace App\Http\Controllers;

use App\Ready;
use App\Menu;
use App\Logo;
use Illuminate\Http\Request;

class ReadyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ready = Ready::first();
        $menus = Menu::first();
        $logo = Logo::first();
        return view( 'backoffice.ready', compact( 'menus','logo','ready' ) );
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
     * @param  \App\Ready  $ready
     * @return \Illuminate\Http\Response
     */
    public function show(Ready $ready)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ready  $ready
     * @return \Illuminate\Http\Response
     */
    public function edit(Ready $ready)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ready  $ready
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ready $ready)
    {
        $ready->btn = $request->btn;
        $ready->title = $request->title;
        $ready->subtitle = $request->subtitle;
        $ready->save();
        return redirect()->route( 'ready.index' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ready  $ready
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ready $ready)
    {
        //
    }
}
