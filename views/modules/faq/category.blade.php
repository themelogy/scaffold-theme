@extends('layouts.master')

@section('content')

    @component('partials.components.breadcrumbs', ['breadcrumb'=>'faq.category', 'header_type'=>1])
        {{ $category->name }}
    @endcomponent

    <div class="container">
        <div class="row m-bot-20">
            @include('faq::partials.sidebar')
            <div class="col-md-9">
                <div class="bs-example">
                    <div class="panel-group" id="accordion">
                        @foreach($faqs as $faq)
                            @include('faq::_faq', [$faq])
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-bot-40">
            <div class="col-md-12">
                <nav class="clearfix">
                    {!! $faqs->render('partials.components.pagination') !!}
                </nav>
            </div>
        </div>
    </div>
@stop
