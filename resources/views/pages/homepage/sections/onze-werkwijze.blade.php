<div class="container mx-auto md:mt-20">

    {{--Onze werkwijze title--}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left md:text-center my-10 md:my-20">
            @component('components.lib.titles.title', ['type' => '6xl'])
                Dit was onze werkwijze
                <span class="bg-men-orange-500 h-3 w-3 inline-block"></span>
                @slot('classString') mb-4 @endslot
            @endcomponent
        </div>
    </div>
</div>

<div class="overflow-x-scroll pl-10 lg:pl-0 bg-gray-100">

    <div class="container mx-auto mb-5 md:mb-20">
        {{--Onze werkwijze stappen--}}
        <div class="row flex lg:justify-center">
            {{--Onderzoek--}}
            @component('pages.homepage.partials.werkwijze-stap', ['src' => '/assets/images/illustrations/mars-rover.png'])
                @slot('title') Onderzoek @endslot
                @slot('body')
                    Samen nemen we jouw idee onder de loep: wat is goed en wat kan beter?
                @endslot
            @endcomponent

            {{--Blauwdruk--}}
            @component('pages.homepage.partials.werkwijze-stap', ['src' => '/assets/images/illustrations/stars.png'])
                @slot('title') Blauwdruk @endslot
                @slot('body')
                    Met content, wireframes en ontwerpen leggen we elk scherm vast.
                @endslot
            @endcomponent

            {{--Rocket--}}
            @component('pages.homepage.partials.werkwijze-stap', ['src' => '/assets/images/illustrations/rocket.png'])
                @slot('title') Prototype @endslot
                @slot('body')
                    Een prototype geeft jou vroegtijdig inzicht in het eindproduct.
                @endslot
            @endcomponent

            {{--Blauwdruk--}}
            @component('pages.homepage.partials.werkwijze-stap', ['src' => '/assets/images/illustrations/rocket-launch.png'])
                @slot('title') Testen @endslot
                @slot('body')
                    Onze code wordt continue getest op prestaties en kwaliteit.
                @endslot
            @endcomponent
        </div>

    </div>
</div>


<div id="contact-button" class="container mx-auto relative">
    {{--CTA--}}
    <div class="row">
        {{--CTA Button--}}
        <div class="col-lg-12 text-center md:mb-0 md:mt-10">

        </div>
    </div>
</div>
