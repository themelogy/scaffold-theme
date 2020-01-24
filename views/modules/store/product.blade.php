@extends('layouts.master')

@section('content')

    @component('partials.components.breadcrumbs', ['breadcrumb'=>'store.product', 'header_type'=>1])
        {{ $product->title }}
    @endcomponent

    <div class="container">
        <div class="row m-bot-40">
            <div class="col-md-6 wow zoomIn">
                <div class="row">
                    <div id="owl-1-pag" class="owl-carousel" >
                        @foreach($product->present()->images(570,null,'resize',80) as $image)
                        <div class="item">
                            <div>
                                <img alt="{{ $product->title }}" src="{{ $image }}">
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6 wow zoomIn">
                <h2 class="title-26">{{ $product->title }}</h2>
                <div class="content">{!! $product->description !!}</div>
            </div>
        </div>
    </div>

@endsection

@push('js-inline')
<script>
    jQuery(document).ready(function(){
        $("#owl-1-pag").owlCarousel({
            items : 1,
            itemsDesktop : [1000,1],
            itemsDesktopSmall : [900,1],
            itemsTablet: [470,1],
            itemsMobile : false,
            pagination : true,
            paginationNumbers: false,

        });
    });
</script>
@endpush