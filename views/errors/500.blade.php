@php
    seo_helper()->setTitle(trans('core::core.error 500'));
    Breadcrumbs::register('500', function($breadcrumbs){
        $breadcrumbs->push(trans('core::core.error 500'));
    });
@endphp

@extends('layouts.master')

@section('content')

    @component('partials.components.breadcrumbs', ['header_type'=>1, 'breadcrumb'=>'500'])
        <h2>{{ trans('core::core.error 500').' : '.trans('core::core.error 500 title') }}</h2>
    @endcomponent

    <section class="error-wrapper m-top-bot-40">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center img-container-404">
                    <img alt="img" src="{{ Theme::url('images/content/404.png') }}">
                </div>

                <div class="col-md-6 m-top-10">
                    <h3>{{ trans('core::core.error 500').' : '.trans('core::core.error 500 title') }}</h3>
                    <p>{{ trans('core::core.error 500 description') }}</p>
                    <div class="row m-top-20">
                        @foreach(Page::all()->take(8)->chunk(4) as $pages)
                            <div class="col-md-6">
                                <ul class="icon-list">
                                    @foreach($pages as $page)
                                        <li><i class="fa fa-angle-right"></i><a class="a-invert" href="{{ $page->url }}">{{ $page->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection