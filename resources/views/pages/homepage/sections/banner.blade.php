<div class="mt-10 md:my-10 lg:my-0">
    <div class="container relative mx-auto sm:mb-20">
        <div class="flex relative items-center">
            <div class="mt-20 text-center col-xs-12 md:text-left md:mt-0">

{{--                Main page title--}}
                @component('components.lib.titles.title', ['type' => '5xl'])
                    Dank <br> aan onze klanten
                    @slot('classString') mb-4 @endslot
                @endcomponent

{{--                Main page subtitle--}}
                @component('components.lib.text.text')
                    Per 31 december 2021 is onze samenwerking gestopt.
                    @slot('classString')  @endslot
                @endcomponent

                @component('components.lib.text.text')
                    <span class="font-bold">Dank</span> aan al onze klanten en wie weet <span class="font-bold">tot ziens</span>.
                    @slot('classString')  @endslot
                @endcomponent


                {{--CTA BUTTON--}}
                <div class="flex relative justify-center my-12 w-full h-full xl:bg-transparent border-marine-500">
                    <div style="height: 300px;" class="w-full">
                        <iframe src="https://player.vimeo.com/video/418002570" width="100%" height="100%"  frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </div>
                </div>

                <a target="_blank" href="mailto:informatie@mentechmedia.nl">
                    @component('components.lib.buttons.button', [
                        'type' => 'sm-rounded',
                        'override' => ['background' => 'bg-men-orange-500'],
                        'renderAs' => 'button'
                    ])
                        Ons toch nog spreken?
                        @slot('classString') uppercase mt-8 hidden md:inline-block @endslot
                    @endcomponent
                </a>

                </div>

            <div class="absolute z-0 md:relative col-xs-11 col-sm-12 col-md-5 col-lg-6">
                <div class="opacity-25">
                    @component('components.lib.img.img', ['src' => '/assets/images/illustrations/space-banner.png']) @endcomponent
                </div>
            </div>
        </div>
    </div>

{{--    --}}{{--Technieken / Frameworks ONLY ON MOBILE SCREENS--}}
    <div class="container mx-auto md:hidden">
        <div class="row">
            <div class="flex justify-between items-end mt-20 col-xs-12 col-sm-12 col-md-12 col-lg-12 md:justify-center">
                Laravel
                <div class="flex flex-col justify-center items-center md:px-8">
                    <div class="mb-2 w-12">
                        @component('components.lib.img.img', ['src' => '/assets/images/logos/laravel.png']) @endcomponent
                    </div>
                    @component('components.lib.text.text')
                        Laravel
                        @slot('classString') font-bold @endslot
                    @endcomponent
                </div>

                {{--Flutter--}}
                <div class="flex flex-col justify-center items-center md:px-8">
                    <div class="mb-2 w-12">
                        @component('components.lib.img.img', ['src' => '/assets/images/logos/flutter.png']) @endcomponent
                    </div>
                    @component('components.lib.text.text')
                        Flutter
                        @slot('classString') font-bold @endslot
                    @endcomponent
                </div>

                {{--Vuejs--}}
                <div class="flex flex-col justify-center items-center md:px-8">
                    <div class="mb-2 w-12">
                        @component('components.lib.img.img', ['src' => '/assets/images/logos/vuejs.png']) @endcomponent
                    </div>
                    @component('components.lib.text.text')
                        VueJs
                        @slot('classString') font-bold @endslot
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
