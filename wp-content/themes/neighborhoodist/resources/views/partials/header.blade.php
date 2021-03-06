<header class="site-header nav-down" id="site-header">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light p-0">
      <a class="brand navbar-brand" href="{{ home_url('/') }}">
        <span class="sr-only">{{ get_bloginfo('name', 'display') }}</span>
        <!--<img src="/wp-content/themes/neighborhoodist/resources/assets/images/logo@2x.png" alt="Neighborhoodist Logo">-->
		<h2 class="header-logo">Neighborhoodist</h2>
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-lg-end" id="navbarSupportedContent">
          @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu($primarymenu) !!}
        @endif
      </div>
    </nav>
  </div>
</header>
