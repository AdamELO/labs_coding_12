<?php

namespace App\Http\Controllers;

use App\Events\UserRegisterNewsletterEvent;
use App\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class NewsletterController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        //
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
        request()->validate( [
            'email' => 'required|email|min:3'
        ] );
        $newsletter = Newsletter::create( [
            'email' => $request->email,
        ] );

        event( new UserRegisterNewsletterEvent( $newsletter ) );
        return Redirect::to(URL::previous() . "#newsletter")->with( 'success', 'Merci de vous être inscrit à la Newsletter' );
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Newsletter  $newsletter
    * @return \Illuminate\Http\Response
    */

    public function show( Newsletter $newsletter ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Newsletter  $newsletter
    * @return \Illuminate\Http\Response
    */

    public function edit( Newsletter $newsletter ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Newsletter  $newsletter
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, Newsletter $newsletter ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Newsletter  $newsletter
    * @return \Illuminate\Http\Response
    */

    public function destroy( Newsletter $newsletter ) {
        //
    }
}
