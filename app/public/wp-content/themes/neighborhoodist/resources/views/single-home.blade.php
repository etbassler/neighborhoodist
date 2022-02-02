@extends('layouts.app')
@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header-neighborhood-menu')
    @if (get_field('header_background') === true)
     @include('partials.page-header-single-home-bg')
    @else
    @include('partials.page-header-single-home')
    @endif
    @include('partials.content-single-'.get_post_type())
  @endwhile
@endsection
