<div>
    {{-- 
        - formulaire envoie mail pour modifié mot de passe 
        - input email avec value user's email hidden input  
        - Text explication
        - btn "Réinitialiser mon mot de passe"
        - envoie mail 
    --}}

    @props([
    'classdiv' => 'w-fit', // class div around all component => custom this for width for input
])

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