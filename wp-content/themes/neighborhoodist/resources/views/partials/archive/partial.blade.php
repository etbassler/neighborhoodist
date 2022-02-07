
@if (get_post_thumbnail_id())
    <div class="">
    {!! App::acfimg(get_post_thumbnail_id(),'large') !!}
    </div>
@endif
<div class="">
    <h1 class="">{!! $title_override ? $title_override : App::title() !!}</h1>
</div>
