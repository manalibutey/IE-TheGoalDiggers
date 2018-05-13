<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <title>CareerTree</title>
    <link rel="icon" href="./images/tab.ico" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/output.css">
   <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script src="./js/jquery.min.js"></script>
     <script src="./vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="./vendor/chosen_v1.8.5/chosen.jquery.min.js"></script>
    <link href="./vendor/chosen_v1.8.5/chosen.css" rel="stylesheet" />
     <script src="./js/modal.js"></script>
    <script>
    $(document).ready(function () {
    $('.chosen-select').chosen();

    var sidebar = $('.sidebar');
    var top = sidebar.offset().top - parseFloat(sidebar.css('margin-top'));
  
    $(window).scroll(function (event) {
      var y = $(this).scrollTop();
      if (y >= top) {
        sidebar.addClass('sidebar-fixed');
      } else {
        sidebar.removeClass('sidebar-fixed');
      }
    });
});
</script>
<script>
window.onload = function(){ 
    // your code 

// Get the modal
var modal = document.getElementsByClassName('modal');

// Get the button that opens the modal
var btn = document.getElementsByClassName('img__description');

// Get the <span> element that closes the modal
var span = document.getElementsByClassName('close');

// When the user clicks the button, open the modal 
for(let i=0;i<btn.length;i++){
   btn[i].onclick = function() {
        modal[i].style.display = "block";
    }
}



// When the user clicks on <span> (x), close the modal
for(let i=0;i<span.length;i++){
    span[i].onclick = function() {
        modal[i].style.display = "none";
    }
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
for(let i=0;i<modal.length;i++){
    if (event.target == modal[i]) {
        modal[i].style.display = "none";
    }
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
<symbol id="icon-checkbox-checked" viewBox="0 0 32 32">
<title>YES</title>
<path d="M28 0h-24c-2.2 0-4 1.8-4 4v24c0 2.2 1.8 4 4 4h24c2.2 0 4-1.8 4-4v-24c0-2.2-1.8-4-4-4zM14 24.828l-7.414-7.414 2.828-2.828 4.586 4.586 9.586-9.586 2.828 2.828-12.414 12.414z"></path>
</symbol>
</defs>
</svg>

<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-cancel-circle" viewBox="0 0 32 32">
<title>NO</title>
<path d="M16 0c-8.837 0-16 7.163-16 16s7.163 16 16 16 16-7.163 16-16-7.163-16-16-16zM16 29c-7.18 0-13-5.82-13-13s5.82-13 13-13 13 5.82 13 13-5.82 13-13 13z"></path>
<path d="M21 8l-5 5-5-5-3 3 5 5-5 5 3 3 5-5 5 5 3-3-5-5 5-5z"></path>
</symbol>
</defs>
</svg>

<?php
    if ( isset($_POST['submit'] ) ) {
        $occp = $_POST['occ'];
        $Onetoccp = $_POST['Onetocc'];//updated 29/04/2018

    //echo "You have selected :" .$occp;

    //echo '<br>';
    $skills = "";
    $knw = "";
    if(!empty($_POST['skill'])){
    //// Loop to store and display values of individual checked checkbox.
    //foreach($_POST['skill'] as $selected){
    //$skills .=  '\''.$selected.'\''.',';
    //    }
    //    $skills = rtrim($skills,",");
    //    //echo $skills."</br>";
        $skills = $_POST['skill'];
    }
    //if(!empty($_POST['knw'])){
    //// Loop to store and display values of individual checked checkbox.
    //foreach($_POST['knw'] as $select){
    //$knw .=  '\''.$select.'\''.',';
    //    }
    //    $knw = rtrim($knw,",");
    //    //echo $knw."</br>";
    //    $knw = $_POST['knw'];
    //}
    }
 $randID = rand(1,10000);
?>

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
        <div class="icon-space"><a href="/home.php"><svg class="icon icon-home3"><use xlink:href="#icon-home3"></use></svg><span class="name"></span></a></div> 
        <div class="icon-space"><a href="javascript:window.history.back()"><svg class="icon icon-circle-left"><use xlink:href="#icon-circle-left"></use></svg></a></div>

    </div>
    <div class="full">

      <div class="mid-section">
           <h1><div class="title-line1" >Recommended Occupations</div></h1>
        </div>
        <div class="sub-heading"><h4>According to your previous occupation and skill set, you can switch to the following occupations</h4></div>

      </div>



  <div class="carousel-sec">
    <section class="skills section-padding">
<div class="container">
<div class="row">

<div class="col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-0">
<div class="section-heading section-heading--left m-b-sm-60 m-b-xxs-30 m-b-md-0" id="section01">
<h2 class="carousel-head">Your Skill Meter</h2>
<p class="carousel-text" >Provides you a percentage, specifying your skill set match for each recommended occupation, that are the closest match to your skill set. <br>Get the job opening trends in each state, salary statistics, recommended courses to cover the skill gap and tasks carried out for each occupation.<br> Choose an occupation and click Know More</p>
</div>
</div>


<div class="col-sm-12 col-md-8">
<div class="skill-slider owl-carousel" >

  <?php

        include 'db_connection.php';
        $dbconn4 = OpenCon();
        $stringconcat = "";
        //---- Clear Percentage Table if the records exceed 200----
        $sql = "select count(*) as lastrownumber from percentage";
        $lastrowquery = pg_query($dbconn4, $sql);
        $countrow = pg_fetch_row($lastrowquery);
        $lastrownumber = $countrow[0];
        if ($lastrownumber > 200){
            $sql = "delete from percentage";
            pg_query($dbconn4, $sql);
        }
        //---------------------------------------------------------
        //updated query 29/04/2018
        $sql = "Select RelatedOccName, relatedoccid from Career_Changer_Matrix
            Where  OccName = '$Onetoccp'
            Order by Rank";
     $relatedOccupation = pg_query($dbconn4, $sql);
     while ($relatedOcc = pg_fetch_row($relatedOccupation)) {

         $relatedOccParameter = $relatedOcc[0];
         $relatedOccID = $relatedOcc[1];
         $sql = "Select * from (
                Select count(*) as SkillMatch from (
                Select * from (

		                Select bb.SkID
	                    From Skill as bb
	                    Where bb.SkName in ($skills)

                ) as occ1
                Intersect
                Select * from (
                                Select bb.SkID
	                            From Skill_Occupation as aa, Skill as bb, Occupation as cc
	                            Where aa.SkID = bb.SkID and cc.OccID = aa.OccID
	                            And cc.OccName = '$relatedOccParameter' --Replace with RelatedOccID from list
	                            Order by aa.Rank desc
	                            Limit 10) as occ2
                                ) as skMatch ) as col1,

                (Select count(*) as TotalSkill from (
                                  Select bb.SkID
	                                From Skill_Occupation as aa, Skill as bb, Occupation as cc
	                                Where aa.SkID = bb.SkID and cc.OccID = aa.OccID
	                                And cc.OccName = '$relatedOccParameter' --Replace with RelatedOccID from list
	                                Order by aa.Rank desc
	                                Limit 10) as sktotal) as col2,

                (Select count(*) as KnowledgeMatch from (
                                    Select *  from (

		                            Select bb.KnwID
	                                From Knowledge as bb
	                                Where bb.Knwname in ($skills)
                                    ) as occ1
                                    Intersect
                                    Select * from (
                                            Select bb.KnwID
	                                        From Knowledge_Occupation as aa, Knowledge as bb, Occupation as cc
	                                        Where aa.KnwID = bb.KnwID and cc.OccID = aa.OccID
	                                        And cc.OccName = '$relatedOccParameter' --Replace with RelatedOccID from list
	                                        Order by aa.Rank desc
	                                Limit 10) as occ2
                                    ) as KnwMatch) as col3,

               (Select count(*) as TotalKnowledge from (
                                    Select bb.KnwID
	                                From Knowledge_Occupation as aa, Knowledge as bb, Occupation as cc
	                                Where aa.KnwID = bb.KnwID and cc.OccID = aa.OccID
	                                And cc.OccName = '$relatedOccParameter' --Replace with RelatedOccID from list
	                                Order by aa.Rank desc
	                                Limit 10
                                    ) as knwtotal) as col4,
                (select array_to_string(array(
                select requiredSkill.skname from (
                Select cc.occname,bb.SkID, bb.skname
	                From Skill_Occupation as aa, Skill as bb, Occupation as cc
	                Where aa.SkID = bb.SkID and cc.OccID = aa.OccID
	                And cc.OccName = '$relatedOccParameter' --Replace with RelatedOccID from list
	                Order by aa.Rank desc
	                Limit 10) as requiredSkill
                where requiredSkill.Skname in ($skills)), ', ') as MatchingSkills) as col5,
                -------------------------Lacking Skills-------------------------------------
                (select array_to_string(array(
                select requiredSkill.skname from (
                Select cc.occname,bb.SkID, bb.skname
	                From Skill_Occupation as aa, Skill as bb, Occupation as cc
	                Where aa.SkID = bb.SkID and cc.OccID = aa.OccID
	                And cc.OccName = '$relatedOccParameter' --Replace with RelatedOccID from list
	                Order by aa.Rank desc
	                Limit 10) as requiredSkill
                where requiredSkill.Skname not in ($skills)), ', ') as LackingSkills) as col6,

                -------------------------Matching Knowledge-------------------------------------
                (select array_to_string(array(
                select requiredKnowledge.knwname from (
                Select cc.occname,bb.knwID, bb.knwname
	                From Knowledge_Occupation as aa, Knowledge as bb, Occupation as cc
	                Where aa.knwID = bb.knwID and cc.OccID = aa.OccID
	                And cc.OccName = '$relatedOccParameter' --Replace with RelatedOccID from list
	                Order by aa.Rank desc
	                Limit 10) as requiredKnowledge
                where requiredKnowledge.knwname in ($skills)), ', ') as MatchingKnowledge) as col7,

                -------------------------Lacking Knowledge-------------------------------------
                (select array_to_string(array(
                select requiredKnowledge.knwname from (
                Select cc.occname,bb.knwID, bb.knwname
	                From Knowledge_Occupation as aa, Knowledge as bb, Occupation as cc
	                Where aa.knwID = bb.knwID and cc.OccID = aa.OccID
	                And cc.OccName = '$relatedOccParameter' --Replace with RelatedOccID from list
	                Order by aa.Rank desc
	                Limit 10) as requiredKnowledge
                where requiredKnowledge.knwname not in ($skills)), ', ') as LackingKnowledge) as col8";
         $eachRelatedOccupation = pg_query($dbconn4, $sql);

         while ($numOfMatch = pg_fetch_row($eachRelatedOccupation)) {
             $percentageMatch = ($numOfMatch[0] + $numOfMatch[2])/($numOfMatch[1] + $numOfMatch[3]);
             $percentageMatch = ceil($percentageMatch * 100);
             //$stringconcat = $stringconcat."'".$relatedOccParameter."'"."-".$percentageMatch."% :";
             $matchingSkill = $numOfMatch[4];
             $lackingSkill = $numOfMatch[5];
             $matchingKnowledge = $numOfMatch[6];
             $lackingKnowledge = $numOfMatch[7];

             $reldb = pg_query($dbconn4, "INSERT INTO percentage (
                                        title, relatedtitle, percentage, id, matchingskill, lackingskill, matchingknowledge, lackingknowledge, relatedoccid)
                                         VALUES ('$occp','$relatedOccParameter',$percentageMatch, $randID,'$matchingSkill','$lackingSkill','$matchingKnowledge','$lackingKnowledge','$relatedOccID');");
             if (!$reldb) {echo "An INSERT query error occurred.\n"; exit;}
         }
     }
        //updated query 29/04/2018
     $sql ="select p.title,CASE WHEN OccABS.abs_name is not null THEN OccABS.abs_name ELSE p.relatedtitle END as relatedtitle,
                p.percentage,p.id,p.matchingskill,p.lackingskill,p.matchingknowledge,p.lackingknowledge,p.relatedoccid,Occ.occid,Occ.occname,
                CASE WHEN OccABS.abs_description is not null THEN OccABS.abs_description ELSE Occ.description END as description,
                CASE WHEN OccABS.abs_name is not null THEN OccABS.abs_name ELSE '' END as ABS_parameter
                from percentage as p
                inner join occupation as Occ on p.relatedoccid = Occ.occid
                inner join Occupation_ABS as OccABS on Occ.occid = OccABS.occid
                where
                id = '$randID'
                order by percentage desc
limit 3";
            $relatedOccupation = pg_query($dbconn4, $sql);
            $occCount = 1;
     while ($relatedOcc = pg_fetch_row($relatedOccupation)) {
        if($relatedOcc[2] <> 0){
        }
         //echo "<tr>";
       // echo $occCount;
         if($relatedOcc[2] <> 0){
            if($relatedOcc[12] <> ''){
            //-----Include ABS Name as parameter if it is occupation from ABS updated 29/04/2018--------------
           // echo '<a href="/details.php?id='.$relatedOcc[3].'&occid='.$relatedOcc[8].'&para='.$relatedOcc[12].'">';
            }
            else{
           // echo '<a href="/details.php?id='.$relatedOcc[3].'&occid='.$relatedOcc[8].'">';
            }
            echo '<div class="card" id="card">
<div class="title"><h3>'.$relatedOcc[1].'</h3></div>
<div class="percentage"><h4>Skill Meter - '.$relatedOcc[2].'%</h4></div>
<div class="progress-bar__bar">
<div class="progress-bar__bar__active" style="width: '.$relatedOcc[2].'%">
 </div></div>
 <div class="img__description_layer">
  <h3 class="img__description">    <img class="img__img" src="./images/logomin.png" />
 <div class="more">Know More</div>
</h3>
   
    </div>
   
</div>';
      
         }

         $occCount++;
     }


     pg_close($dbconn4);

            ?>


  

</div>
</div>


      
</div>
</div>
 
</section>


</div>

<div id="section01" class="demo">
 
  <a href="#section02"><span></span><span></span><span></span>See Visualisation</a>
</div>
    
   <section class="section2" id="section02"> 
<div class="viz">
  <iframe src="/shiny?id=<?php echo $randID; ?> " ></iframe>
  </div>
  </section>

<!-- Trigger/Open The Modal -->

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h3><img class="img__img1" src="./images/logomin.png" />   Know More</h3>
    </div>
    <div class="modal-body">
        <form   name="statistics1" method="post" action="/stats.php">
            <div class=state> 
                 <h3>Let us know you better</h3>
                        <div class="statecurrent">
       <!-- <h4>State you currently reside in</h4> -->
                             <select class="chosen-select" id="statecurrent1" name="statelist">
                                  <option disabled selected value>Please enter your current residential state</option>
                                    <option value="Australian Capital Territory">Australian Capital Territory</option>
                                    <option value="New South Wales">New South Wales</option>
                                    <option value="Northern Territory">Northern Territory</option>
                                    <option value="Queensland">Queensland</option>
                                    <option value="South Australia">South Australia</option>
                                    <option value="Tasmania">Tasmania</option>
                                    <option value="Victoria">Victoria</option>
                                    <option value="Western Australia">Western Australia</option>
                                </select>
                          </div>
                           <div class="ques1" id="ques1">
                              <h3>Would you consider relocating within Australia for better oppourtinuties</h3>

                                 <div class="yes1" id="yes1"><svg class="icon icon-checkbox-checked"><use xlink:href="#icon-checkbox-checked"></use></svg></div>

                                  <div class="no1" id="no1" > 

                                            <input type="hidden" name="id" value="<?php echo $tranID; ?>" />
                                        <input type="hidden" name="occid" value="<?php echo $occID; ?>" />
                                        <input type="hidden" name="para" value="<?php echo $para; ?>" />
                                        <input type="hidden" name="previousocc" value="<?php echo $previousOcc; ?>" />
                                        <input type="hidden" name="currentState" id="currentState1" />
                                        <input type="hidden" name="futureState" id="futureState1" />
                                        <input type="hidden" name="occname" value="<?php echo $occname; ?>" />
                                         <input type="hidden" name="lackingskill" value="<?php echo $lackingskill; ?>" />
                                        <input type="hidden" name="lackingknowledge" value="<?php echo $lackingknowledge; ?>" />
   
                    
                                          <svg class="icon icon-cancel-circle"><use xlink:href="#icon-cancel-circle"></use></svg>
            
                                    </div>

                           </div>
    

                           <div class="statefuture1" style="display:none">
     
                              <!--  <h4>State you would like to reloacte to</h4>  -->
                               <select class="chosen-select" id="statefuture1" name="statelist1">
                                   <option disabled selected value>Please enter your future residential state</option>
                                   <option value="Australian Capital Territory">Australian Capital Territory</option>
                                   <option value="New South Wales">New South Wales</option>
                                   <option value="Northern Territory">Northern Territory</option>
                                   <option value="Queensland">Queensland</option>
                                   <option value="South Australia">South Australia</option>
                                   <option value="Tasmania">Tasmania</option>
                                   <option value="Victoria">Victoria</option>
                                   <option value="Western Australia">Western Australia</option>
                               </select>
                        </div>
                        <div class="btn1" id="btn1" style="display:none">
                                <h4> Get Statistics</h4>
                        </div>
     
            </div>
              </form>
    </div>
  
  </div>

</div>



<!-- Trigger/Open The Modal -->

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h3><img class="img__img1" src="./images/logomin.png" />   Know More</h3>
    </div>
    <div class="modal-body">
            <form   name="statistics2" method="post" action="/stats.php">

            <div class=state> 
                 <h3>Let us know you better</h3>
                        <div class="statecurrent">
       <!-- <h4>State you currently reside in</h4> -->
                             <select class="chosen-select" id="statecurrent2" name="statelist">
                                  <option disabled selected value>Please enter your current residential state</option>
                                    <option value="Australian Capital Territory">Australian Capital Territory</option>
                                    <option value="New South Wales">New South Wales</option>
                                    <option value="Northern Territory">Northern Territory</option>
                                    <option value="Queensland">Queensland</option>
                                    <option value="South Australia">South Australia</option>
                                    <option value="Tasmania">Tasmania</option>
                                    <option value="Victoria">Victoria</option>
                                    <option value="Western Australia">Western Australia</option>
                                </select>
                          </div>
                           <div class="ques2" id="ques2">
                              <h3>Would you consider relocating within Australia for better oppourtinuties</h3>

                                 <div class="yes2" id="yes2"><svg class="icon icon-checkbox-checked"><use xlink:href="#icon-checkbox-checked"></use></svg></div>

                                  <div class="no2" id="no2"> 

                                           <input type="hidden" name="id" value="<?php echo $tranID; ?>" />
                                        <input type="hidden" name="occid" value="<?php echo $occID; ?>" />
                                        <input type="hidden" name="para" value="<?php echo $para; ?>" />
                                        <input type="hidden" name="previousocc" value="<?php echo $previousOcc; ?>" />
                                        <input type="hidden" name="currentState" id="currentState2" />
                                        <input type="hidden" name="futureState" id="futureState2" />
                                        <input type="hidden" name="occname" value="<?php echo $occname; ?>" />
                                         <input type="hidden" name="lackingskill" value="<?php echo $lackingskill; ?>" />
                                        <input type="hidden" name="lackingknowledge" value="<?php echo $lackingknowledge; ?>" />
                    
                                          <svg class="icon icon-cancel-circle"><use xlink:href="#icon-cancel-circle"></use></svg>
            
                                    </div>

                           </div>
    

                           <div class="statefuture2" style="display:none">
     
                              <!--  <h4>State you would like to reloacte to</h4>  -->
                               <select class="chosen-select" id="statefuture2" name="statelist1">
                                   <option disabled selected value>Please enter your future residential state</option>
                                   <option value="Australian Capital Territory">Australian Capital Territory</option>
                                   <option value="New South Wales">New South Wales</option>
                                   <option value="Northern Territory">Northern Territory</option>
                                   <option value="Queensland">Queensland</option>
                                   <option value="South Australia">South Australia</option>
                                   <option value="Tasmania">Tasmania</option>
                                   <option value="Victoria">Victoria</option>
                                   <option value="Western Australia">Western Australia</option>
                               </select>
                        </div>
                        <div class="btn2" id="btn2" style="display:none">
                                <h4> Get Statistics</h4>
                        </div>
     
            </div>
            </form>
    </div>
  
  </div>

</div>


<!-- Trigger/Open The Modal -->

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h3><img class="img__img1" src="./images/logomin.png" />   Know More</h3>
    </div>
    <div class="modal-body">
            <form   name="statistics3" method="post" action="/stats.php">

            <div class=state> 
                 <h3>Let us know you better</h3>
                        <div class="statecurrent">
       <!-- <h4>State you currently reside in</h4> -->
                             <select class="chosen-select" id="statecurrent3" name="statelist">
                                  <option disabled selected value>Please enter your current residential state</option>
                                    <option value="Australian Capital Territory">Australian Capital Territory</option>
                                    <option value="New South Wales">New South Wales</option>
                                    <option value="Northern Territory">Northern Territory</option>
                                    <option value="Queensland">Queensland</option>
                                    <option value="South Australia">South Australia</option>
                                    <option value="Tasmania">Tasmania</option>
                                    <option value="Victoria">Victoria</option>
                                    <option value="Western Australia">Western Australia</option>
                                </select>
                          </div>
                           <div class="ques3" id="ques3">
                              <h3>Would you consider relocating within Australia for better oppourtinuties</h3>

                                 <div class="yes3" id="yes3"><svg class="icon icon-checkbox-checked"><use xlink:href="#icon-checkbox-checked"></use></svg></div>

                                  <div class="no3" id="no3" > 

                                     <input type="hidden" name="id" value="<?php echo $tranID; ?>" />
                                        <input type="hidden" name="occid" value="<?php echo $occID; ?>" />
                                        <input type="hidden" name="para" value="<?php echo $para; ?>" />
                                        <input type="hidden" name="previousocc" value="<?php echo $previousOcc; ?>" />
                                        <input type="hidden" name="currentState" id="currentState3" />
                                        <input type="hidden" name="futureState" id="futureState3" />
                                        <input type="hidden" name="occname" value="<?php echo $occname; ?>" />
                                         <input type="hidden" name="lackingskill" value="<?php echo $lackingskill; ?>" />
                                        <input type="hidden" name="lackingknowledge" value="<?php echo $lackingknowledge; ?>" />
                    
                                          <svg class="icon icon-cancel-circle"><use xlink:href="#icon-cancel-circle"></use></svg>
            
                                    </div>

                           </div>
    

                           <div class="statefuture3" style="display:none">
     
                              <!--  <h4>State you would like to reloacte to</h4>  -->
                               <select class="chosen-select" id="statefuture3" name="statelist1">
                                   <option disabled selected value>Please enter your future residential state</option>
                                   <option value="Australian Capital Territory">Australian Capital Territory</option>
                                   <option value="New South Wales">New South Wales</option>
                                   <option value="Northern Territory">Northern Territory</option>
                                   <option value="Queensland">Queensland</option>
                                   <option value="South Australia">South Australia</option>
                                   <option value="Tasmania">Tasmania</option>
                                   <option value="Victoria">Victoria</option>
                                   <option value="Western Australia">Western Australia</option>
                               </select>
                        </div>
                        <div class="btn3" id="btn3" style="display:none">
                                <h4> Get Statistics</h4>
                        </div>
     
            </div>
         </form>
    </div>
  
  </div>

</div>


    <div class=foot>
<footer class="footer">
    <p>&#169; Copyright 2018 Career Tree </p>
</footer>
</div>
   
</body>
</html>
