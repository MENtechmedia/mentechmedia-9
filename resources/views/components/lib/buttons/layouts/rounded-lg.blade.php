<?php
    $overrides = override_values($override ?? [], [
        'fontSize'      => 'text-sm',
        'fontWeight'    => 'font-bold',
        'textColor'     => 'text-white',
        'px'            => 'px-8',
        'py'            => 'py-2',
    ])->implode(' ');
?>

<span class="{{ $classString ?? '' }} {{ $overrides }} inline-block text-center rounded-lg no-underline ">
    {{ $slot }}
</span>