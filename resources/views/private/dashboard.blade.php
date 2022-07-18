@extends('layouts.private')

@section('content-private')
    <p>Dashboard</p>

    <p>Bienvenue {{ auth()->user()->name }}</p>

    {{-- btn deconnection user --}}
    <x-btn.logout/>

    <h1>Modifier mon profil</h1>
    {{-- update profil --}}
    <x-user.form-update-profil/>
@endsection