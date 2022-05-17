<div class="werkwijze-stap flex-shrink-0 pr-4 md:px-2">
    <div class="bg-white rounded shadow w-full">
        <div class="w-full">
            @component('components.lib.img.img', ['src' => $src])
                @slot('classString') w-full h-full object-cover @endslot
            @endcomponent
        </div>

        <div class="px-8 py-6 lg:px-4 lg:py-3 xl:px-8 xl:py-6">
            @component('components.lib.text.text')
                {{ $title }}
                @slot('classString') font-bold lg:text-lg xl:text-2xl @endslot
            @endcomponent

            @component('components.lib.text.text')
                {{ $body }}
                @slot('classString') text-sm xl:text-base @endslot
            @endcomponent
        </div>
    </div>
</div>