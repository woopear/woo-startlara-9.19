@extends('layouts.app')

@section('content-app')
    <p>woo-startlara</p>

    {{-- access page login --}}
    <x-link.text-link 
        classlink="mb-0 hover:text-blue-500" 
        textlink="connexion user"
        link="{{ route('login') }}"
    />

    {{-- access page register --}}
    <x-link.text-link 
        classlink="mb-2 hover:text-blue-500" 
        textlink="création user"
        link="{{ route('register') }}"
    />

    {{-- btn deconnection user --}}
    <x-btn.logout/>
@endsection