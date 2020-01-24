{!! seo_helper()->render() !!}

<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<link rel="shortcut icon" href="{{ Theme::url('images/favicon.ico') }}">

<!-- CSS begin -->
<!-- Bootstrap -->
<link rel="stylesheet" href="">
{!! Theme::style('css/bootstrap.min.css') !!}

<!-- REVOSLIDER CSS SETTINGS -->
{!! Theme::style('vendor/rs-plugin/css/settings.css') !!}
{!! Theme::style('css/revo-slider/custom.css') !!}

<!-- IE warning CSS -->
<!--[if lte IE 8]>{!! Theme::style("css/ie-warning.css") !!}<![endif]-->
<!--[if lte IE 8]>{!! Theme::style("css/ie8-fix.css") !!}<![endif]-->

<!--Icons ELEGANT FONT & FONT AWESOME-->
{!! Theme::style("css/icons-fonts.css") !!}
    <!--[if lte IE 7]>{!! Theme::script("js/lte-ie7.js") !!}<![endif]-->

<!-- Magnific popup  in style.css-->

<!-- Owl Carousel Assets in style.css -->

<!--CSS theme-->
{!! Theme::style('css/style.css') !!}

<!--STILE SWITCHER -->
{!! Theme::style('css/layout/wide.css') !!}
{!! Theme::style('css/colors/deeporange.css') !!}
{!! Theme::style('css/custom.css') !!}

<!-- ANIMATE -->
{!! Theme::style('css/animate.min.css') !!}

<!-- CSS end -->

<!-- JS begin some js files in bottom of file-->

<!--[if lte IE 7]>{!! Theme::script('js/lte-ie7.js') !!}<![endif]-->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->