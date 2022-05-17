<div class="py-8">
    <div class="container mx-auto">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 flex items-center justify-between">
                <div class="w-12">
                    @component('components.lib.img.img', ['src' => '/assets/images/logos/men-logo.png']) @endcomponent
                </div>

                <div class="flex items-center">
{{--                    <a href="#portfolio" class="font-bold text-sm mr-8 uppercase">Portfolio</a>--}}
                    {{--<a href="" class="font-bold text-sm mr-8 uppercase">Digiguides</a>--}}
                    <a target="_blank" href="mailto:informatie@mentechmedia.nl">
                        @component('components.lib.buttons.button', [
                           'type' => 'sm-rounded',
                           'override' => ['background' => 'bg-men-orange-500', 'px' => 'px-3'],
                           'renderAs' => 'button'
                       ])
                            <span class="hidden md:block">Ons toch nog spreken?</span>
                            <span class="md:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16">
                              <path id="path" d="M907.1,72.6a2.051,2.051,0,0,1,2,2v12a2.051,2.051,0,0,1-2,2h-16a2.051,2.051,0,0,1-2-2v-12a2.051,2.051,0,0,1,2-2Zm0,4v-2l-8,5-8-5v2l8,5Z" transform="translate(-889.1 -72.6)" fill="#fff"/>
                            </svg>
                        </span>
                        @endcomponent
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
