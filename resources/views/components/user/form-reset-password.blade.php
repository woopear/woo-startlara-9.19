@props([
    'classdiv' => 'w-fit', // class div around all component => custom this for width for input
])

<x-form
    {{ $attributes }}
    classdiv="{{ $classdiv }}"
    action="{{ route('password.update') }}"
    textbtn="Modifier mon mot de passe"
>
    {{-- token --}}
    <x-input.input-sample 
    name="token" 
    classdiv="hidden"
    value="{{ request()->route('token') }}"
    />

    {{-- email --}}
    <x-input.input-sample 
        name="email" 
        type="email"
        placeholder="Confirmer votre email" 
        required
    />

    {{-- password --}}
    <x-input.input-sample 
        name="password" 
        placeholder="Mot de passe"
        type="password" 
        required
    />

    {{-- password_confirmation --}}
    <x-input.input-sample 
        name="password_confirmation" 
        placeholder="Confirmer le mot de passe"
        type="password" 
        required
    />
</x-form>