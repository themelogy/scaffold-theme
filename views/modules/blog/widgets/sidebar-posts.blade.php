<ul class="latest-post-container">
    @foreach($posts as $post)
        <li class="latest-post-sidebar row clearfix">
            <div class="lp-img-cont left col-md-5">
                <a href="{{ $post->url }}"><img src="{{ $post->present()->firstImage(90,90,'fit',80) }}" alt="{{ $post->title }}"></a>
            </div>
            <div class="lp-title-cont left col-md-7">
                <p class="latest-post-sidebar-title"><a class="a-invert" href="{{ $post->url }}">{{ $post->title }}</a></p>
                <p class="latest-post-sidebar-date">{{ $post->created_at->formatLocalized('%d %B %Y') }}</p>
            </div>
        </li>
    @endforeach
</ul>