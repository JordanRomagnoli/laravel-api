@extends('layouts.app')

@section('page-title', 'Tutti i contatti')

@section('main-content')
    <section id="index-contacts-admin">
        <div class="container">
            <table class="table">
                <thead>
                    <th scope="col"> # </th>
                    <th scope="col"> Nome </th>
                    <th scope="col"> Email </th>
                    <th scope="col"> Messaggio </th>
                    <th scope="col"> Creato il </th>
                </thead>

                <tbody>
                    @foreach ($contacts as $singleContact)
                        
                        <tr>
                            <th scope="row">{{$singleContact->id}}</th>
                            <th>{{$singleContact->name}}</th>
                            <th>{{$singleContact->email}}</th>
                            <th>{{$singleContact->message}}</th>
                            <th>{{$singleContact->created_at}}</th>
                            <th>
                                <a href="{{ route('admin.contacts.show', ['contact' => $singleContact->id]) }}" class="show-button">
                                    Mostra
                                </a>
                            </th>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection