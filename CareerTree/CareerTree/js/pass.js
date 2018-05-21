$(document).ready(function () {
    $('.c1exp1').click(function () {

        var input = document.createElement("input");
        input.setAttribute("type", "hidden");
        input.setAttribute("name", "myparam");
        input.setAttribute("value", "task");
        document.getElementById("statistics1").appendChild(input);

        document.statistics1.submit();

    });
    $('.c2exp1').click(function () {

        var input = document.createElement("input");
        input.setAttribute("type", "hidden");
        input.setAttribute("name", "myparam");
        input.setAttribute("value", "jobvacancy");
        document.getElementById("statistics1").appendChild(input);

        document.statistics1.submit();

    });
    $('.c3exp1').click(function () {

        var input = document.createElement("input");
        input.setAttribute("type", "hidden");
        input.setAttribute("name", "myparam");
        input.setAttribute("value", "salary");
        document.getElementById("statistics1").appendChild(input);

        document.statistics1.submit();

    });
    $('.c4exp1').click(function () {

        var input = document.createElement("input");
        input.setAttribute("type", "hidden");
        input.setAttribute("name", "myparam");
        input.setAttribute("value", "upskill");
        document.getElementById("statistics1").appendChild(input);

        document.statistics1.submit();

    });
    $('.c1exp2').click(function () {

        var input = document.createElement("input");
        input.setAttribute("type", "hidden");
        input.setAttribute("name", "myparam");
        input.setAttribute("value", "task");
        document.getElementById("statistics2").appendChild(input);

        document.statistics2.submit();

    });
    $('.c2exp2').click(function () {

        var input = document.createElement("input");
        input.setAttribute("type", "hidden");
        input.setAttribute("name", "myparam");
        input.setAttribute("value", "jobvacancy");
        document.getElementById("statistics2").appendChild(input);

        document.statistics2.submit();

    });
    $('.c3exp2').click(function () {

        var input = document.createElement("input");
        input.setAttribute("type", "hidden");
        input.setAttribute("name", "myparam");
        input.setAttribute("value", "salary");
        document.getElementById("statistics2").appendChild(input);

        document.statistics2.submit();

    });
    $('.c4exp2').click(function () {

        var input = document.createElement("input");
        input.setAttribute("type", "hidden");
        input.setAttribute("name", "myparam");
        input.setAttribute("value", "upskill");
        document.getElementById("statistics2").appendChild(input);

        document.statistics2.submit();

    });
    $('.c1exp3').click(function () {

        var input = document.createElement("input");
        input.setAttribute("type", "hidden");
        input.setAttribute("name", "myparam");
        input.setAttribute("value", "task");
        document.getElementById("statistics3").appendChild(input);

        document.statistics3.submit();

    });
    $('.c2exp3').click(function () {

        var input = document.createElement("input");
        input.setAttribute("type", "hidden");
        input.setAttribute("name", "myparam");
        input.setAttribute("value", "jobvacancy");
        document.getElementById("statistics3").appendChild(input);

        document.statistics3.submit();

    });
    $('.c3exp3').click(function () {

        var input = document.createElement("input");
        input.setAttribute("type", "hidden");
        input.setAttribute("name", "myparam");
        input.setAttribute("value", "salary");
        document.getElementById("statistics3").appendChild(input);

        document.statistics3.submit();

    });
    $('.c4exp3').click(function () {

        var input = document.createElement("input");
        input.setAttribute("type", "hidden");
        input.setAttribute("name", "myparam");
        input.setAttribute("value", "upskill");
        document.getElementById("statistics3").appendChild(input);

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
