<?php
$overrides = override_values($override ?? [], [
    'fontSize'      => 'text-sm',
    'fontWeight'    => 'font-normal',
    'textColor'     => 'text-black',
    'border'        => 'border-4 focus:border-marine-500 rounded',
    'borderColor'   => 'border-gray-200',
    'px'            => 'px-4',
    'py'            => 'py-2',
    'width'         => 'w-64',
])->implode(' ');
?>

<input {{ isset($id) ? "id=$id" : "id=$name" }} class="focus:outline-none  {{ $overrides }} {{ $classString ?? '' }}" name="{{ $name }}" value="{{ $value }}" placeholder="{{ $placeholder }}" type="{{ $type }}" @if(isset($min)) min="{{ $min }}" @endif @if(isset($tabindex)) tabindex="{{ $tabindex }}" @endif @if(isset($disabled)) disabled @endif>

