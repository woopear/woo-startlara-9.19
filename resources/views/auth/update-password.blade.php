@extends('layouts.private')

@section('content-private')
<div up-main="modal" up-layer="new">
    <h1>Modifier votre mot de passe</h1>

    {{-- message for info of update password --}}
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            Mot de passe modifié avec succès
        </div>
    @endif

    {{-- update password --}}
    <x-user.form-update-password
        classdiv="w-fit mt-4"
    />
</div>
@endsection