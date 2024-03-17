@extends('layouts.app')

@section('page-title', $contact->name)

@section('main-content')
    <section id="show-contacts-admin">
        <div class="container">
           <div class="frame">
                <h3>
                    {{ $contact->name }}
                </h3>

                <h3>
                    {{ $contact->email }}
                </h3>

                <p>
                    {{ $contact->message }}
                </p>

                <span>
                    {{ $contact->created_at->format('d/m/Y') }}
                </span>
           </div>
        </div>
    </section>
@endsection