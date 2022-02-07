
<div class="archive-partial col-md-4">
@if (get_post_thumbnail_id())
    <div class="archive-partial--image">
    {!! App::acfimg(get_post_thumbnail_id(),'large') !!}
    </div>
@endif
<div class="archive-partial--info">
    <span class="neighborhood-title">{{$connections[0]->post_title}}</span>
    <h3 class="title">{!! $title_override ? $title_override : App::title() !!}</h1>
</div>
</div>
