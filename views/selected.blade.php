@extends('layouts.master')

@section('content')

    @component('partials.components.breadcrumbs', ['header_type'=>1])
        {!! $page->title !!}
    @endcomponent

    <div class="container">
        <div class="row">
            <div class="col-md-12 m-bot-40">

                @if(@$page->settings->page_body)
                    {!! $page->body !!}
                @endif

                @pageFindByOptions('settings.list_page', 'page-sub')

            </div>
        </div>
    </div>

@stop