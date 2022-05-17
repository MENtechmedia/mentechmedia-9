<?php
$overrides = override_values($override ?? [], [
    'fontSize'      => 'text-xs',
    'fontWeight'    => 'font-bold',
    'textColor'     => 'text-white',
    'px'            => 'px-10',
    'py'            => 'py-3',
    'background'    => 'bg-tangarine-500',
    'underline'     => 'no-underline',
    'border'        => '',
])->implode(' ');
?>

<span class="{{ $classString ?? '' }} {{ $overrides }} inline-block text-center rounded">
    {{ $slot }}
</span>