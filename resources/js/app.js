

$(document).ready(function () {
    $("#cirurOncoDigest").hide();
    $("#herniaAbd").show();
    $("#robotico").hide()
    $("#cirurApaDigest").hide();

    $("#txt3-1").show();
    $("#txt3-2").hide();
    $("#txt3-3").hide();
    $("#txt3-4").hide();

    $("#txt1-1").show();
    $("#txt1-2").hide();
    $("#txt1-3").hide();
    $("#txt1-4").hide();
    $("#txt1-5").hide();
    $("#txt1-6").hide();
    $("#txt1-7").hide();
    $("#txt1-8").hide();
    $("#txt1-9").hide();

    $("#txt2-1").show();
    $("#txt2-2").hide();
    $("#txt2-3").hide();
    $("#txt2-4").hide();
    $("#txt2-5").hide();
    $("#txt2-6").hide();
    $("#txt2-3-1").hide();
    $("#txt2-3-2").hide();

    $("#txt4-1").show();
    $("#txt4-2").hide();
    
});
 
$('.grid-item').click(function () {
    $("#cirurOncoDigest").hide();
    $("#herniaAbd").hide();
    $("#robotico").hide()
    $("#cirurApaDigest").hide();
    
    let idClicado = $(this).attr('for');

    $('#'+idClicado).fadeIn();
});

$('.btn-h').click(function () {
    $("#txt3-1").hide();
    $("#txt3-2").hide();
    $("#txt3-3").hide();
    $("#txt3-4").hide();
    
    let idClicado = $(this).attr('for');

    $('#'+idClicado).fadeIn();
});

$('.btn-apa').click(function () {
    $("#txt1-1").hide();
    $("#txt1-2").hide();
    $("#txt1-3").hide();
    $("#txt1-4").hide();
    $("#txt1-5").hide();
    $("#txt1-6").hide();
    $("#txt1-7").hide();
    $("#txt1-8").hide();
    $("#txt1-9").hide();
    
    let idClicado = $(this).attr('for');

    $('#'+idClicado).fadeIn();
});

$('.btn-onco').click(function () {
    $("#txt2-1").hide();
    $("#txt2-2").hide();
    $("#txt2-3").hide();
    $("#txt2-4").hide();
    $("#txt2-5").hide();
    $("#txt2-6").hide();
    
    let idClicado = $(this).attr('for');

    $('#'+idClicado).fadeIn();
});

$('.btn-fig').click(function () {
    $("#txt2-3-1").hide();
    $("#txt2-3-2").hide();
    
    let idClicado = $(this).attr('for');

    $('#'+idClicado).fadeIn();
});

$('.btn-rob').click(function () {
    $("#txt4-1").hide();
    $("#txt4-2").hide();
    
    let idClicado = $(this).attr('for');

    $('#'+idClicado).fadeIn();
});