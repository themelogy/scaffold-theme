@extends('layouts.master')

@section('content')

    @component('partials.components.breadcrumbs', ['header_type'=>1])
        {!! $page->title !!}
    @endcomponent

    <div class="container container-page">
        <div class="row">
            <div class="col-md-12 m-bot-40">
                @if(@$page->settings->calculator)
                    @include('partials.calculate.'.$page->settings->calculator)
                @elseif(@$page->settings->list_page)
                    @if(@$page->settings->page_body)
                        {!! $page->body !!}
                    @endif
                    @include('page::partials.children')
                @else
                    @if(@$page->settings->show_gallery)
                        @include('page::partials.image-carousel')
                    @else
                        @include('page::partials.image')
                    @endif
                @endif
                @pageTags($page, 5)
            </div>
        </div>
    </div>

@stop
