@extends('layouts.app')

@section('title', 'Home - DC Indo Global')

@section('content')
    @include('sections.hero')
    @include('sections.journey')
    @include('sections.about')
    <!-- Desktop / Tablet Version -->
    <div class="hidden md:block">
        @include('sections.philosophy')
    </div>

    <!-- Mobile Version -->
    <div class="block md:hidden">
        @include('sections.philosophy-phone')
    </div>

    <div  class="mt-[-146px] md:mt-[1]" >

        @include('sections.testimonials')
    </div>
    @include('sections.blog')
    <div>

        @include('sections.history')
    </div>
    @include('sections.cta')
@endsection