<div>
    {{-- new notifiation for validate account new user --}}
    <x-form 
        action="{{ route('verification.send') }}" 
        textbtn="Renvoyer l'email de vérification"
    ></x-form>
</div>