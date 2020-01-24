<div class="page-title-bg indent-header-{{ $header_type ?? 2 }} page-main-content m-bot-40">
    <div class="container">
        <div class="page-title-container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="txt-white">{!! $slot !!}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    {!! Breadcrumbs::renderIfExists($breadcrumb ?? 'page') !!}
                </div>
            </div>
        </div>
    </div>
</div>