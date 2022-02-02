<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
      <a class="brand" href="{{ home_url('/') }}">
        <span class="sr-only">{{ get_bloginfo('name', 'display') }}</span>
        <img src="/wp-content/themes/neighborhoodist/resources/assets/images/logo@2x.png" alt="Neighborhoodist Logo">
      </a>
        @php the_field('footer_contact_info','option') @endphp
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
      <div class="col-md-6">

        </div>
    </div>
    <div class="footer-bottom">
    Neighborhoodist ©  @php echo date("Y"); @endphp, All Rights Reserved <span class="vl">|</span> <a href="/terms">Terms of Service</a> <a href="/privacy-policy">Privacy Policy</a>

    </div>
    <!-- @php dynamic_sidebar('sidebar-footer') @endphp -->
  </div>
</footer>
