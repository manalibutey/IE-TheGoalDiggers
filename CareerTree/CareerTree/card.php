<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <title>CareerTree</title>
    <link rel="icon" href="./images/tab.ico" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/card.css">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script src="./js/jquery.min.js"></script>
     <script src="./vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="./vendor/chosen_v1.8.5/chosen.jquery.min.js"></script>
    <link href="./vendor/chosen_v1.8.5/chosen.css" rel="stylesheet" />
     <script type="text/javascript">
        
        $(document).ready(function () {
            $('.chosen-select').chosen();
       

        $('#btn').click(function(){
 
  var state1 = $('#statecurrent option:selected').val();
  alert(state1);  //previous state value
  $("#currentState").val(state1);
   var state2 = $('#statefuture option:selected').val();
  alert(state2); //future state value
  $("#futureState").val(state2);
     document.statistics.submit();
    
});


 });

 
    </script>
    <script type="text/javascript">

function submitwork()

{

 document.work.submit();

}
function submitskill()

{

 document.skill.submit();

}
function submitcourse()

{

 document.course.submit();

}
function submitstatistics()

{

 document.statistics.submit();

}
</script>
<script>
window.onload = function(){ 
    // your code 

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("stats");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
stats.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
};
</script>
    </head>
    <body>
<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-home3" viewBox="0 0 32 32">
<title>Home</title>
<path d="M32 19l-6-6v-9h-4v5l-6-6-16 16v1h4v10h10v-6h4v6h10v-10h4z"></path>
</symbol>
<symbol id="icon-svg" viewBox="0 0 32 32">
<title>svg</title>
<path d="M29 13c-0.888 0-1.686 0.386-2.236 1h-5.936l4.197-4.197c0.822 0.046 1.66-0.245 2.288-0.874 1.172-1.172 1.172-3.071 0-4.243s-3.071-1.172-4.243 0c-0.628 0.628-0.919 1.466-0.874 2.288l-4.197 4.197v-5.936c0.614-0.549 1-1.347 1-2.236 0-1.657-1.343-3-3-3s-3 1.343-3 3c0 0.888 0.386 1.686 1 2.236v5.936l-4.197-4.197c0.045-0.822-0.245-1.66-0.874-2.288-1.172-1.172-3.071-1.172-4.243 0s-1.172 3.071 0 4.243c0.628 0.628 1.466 0.919 2.288 0.874l4.197 4.197h-5.936c-0.549-0.614-1.347-1-2.236-1-1.657 0-3 1.343-3 3s1.343 3 3 3c0.888 0 1.686-0.386 2.236-1h5.936l-4.197 4.197c-0.822-0.046-1.66 0.245-2.288 0.874-1.172 1.172-1.172 3.071 0 4.243s3.071 1.172 4.243 0c0.628-0.628 0.919-1.466 0.874-2.288l4.197-4.197v5.936c-0.614 0.549-1 1.347-1 2.235 0 1.657 1.343 3 3 3s3-1.343 3-3c0-0.888-0.386-1.686-1-2.236v-5.936l4.197 4.197c-0.046 0.822 0.245 1.66 0.874 2.288 1.172 1.172 3.071 1.172 4.243 0s1.172-3.071 0-4.243c-0.628-0.628-1.466-0.919-2.288-0.874l-4.197-4.197h5.936c0.549 0.614 1.347 1 2.235 1 1.657 0 3-1.343 3-3s-1.343-3-3-3z"></path>
</symbol>
</defs>
</svg>

<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-circle-left" viewBox="0 0 32 32">
<title>Back</title>
<path d="M16 32c8.837 0 16-7.163 16-16s-7.163-16-16-16-16 7.163-16 16 7.163 16 16 16zM16 3c7.18 0 13 5.82 13 13s-5.82 13-13 13-13-5.82-13-13 5.82-13 13-13z"></path>
<path d="M20.914 9.914l-2.829-2.829-8.914 8.914 8.914 8.914 2.828-2.828-6.086-6.086z"></path>
</symbol>
</defs>
</svg>

<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-briefcase" viewBox="0 0 32 32">
<title>briefcase</title>
<path d="M30 8h-8v-2c0-1.1-0.9-2-2-2h-8c-1.1 0-2 0.9-2 2v2h-8c-1.1 0-2 0.9-2 2v18c0 1.1 0.9 2 2 2h28c1.1 0 2-0.9 2-2v-18c0-1.1-0.9-2-2-2zM12 6.004c0.001-0.001 0.002-0.003 0.004-0.004h7.993c0.001 0.001 0.003 0.002 0.004 0.004v1.996h-8v-1.996zM30 16h-4v3c0 0.55-0.45 1-1 1h-2c-0.55 0-1-0.45-1-1v-3h-12v3c0 0.55-0.45 1-1 1h-2c-0.55 0-1-0.45-1-1v-3h-4v-2h28v2z"></path>
</symbol>
</defs>
</svg>

<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-cogs" viewBox="0 0 32 32">
<title>cogs</title>
<path d="M11.366 22.564l1.291-1.807-1.414-1.414-1.807 1.291c-0.335-0.187-0.694-0.337-1.071-0.444l-0.365-2.19h-2l-0.365 2.19c-0.377 0.107-0.736 0.256-1.071 0.444l-1.807-1.291-1.414 1.414 1.291 1.807c-0.187 0.335-0.337 0.694-0.443 1.071l-2.19 0.365v2l2.19 0.365c0.107 0.377 0.256 0.736 0.444 1.071l-1.291 1.807 1.414 1.414 1.807-1.291c0.335 0.187 0.694 0.337 1.071 0.444l0.365 2.19h2l0.365-2.19c0.377-0.107 0.736-0.256 1.071-0.444l1.807 1.291 1.414-1.414-1.291-1.807c0.187-0.335 0.337-0.694 0.444-1.071l2.19-0.365v-2l-2.19-0.365c-0.107-0.377-0.256-0.736-0.444-1.071zM7 27c-1.105 0-2-0.895-2-2s0.895-2 2-2 2 0.895 2 2-0.895 2-2 2zM32 12v-2l-2.106-0.383c-0.039-0.251-0.088-0.499-0.148-0.743l1.799-1.159-0.765-1.848-2.092 0.452c-0.132-0.216-0.273-0.426-0.422-0.629l1.219-1.761-1.414-1.414-1.761 1.219c-0.203-0.149-0.413-0.29-0.629-0.422l0.452-2.092-1.848-0.765-1.159 1.799c-0.244-0.059-0.492-0.109-0.743-0.148l-0.383-2.106h-2l-0.383 2.106c-0.251 0.039-0.499 0.088-0.743 0.148l-1.159-1.799-1.848 0.765 0.452 2.092c-0.216 0.132-0.426 0.273-0.629 0.422l-1.761-1.219-1.414 1.414 1.219 1.761c-0.149 0.203-0.29 0.413-0.422 0.629l-2.092-0.452-0.765 1.848 1.799 1.159c-0.059 0.244-0.109 0.492-0.148 0.743l-2.106 0.383v2l2.106 0.383c0.039 0.251 0.088 0.499 0.148 0.743l-1.799 1.159 0.765 1.848 2.092-0.452c0.132 0.216 0.273 0.426 0.422 0.629l-1.219 1.761 1.414 1.414 1.761-1.219c0.203 0.149 0.413 0.29 0.629 0.422l-0.452 2.092 1.848 0.765 1.159-1.799c0.244 0.059 0.492 0.109 0.743 0.148l0.383 2.106h2l0.383-2.106c0.251-0.039 0.499-0.088 0.743-0.148l1.159 1.799 1.848-0.765-0.452-2.092c0.216-0.132 0.426-0.273 0.629-0.422l1.761 1.219 1.414-1.414-1.219-1.761c0.149-0.203 0.29-0.413 0.422-0.629l2.092 0.452 0.765-1.848-1.799-1.159c0.059-0.244 0.109-0.492 0.148-0.743l2.106-0.383zM21 15.35c-2.402 0-4.35-1.948-4.35-4.35s1.948-4.35 4.35-4.35 4.35 1.948 4.35 4.35c0 2.402-1.948 4.35-4.35 4.35z"></path>
</symbol>
</defs>
</svg>

<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-man" viewBox="0 0 32 32">
<title>man</title>
<path d="M18 3c0 1.657-1.343 3-3 3s-3-1.343-3-3c0-1.657 1.343-3 3-3s3 1.343 3 3z"></path>
<path d="M18 8h-6c-1.105 0-2 0.895-2 2v10h2v12h2.5v-12h1v12h2.5v-12h2v-10c0-1.105-0.895-2-2-2z"></path>
</symbol>
</defs>
</svg>


