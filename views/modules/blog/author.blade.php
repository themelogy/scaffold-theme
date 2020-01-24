@extends('blog::layouts.master')

@section('blog-breadcrumbs')
    @component('partials.components.breadcrumbs', ['breadcrumb'=>'blog.author', 'header_type'=>1])
        {{ trans('themes::blog.author posts', ['author'=>$author->fullname]) }}
    @endcomponent
@endsection

@section('blog-content')
    @foreach($posts as $post)
        @include('blog::partials._post')
        @unset($post)
    @endforeach
    {!! $posts->render('partials.components.pagination') !!}
@endsection