<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{--Page title.--}}
    <title> @yield('title') | {{ config('app.name') }}  </title>

    {{--Page description.--}}
    <meta name="description" content="@yield('meta-description')" />

    {{--Default meta tags.--}}
    @include('master.meta.meta-tags')

    {{--Meta tags of individual pages.--}}
    @yield('meta-tags')

    {{--Tooling (Facebook, Google, Hotjar, etc)--}}
    @include('master.tools.index')

    {{--Styles and fonts--}}
    @include('master.stylesheets.essential')
    @include('master.stylesheets.non-essential')

</head>
<body>



<div id="app">
    @include('master.site-wide.nav')
    @yield('content')
    @include('master.site-wide.footer')
</div>


@include('master.scripts.essential')
@include('master.scripts.non-essential')

</body>
</html>
