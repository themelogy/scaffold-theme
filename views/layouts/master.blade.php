<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}-{{ strtoupper(LaravelLocalization::getCurrentLocale()) }}">
<head>
@include('partials.metadata')
</head>
<body class="fixed-header preloader-overflow normal-page">

@include('partials.components.preloader')

<div id="wrap" class="boxed ">
    <div class="grey-bg">

        @include('partials.components.ie-fix')

        @include('partials.header', ['header_type'=>1]) <!-- icon or normal -->

        @yield('content')

        @include('partials.footer')

    </div>
</div>

@include('partials.scripts')

</body>
</html>