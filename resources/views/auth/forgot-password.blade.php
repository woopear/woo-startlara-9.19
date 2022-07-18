@extends('layouts.app')

@section('content-app')
    <p>Mot de passe oublié</p>
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            <p>Un email a été envoyé sur votre adresse mail, </p>
            <p>veuillez suivre les instructions dans ce mail pour modifier votre mot de passe</p>
        </div>
    @endif
    <x-user.form-forgot-password/>
@endsection