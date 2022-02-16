@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header-neighborhood-menu')
    @include('partials.page-header-single-'.get_post_type())
    @include('partials.content-single-'.get_post_type())
  @endwhile
@endsection
