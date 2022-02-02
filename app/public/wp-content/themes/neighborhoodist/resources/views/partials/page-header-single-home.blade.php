<div class="page-header home-header">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="home-info">
        <div class="top-term">{!! App::get_post_top_term( get_the_ID()) !!}</div>
          <span class="header-eyebrow"> {{ $connections[0]->post_title}}</span>
          <h2 class="h1">{!! $title_override ? $title_override : App::title() !!}</h2>
          <div class="streetview-"><a href="{{$streetview_url}}">Street View</a></div>


          <div class="home-info--meta">
            <div class="rooms">{{$rooms}}</div>
            <div class="space">{{$space}}</div>
            <div class="price">{{$price}}</div>
          </div>
        </div>
        <div class="home--magazine-info">
          {!! App::acfimg($magazine_cover->ID,'large') !!}

          <div class="magazine-text">
          {{$magazine_text}}
          </div>
        </div>
      </div>
      @if (get_post_thumbnail_id())
      <div class="col-md-5 p-0">
      {!! App::acfimg(get_post_thumbnail_id(),'large') !!}
      </div>
      @endif
    </div>

  </div>
</div>
