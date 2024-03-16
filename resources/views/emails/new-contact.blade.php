@extends('layouts.email-template')

@section('email') {{ $contact->email }}  @endsection

@section('content')

    <section>
        <h1>
            Portfolio
        </h1>

        <span>Hai ricevuto un nuovo messaggio!</span>

        <ul>
            <li>
                Nome : {{ $contact->name }}
            </li>

            <li>
                Email : {{ $contact->email }}
            </li>

            <li>
                Messaggio : 
                <p>
                    {!! nl2br($contact->message) !!}
                </p>
            </li>
        </ul>    
    </section>

@endsection
