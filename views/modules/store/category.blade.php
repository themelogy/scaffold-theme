@extends('layouts.master')

@section('content')

    @component('partials.components.breadcrumbs', ['breadcrumb'=>'store.category', 'header_type'=>1])
        {{ $category->title }}
    @endcomponent

    <div class="container portfolio-container-2">
        <div class="row">
            <div class="col-md-12">
                <div class="row box-with-hover">
                    @foreach($products as $product)
                        <div class="col-md-4">
                            <div class="item m-bot-30">
                                <div class="view view-first hovered">
                                    <a href="{{ $product->url }}">
                                        <img src="{{ $product->present()->firstImage(360,360,'fit',80) }}"
                                             alt="{{ $product->title }}">
                                        <div class="mask">
                                            <div class="zoom info"><span aria-hidden="true" class="icon_link"></span></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="portfolio-item-caption-container">
                                    <a class="a-invert" href="{{ $product->url }}">{{ $product->title }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                {!! $products->links('partials.components.pagination') !!}
            </div>
        </div>
    </div>

@endsection