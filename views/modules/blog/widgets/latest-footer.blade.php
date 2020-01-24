<h3 class="title-block footer-2-block">{{ trans('themes::news.title.latest posts') }}</h3>
<div class="lite-grey-bg full-col-container">
    <ul class="latest-post-footer clearfix">
        @foreach($posts as $post)
        <li class="latest-post-footer-item">
            <a href="{{ $post->url }}">
                <div class="post-icon-footer">
                    <span aria-hidden="true" class="main-menu-icon" style="background: url({{ $post->present()->firstImage(150,150,'fit',80) }})"></span>
                </div>
                <div class="post-text-footer">
                    <h4 class="title-post-footer">{{ $post->title }}</h4>
                    <span class="date-post-footer">{{ $post->created_at->formatLocalized('%d %B %Y') }}</span>
                </div>
            </a>
        </li>
        @endforeach
    </ul>
</div>