<div class="page-header">
<div class="bg-container">
    @if (get_post_thumbnail_id())
      {!! App::acfimg(get_post_thumbnail_id(),'large') !!}
      @endif
  </div>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="neighborhood-title">
        {!! App::acfimg(get_field('neighborhood_menu_icon'),'large') !!}
          <h2>{{ get_the_title()}}</h2>
          <span class="neighborhood-city"> {!! $neighborhood_city !!}</span>
        </div>
        <nav class="navbar navbar-dark p-0">
        <div class="" id="navbarNeighborhoodContent">
        {!! wp_nav_menu(array(
            'menu'    => get_field('neighborhood_menu')->ID,
            'menu_class'        => 'navbar-nav',
            'walker'            => new \App\wp_bootstrap4_navwalker(),
            'depth' => 2
          )) !!}
        </div>
      </nav>
      </div>

    </div>

  </div>
</div>
