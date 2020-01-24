@if($products->count()>0)
<div class="m-bot-30">
    <div class="title-block">
        {{ trans('themes::product.latest') }}
    </div>
    <div class="view-all-container">
        <div class="customNavigation clearfix">
            <div class="carousel-va-container">
                <a class="button medium gray-lite" href="{{ route('store.index') }}">{{ trans('themes::theme.buttons.all') }}</a>
            </div>
            @if($products->count()>2)
            <div class="customNavigation-container">
                <a class="prev-product"></a>
                <a class="next-product"></a>
            </div>
            @endif
        </div>
    </div>
</div>

<div class="row box-with-hover" >
    <div class="col-md-12">
        <div class="row">
            <div id="owl-product" class="owl-carousel" >
                @foreach($products as $product)
                <div class="item">
                    <div class="view view-first blog-hover hovered">
                        <a href="{{ $product->url }}" >
                            <img src="{{ $product->present()->firstImage(500,400,'fit',80) }}" alt="{{ $product->title }}">
                            <div class="mask">
                                <div class="zoom info"><span aria-hidden="true" class="icon_link"></span></div>
                            </div>
                        </a>
                    </div>
                    <h4><a class="a-invert" href="{{ $product->url }}">{{ $product->title }}</a></h4>
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
        $("#owl-product").owlCarousel({
            items: 2,
            itemsDesktop: [1000, 3],
            itemsDesktopSmall: [900, 2],
            itemsTablet: [470, 1],
            itemsMobile: false,
            pagination: false,
            paginationNumbers: false,
        });

        var owlProduct = $("#owl-product");
        owlProduct.owlCarousel();
        $(".next-product").click(function(){
            owlProduct.trigger('owl.next');
        });
        $(".prev-product").click(function(){
            owlProduct.trigger('owl.prev');
        });
        $(".play").click(function(){
            owlProduct.trigger('owl.play',1000);
        });
        $(".stop").click(function(){
            owlProduct.trigger('owl.stop');
        });
    });
</script>
@endpush