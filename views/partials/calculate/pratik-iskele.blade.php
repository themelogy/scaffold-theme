<form id="form1" class="form-horizontal" name="form1" method="post">
    <div class="control-group">
        <label class="control-label" for="inputEmail">Yükseklik</label>
        <div class="controls">
            <div class="input-append">
                <input type="text" name="yukseklik" id="yukseklik" value="0" class="form-control span3"
                       placeholder="Yükseklik"/>
                <span class="add-on">M</span>
            </div>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputEmail">Genişlik</label>
        <div class="controls">
            <div class="input-append">
                <input type="text" name="genislik" id="genislik" value="0" class="form-control span3"
                       placeholder="Genişlik"/>
                <span class="add-on">M</span>
            </div>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputEmail">Cephe (Ad)</label>
        <div class="controls">
            <div class="input-append">
                <input type="text" name="cephe" id="cephe" value="1" class="form-control span3" placeholder="Cephe"/>
                <span class="add-on">AD</span>
            </div>
        </div>
    </div>
    <br/>
    <div class="control-group">
        <div class="controls">
            <button type="button" onclick="pratik_calc('#form1');" class="button small deeporange"
                    style="margin-right: 2px;">Hesapla
            </button>
            <button type="reset" onclick="sil();" class="button small deeporange"
                    style="margin-right: 2px;">Temizle
            </button>
            <button type="yazdir" onclick="print();" class="button small deeporange">Yazdır
            </button>
        </div>
    </div>
    <br/>
    <div class="clearfix"></div>
    <div class="control-group">
        <label class="control-label" for="inputEmail">Alt 3,0 M Dikey Eleman</label>
        <div class="controls">
            <input name="d" type="text" id="d" value="0" readonly="readonly" class="form-control"/>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputEmail">Toplam 2,0 M Dikey Eleman</label>
        <div class="controls">
            <input name="y" type="text" class="form-control" id="y" value="0" readonly="readonly"/>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputEmail">Kalas</label>
        <div class="controls">
            <input name="yy" type="text" class="form-control" id="yy" value="0" readonly="readonly"/>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputEmail">Korkuluk</label>
        <div class="controls">
            <input name="dd" type="text" class="form-control" id="dd" value="0" readonly="readonly"/>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputEmail">Alt Ayar Mili</label>
        <div class="controls">
            <input name="m" type="text" class="form-control" id="m" value="0" readonly="readonly"/>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputEmail">Dayama</label>
        <div class="controls">
            <input name="k" type="text" class="form-control" id="k" value="0" readonly="readonly"/>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputEmail">İskele Metrajı</label>
        <div class="controls">
            <div class="input-append">
                <input name="i" type="text" class="sonuc form-control span2" id="i" value="0" readonly="readonly"/>
                <span class="add-on">m<sup>2</sup></span>
            </div>
        </div>
    </div>

</form>

@push('script-stack')
    {!! Theme::script('js/calculator.js') !!}
@endpush