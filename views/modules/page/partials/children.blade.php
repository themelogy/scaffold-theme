@if($page->children->count()>0)
    @php
        $children = $page->children()->orderBy('position', 'asc')->paginate(@$page->settings->list_per_page ?? 6);
        $chunk    = 12/(@$page->settings->list_grid ?? 4);
    @endphp
    @foreach($children->chunk($chunk) as $chunks)
        <div class="row equal">
            @foreach($chunks as $child)
                <div class="col-md-{{ @$page->settings->list_grid ?? 4 }} col-xs-12">
                    <div class="child-page thumbnail">
                        @if($image = $child->present()->firstImage(356, 150, "fit", 50))
                        <a href="{{ $child->url }}">
                            <img class="rounded" src="{{ $image }}" alt="{{ $child->title }}" />
                        </a>
                        @endif
                            <div class="caption" style="min-height: 200px;">
                            <h4 class="title"><a href="{{ $child->url }}">{{ $child->title }}</a></h4>
                            <p>{!! Str::words(strip_tags($child->body), 30) !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach

    <div class="row">
        <div class="col-md-12">
            {!! $children->render('partials.components.pagination') !!}
        </div>
    </div>
@endif

