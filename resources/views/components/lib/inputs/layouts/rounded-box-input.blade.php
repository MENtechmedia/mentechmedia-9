<?php
$overrides = override_values($override ?? [], [
    'textColor'  => 'text-black',
    'p'          => 'px-6 py-4',
    'fontSize'   => 'text-sm',
    'fontWeight' => '',
    'rounded'    => 'rounded',
])->implode(' ');
?>

<div class="flex flex-col text-left border border-gray-300  {{ $overrides }}">
    @isset($label)
        <label class="mb-2 inline-block text-gray-500">{{ $label ?? '' }}</label>
    @endisset

    <input {{ isset($id) ? "id=$id" : "id=$name" }} value="{{ old($name) }}" type="{{ $type ?? 'text' }}" placeholder="{{ $placeholder }}" name="{{ $name }}" class=" {{$classString}} font-bold focus:outline-none " />
</div>

