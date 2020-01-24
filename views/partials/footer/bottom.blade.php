<div class="copyright-container title-lines-container">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="footer-menu-container">
                    <nav class="clearfix" id="footer-nav">
                        {!! Menu::render('footer', \Themes\Moderna\Presenter\FooterMenuPresenter::class) !!}
                    </nav>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-copyright-container">
                    <div class="footer-2-copyright-text">
                        {!! trans('themes::theme.footer.copyrights', ['company'=>setting('theme::company-name'), 'date'=>\Carbon\Carbon::now()->format('Y'), 'url'=>url(locale())]) !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- COPYRIGHT -->
<p id="back-top">
    <a href="#top" title="Back to Top"><span></span></a>
</p>