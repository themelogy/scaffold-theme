<div class="title-lines-container">
    <div class="container">
        <div class="row">
            <div class="slogan-text-container clearfix">
                <div class="col-md-4 slogan-text-before">
                    <div class="slogan-text-bg">{!! $page->settings->slogan->{locale()} ?? $page->title !!}</div>
                </div>
                <div class="col-md-8 ">
                    <div class="slogan-text font-12">
                        {!! $page->body !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>