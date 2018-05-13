
$(document).ready(function () {
   
    //occ 1

    $('.btn1').click(function () {
        var result = false;
        var state1 = $('#statecurrent1 option:selected').val();
        alert(state1);  //previous state value
        $("#currentState1").val(state1);
        var state2 = $('#statefuture1 option:selected').val();
        alert(state2); //future state value
        $("#futureState1").val(state2);

        if (state1 && state2) {
            if (state1 != state2) {
                result = true;
                document.statistics1.submit();
            }
            else {
                alert("Please specify a different state to relocate");
                result = false;
            }
        }
        else {
            alert("Please specify both states");
            result = false;
        }
        return result;
    });
    $('.no1').click(function () {
        var result = false;
        var state1 = $('#statecurrent1 option:selected').val();
        alert(state1);  //previous state value
        $("#currentState1").val(state1);
        //  var state2 = $('#statefuture option:selected').val();
        //alert(state2); //future state value
        // $("#futureState").val(state2);

        if (state1) {
            result = true;
            document.statistics1.submit();

        }
        else {
            alert("Please specify your current state");
            result = false;
        }
        return result;
    });

    $('.yes1').click(function () {
        $('.ques1').css('display', 'none');
        $('.statefuture1').css('display', 'block');

        $('.btn1').css('display', 'block');
    });

    //occ2

    $('.btn2').click(function () {
        var result = false;
        var state1 = $('#statecurrent2 option:selected').val();
        alert(state1);  //previous state value
        $("#currentState2").val(state1);
        var state2 = $('#statefuture2 option:selected').val();
        alert(state2); //future state value
        $("#futureState2").val(state2);

        if (state1 && state2) {
            if (state1 != state2) {
                result = true;
                document.statistics2.submit();
            }
            else {
                alert("Please specify a different state to relocate");
                result = false;
            }
        }
        else {
            alert("Please specify both states");
            result = false;
        }
        return result;
    });
    $('.no2').click(function () {
        var result = false;
        var state1 = $('#statecurrent2 option:selected').val();
        alert(state1);  //previous state value
        $("#currentState2").val(state1);
        //  var state2 = $('#statefuture option:selected').val();
        //alert(state2); //future state value
        // $("#futureState").val(state2);

        if (state1) {
            result = true;
            document.statistics2.submit();

        }
        else {
            alert("Please specify your current state");
            result = false;
        }
        return result;
    });

    $('.yes2').click(function () {
        $('.ques2').css('display', 'none');
        $('.statefuture2').css('display', 'block');

        $('.btn2').css('display', 'block');
    });


    //occ3
    $('.btn3').click(function () {
        var result = false;
        var state1 = $('#statecurrent3 option:selected').val();
        alert(state1);  //previous state value
        $("#currentState3").val(state1);
        var state2 = $('#statefuture3 option:selected').val();
        alert(state2); //future state value
        $("#futureState3").val(state2);

        if (state1 && state2) {
            if (state1 != state2) {
                result = true;
                document.statistics3.submit();
            }
            else {
                alert("Please specify a different state to relocate");
                result = false;
            }
        }
        else {
            alert("Please specify both states");
            result = false;
        }
        return result;
    });
    $('.no3').click(function () {
        var result = false;
        var state1 = $('#statecurrent3 option:selected').val();
        alert(state1);  //previous state value
        $("#currentState3").val(state1);
        //  var state2 = $('#statefuture option:selected').val();
        //alert(state2); //future state value
        // $("#futureState").val(state2);

        if (state1) {
            result = true;
            document.statistics3.submit();

        }
        else {
            alert("Please specify your current state");
            result = false;
        }
        return result;
    });

    $('.yes3').click(function () {
        $('.ques3').css('display', 'none');
        $('.statefuture3').css('display', 'block');

        $('.btn3').css('display', 'block');
    });

});

