<div class="page-header home-header-bg">
  <div class="bg-container">
    @if (get_post_thumbnail_id())
      {!! App::acfimg(get_post_thumbnail_id(),'large') !!}
      @endif
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="home-info">
          <div class="top-term">{!! App::get_post_top_term( get_the_ID()) === "Home of the Month" ? App::get_post_top_term( get_the_ID()) : '' !!}</div>

          <span class="header-eyebrow"> {{ get_the_title($connections[0])}}</span>
          <h2 class="h1">{!! $title_override ? $title_override : App::title() !!}</h2>
          <div class="streetview-"><a href="{{$streetview_url}}">Street View</a></div>


          <div class="home-info--meta">
            <div class="rooms">{{$rooms}}</div>
            <div class="space">{{$space}}</div>
            <div class="price">{{$price}}</div>
          </div>
          <div class="home-info--meta--bottom">
            <div class="status">{{$status}}</div>
            <a href="#agentSubheader">Interested in this property?</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 home--magazine-info">

          <div class="magazine-text">
          {!! $magazine_text ? $magazine_text : 'Default copy when nothing else is used.' !!}

          </div>
          {!! App::acfimg($magazine_cover->ID,'large') !!}

      </div>

    </div>

  </div>
</div>
