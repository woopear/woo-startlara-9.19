@props([
    'classdiv' => 'w-fit', // class div around all component => custom this for width for input
])

<x-form
    {{ $attributes }}
    classdiv="{{ $classdiv }}"
    action="{{ route('password.request') }}"
    textbtn="Faire une demande"
>
    {{-- email --}}
    <x-input.input-sample 
        name="email" 
        placeholder="Votre email" 
        required
    />
</x-form>