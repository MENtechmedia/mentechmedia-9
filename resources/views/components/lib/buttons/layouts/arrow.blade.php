<?php
    $overrides = override_values($override ?? [], [
        'fontSize'      => 'text-sm',
        'fontWeight'    => 'font-bold',
    ]);
?>

<span class="{{ $overrides['fontSize'] }} {{ $overrides['fontWeight'] }} {{$classString}}">
    {{ $slot }}
    <span class="inline-block relative ml-2" style="top: 1px;">
       <svg xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewBox="0 0 18 12"><path class="fill-current" d="M21,11H6.83l3.58-3.59L9,6,3,12l6,6,1.41-1.41L6.83,13H21Z" transform="translate(21 18) rotate(180)"/></svg>
    </span>
</span>
