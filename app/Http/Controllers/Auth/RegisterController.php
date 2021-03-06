<?php

namespace App\Http\Controllers\Auth;

use App\Events\WelcomeEvent;
use App\Footer;
use App\Http\Controllers\Controller;
use App\Menu;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Logo;
use App\Mail\Welcome;
use App\Newsletter;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller {
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
    * Where to redirect users after registration.
    *
    * @var string
    */
    protected $redirectTo = '/profil';

    /**
    * Create a new controller instance.
    *
    * @return void
    */

    public function __construct() {
        $this->middleware( 'guest' );
    }

    /**
    * Get a validator for an incoming registration request.
    *
    * @param  array  $data
    * @return \Illuminate\Contracts\Validation\Validator
    */
    protected function validator( array $data ) {
        return Validator::make( $data, [
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ] );
    }

    /**
    * Create a new user instance after a valid registration.
    *
    * @param  array  $data
    * @return \App\User
    */
    protected function create( array $data ) {
        $users = User::all();
        if ( count( $users ) == 0 ) {
            $roleId = 1;
        } else {
            $roleId = 4;
        }

        $request = request();
        if ($request->hasfile('img')) {
            $profileImage = $request->file('img');
            $newName = Storage::disk( 'public' )->put( '', $profileImage );
        } else {
            $newName = '/img/logo.jpg';
        }
        
        $user = User::create( [
            'name' => $data['name'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            'password' => Hash::make( $data['password'] ),
            'role_id' => $roleId,
            'img' => $newName
        ] );
        // if ( request()->hasfile( 'img' ) ) {
        //     $newName = Storage::disk( 'public' )->put( '', $data['img'] );
        //     $user->update( ['img' => $newName] );
        // }else{
        //     $user->update( ['img' => '/img/logo.jpg'] );
        // }
        event(new WelcomeEvent($user));
        Newsletter::where( 'email', '=', $user->email )->delete();
        return $user;
    }

    public function showRegistrationForm() {
        $footer = Footer::first();
        $logo = Logo::first();
        $menus = Menu::first();
        return view( 'auth.register', compact( 'menus', 'logo', 'footer' ) );
    }
}
