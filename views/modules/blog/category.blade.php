@extends('blog::layouts.master')

@section('blog-breadcrumbs')
    @component('partials.components.breadcrumbs', ['breadcrumb'=>'blog.category', 'header_type'=>1])
        {{ $category->name }}
    @endcomponent
@endsection

@section('blog-content')
    @foreach($posts as $post)
        @include('blog::partials._post')
        @unset($post)
    @endforeach
    {!! $posts->render('partials.components.pagination') !!}
@endsection