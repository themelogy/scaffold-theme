<div class="row">
    @if(@$page->settings->image_position == 'right')
        <div class="col-md-8">
            {!! $page->body !!}
        </div>
        <div class="col-md-4">
            <div id="owl-1-pag-auto" class="owl-carousel owl-controls-style-2">
                @foreach($page->present()->images(420,null,'resize',80) as $image)
                    <div class="item m-0">
                        <div><img class="img-responsive img-thumbnail" alt="{{ $page->title }} {{ $loop->iteration }}" src="{{ $image }}"></div>
                    </div>
                @endforeach
            </div>
        </div>
        @elseif(@$page->settings->image_position == 'bottom')
            <div class="col-md-12">
                {!! $page->body !!}
            </div>
            <div class="col-md-12">
                <div id="owl-1-pag-auto" class="owl-carousel owl-controls-style-2">
                    @foreach($page->present()->images(420,null,'resize',80) as $image)
                        <div class="item m-0">
                            <div><img class="img-responsive img-thumbnail" alt="{{ $page->title }} {{ $loop->iteration }}" src="{{ $image }}"></div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
        <div class="col-md-4">
            <div id="owl-1-pag-auto" class="owl-carousel owl-controls-style-2">
                @foreach($page->present()->images(420,null,'resize',80) as $image)
                    <div class="item">
                        <div><img class="img-responsive img-thumbnail" alt="{{ $page->title }} {{ $loop->iteration }}" src="{{ $image }}"></div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-8">
            {!! $page->body !!}
        </div>
    @endif
</div>

@push('css-inline')
<style type="text/css">
    .owl-carousel .owl-item{
        margin-right: 10px;
    }
</style>
@endpush

@push('js-inline')
    <script>
        jQuery(document).ready(function () {
            $("#owl-1-pag-auto").owlCarousel({
                autoPlay: 5000,
                items: @if(@$page->settings->image_position == 'bottom' || @$page->settings->image_position == 'top') 4 @else 1 @endif,
                margin: 30,
                itemsDesktop: [1000, 1],
                itemsDesktopSmall: [900, 1],
                itemsTablet: [470, 1],
                itemsMobile: true,
                pagination: true,
                paginationNumbers: false,
            });
        });
    </script>
@endpush