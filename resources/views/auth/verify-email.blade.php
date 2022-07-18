@extends('layouts.app')

@section('content-app')
    <p>Nous venons de vous envoyer un email</p>
    <p>Merci de valider votre inscription à l'aide de cette email.</p>
    <p>Vous n'avez pas reçus l'email ?</p>
    
    <x-user.form-verify-email/>
@endsection