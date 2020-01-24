@extends('layouts.master')

@section('content')

    @yield('blog-breadcrumbs')

    <div class="title-lines-container">
        <div class="container">
            <div class="row">
                <div class="element col-md-9 m-bot-50">
                    <div class="row">
                        @yield('blog-content')
                    </div>
                </div>
                @include('blog::partials.sidebar')
            </div>
        </div>
    </div>

@endsection