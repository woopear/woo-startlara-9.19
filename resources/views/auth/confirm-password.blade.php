
@extends('layouts.private')

@section('content-private')
    <div up-main="modal" up-layer="new">
        <p class="my-4">Veuillez entrer votre mot de passe, pour accèder a votre demande.</p>
        
        {{-- formulaire of confirm password --}}
        <x-user.form-password-confirm
            classdiv="w-fit mt-4 mb-8"
        />

        {{-- return back --}}
        <x-btn.back-url>
            Annuler
        </x-btn.back-url>
    </div>
@endsection