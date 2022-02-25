<article @php post_class() @endphp>
  <div class="page-content page-content--home">
    @php the_content() @endphp
  </div>
  @if ($enable_subheader == true)
  @php $background = ''; @endphp
    @if ($subheader_background)
    @php $background = "background: url('" . $subheader_background . "') no-repeat center;" @endphp
    @endif
    <div class="home-subheader"  style="{{$background}}">
      <div class="container">
        <div class="row" id="agentSubheader">
          <div class="col-md-6">
            <div class="header-eyebrow">{{$subheader_eyebrow ? $subheader_eyebrow : 'Default eyebrow'}}</div>
            <h2>{{$subheader_title ? $subheader_title : 'Default Title'}}</h2>
            <p>{{$subheader_description ? $subheader_description : 'Default description'}}</p>
            {!! App::acflink($subheader_link,'btn btn-primary') !!}
          </div>
          <div class="col-md-6">
        <div class="home-subheader--author">
          @php $realtor = get_field('realtor_neighborhood_connection',$connections[0])[0] @endphp
          @php if ($agent_override) {
    $realtor = $agent_override[0];
      } @endphp
          {!! App::acfimg(get_post_thumbnail_id($realtor->ID),'large') !!}
          <div class="home-subheader--author-info">
          <span>Listing Agent</span>
          <p>{{$realtor->post_title}}</p>
              @php echo get_field('contact_info', $realtor->ID) @endphp
              @php if (get_field('realtor_logo', $realtor->ID)) { @endphp
                {!! App::acfimg(get_field('realtor_logo', $realtor->ID)['ID'],'large','realtor-logo') !!}
              @php } @endphp
          <span class="contact-info-header">Contact</span>
            <div class="contact-info">
              @php if (get_field('phone_number', $realtor->ID)) { @endphp
                <a href="tel:@php echo get_field('phone_number', $realtor->ID) @endphp" class="d-block">
                  @php echo get_field('phone_number', $realtor->ID) @endphp
                </a>
              @php } @endphp
              @php if (get_field('email', $realtor->ID)) { @endphp
                <a href="mailto:@php echo get_field('email', $realtor->ID) @endphp" class="d-block">
                  @php echo get_field('email', $realtor->ID) @endphp
                </a>
              @php } @endphp
            </div>
          </div>
        </div>
      </div>
    </div>


      </div>
    </div>
  @endif
  @include('partials.related-content')
</article>
