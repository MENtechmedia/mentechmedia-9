<?php
$direction = $button['direction'] ?? 'left';

?>

<div class="cursor-pointer inline-block w-8 h-8 mr-2 flex items-center justify-center rounded-lg border border-ghost">
    @if($direction == 'left')
        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="7.41" height="12" viewBox="0 0 7.41 12">
            <path d="M15.41,7.41,14,6,8,12l6,6,1.41-1.41L10.83,12Z" transform="translate(-8 -6)"/>
        </svg>
    @else
        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="7.4" height="12" viewBox="0 0 7.4 12">
            <path class="a" d="M342.6,875l6,6-6,6-1.4-1.4,4.6-4.6-4.6-4.6Z" transform="translate(-341.2 -875)"/>
        </svg>
    @endif
</div>