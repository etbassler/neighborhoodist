<div class="features-section" id="feature-content">
  <div class="container">
  @foreach (get_field('front_features') as $f)
      @php $ID = $f['neighborhood']->ID;
      $type = get_post_type($ID);
      @endphp
    <div class="row">
      <div class="col-md-8">
      {!! App::acfimg(get_post_thumbnail_id($ID),'large') !!}
        @if (get_field('current_cover',$ID))
          <div class="magazine-info d-flex">
            {!! App::acfimg(get_field('current_cover',$ID)['ID'],'medium') !!}
            <p>This Month's {{ $f['neighborhood']->post_title }} Cover</p>
          </div>
        @endif
      </div>
      <div class="col-md-4">
        <div class="feature-content">
          <span class="header-eyebrow">@php echo get_field('neighborhood_city',$ID)@endphp</span>
          <h2>{{ $f['neighborhood']->post_title }}</h2>
          <p>{{ $f['description_text']}}</p>
          <a href="{!! get_permalink($ID)" class="btn btn-primary">Neighborhood Overview</a>
        </div>
      </div>
    </div>
        <div class="col-md-4">


        <h3></h3>
        </div>
      @endforeach

  </div>
</div>