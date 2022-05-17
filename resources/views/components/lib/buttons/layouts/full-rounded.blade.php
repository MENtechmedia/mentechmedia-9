
<?php
    $overrides = override_values($override ?? [], [
        'fontSize'      => 'text-sm',
        'fontWeight'    => 'font-bold',
        'textColor'     => 'text-white',
        'textAlign'     => 'text-center',
        'px'            => 'px-8',
        'py'            => 'py-2',
        'display'       => 'inline-block',
        'rounded'       => 'rounded-full',
        'underline'     => 'no-underline',
    ])->implode(' ');
?>

<span class="{{ $classString ?? '' }} {{ $overrides }}">
    {{ $slot }}
</span>