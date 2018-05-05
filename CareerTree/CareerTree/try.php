<script src="./js/jquery.min.js"></script>
<div class="yes">yes</div> 
<div class="no"> no</div> 
<div class="yes">yes</div> 
<p class="notUnderstand">not understand</p>

<div class="proceedContent" style="display:none;">proceedcontent</div>
<script>
$('.yes').click(function() {
    $('.proceedContent').show();
});

$('.no, .notUnderstand').click(function() {
    $('.proceedContent').hide();
});
</script>

$(function() {
$('.skillgroup').click(function() {
alert('I hate tomatoes.');
 $('.value').show();
});
});

function child(id) {
alert(id);
var classname = $('.'+id);
alert(classname);
  $('.'+id).show();
  $('div:not(.Others)').hide();
}

 position: relative;
    width: fit-content;
    height: 100%;
    margin: 5px 5px;
    background-color: #111E6C;
    color: white;
    border-radius: 20px;
    display: none;
    /* font-weight: bold; */
    font-size: 15px;