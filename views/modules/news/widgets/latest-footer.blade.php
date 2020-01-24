<h3 class="title-block footer-2-block">{{ trans('themes::news.title.latest posts') }}</h3>
<div class="lite-grey-bg full-col-container">
    <ul class="latest-post-footer clearfix">
        @foreach($posts as $post)
        <li class="latest-post-footer-item">
            <a href="{{ $post->url }}">
                <div class="post-icon-footer">
                    <span aria-hidden="true" class="icon_image main-menu-icon"></span>
                </div>
                <div class="post-text-footer">
                    <h4 class="title-post-footer">{{ $post->title }}</h4>
                    <h4 class="date-post-footer">{{ $post->created_at->formatLocalized('%d %B %Y') }}</h4>
                </div>
            </a>
        </li>
        @endforeach
    </ul>
</div>