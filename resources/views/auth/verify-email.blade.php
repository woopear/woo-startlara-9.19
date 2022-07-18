@extends('layouts.app')

@section('content-app')
    <p>Nous venons de vous envoyer un email</p>
    <p>Merci de valider votre inscription à l'aide de cette email.</p>
    <p>Vous n'avez pas reçus l'email ?</p>
    
    {{-- message validation send new email --}}
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            Un email à été renvoyé
        </div>
    @endif
    {{-- new notifiation for validate account new user --}}
    <x-form action="{{ route('verification.send') }}" textbtn="Renvoyer l'email de vérification"></x-form>
@endsection