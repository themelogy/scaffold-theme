{!! Asset::styles('footer') !!}
@stack('css-stack')
@stack('css-inline')

<!-- jQuery  -->
{!! Theme::script('js/jquery.min.js') !!}
{!! Theme::script('js/jquery-ui.min.js') !!}
{!! Asset::js('header') !!}

<!-- Pre LOADER -->
<script>
    window.onload = function() {
        document.body.removeChild(document.getElementById('preloader'));
        $('body').removeClass('preloader-overflow');
    }
</script>

<!-- REVOSLIDER SCRIPTS  -->
{!! Theme::script('vendor/rs-plugin/js/jquery.themepunch.tools.min.js') !!}
{!! Theme::script('vendor/rs-plugin/js/jquery.themepunch.revolution-custom.min.js') !!}


<!-- Include all compiled plugins (below), or include individual files as needed -->
{!! Theme::script('js/bootstrap.min.js') !!}

<!-- JS FOR OWL CAROUSEL -->
{!! Theme::script('js/owl-carousel/owl.carousel.min.js') !!}

<!-- SEARCH  SCRIPT IN MAIN JS  -->

<!-- Magnific popup -->
{!! Theme::script('js/jquery.magnific-popup.js') !!}

<!-- jQuery Tweets -->
{!! Theme::script('js/twitter/jquery.tweet.js') !!}

{!! Asset::scripts() !!}
@stack('script-stack')

<!-- MAIN SCRIPT -->
{!! Theme::script('js/main.js') !!}

@stack('js-inline')

<script type="text/javascript">
    WebFontConfig = {
        google: {
            families: [
                'Oswald:200,300,400,500,600,700:latin-ext',
                'Open Sans:normal:latin-ext'
            ]
        },
        timeout: 2000
    };
    (function () {
        var wf = document.createElement('script');
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
</script>

@include('partials.analytics')