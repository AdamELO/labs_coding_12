<?php

namespace App\Http\Controllers;

use App\Logo;
use App\Mail;
use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class MailController extends Controller
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
        $mails = Mail::all();
        return view( 'backoffice.mail', compact( 'menus','logo','mails' ) );
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
        $request->validate( [
        'name'=>'required',
        'email'=>'required|email',
        'subject'=>'required',
        'message'=>'required',
        ], [
        'name.required'=>'Le champ  est obligatoire.',
        'email.required'=>'Le champ email est obligatoire.',
        'email.email'=>'Saisissez une adresse email valide.',
        'subject.required'=>'Le champ subject est obligatoire.',
        'message.required'=>'Le champ message est obligatoire.',
        ] );
        $mail = new Mail();
        $mail->name = $request->name;
        $mail->email = $request->email;
        $mail->subject = $request->subject;
        $mail->message = $request->message;
        $mail->save();
        return Redirect::to(URL::previous() . "#contact")->with('success','Message bien envoyé !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function show(Mail $mail)
    {
        $menus = Menu::first();
        $logo = Logo::first();
        return view('backoffice.showmail',compact('menus','logo','mail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function edit(Mail $mail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mail $mail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mail $mail)
    {
        //
    }
}
