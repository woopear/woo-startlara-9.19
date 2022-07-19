@props([
    'classdiv' => 'w-fit', // class div around all component => custom this for width for input
])

<div>
    <x-form
        {{ $attributes }}
        classdiv="{{ $classdiv }}"
        action="{{ route('password.confirm') }}"
        textbtn="Valider"
    >
        {{-- password --}}
        <x-input.input-sample 
            name="password" 
            placeholder="Entrer votre mot de passe"
            type="password" 
            required
        />
    </x-form>
</div>