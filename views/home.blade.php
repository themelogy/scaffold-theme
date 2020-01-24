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
                    @latestProducts('iskele-aksesuarlari', 6)
                </div>
            </div>
            @portfolioBrands(20)
        </div>
    </div>
@endsection
