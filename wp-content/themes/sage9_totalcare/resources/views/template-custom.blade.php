{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

@include('partials.banner')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
