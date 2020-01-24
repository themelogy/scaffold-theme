@if($pages->count()>0)
<div class="row">
    @foreach($pages as $child)
    <div class="col-sm-6 col-md-4">
        <div class="child-page thumbnail">
            <img class="rounded"
                 src="{{ $child->present()->firstImage(356,150,"fit",50) }}"/>
            <div class="caption">
                <h4 class="title"><a href="{{ $child->url }}">{{ $child->title }}</a></h4>
                <p>{{ Str::words(strip_tags($child->body), 10) }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endif