<div class="relative ">
    <div class="absolute top-0 left-0 z-0 w-full block md:hidden lg:block lg:mt-16">
        <div id="curly-background-B-top" class="w-full">
            @component('components.lib.img.img', ['src' => '/assets/images/illustrations/curly-background-B.png'])
                @slot('classString') md:w-full h-full sm:h-auto object-cover @endslot
            @endcomponent
        </div>
    </div>

    <div class="container mx-auto ">
        {{--Portfolio title--}}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center mt-32 pt-12 md:pt-0 md:mt-20">
                @component('components.lib.titles.title', ['type' => '6xl'])
                    Onze projecten
                    <span class="bg-men-orange-500 h-3 w-3 inline-block"></span>
                    @slot('classString') text-white md:text-black mb-4 @endslot
                @endcomponent


                @component('components.lib.text.text')
                    Een project waar we trots op zijn.

                    @slot('classString') text-white md:text-black  @endslot
                @endcomponent
            </div>
        </div>

        {{--Buttons--}}
        <div class="row xl:mb-0 mt-10">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                @component('components.lib.buttons.button', [
                    'type' => 'sm-rounded',
                    'override' => ['background' => 'bg-men-orange-500'],
                    'display' => 'block md:inline-block',
                ])
                    Apps
                    @slot('classString') uppercase mt-4 md:mt-8 mx-2 @endslot
                @endcomponent

                @component('components.lib.buttons.button', [
                    'type' => 'sm-rounded',
                    'display' => 'block md:inline-block',
                    'override' => [
                        'background' => 'bg-white',
                        'textColor' => 'text-black',
                        'border' => 'border-gray-300 border'
                    ],
                ])
                    Websites
                    @slot('classString') uppercase mt-4 md:mt-8 mx-2 text-black @endslot
                @endcomponent

                @component('components.lib.buttons.button', [
                    'type' => 'sm-rounded',
                    'display' => 'block md:inline-block',
                    'override' => [
                        'background' => 'bg-white',
                        'textColor' => 'text-black',
                        'border' => 'border-gray-300 border'
                    ],
                ])
                    API-koppelingen
                    @slot('classString') uppercase mt-4 md:mt-8 mx-2 mb-10 text-black @endslot
                @endcomponent

            </div>
        </div>
    </div>

</div>

<div class="relative flex items-center justify-center mb-32 xl:pb-20">

    <div class="container mx-auto relative z-10">
        {{--Portfolio title--}}
        <div id="portfolio" class="row lg:mt-32 xl:pt-10">

            <div class=" lg:hidden col-xs-12 col-sm-10 col-sm-offset-1">
                <div  class="relative w-full">
                    @component('components.lib.img.img', ['src' => '/assets/images/illustrations/laptop.png'])
                        @slot('classString') w-full object-cover @endslot
                    @endcomponent
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 md:my-10 lg:my-20 xl:my-10 flex items-center md:items-start flex-col">

                @component('components.lib.titles.title', ['type' => 'md'])
                    Fiets tegen Diabetes
                    <span class="bg-men-orange-500 h-3 w-3 inline-block"></span>
                    @slot('classString') mb-10 text-black md:text-white @endslot
                @endcomponent

                <div class="w-full inline-block">
                    @component('components.lib.text.text')
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            In viverra lorem ac velit egestas pulvinar.
                            Vivamus ac gravida leo.
                            Nullam ut lorem tempus, fermentum massa vitae, pulvinar nibh.
                            Sed ornare eget urna in faucibus. Etiam eget posuere libero.
                            Sed fringilla pharetra enim, cursus facilisis odio aliquet sit amet.
                        @slot('classString') text-black md:text-white @endslot
                    @endcomponent
                </div>

                @component('components.lib.buttons.button', [
                    'type' => 'sm-rounded',
                    'override' => ['background' => 'bg-men-orange-500'],
                ])
                    Bekijk deze case
                    @slot('classString') uppercase mt-16 text-black @endslot
                @endcomponent
            </div>
        </div>
    </div>

    <div class="hidden lg:flex absolute justify-end right-0 top-0 z-10 w-full mt-32">
        <div  class="relative w-2/5">
            @component('components.lib.img.img', ['src' => '/assets/images/illustrations/laptop-half.png'])
                @slot('classString') w-full object-cover @endslot
            @endcomponent
        </div>
    </div>

    <div class="absolute top-0 left-0 z-0 w-full mt-32 pt-12 hidden md:block lg:hidden">
        <div class="w-full">
            @component('components.lib.img.img', ['src' => '/assets/images/illustrations/curly-background-B.png'])
                @slot('classString') @endslot
            @endcomponent
        </div>
    </div>
</div>