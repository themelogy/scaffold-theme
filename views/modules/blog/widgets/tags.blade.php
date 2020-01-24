@if($tags->count()>0)
<div class="title-lines-sidebar m-bot-30">
    <div class="title-block">
        {{ trans('themes::theme.tags') }}
    </div>
</div>

<div class="tag-cloud m-top-30 m-bot-20">
    <ul class="clearfix">
        @foreach($tags as $tag)
            <li><a class="button small thin" href="{{ route('blog.tag', [$tag->slug]) }}">{{ $tag->name }}</a></li>
        @endforeach
    </ul>
</div>
@endif