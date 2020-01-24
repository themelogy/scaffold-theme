@extends('layouts.master')

@section('content')

    @component('partials.components.breadcrumbs', ['header_type'=>1, 'breadcrumb'=>'page.tag'])
        {!! trans('themes::tags.tag', ['tag'=>$tag->name]) !!}
    @endcomponent

    <div class="container m-bot-20">
        @if($pages->count()>0)
            @foreach($pages->chunk(3) as $chunks)
                <div class="row">
                    @foreach($chunks as $page)
                    <div class="col-md-4 col-xs-12">
                        <div class="child-page thumbnail">
                            <a href="{{ $page->url }}">
                                <img class="rounded" src="{{ $page->present()->firstImage(356, 150, "fit", 50) }}" alt="{{ $page->title }} - {{ $tag->name }}" />
                            </a>
                            <div class="caption" style="min-height: 200px;">
                                <h4 class="title"><a href="{{ $page->url }}">{{ $page->title }}</a></h4>
                                <p>{!! Str::words(Str::replaceFirst('iskele', $tag->name, strip_tags($page->body)), 30) !!}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @endforeach
        @else
            <div class="col-md-12">
                {{ trans('themes::tags.message.not found') }}
            </div>
        @endif
    </div>

@stop
