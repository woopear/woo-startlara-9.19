@props([
    'classdiv' => 'w-fit', // class div around all component => custom this for width for input
])

<div>
    <x-form
        {{ $attributes }}
        classdiv="{{ $classdiv }}"
        action="{{ route('user-password.update') }}"
        otherMethod="PUT"
        textbtn="Modifier mon mot de passe"
    >
        {{-- current_password --}}
        <x-input.input-sample 
            name="current_password" 
            placeholder="Mot de passe actuel"
            type="password" 
            required
        />

        {{-- password --}}
        <x-input.input-sample 
            name="password" 
            placeholder="Nouveau mot de passe"
            type="password" 
            required
        />

        {{-- password_confirmation --}}
        <x-input.input-sample 
            name="password_confirmation" 
            placeholder="Confirmer le nouveau mot de passe"
            type="password" 
            required
        />
    </x-form>
</div>