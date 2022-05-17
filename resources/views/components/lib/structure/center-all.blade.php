<?php
$overrides = override_values($override ?? [], [
    'display' => 'flex justify-center items-center',
])->implode(' ');
?>


<div class="{{ $classString }} {{ $overrides }} flex justify-center items-center" >
    {{ $slot }}
</div>