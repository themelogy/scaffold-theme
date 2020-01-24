
<div class="row">
    <fieldset style="padding: 0 20px;">
        <legend>Gösterim Ayarları</legend>
        <div class="row">
            <div class="col-md-12 form-inline">
                <div class="form-group" style="margin-right: 10px;">
                    <label>
                        {!! Form::checkbox("settings[show_cover]", 1, old('settings.show_cover', isset($page->settings->show_cover) ? $page->settings->show_cover : 0), ['class'=>'flat-blue']) !!}
                        &nbsp; Kapak Resmi Göster
                    </label>
                </div>
                <div class="form-group" style="margin-right: 10px;">
                    <label>
                        {!! Form::checkbox("settings[show_image]", 1, old('settings.show_image', isset($page->settings->show_image) ? $page->settings->show_image : 0), ['class'=>'flat-blue']) !!}
                        &nbsp; Resim Göster
                    </label>
                </div>
                <div class="form-group" style="margin-right: 10px;">
                    <label>
                        {!! Form::checkbox("settings[show_gallery]", 1, old('settings.show_gallery', isset($page->settings->show_gallery) ? $page->settings->show_gallery : 0), ['class'=>'flat-blue']) !!}
                        &nbsp; Resimleri Galeri olarak göster
                    </label>
                </div>
            </div>
            <hr/>
            <div class="col-md-12 form-inline">
                <div class="form-group">
                    <span style="margin-right: 10px;"><strong>Resim Pozisyonu</strong></span>
                    @foreach([0=>'Seçiniz', 'left'=>'Sol', 'right'=>'Sağ', 'top'=>'Üst', 'bottom'=>'Aşağı'] as $key => $val)
                        <div class="radio-inline">
                            <label>
                                {!! Form::radio('settings[image_position]', $key, $key == @$page->settings->image_position ?? $loop->first) !!}
                                {{ $val }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </fieldset>
</div>
<br/>
<div class="row">
    <fieldset style="padding: 0 20px;">
        <legend>Resim Ekleme</legend>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    @mediaSingle('pageCover', isset($page) ? $page : null, null, trans('page::pages.form.cover'))
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    @mediaMultiple('pageImage', isset($page) ? $page : null, null, trans('page::pages.form.image'))
                </div>
            </div>
        </div>
    </fieldset>
</div>