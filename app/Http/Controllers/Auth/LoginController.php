<?php

namespace App\Http\Controllers\Auth;

use App\Footer;
use App\Http\Controllers\Controller;
use App\Menu;
use App\Logo;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller {
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
    * Where to redirect users after login.
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
        $this->middleware( 'guest' )->except( 'logout' );
    }

    public function showLoginForm() {
        $footer = Footer::first();
        $logo = Logo::first();
        $menus = Menu::first();
        return view( 'auth.login', compact( 'menus','logo','footer') );
    }
}
