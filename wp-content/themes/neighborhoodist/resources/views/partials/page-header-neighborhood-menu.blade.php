<div class="neighborhood-menu--header">
  <div class="container">
    <div class="row">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
        <a class="brand navbar-brand" href="{{get_permalink($connections[0])}}">
        <div class="neighborhood-menu-title">
        {!! App::acfimg(get_field('neighborhood_menu_icon',$connections[0]),'large') !!}
          <h2>{{ get_the_title($connections[0])}}</h2>
        </div>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNeighborhoodContent" aria-controls="navbarNeighborhoodContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-lg-end" id="navbarNeighborhoodContent">
        {!! wp_nav_menu(array(
            'menu'    => get_field('neighborhood_menu', $connections[0])->ID,
            'menu_class'        => 'navbar-nav',
            'walker'            => new \App\wp_bootstrap4_navwalker(),
            'depth' => 2
          )) !!}
        </div>
      </nav>
    </div>

  </div>
</div>
