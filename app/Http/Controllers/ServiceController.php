<?php

namespace App\Http\Controllers;

use App\Service;
use App\Menu;
use App\Logo;
use App\Icon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $icons = Icon::all();
        $services = Service::paginate(9);
        $menus = Menu::first();
        $logo = Logo::first();
        return view( 'backoffice.service', compact( 'menus','logo','services','icons' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icons = Icon::all();
        $menus = Menu::first();
        $logo = Logo::first();
        return view( 'create.service',compact('menus','logo','icons'));
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
        'description'=>'required',
        'title'=>'required',
        'icon_id'=>'required',
        ], [
        'description.required'=>'Le champ description est obligatoire.',
        'title.required'=>'Le champ titre est obligatoire.',
        'icon_id.required'=>'Veuillez choisir une icon pour ce service .',
        ] );
        $service = new Service();
        $service->icon_id = $request->icon_id;
        $service->description = $request->description;
        $service->title = $request->title;
        $service->save();
        return redirect()->route( 'service.index' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $icons = Icon::all();
        $menus = Menu::first();
        $logo = Logo::first();
        return view( 'edit.service',compact('menus','logo','service','icons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $service->icon_id = $request->icon_id;
        $service->description = $request->description;
        $service->title = $request->title;
        $service->save();
        return redirect()->route( 'service.index' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->back();
    }
}
