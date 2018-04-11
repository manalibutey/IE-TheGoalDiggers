<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <title>CareerTree</title>
    <link rel="icon" href="./images/title.ico" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/output.css">
     

</head>

<body>

<div class="navbar  navbar-dark navbar-expand-md fixed-top">

        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./images/logo.png" />
            </a>

            <button class="navbar-toggle" data-toggle="collapse" data-target=".navCollapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse navCollapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="nav-item active" href="/">HOME</a>
                    </li>
                    <li>
                        <a class="nav-item" href="#">ABOUT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>



    <?php
 if ( isset($_POST['submit'] ) ) {
    $occp = $_POST['occ'];

    echo "You have selected :" .$occp;

    echo '<br>';
    $skills = "";
    $knw = "";
    if(!empty($_POST['skill'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['skill'] as $selected){
$skills .=  '\''.$selected.'\''.',';
    }
    $skills = rtrim($skills,",");
    echo $skills."</br>";
    }
    if(!empty($_POST['knw'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['knw'] as $select){
$knw .=  '\''.$select.'\''.',';
    }
    $knw = rtrim($knw,",");
    echo $knw."</br>";
    }
    }
 $randID = rand(1,10000);
     ///*DB connection*/
     //   $dbhost = 'careertreetest.cytukzawpi8t.ap-southeast-2.rds.amazonaws.com';
     //   $dbuser = 'careertreetest';
     //   $dbpass = 'careerree2018';
     //   $port = 5432;
     //   $dbname ='ctdb_test';
     //   $conn = "host=careertreetest.cytukzawpi8t.ap-southeast-2.rds.amazonaws.com port=5432 dbname=ctdb_test user=careertreetest password=careertree2018";
     //   $dbconn4 = pg_connect($conn);
     //   if(! $conn )
     //   {
     //       echo "error";
     //   }
     //   /*DB connection end*/
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
        $sql = "Select RelatedOccName from Career_Changer_Matrix
            Where  OccName = '$occp'
            Order by Rank";
     $relatedOccupation = pg_query($dbconn4, $sql);
     while ($relatedOcc = pg_fetch_row($relatedOccupation)) {
         //echo $relatedOcc[0] ;
         $relatedOccParameter = $relatedOcc[0];
         //echo " Percentage Match: ";
         //-----------------------------------------------
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
                                        title, relatedtitle, percentage, id, matchingskill, lackingskill, matchingknowledge, lackingknowledge)
                                         VALUES ('$occp','$relatedOccParameter',$percentageMatch, $randID,'$matchingSkill','$lackingSkill','$matchingKnowledge','$lackingKnowledge');");
             if (!$reldb) {echo "An INSERT query error occurred.\n"; exit;}
             //echo $percentageMatch;
             //echo '<br />';
         }

     }
     pg_close($dbconn4);
     header("Location: /shiny?id=$randID",TRUE,302);
     //exec("app.R");

    ?>  

        </body>
        </html>