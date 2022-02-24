@extends('layouts.app')
@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials/front.page-header')
    @include('partials/front.features')
    @include('partials.content-page')
  @endwhile
@endsection
