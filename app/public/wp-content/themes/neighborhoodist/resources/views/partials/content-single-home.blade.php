<article @php post_class() @endphp>
  <div class="page-content page-content--home">
    @php the_content() @endphp
  </div>
  @if ($enable_subheader == true)
<div class="home-subheader">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="header-eyebrow">{{$subheader_eyebrow}}</div>
        <h2>{{$subheader_title}}</h2>
        <p>{{$subheader_description}}</p>
        {!! App::acflink($subheader_link,'btn btn-primary') !!}
      </div>
      <div class="col-md-6">
    <div class="home-subheader--author">
      @php $realtor = get_field('realtor_neighborhood_connection',$connections[0]->ID)[0] @endphp
      {!! App::acfimg(get_post_thumbnail_id($realtor->ID),'large') !!}
      <div class="home-subheader--author-info">
      <span>Listing Agent</span>
      <p>{{$realtor->post_title}}</p>
          @php echo get_field('contact_info', $realtor->ID) @endphp
      </div>
    </div>


      </div>
    </div>
  </div>
</div>
  @endif
</article>
