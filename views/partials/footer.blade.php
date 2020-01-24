<footer>
    <div class="footer-white-bg title-lines-container">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo-row-footer-2 clearfix">
                        <div class="logo-container left">
                            <a href="{{ url(locale()) }}">
                                <div class="logo">
                                    <img src="{{ Theme::url('images/logos/logo-light.svg') }}" class="logo-img"
                                         alt="{{ setting('theme::company-name') }}">
                                </div>
                                <div class="logo-slogan txt-white" style="font-size: 11px; font-weight: bold;">
                                    <p><strong>{{ trans('themes::theme.footer.slogan') }}</strong></p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="social-icons-container-footer">
                        @include('partials.components.social')
                    </div>
                    <div class="social-icons-container-footer p-top-0">
                        <div class="btn-group dropup">
                            <button type="button" class="button small deeporange dropdown-toggle" data-toggle="dropdown">
                                {{ mb_strtoupper(trans('themes::theme.buttons.city')) }} <span class="caret"></span>
                            </button>
                            {!! Menu::render('sehirler', \Themes\Moderna\Presenter\FooterMenuPrefixedLinksPresenter::class) !!}
                        </div>
                        <div class="btn-group dropup">
                            <button type="button" class="button small deeporange dropdown-toggle" data-toggle="dropdown">
                                {{ mb_strtoupper(trans('themes::theme.buttons.county')) }} <span class="caret"></span>
                            </button>
                            {!! Menu::render('ilceler', \Themes\Moderna\Presenter\FooterMenuPrefixedLinksPresenter::class) !!}
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    @blogLatestPosts(3, 'latest-footer')
                </div>

                <div class="col-md-3">
                    <h3 class="title-block footer-2-block">{{ trans('themes::theme.footer.title-1') }}</h3>
                    <div class="lite-grey-bg full-col-container">
                        {!! Menu::render('footer-links-1', \Themes\Moderna\Presenter\FooterMenuLinksPresenter::class) !!}
                    </div>
                </div>

                <div class="col-md-3">

                    <h3 class="title-block title-full-width footer-block title-bg-after">{{ trans('themes::contact.contact us') }}</h3>
                    <div class="main-color-bg contact-bg-after">

                        <ul class="contact-list-footer">
                            <li class="contact-list-item clearfix">
                                <div class="contact-icon-container">
                                    <span aria-hidden="true" class="icon_pin_alt main-menu-contact-icon"></span>
                                </div>
                                <div class="contact-text-container">{!! setting('theme::address') !!}</div>
                            </li>
                            <li class="contact-list-item clearfix">
                                <div class="contact-icon-container">
                                    <span aria-hidden="true" class="icon_phone main-menu-contact-icon"></span>
                                </div>
                                <div class="contact-text-container">
                                    {!! setting('theme::phone') !!}
                                    @if(setting('theme::mobile'))
                                        <br/>{!! setting('theme::mobile') !!}
                                    @endif
                                </div>
                            </li>
                            <li class="contact-list-item clearfix">
                                <div class="contact-icon-container">
                                    <span aria-hidden="true" class="icon_mail_alt main-menu-contact-icon"></span>
                                </div>
                                <div class="contact-text-container">
                                    <a class="a-mail"
                                       href="mail{!! Html::email(setting('theme::email')) !!}">{!! Html::email(setting('theme::email')) !!}</a>
                                </div>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </div>
    @include('partials.footer.bottom')
</footer>

@include('core::cookie-law')