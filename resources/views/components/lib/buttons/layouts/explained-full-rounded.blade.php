<?php
    $overrides = override_values($override ?? [], [
        'fontSize'      => 'text-sm',
        'fontWeight'    => 'font-bold',
        'textColor'     => 'text-white',
        'px'            => 'px-10',
        'py'            => 'py-1',
        'hiddenWhen'    => ''
    ])->toArray();
?>

<span class="text-aib-gray block mb-3 text-sm {{ $overrides['hiddenWhen'] }}">{{ $button['explanation'] ?? '' }}</span>

@component('components.lib.buttons.layouts.full-rounded', ['override' => $overrides])
    @slot('classString') {{ $classString . ' ' . $overrides['hiddenWhen'] }} @endslot
    {{ $slot }}
@endcomponent