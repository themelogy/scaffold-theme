<header id="nav" class="header header-{{ $header_type ?? 2 }}">
    <div class="header-wrapper">
        <div class="container">
            <div class="logo-row">

                <!-- LOGO -->
                <div class="logo-container-2">
                    <a href="{{ url(locale()) }}">
                        <div class="logo-2 {{ $header_type == 1 ? 'icon' : '' }}">
                            <img src="{{ Theme::url('images/logos/logo.svg') }}" class="logo-img" alt="{{ setting('theme::company-name') }}">
                        </div>
                    </a>
                </div>

                <!-- BUTTON -->
                <div class="menu-btn-respons-container">
                    <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target=".main-menu .navbar-collapse">
                        <span class="text">MENU</span>
                        <span aria-hidden="true" class="icon_menu main-menu-icon"></span>
                    </button>
                </div>

            </div>
        </div>

        <div class="main-menu-container">

            <div class="container">

                <div class="main-menu">
                    <div class="navbar navbar-default" role="navigation">

                        <nav class="collapse collapsing navbar-collapse right">

                            @if($header_type == 1)
                                {!! Menu::render('header', \Themes\Moderna\Presenter\HeaderMenuWithIconPresenter::class) !!}
                            @else
                                {!! Menu::render('header', \Themes\Moderna\Presenter\HeaderMenuPresenter::class) !!}
                            @endif

                            @if(isset($search))
                            <div id="sb-search" class="search sb-search right hide-respons">
                                <form class="form-search" id="searchForm" action="#" method="get">
                                    <input class="sb-search-input" placeholder="ARAMA YAP..." type="text" value="" name="q" id="q">
                                    <input class="sb-search-submit" type="submit" value="ARAMA YAP">
                                    <span class="sb-icon-search"><span aria-hidden="true" class="icon_search main-menu-icon theme-color"></span></span>
                                </form>
                            </div>
                            @else
                            @push('css-inline')
                                <style type="text/css">
                                    @media (min-width: 992px) {
                                        .header-1 .main-menu .nav.navbar-nav {
                                            margin-right: 0;
                                        }
                                    }
                                </style>
                            @endpush
                            @endif
                        </nav>

                    </div>
                </div><!-- main-menu -->

            </div><!-- container -->

        </div><!--main-menu-container -->


    </div><!-- header-wrapper -->
</header>