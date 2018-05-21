$(document).ready(function () {
$('.exp1').click(function () {
   
        document.statistics1.submit();

    });
    $('.exp2').click(function () {

        document.statistics2.submit();

    });
    $('.exp3').click(function () {

        document.statistics3.submit();

    });
    $('.more1').click(function () {
        $('.exp1').css('display', 'block');
        $('.more1').css('display', 'none');
        $('.exp2').css('display', 'none');
        $('.exp3').css('display', 'none');
        $('.more2').css('display', 'block');
        $('.more3').css('display', 'block');


    });
    $('.more2').click(function () {
        $('.exp2').css('display', 'block');
        $('.more2').css('display', 'none');
        $('.exp1').css('display', 'none');
        $('.exp3').css('display', 'none');
        $('.more1').css('display', 'block');
        $('.more3').css('display', 'block');
    });
    $('.more3').click(function () {
        $('.exp3').css('display', 'block');
        $('.more3').css('display', 'none');
        $('.exp2').css('display', 'none');
        $('.exp1').css('display', 'none');
        $('.more2').css('display', 'block');
        $('.more1').css('display', 'block');
    });
});
