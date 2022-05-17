@extends('master.master')

@section('title') Homepage  @endsection

@section('meta-tags')
{{--    @include('master.meta.custom-meta-tags', ['meta_tags' => $page->metaTags])--}}
@endsection

@section('content')
    @include('pages.homepage.sections.banner')
@endsection
