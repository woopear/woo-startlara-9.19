@props([
    'w' => 'w-6',
    'h' => 'h-6',
    'classdiv' => 'text-black', // class for div surrounded icon
])
<div class="{{ $classdiv }}">
    <svg xmlns="http://www.w3.org/2000/svg" class="{{ $w }} {{ $h }}" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
</div>