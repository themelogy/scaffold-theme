function pratik_calc(name) {
    var form = $(name);
    var height = parseFloat($("#yukseklik", form).val());
    var width = parseFloat($("#genislik", form).val());
    var front = parseFloat($("#cephe", form).val());

    var i = height * width * front;
    $("#i", form).val(Math.round(i));

    d_1 = eval(height / 3);
    d_2 = ((width / 3) + 1);
    d_3 = front * 1;
    var d = d_2 * d_3;
    $("#d", form).val(Math.round(d));

    var y = (((height - 3) / 2) * ((width / 3) + 1)) * front;
    $("#y", form).val(Math.round(y));

    var m = (((width / 3) * 2) + 2) * front;
    $("#m", form).val(Math.round(m));

    yy_1 = m;
    yy_2 = d_1 * d_2 * front;
    var yy = (width / 3) * (((height - 3) / 2) + 1) * front;
    $("#yy", form).val(Math.round(yy));

    var dd = (width / 3) * (((height - 3) / 2) + 1) * front;
    $("#dd", form).val(Math.round(dd));

    var k = ((width * height) / 10) * front;
    $("#k", form).val(Math.round(k));

}

function htipi_calc(name) {
    var form = $(name);
    var height = parseFloat($("#yukseklik", form).val());
    var width = parseFloat($("#genislik", form).val());
    var front = parseFloat($("#cephe", form).val());

    var i = height * width * front;
    $("#i", form).val(Math.round(i));

    var d = ((width / 2.5) + 1) * (height / 2) * front;
    $("#d", form).val(Math.round(d));

    var y = (width / 2.5) * (height / 2) * front;
    $("#y", form).val(Math.round(y));

    var m = ((width / 2.5) + 1) * 2 * front;
    $("#m", form).val(Math.round(m));

    var f = (width / 2.5) * (height / 2) * front;
    ;
    var yy = f * 2;
    $("#yy", form).val(Math.round(yy));

    var dd = (width / 2.5) * (height / 2) * front;
    $("#dd", form).val(Math.round(dd));

    var k = ((width * height) / 10) * front;
    $("#k", form).val(Math.round(k));

}

function flans_hesapla(name) {
    var form = $(name);
    var height = parseFloat($("#yukseklik", form).val());
    var width = parseFloat($("#genislik", form).val());
    var front = parseFloat($("#cephe", form).val());

    var i = height * width * front;
    $("#i", form).val(Math.round(i));

    d_1 = eval(height / 3);
    d_2 = ((width / 3) + 1);
    d_3 = front * 2;
    var d = d_1 * d_2 * d_3;
    $("#d", form).val(Math.round(d));

    var y = d_1 * width * front;
    $("#y", form).val(Math.round(y));

    var m = (((width / 3) * 2) + 2) * front;
    $("#m", form).val(Math.round(m));

    yy_1 = m;
    yy_2 = d_1 * d_2 * front;
    var yy = ((width / 3) + 1) * (height / 2) * front;
    $("#yy", form).val(Math.round(yy));

    var dd = (width / 3) * (height / 2) * front;
    $("#dd", form).val(Math.round(dd));

    var k = ((width * height) / 10) * front;
    $("#k", form).val(Math.round(k));

}

function print() {
    opener.window.print();
}