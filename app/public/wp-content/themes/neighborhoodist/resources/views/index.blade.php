@extends('layouts.app')

@section('content')
  @include('partials.page-header-archive')

 @php echo do_shortcode('[facetwp template="blog_posts"]') @endphp
@endsection
