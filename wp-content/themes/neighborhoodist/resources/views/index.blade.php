@extends('layouts.app')

@section('content')
  @include('partials.page-header-archive')

  <div class="page-content directory-results">
        @php echo do_shortcode('[facetwp template="blog_posts"]') @endphp
</div>
@endsection
