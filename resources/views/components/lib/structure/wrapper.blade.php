<?php
$overrides = override_values($override ?? [], [
    'px'            => '',
    'py'            => 'py-16',
])->implode(' ');
?>

<div class="{{ $background ?? ''}}">
    <div class="container mx-auto {{ $overrides }} {{ $classString ?? '' }}">
        <div class="row">
            {{ $slot }}
        </div>
    </div>
</div>