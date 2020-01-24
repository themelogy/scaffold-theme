@if(isset($page))
    <div class="title-lines-container m-top-min-35 m-bot-15">
        <div class="container">
            <div class="title-lines">
                <div class="title-block">
                    {{ $page->title }}
                </div>
                <div class="view-all-container">
                    <div class="customNavigation clearfix">
                        <div class="carousel-va-container">
                            <a class="button medium gray-lite" href="{{ $page->url }}">{{ trans('themes::theme.buttons.all') }}</a>
                        </div>
                        @if($children->count()>4)
                        <div class="customNavigation-container">
                            <a class="prev-portfolio"></a>
                            <a class="next-portfolio"></a>
                        </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
@endif

@if($children->count()>0)
<div class="container portfolio-container-2">
    <div class="row">
        <div class="col-md-12">
            <div class="row box-with-hover">
                <div class="filter-portfolio clearfix">
                    <div id="owl-portfolio" class="owl-carousel portfolio-filter clearfix">
                        @foreach($children as $child)
                        <div class="item m-bot-30">
                            <div class="view view-first hovered">
                                <a href="{{ $child->url }}">
                                    <img src="{{ $child->present()->firstImage(360,360,'fit',80) }}" alt="{{ $child->title }}" >
                                    <div class="mask">
                                        <div class="zoom info"><span aria-hidden="true" class="icon_link"></span></div>
                                    </div>
                                </a>
                            </div>
                            <div class="portfolio-item-caption-container">
                                <a class="a-invert" href="{{ $child->url }}">{{ $child->title }}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@push('js-inline')
<script>
    jQuery(document).ready(function(){
        // Carousel PORTFOLIO Items---------------------------------------------
        $("#owl-portfolio").owlCarousel({
            //Set AutoPlay to 3 seconds
            items : 4,
            itemsDesktop : [1000,3], //5 items between 1000px and 901px
            itemsDesktopSmall : [900,2], // betweem 900px and 601px
            itemsTablet: [470,1], //2 items between 600 and 0
            itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
            // itemsDesktop : [1199,4],
            // itemsDesktopSmall : [991,1],
            // itemsTablet: [991,1],
            // itemsMobile : false,

            //Pagination
            pagination : false,
            paginationNumbers: false,

        });

        var owl2 = $("#owl-portfolio");

        owl2.owlCarousel();

        $(".next-portfolio").click(function(){
            owl2.trigger('owl.next');
        });
        $(".prev-portfolio").click(function(){
            owl2.trigger('owl.prev');
        });
        $(".play").click(function(){
            owl2.trigger('owl.play',1000);
        });
        $(".stop").click(function(){
            owl2.trigger('owl.stop');
        });
    });
</script>
@endpush
@endif