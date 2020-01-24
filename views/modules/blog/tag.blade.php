@extends('blog::layouts.master')

@section('blog-breadcrumbs')
    @component('partials.components.breadcrumbs', ['breadcrumb'=>'blog.tag', 'header_type'=>1])
        {{ trans('blog::post.title.tag', ['tag'=>$tag->name]) }}
    @endcomponent
@endsection

@section('blog-content')
    @foreach($posts as $post)
        @include('blog::partials._post')
        @unset($post)
    @endforeach
    {!! $posts->render('partials.components.pagination') !!}
@endsection