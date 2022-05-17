<?php
$overrides = override_values($override ?? [], [
    'textColor' => 'text-black'
])->implode(' ');
?>

<label  class="focus:outline-none checkbox--container mt-5 {{ $classString ?? '' }} {{ $overrides }}">
    <input  {{ $checked ?? '' ? 'checked=checked' : '' }} name="{{ $name }}" value="{{ $value }}" type="{{ $type }}" >
    <span class="checkbox--checkmark"></span>
    <span class="">{{ $label }}</span>
</label>


