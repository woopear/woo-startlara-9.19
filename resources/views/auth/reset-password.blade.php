@extends('layouts.app')

@section('content-app')
    <p>Modification du mot de passe</p>
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    <x-user.form-reset-password/>
@endsection