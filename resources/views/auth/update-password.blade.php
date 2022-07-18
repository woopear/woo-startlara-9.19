@extends('layouts.private')

@section('content-private')
    <h1>Modifier votre mot de passe</h1>
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            Mot de passe modifié avec succès
        </div>
    @endif
    {{-- update password --}}
    <x-user.form-update-password
        classdiv="w-fit mt-4"
    />
@endsection