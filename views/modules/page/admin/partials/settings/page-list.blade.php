<div class="row">
    <fieldset>
        <legend>Sayfa Listeleme Ayarları</legend>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[list_page]", "Alt Sayfaları göster", $errors, [0=>'Hayır', 1=>'Evet'], isset($page->settings->list_page) ? $page->settings->list_page : 0) !!}
        </div>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[list_per_page]", "Sayfalama", $errors, array(''=>'Seçiniz') + array_combine(range(1, 20, 1), range(1, 20, 1)), isset($page->settings->list_per_page) ? $page->settings->list_per_page : 6) !!}
        </div>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[list_type]", "Liste Türü", $errors, ['grid'=>'Grid', 'list'=>'Liste'], isset($page->settings->list_type) ? $page->settings->list_type : 6) !!}
        </div>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[list_grid]", "Grid", $errors, array(''=>'Seçiniz') + array_combine(range(1, 12, 1), range(1, 12, 1)), isset($page->settings->list_grid) ? $page->settings->list_grid : 6) !!}
        </div>
    </fieldset>
</div>
<div class="row">
    <fieldset>
        <legend>İskele Hesabı</legend>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[calculator]", "İskele Hesabı", $errors, [0=>'Seçiniz', 'flansli-iskele'=>'Flanşlı İskele Hesabı', 'h-tipi-iskele'=>'H Tipi İskele Hesabı', 'pratik-iskele'=>'Pratik İskele Hesabı', 'all'=>'Tümü'], isset($page->settings->calculator) ? $page->settings->calculator : 0) !!}
        </div>
    </fieldset>
</div>