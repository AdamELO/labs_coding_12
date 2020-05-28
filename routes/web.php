<?php

use App\Menu;
use App\Logo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'HtmlController@home');
Route::get('/services', 'HtmlController@services');
Route::get('/blog', 'HtmlController@blog');
Route::get('/contact', 'HtmlController@contact');
Route::get('/blog-post/{id}', 'HtmlController@blogpost');
Route::post('profil/{id}','UserController@update')->middleware(['auth','isRealUser']);

Auth::routes();

Route::get('/profil', 'HomeController@index')->name('home');

Route::get('/admin', function () {
    $menus = Menu::first();
    $logo = Logo::first();
    return view('backoffice.admin',compact('menus','logo'));
})->middleware(['auth','isNotMember']);

Route::resource('/menu','MenuController')->middleware(['auth','isAdminmaster']);
Route::resource('/banner','BannercarController')->middleware(['auth','isAdminmaster']);
Route::resource('/slogan','SloganController')->middleware(['auth','isAdminmaster']);
Route::resource('/logo','LogoController')->middleware(['auth','isAdminmaster']);
Route::resource('/presentation','PresentationController')->middleware(['auth','isAdminmaster']);
Route::resource('/titre','TitreController')->middleware(['auth','isAdminmaster']);
Route::resource('/testimonial','TestimonialController')->middleware(['auth','isAdminmaster']);
Route::resource('/service','ServiceController')->middleware(['auth','isAdminmaster']);
Route::resource('/ready','ReadyController')->middleware(['auth','isAdminmaster']);
Route::resource('/contactinfo','ContactController')->middleware(['auth','isAdminmaster']);
Route::resource('/team','TeamController')->middleware(['auth','isWebmaster']);
Route::resource('/serviceprim','ServiceprimController')->middleware(['auth','isAdminmaster']);
Route::resource('/footer','FooterController')->middleware(['auth','isAdminmaster']);
Route::resource('/article','ArticleController')->middleware(['auth','isNotMember']);
Route::resource('/mail','MailController');
Route::resource('/googlemaps','GoogleController')->middleware(['auth','isAdminmaster']);
Route::get('/search', 'HtmlController@search');
Route::post('/blog-post/{id}','CommentaireController@store')->middleware('auth');
Route::resource('/newsletter','NewsletterController');
