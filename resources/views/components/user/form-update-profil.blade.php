@props([
    'classdiv' => 'w-fit', // class div around all component => custom this for width for input
    'classsection' => '', // class of section around all component
])

{{-- uncomment the inputs according to your user --}}
<section class="{{ $classsection }}">
    @if (session('status'))
        <div class="mb-4 font-medium text-xs text-green-500">
            Profil modifié avec succes
        </div>
    @endif
    <x-form
        {{ $attributes }}
        classdiv="{{ $classdiv }}"
        action="{{ route('user-profile-information.update') }}"
        textbtn="Modifier mon profil"
        otherMethod="PUT"
    >
        {{-- you can update role of user, if user is role 'root' or 'admin' --}}
       @if (
        auth()->user()->getRole()->libelle == 'root' || 
        auth()->user()->getRole()->libelle == 'admin'
       )
        <x-input.select-role selected="{{ auth()->user()->getRole()->libelle }}"/>
       @endif
    
        {{-- firstName 
        <x-input.input-sample 
            name="firstName" 
            placeholder="Prénom" 
            required
        /> --}}
    
        {{-- lastName 
        <x-input.input-sample 
            name="lastName" 
            placeholder="Nom" 
            required
        /> --}}
    
        {{-- pseudo 
        <x-input.input-sample 
            name="pseudo" 
            placeholder="Pseudo" 
        /> --}}
    
        {{-- name --}}
        <x-input.input-sample 
            name="name" 
            placeholder="Nom, Prénom" 
            value="{{ auth()->user()->name }}"
            required
        />
    
        {{-- address 
        <x-input.input-sample 
            name="address" 
            placeholder="Adrresse"
        /> --}}
    
        {{-- codePost 
        <x-input.input-sample 
            name="codePost" 
            placeholder="Code postal"
        /> --}}
    
        {{-- city 
        <x-input.input-sample 
            name="city" 
            placeholder="Ville"
        /> --}}
    
        {{-- phone 
        <x-input.input-sample 
            name="phone" 
            placeholder="Numéro de téléphone"
        /> --}}
    
        {{-- email --}}
        <x-input.input-sample 
            name="email" 
            type="email"
            placeholder="E-mail" 
            value="{{ auth()->user()->email }}"
            required
        />

        {{-- link for update password --}}
        <x-link.text-link
            classlink="text-red-600"
            textsize="text-xs mb-4 font-medium hover:text-red-400" 
            textlink="Modifier mon mot de passe"
            link="{{ route('private.user-update-password') }}"
        />
    </x-form>
</section>
