<div>
    {{-- message validation send new email --}}
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            Un email à été renvoyé
        </div>
    @endif

    {{-- new notifiation for validate account new user --}}
    <x-form action="{{ route('verification.send') }}" textbtn="Renvoyer l'email de vérification"></x-form>
</div>