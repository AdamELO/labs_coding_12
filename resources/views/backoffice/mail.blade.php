@extends('templates.dashboard')
@section('content')
<div class="container-fluid">
    <h2 class="h1-responsive font-weight-bold green-text text-center">Mails Contact</h2>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="table-responsive mailbox-messages">
                    <table class="table table-hover">
                        <tr>
                            <td class="mailbox-name">
                                <a href="read-mail.html">Email </a>
                            </td>
                            <td class="mailbox-subject"><b></b>
                                Sujet:
                            </td>

                            <td class="mailbox-subject pl-5"><b></b>
                                Message:
                            </td>
                            <td class="mailbox-date">Date/heure de l'envoie:</td>
                            <td class="mailbox-date">Action:</td>
                        </tr>
                        @foreach ($mails as $mail)
                        <tbody>

                            <tr>
                                {{-- <td>{{$mail->id}}</td> --}}
                                <td class="mailbox-name">
                                    <a href="#">{{$mail->email}} </a>
                                </td>
                                <td class="mailbox-subject"><b></b>
                                    {{$mail->subject}}
                                </td>
                                <td class="mailbox-subject pl-5"><b></b>
                                    <textarea style="border: none; background: none" readonly name="" id="" cols="40"
                                        rows="3">{{$mail->message}}</textarea>
                                </td>
                                {{-- <td class="mailbox-attachment"></td> --}}
                                <td class="mailbox-date">{{$mail->created_at->format('d/m/Y')}} à
                                    {{$mail->created_at->toTimeString()}} </td>
                                <td class="mailbox-date">
                                    <a class="btn btn-rounded btn-secondary" href="{{route('mail.show',$mail)}}">show</a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
@endsection