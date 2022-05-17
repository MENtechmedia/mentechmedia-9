@extends('master.master')

@section('title') Homepage  @endsection

@section('meta-tags')
{{--    @include('master.meta.custom-meta-tags', ['meta_tags' => $page->metaTags])--}}
@endsection

@section('content')
    @include('pages.homepage.sections.banner')

    {{--Technieken / Frameworks--}}
    <div class="container mx-auto hidden md:block">
        <div class="row">

        </div>
    </div>

    @include('pages.homepage.sections.onze-werkwijze')

@endsection
