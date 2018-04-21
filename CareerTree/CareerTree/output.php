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
        <script src="./js/jquery.min.js"></script>
        <script>if (window.addEventListener) window.addEventListener('DOMMouseScroll', wheel, false);
window.onmousewheel = document.onmousewheel = wheel;

function wheel(event) {
    var delta = 0;
    if (event.wheelDelta) delta = event.wheelDelta / 120;
    else if (event.detail) delta = -event.detail / 3;

    handle(delta);
    if (event.preventDefault) event.preventDefault();
    event.returnValue = false;
}

function handle(delta) {
    var time = 1050;
	var distance = 350;
    
    $('html, body').stop().animate({
        scrollTop: $(window).scrollTop() - (distance * delta)
    }, time );
}</script>
    <script>
    $(document).ready(function () {
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
<symbol id="icon-tree" viewBox="0 0 32 32">
<title>Try Visualisation</title>
<path d="M30.5 24h-0.5v-6.5c0-1.93-1.57-3.5-3.5-3.5h-8.5v-4h0.5c0.825 0 1.5-0.675 1.5-1.5v-5c0-0.825-0.675-1.5-1.5-1.5h-5c-0.825 0-1.5 0.675-1.5 1.5v5c0 0.825 0.675 1.5 1.5 1.5h0.5v4h-8.5c-1.93 0-3.5 1.57-3.5 3.5v6.5h-0.5c-0.825 0-1.5 0.675-1.5 1.5v5c0 0.825 0.675 1.5 1.5 1.5h5c0.825 0 1.5-0.675 1.5-1.5v-5c0-0.825-0.675-1.5-1.5-1.5h-0.5v-6h8v6h-0.5c-0.825 0-1.5 0.675-1.5 1.5v5c0 0.825 0.675 1.5 1.5 1.5h5c0.825 0 1.5-0.675 1.5-1.5v-5c0-0.825-0.675-1.5-1.5-1.5h-0.5v-6h8v6h-0.5c-0.825 0-1.5 0.675-1.5 1.5v5c0 0.825 0.675 1.5 1.5 1.5h5c0.825 0 1.5-0.675 1.5-1.5v-5c0-0.825-0.675-1.5-1.5-1.5zM6 30h-4v-4h4v4zM18 30h-4v-4h4v4zM14 8v-4h4v4h-4zM30 30h-4v-4h4v4z"></path>
</symbol>
</defs>
</svg>
<?php
    if ( isset($_POST['submit'] ) ) {
        $occp = $_POST['occ'];

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
    if(!empty($_POST['knw'])){
    //// Loop to store and display values of individual checked checkbox.
    //foreach($_POST['knw'] as $select){
    //$knw .=  '\''.$select.'\''.',';
    //    }
    //    $knw = rtrim($knw,",");
    //    //echo $knw."</br>";
        $knw = $_POST['knw'];
    }
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
    <form>
    <div class="sidebar">
<div class="icon-space"><a href="/shiny?id= <?php echo $randID; ?>"><svg class="icon icon-tree"><use xlink:href="#icon-tree"></use></svg></a></div>
<div class="icon-space"><a href="/home.php"><svg class="icon icon-home3"><use xlink:href="#icon-home3"></use></svg><span class="name"></span></a></div> 
<div class="icon-space"><a href="javascript:window.history.back()"><svg class="icon icon-circle-left"><use xlink:href="#icon-circle-left"></use></svg></a></div>

</div>
    <div class="full">

        <div class="mid-section">
           <h1><div class="title-line1" >Recommended Occupations</div></h1>
        </div>
        <div class="sub-heading"><h4>According to your previous occupation, skill set, and</h4><h4>knowledge domain, you can change to the following occupations</h4></div>

        <div class = box-cover>
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
        $sql = "Select RelatedOccName, relatedoccid from Career_Changer_Matrix
            Where  OccName = '$occp'
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
	                                Where bb.Knwname in ($knw)
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
                where requiredKnowledge.knwname in ($knw)), ', ') as MatchingKnowledge) as col7,

                -------------------------Lacking Knowledge-------------------------------------
                (select array_to_string(array(
                select requiredKnowledge.knwname from (
                Select cc.occname,bb.knwID, bb.knwname
	                From Knowledge_Occupation as aa, Knowledge as bb, Occupation as cc
	                Where aa.knwID = bb.knwID and cc.OccID = aa.OccID
	                And cc.OccName = '$relatedOccParameter' --Replace with RelatedOccID from list
	                Order by aa.Rank desc
	                Limit 10) as requiredKnowledge
                where requiredKnowledge.knwname not in ($knw)), ', ') as LackingKnowledge) as col8";
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
         $sql ="select *
                from percentage, occupation
                where relatedoccid = occid
                and id = '$randID'
                order by percentage desc";
            $relatedOccupation = pg_query($dbconn4, $sql);
            $occCount = 1;
     while ($relatedOcc = pg_fetch_row($relatedOccupation)) {
         //echo "<tr>";
       // echo $occCount;
        echo '<a href="/details.php?id='.$relatedOcc[3].'&occid='.$relatedOcc[8].'">';
        echo '<div class="box">';
        echo'<div class="flex-element">';
        echo '<div class="title"><h3>'.$relatedOcc[1].'</h3></div>'; 
        echo'<div class="percentage"><h1><div class="pull-right">'.$relatedOcc[2].'%</div></h1></div>';
        echo'</div>';
        echo '<div class="desc"><h4>'.$relatedOcc[11].'</h4></div>';
        
        
        echo '</div>';
        echo '</a>';
        // echo "</tr>";
         $occCount++;
     }


     pg_close($dbconn4);
     
                        ?>
                       
        </div>
         <!-- <div id="sidebar">
				
		  	<ul>
			    <li><a href="index.html">jQuery (animated)</a></li>
			    <li><a href="css.html">CSS (fixed)</a></li>
			    <li><a href="reveal.html">CSS (reveal)</a></li>
			</ul>
		
		</div> -->
      
    </div>
    </form>
  <div class="foot">
<footer class="footer"><p>
  &#169; Copyright 2018 Career Tree </p>
</footer>
</div>
   
</body>
</html>
