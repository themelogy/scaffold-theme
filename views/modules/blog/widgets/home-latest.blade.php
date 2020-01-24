@if($posts->count()>0)
<div class="title-lines m-bot-30">
    <div class="title-block">
        {{ trans('themes::blog.latest') }}
    </div>
    <div class="view-all-container">
        <div class="customNavigation clearfix">
            <div class="carousel-va-container">
                <a class="button medium gray-lite" href="{{ route('blog.index') }}">{{ trans('themes::theme.buttons.all') }}</a>
            </div>
            @if($posts->count()>2)
            <div class="customNavigation-container">
                <a class="prev-blog"></a>
                <a class="next-blog"></a>
            </div>
            @endif
        </div>
    </div>
</div>

<div class="row box-with-hover" >
    <div class="col-md-12">
        <div class="row">
            <div id="owl-blog" class="owl-carousel" >
                @foreach($posts as $post)
                <div class="item">
                    <div class="view view-first blog-hover hovered">
                        <a href="{{ $post->url }}" >
                            <img src="{{ $post->present()->firstImage(500,400,'fit',80) }}" alt="{{ $post->title }}">
                            <div class="blog-item-date-cont">
                                <div class="blog-item-date">{{ $post->created_at->format('d') }}</div>
                                <div class="blog-item-mounth">{{ $post->created_at->formatLocalized('%b') }}</div>
                            </div>
                            <div class="mask">
                                <div class="zoom info"><span aria-hidden="true" class="icon_link"></span></div>
                            </div>
                        </a>
                    </div>
                    <h4><a class="a-invert" href="{{ $post->url }}">{{ $post->title }}</a></h4>
                    @if(isset($intro))
                    <div class="blog-carousel-text-container">
                        {!! Str::words(strip_tags($post->intro), 10) !!}
                    </div>
                    <div class="blog-carousel-button-container">
                        <a class="button small blog-rm" href="{{ $post->url }}">{{ trans('global.buttons.read more') }}</a>
                    </div>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif

@push('js-inline')
<script>
    jQuery(document).ready(function() {

        // Carousel BLOG Items-----------------------------------------------
        $("#owl-blog").owlCarousel({
            items: 2,
            itemsDesktop: [1000, 3], //5 items between 1000px and 901px
            itemsDesktopSmall: [900, 2], // betweem 900px and 601px
            itemsTablet: [470, 1], //2 items between 600 and 0
            itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
            pagination: false,
            paginationNumbers: false,
            autoPlay: 3000,
            loop: true
        });

        var owl = $("#owl-blog");
        owl.owlCarousel();
        // Custom Navigation Events
        $(".next-blog").click(function(){
            owl.trigger('owl.next');
        });
        $(".prev-blog").click(function(){
            owl.trigger('owl.prev');
        });
        $(".play").click(function(){
            owl.trigger('owl.play',1000);
        });
        $(".stop").click(function(){
            owl.trigger('owl.stop');
        });
    });
</script>
@endpush