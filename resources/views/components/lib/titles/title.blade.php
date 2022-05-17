<?php
    $type = $type ?? 'xl';
?>

@component('components.lib.titles.layouts.' . $type, [
    'classString'   => $classString ?? '',
    'tag'           =>  $tag ?? 'h1',
    'override'      => $override ?? [],
])
    {{$slot}}
@endcomponent
