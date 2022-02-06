<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
      <a class="brand" href="{{ home_url('/') }}">
        <span class="sr-only">{{ get_bloginfo('name', 'display') }}</span>
        <img src="/wp-content/themes/neighborhoodist/resources/assets/images/logo@2x.png" alt="Neighborhoodist Logo">
      </a>
      <div class="d-flex footer-info">
        <div class="col-md-6">
          <span class="footer-info--title">Contact Info</span>
          <div class="footer-info--row">
            <span>E-mail</span>
            @php the_field('footer_contact_email','option') @endphp
          </div>
          <div class="footer-info--row">
            <span>Phone</span>
            @php the_field('footer_contact_phone','option') @endphp
          </div>
          <div class="footer-info--row">
            <span>Address</span>
              @php the_field('footer_contact_address','option') @endphp
          </div>
          <div class="footer-info--row">
            <span>Social</span>
              @if (get_field('stats'))
              <div class="footer-social">
              @foreach (get_field('footer_social','option') as $social)
              <a href="{{$social['link']['url']}}" target="{{$social['link']['target']}}">
              <span class="sr-only">{{$social['link']}}</span>
              {!! App::acfimg($social['icon']['id'],'thumbnail','') !!}
              </a>
            @endforeach
              </div>

            @endif
          </div>
        </div>
        <div class="col-md-6">
          <span class="footer-info--title">Other Information</span>
        @php the_field('footer_other_info','option') @endphp
        </div>
      </div>
      </div>
      <div class="col-md-6">
This is the form
        </div>
    </div>
    <div class="footer-bottom">
    Neighborhoodist ©  @php echo date("Y"); @endphp, All Rights Reserved <span class="vl">|</span> <a href="/terms">Terms of Service</a> <a href="/privacy-policy">Privacy Policy</a>

    </div>
  </div>
</footer>
