<div class="page-header">
  <div class="container">
    <div class="row">
    @if (get_post_thumbnail_id())
      <div class="col-md-6 header-image">
      {!! App::acfimg(get_post_thumbnail_id(),'large') !!}
      </div>
      @endif
      <div class="col header-content">
        <div class="header-content--top">
          <div class="header-content--meta"><span>{!! App::get_post_top_term( get_the_ID()) !!}</span><span>{{ $connections[0]->post_title}}</span></div>
          <h1 class="">{!! $title_override ? $title_override : App::title() !!}</h1>
          @if ($header_description)
          <p class="header-content--description">{{$header_description}}</p>
        </div>
        @endif
        <div class="d-flex justify-content-between">
        @if ($header_contact)
        <div>
          <span class="header-sub-title">
            Contact
          </span>
          <p class="header-sub-description">{{$header_contact}}</p>

        </div>
        @endif
        @if ($header_visit)
        <div>
          <span class="header-sub-title">
            Visit
          </span>
          <p class="header-sub-description">{{$header_visit}}</p>
        </div>
        @endif
        </div>
      </div>

    </div>

  </div>
</div>
