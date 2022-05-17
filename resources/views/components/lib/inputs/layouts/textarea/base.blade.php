<?php
$overrides = override_values($override ?? [], [
    'fontSize'      => 'text-sm',
    'fontWeight'    => 'font-normal',
    'textColor'     => 'text-black',
    'border'        => 'border-4 border-gray-200 focus:border-marine-500 rounded',
    'px'            => 'px-4',
    'py'            => 'py-2',
    'width'         => 'w-64',
])->implode(' ');
?>

<textarea {{ isset($id) ? "id=$id" : "id=$name" }} rows="{{ $rows?? 8 }}"  class="focus:outline-none resize-none  {{ $overrides }} {{ $classString ?? '' }}" name="{{ $name }}" placeholder="{{ $placeholder }}" type="{{ $type }}">{{ $value }}</textarea>

