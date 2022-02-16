<div class="page-header">
  <div class="container">
    <div class="row">
    @if (get_post_thumbnail_id())
      <div class="col-md-4 featured-image">
      {!! App::acfimg(get_post_thumbnail_id(),'large') !!}
      </div>
      @endif
      <div class="col-md-8 ">
        <div class="d-flex">
          <div class="col-md-8">
            <span class="realtor-label">Listing Agent</span>
          <h2 class="h1">{!! $title_override ? $title_override : App::title() !!}</h2>
          </div>
          <div class="col-md-4">
            <span class="realtor-label">Company</span>
            @php if (get_field('realtor_logo')) { @endphp
              {!! App::acfimg(get_field('realtor_logo')['ID'],'large','realtor-logo') !!}
            @php } @endphp
          </div>
        </div>
        <div class="d-flex realtor-description">
          <div class="col-md-12">
            @php echo get_field('realtor_description') @endphp
          </div>
        </div>
        <div class="d-flex">
          <div class="col-md-6 realtor-cta">
            <h3>{{$realtor_cta_header}}</h3>
            {!! App::acflink($realtor_cta,'btn btn-primary') !!}
          </div>
          <div class="col-md-6 contact-info">
            <span class="contact-info-header">Contact</span>
            <div class="contact-info-content">
              @php echo get_field('contact_info') @endphp
              @php if (get_field('phone_number')) { @endphp
                <a href="tel:@php echo get_field('phone_number') @endphp" class="d-block">
                  @php echo get_field('phone_number', $realtor->ID) @endphp
                </a>
              @php } @endphp
              @php if (get_field('email')) { @endphp
                <a href="mailto:@php echo get_field('email') @endphp" class="d-block">
                  @php echo get_field('email') @endphp
                </a>
              @php } @endphp
            </div>
          </div>

        </div>
      </div>

    </div>

  </div>
</div>