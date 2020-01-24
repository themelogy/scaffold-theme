@extends('blog::layouts.master')

@section('blog-breadcrumbs')
    @component('partials.components.breadcrumbs', ['breadcrumb'=>'blog.show', 'header_type'=>1])
        {{ $post->title }}
    @endcomponent
@endsection

@section('blog-content')
    <div class="element col-md-12 m-bot-10">
        <div class="blog-caption-container">
            <h2><a class="a-invert" href="{{ $post->url }}">{{ $post->title }}</a></h2>
            <ul class="post-meta clearfix">
                <li><span aria-hidden="true" class="icon_clock_alt"></span> {{ $post->created_at->formatLocalized('%d %B %Y') }}</li>
                @if(isset($post->category))
                    <li><span aria-hidden="true" class="icon_folder-alt"></span> <a href="{{ $post->category->url }}">{{ $post->category->name }}</a></li>
                @endif
                @if(isset($post->author))
                    <li><span aria-hidden="true" class="icon_profile"></span><a href="{{ route('blog.author', [$post->author->slug]) }}">{{ $post->author->fullname }}</a></li>
                @endif
            </ul>
        </div>
        <div class="blog-carousel-text-container">
            @if($post->files()->exists())
                @if($post->files()->count()>1)
                    <div id="owl-1-pag" class="owl-carousel" >
                        @foreach($post->present()->images(null,560,'resize',80) as $image)
                            <div class="item">
                                <div style="position: relative;">
                                    <img alt="{{ $post->title }}" src="{{ $image }}" style="max-width: 100%; max-height: 100%; margin: auto auto; display: block;">
                                </div>
                            </div>
                        @endforeach
                    </div>

                    @push('js_inline')
                        <script>
                            $(document).ready(function() {
                                $("#owl-1-pag").owlCarousel({
                                    autoPlay : 3000,
                                    items : 1,
                                    itemsDesktop : [1000,1], //5 items between 1000px and 901px
                                    itemsDesktopSmall : [900,1], // betweem 900px and 601px
                                    itemsTablet: [470,1], //2 items between 600 and 0
                                    itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
                                    // itemsDesktop : [1199,4],
                                    // itemsDesktopSmall : [991,1],
                                    // itemsTablet: [991,1],
                                    // itemsMobile : false,
                                    pagination : true,
                                    paginationNumbers: false

                                });
                            });
                        </script>
                    @endpush

                @else
                    <div class="view view-first hovered pull-right m-lft-20 m-bot-20">
                        <a href="{{ $post->present()->firstImage(650,null,'resize',80) }}" class="lightbox">
                            <img class="img-thumbnail" src="{{ $post->present()->firstImage(300,null,'resize',80) }}" alt="{{ $post->title }}">
                            <div class="mask">
                                <div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
                            </div>
                        </a>
                    </div>
                @endif
            @endif
            {!! $post->content !!}
        </div>
    </div>
    <div class="col-md-12">
        @if($previous = $post->present()->previous)
            <a class="button medium thin hover-dark"
               href="{{ $previous->url }}">{{ trans('blog::post.button.previous') }}</a>
        @endif
        @if($next = $post->present()->next)
            <a class="button medium thin hover-dark"
               href="{{ $next->url }}">{{ trans('blog::post.button.next') }}</a>
        @endif
    </div>
@endsection