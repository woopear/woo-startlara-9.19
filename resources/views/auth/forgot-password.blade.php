@extends('layouts.app')

@section('content-app')
    <p>Mot de passe oublié</p>
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    <x-user.form-forgot-password/>
@endsection