@extends('layouts.app')
@section('content')

    @include('home.includes.hero_banner')
    @include('home.includes.products')
    @include('home.includes.about_us')
    @include('home.includes.reviews')
    @include('home.includes.social')
    @include('home.includes.find_us')
    @include('home.includes.social_feed')
    @include('layouts.includes.footer')

@stop