<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-books" viewBox="0 0 36 32">
<title>books</title>
<path d="M7 4h-6c-0.55 0-1 0.45-1 1v22c0 0.55 0.45 1 1 1h6c0.55 0 1-0.45 1-1v-22c0-0.55-0.45-1-1-1zM6 10h-4v-2h4v2z"></path>
<path d="M17 4h-6c-0.55 0-1 0.45-1 1v22c0 0.55 0.45 1 1 1h6c0.55 0 1-0.45 1-1v-22c0-0.55-0.45-1-1-1zM16 10h-4v-2h4v2z"></path>
<path d="M23.909 5.546l-5.358 2.7c-0.491 0.247-0.691 0.852-0.443 1.343l8.999 17.861c0.247 0.491 0.852 0.691 1.343 0.443l5.358-2.7c0.491-0.247 0.691-0.852 0.443-1.343l-8.999-17.861c-0.247-0.491-0.852-0.691-1.343-0.443z"></path>
</symbol>
</defs>
</svg>

<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-stats-dots" viewBox="0 0 32 32">
<title>stats-dots</title>
<path d="M0 26h32v4h-32zM4 18h4v6h-4zM10 10h4v14h-4zM16 16h4v8h-4zM22 4h4v20h-4z"></path>
</symbol>
</defs>
</svg>

<div class="navbar  navbar-dark navbar-expand-md fixed-top">

		<div class="container">
			<a class="navbar-brand" href="/home.php">
				<img src="./images/logo2.png" />
			</a>
			
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navCollapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="collapse navbar-collapse navCollapse">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a class="nav-item active" href="/home.php" style="margin-top: 7px;">Home</a>
					</li>
					<li>
						<a class="nav-item" href="/aboutus.php" style="margin-top: 7px;">About Us</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
    
    <div class="sidebar">
 <!--<div class="icon-space"><a href="/shiny?id= --><?php //echo $randID; ?><!-- "><svg class="icon icon-tree"><use xlink:href="#icon-tree"></use></svg></a></div> -->
<div class="icon-space"><a href="/home.php"><svg class="icon icon-home3"><use xlink:href="#icon-home3"></use></svg><span class="name"></span></a></div> 
<div class="icon-space"><a href="javascript:window.history.back()"><svg class="icon icon-circle-left"><use xlink:href="#icon-circle-left"></use></svg></a></div>
</div>

 <div class="full">

     <?php
        $queries = array();
        parse_str($_SERVER['QUERY_STRING'], $queries);
        $tranID =  $queries['id'];
        $occID = $queries['occid'];
        //-------Receive ABS Name from parameter ------------//updated 29/04/2018
        $para = $queries['para'];
        if($para){
            $addParaString = " and trim(OccABS.abs_name) ='".$para."'";
        }
        else{
        $addParaString = "";
        }
        //------------------------------------
        include 'db_connection.php';
        $dbconn4 = OpenCon();
        //updated query 29/04/2018
        $sql = "select p.title as previousocc, CASE WHEN OccABS.abs_name is not null THEN OccABS.abs_name || ' (ABS)' ELSE p.relatedtitle END  as relatedocc,
                CASE WHEN OccABS.abs_description is not null THEN OccABS.abs_description ELSE Occ.description END as description,
                p.matchingskill,p.matchingknowledge,p.lackingskill,p.lackingknowledge,p.percentage,trim(OccABS.abs_name),trim(OccABS.abs_original)
                        from percentage as p
		                inner join occupation as Occ on p.relatedoccid = Occ.occid
		                Left outer join Occupation_ABS as OccABS on Occ.occid = OccABS.occid
                        where
                        id = '$tranID'
                        and relatedoccid = '$occID'".$addParaString;
        $result = pg_query($dbconn4, $sql);
        $occDetail = pg_fetch_row($result);
        if (!$result) {
            echo "An error occurred.\n";
            exit;
        }
        if($occDetail[8] <> $occDetail[9])
        {
            //Set ABS Original Name as parameter for query career statistic
            $para = $occDetail[9];
        }
        $lackingskill = $occDetail[5];
        $lackingknowledge = $occDetail[6];
        $previousOcc = $occDetail[0];
        pg_close($dbconn4);
     ?>
        <div class="mid-section">
           <h1><div class="title-line1"><?php echo $occDetail[1]; ?></div></h1>
        </div>
        <div class="sub-heading"><h4>Explore the responsibilities, course suggestions for the skills you need as well as career statictics to switch to this career</h4></div>


<div class="card">


