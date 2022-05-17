<?php
    $renderAs = $renderAs ?? 'a';
    $download = $download ?? false;

?>

@if($renderAs == 'button')
    <button onclick="{{ $onclick ?? '' }}" rel="{{ $canonical ?? '' }}" href="{{$route ?? '#'}}" class="{{$display ?? 'inline-block'}} focus:outline-none border-none">
        @component('components.lib.buttons.layouts.' . $type, [
            'classString' => $classString ?? '',
            'override' => $override ?? [],
            'button' => $button ?? [],
        ])
            {{$slot}}
        @endcomponent
    </button>
@else
    <a {{ $download ? 'download' : '' }} onclick="{{ $onclick ?? '' }}" id="{{ $id ?? '' }}" rel="{{ $canonical ?? '' }}" href="{{$route ?? '#'}}" class="{{$display ?? 'inline-block'}} focus:outline-none">
        @component('components.lib.buttons.layouts.' . $type, [
            'classString' => $classString ?? '',
            'override' => $override ?? [],
            'button' => $button ?? [],
        ])
            {{$slot}}
        @endcomponent
    </a>
@endif
