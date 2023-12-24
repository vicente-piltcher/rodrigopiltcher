import './bootstrap';

$(document).ready(function () {
    $("#cirurOncoDigest").hide();
    $("#herniaAbd").hide();
    $("#robotico").show()
    $("#cirurApaDigest").hide();
})
 
$('.grid-item').click(function () {
    $("#cirurOncoDigest").hide();
    $("#herniaAbd").hide();
    $("#robotico").hide()
    $("#cirurApaDigest").hide();
    
    let idClicado = $(this).attr('for');

    $('#'+idClicado).fadeIn();
})