<div class="space">
<form   name="work" method="post" action="/work.php">
<a href="javascript: submitwork()">
<div class="work">
<div class="card-icon">
<svg class="icon icon-briefcase"><use xlink:href="#icon-briefcase"></use></svg>
</div>
<h4>DUTIES</h4>
<p>Know more about the day-to-day tasks of this occupation.</p>
</div>
</a>
    <input type="hidden" name="id" value="<?php echo $tranID; ?>" />
    <input type="hidden" name="occid" value="<?php echo $occID; ?>" />
    <input type="hidden" name="para" value="<?php echo $para; ?>" />
</form>
</div>


<div class="space">
<form   name="skill" method="post" action="/lack.php">
<a href="javascript: submitskill()">
<div class="skill">
<div class="card-icon">
<svg class="icon icon-cogs"><use xlink:href="#icon-cogs"></use></svg>
</div>
<h4>ENHANCE SKILLSET</h4>
<p>Undertake the recommended courses to acquire the skills you need for this occupation.</p>
</div>
</a>
    <input type="hidden" name="id" value="<?php echo $tranID; ?>" />
    <input type="hidden" name="occid" value="<?php echo $occID; ?>" />
    <input type="hidden" name="para" value="<?php echo $para; ?>" />
    <input type="hidden" name="lackingskill" value="<?php echo $lackingskill; ?>" />
    <input type="hidden" name="lackingknowledge" value="<?php echo $lackingknowledge; ?>" />
</form>
</div>




<div class="space" id="stats">
<!--<a href="javascript: submitstatistics()"> -->
<div class="statistics">
<div class="card-icon">
<svg class="icon icon-stats-dots"><use xlink:href="#icon-stats-dots"></use></svg>
</div>
<h4>CAREER STATISTICS</h4>
<p>Know more about the employment trends related to this occupation.</p>
</div>
</a>
    <input type="hidden" name="id" value="<?php echo $tranID; ?>" />
    <input type="hidden" name="occid" value="<?php echo $occID; ?>" />
    <input type="hidden" name="para" value="<?php echo $para; ?>" />
    <input type="hidden" name="previousocc" value="<?php echo $previousOcc; ?>" />

</form>
</div>


</div>


<!-- Trigger/Open The Modal -->

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Customise Recommendations</h2>
    </div>
    <div class="modal-body">
    <div class=state> 
    <h3>Let us know you better</h3>
    <div class="statecurrent">
       <!-- <h4>State you currently reside in</h4> -->
        <select class="chosen-select" id="statecurrent" name="statelist">
            <option disabled selected value>Please enter your current residential state</option>
            <option value = "Australian Capital Territory">Australian Capital Territory</option>
            <option value = "New South Wales">New South Wales</option>
            <option value = "Northern Territory">Northern Territory</option>
            <option value = "Queensland">South Australia</option>
            <option value = "Tasmania">Tasmania</option>
            <option value = "Victoria">Victoria</option>
            <option value = "Western Australia">Western Australia</option>
        </select>
   </div>
   <h3>Would you consider relocating within Australia for better oppourtinuties</h3>
   <div class="statefuture">
     
      <!--  <h4>State you would like to reloacte to</h4>  -->
        <select class="chosen-select" id="statefuture" name="statelist1">
            <option disabled selected value>Please enter your future residential state</option>
            <option value = "Australian Capital Territory">Australian Capital Territory</option>
            <option value = "New South Wales">New South Wales</option>
            <option value = "Northern Territory">Northern Territory</option>
            <option value = "Queensland">South Australia</option>
            <option value = "Tasmania">Tasmania</option>
            <option value = "Victoria">Victoria</option>
            <option value = "Western Australia">Western Australia</option>
        </select>
    </div>
    <form   name="statistics" method="post" action="/stats.php">

    <div class="btn" id="btn">
         <input class="but2" id="#but2" type="submit" name="submit" value="Get Statistics" />
     </div>
      <input type="hidden" name="id" value="<?php echo $tranID; ?>" />
    <input type="hidden" name="occid" value="<?php echo $occID; ?>" />
    <input type="hidden" name="para" value="<?php echo $para; ?>" />
    <input type="hidden" name="previousocc" value="<?php echo $previousOcc; ?>" />
    <input type="hidden" name="currentState" id="currentState" />
    <input type="hidden" name="futureState" id="futureState" />
     </form>
</div>
      
    </div>
  
  </div>

</div>

</div>


<div class="foot">
<footer class="footer"><p>
  &#169; Copyright 2018 Career Tree </p>
</footer>
</div>
</body>
</html>