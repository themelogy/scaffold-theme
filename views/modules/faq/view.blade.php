@extends('layouts.master')

@section('content')
    @component('partials.components.breadcrumbs', ['breadcrumb'=>'faq.view', 'header_type'=>1])
        {{ $faq->title }}
    @endcomponent


    <div class="container">
        <div class="row m-bot-20">

            @include('faq::partials.sidebar')

            <div class="col-md-9">
                {!! $faq->content !!}
            </div>

        </div>
    </div>
@stop
