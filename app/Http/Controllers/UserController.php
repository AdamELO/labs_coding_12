<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {
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
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function show( $id ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function edit( $id ) {
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $id ) {
        $request->validate( [
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
        ], [
            'name.required'=>'Le champ Name est obligatoire.',
            'email.required'=>'Le champ email est obligatoire.',
            'email.email'=>'Saisissez une adresse email valide.',
            'password.required'=>'Le champ du mot de passe est obligatoire.',
        ] );
        $user = User::find( $id );
        // $img = $_POST['img'];
        // if ( isset( $_POST['img'] ) ) {
        //     Storage::disk( 'public' )->delete( $user->img );
        //     $newName = Storage::disk( 'public' )->put( '', $img );
        //     $user->img = $newName;
        // }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt( $request->password );
        $user->description = $request->description;
        $user->save();
        return redirect()->back()->with( 'success', 'Profil modifié avec succes' );
    }
    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function destroy( $id ) {
        //
    }
}
