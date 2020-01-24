@if($brands->count()>0)
<div class="row" >
    <div id="owl-clients" class="owl-carousel our-clients-container" >
        @foreach($brands as $brand)
        <div class="item"><img src="{{ $brand->present()->firstImage(null,65,'resize',80) }}" alt="{{ $brand->title }}"></div>
        @endforeach
    </div>
</div>
@push('js-inline')
    <script>
        jQuery(document).ready(function() {

            // Carousel CLIENTS Items---------------------------------------------
            $("#owl-clients").owlCarousel({

                //Set AutoPlay to 3 seconds
                autoPlay : 5000,
                items : 5,
                itemsDesktop : [1000,4], //5 items between 1000px and 901px
                itemsDesktopSmall : [900,3], // betweem 900px and 601px
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
        });
    </script>
@endpush
@endif