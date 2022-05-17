<?php
    $type = $type ?? 'base';
?>

@component('components.lib.text.layouts.' . $type , ['classString' => $classString ?? '', 'tag' =>  $tag ?? 'p'])
    {{$slot}}
@endcomponent
