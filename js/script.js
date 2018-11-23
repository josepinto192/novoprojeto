/*How to use jquery
$('h1').hide(500).show(500);

$('.section02').css({
    color: 'blue';
    fontSize: 50
})


$(function() {
    $('h1').slideUp(1000).slideDown(1000);
    //object
    $('#main').css({
        color: 'red',
        fontSize: 25
    })
})
*/

$(window).on('load', function () {
    $('#status').fadeOut();
    $('#preloader').delay(500).fadeOut('slow');
})