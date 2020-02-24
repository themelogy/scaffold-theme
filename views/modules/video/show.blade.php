@extends('layouts.master')

@section('content')
@component('partials.components.breadcrumbs', ['breadcrumb'=>'video.show', 'header_type'=>1])
    {{ $media->title }}
@endcomponent
<div class="container">
    <div class="row">
        <div class="col-md-12 wow bounceInLeft" data-wow-delay=".2s">
            <div class="embed-responsive embed-responsive-16by9">
                {!! $media->embed['code'] ?? null !!}
            </div>
            <h3 class="ui-title-block ui-title-block_small" style="font-size:14px;">{{ $media->title }}</h3>
            <div class="description">
                {!! $media->description !!}
            </div>
        </div>
    </div>
</div>
@endsection
