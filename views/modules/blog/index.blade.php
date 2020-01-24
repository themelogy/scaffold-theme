@extends('blog::layouts.master')

@section('blog-breadcrumbs')
    @component('partials.components.breadcrumbs', ['breadcrumb'=>'blog', 'header_type'=>1])
        {{ trans('blog::blog.title') }}
    @endcomponent
@endsection

@section('blog-content')
    @foreach($posts as $post)
        @include('blog::partials._post')
        @unset($post)
    @endforeach
    {!! $posts->links('partials.components.pagination') !!}
@endsection