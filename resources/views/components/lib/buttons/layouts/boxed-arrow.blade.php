<?php
    $overrides = override_values($override ?? [], [
        'fontSize'      => 'text-base',
        'fontWeight'    => 'font-bold',
        'px'            => 'px-6',
        'py'            => 'py-2',
        'textColor'     => 'text-white',
        'borderColor'   => 'border-black',
        'background'    => 'bg-transparent',
        'border'        => 'border',
        'arrowColor'    => 'text-black',
    ]);
?>

<span class="{{ $classString }} font-bold  inline-block flex items-center">
    <span class="mr-4 {{ $overrides['textColor'] }} {{ $overrides['fontSize'] }}">{{ $slot }}</span>
    <span class="inline-block {{ $overrides['border'] }} {{ $overrides['borderColor'] }} {{ $overrides['background'] }} flex items-center rounded-lg justify-center" style="width: 31px; height: 31px;">
        <svg class="fill-current {{ $overrides['arrowColor'] }}" style="position: relative; " xmlns="http://www.w3.org/2000/svg" width="7.4" height="12" viewBox="0 0 7.4 12">
          <path id="path" d="M342.6,875l6,6-6,6-1.4-1.4,4.6-4.6-4.6-4.6Z" transform="translate(-341.2 -875)"/>
        </svg>
    </span>
</span>