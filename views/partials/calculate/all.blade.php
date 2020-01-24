<div class="row">
    @foreach($page->children as $child)
    <div class="col-md-4">
        <div class="heading-underline h4-underline">
            <h4><a href="{{ $child->url }}">{{ $child->title }}</a></h4>
        </div>
        @if(@$child->settings->calculator)
            @include('partials.calculate.'.@$child->settings->calculator)
        @endif
    </div>
    @endforeach
</div>