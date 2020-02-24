@extends('layouts.master')

@section('content')
    @themeSlide('anasayfa')
    @findChildren('iskele-sistemleri', 'home-children')
    <div class="title-lines-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    @blogLatestPosts(10, 'home-latest')
                </div>
                <div class="col-md-6">
                    {{--@latestProducts('iskele-aksesuarlari', 6)--}}
                    @includeIf('partials.home.links')
                </div>
            </div>
            @portfolioBrands(20)
        </div>
    </div>
@endsection

@push('css-inline')
    <style>
        .home-clinks img {
            border:1px solid #ebebeb;
            -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.10);
            -moz-box-shadow: 0 0 10px rgba(0,0,0,0.10);
            box-shadow: 0 0 10px rgba(0,0,0,0.10);
        }
    </style>
@endpush
