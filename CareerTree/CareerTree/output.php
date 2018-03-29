<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <title>CareerTree</title>
    <link rel="icon" href="./images/title.ico" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style4.css">
     

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
                        <a class="nav-item active" href="#">Home</a>
                    </li>
                    <li>
                        <a class="nav-item" href="#">About Us</a>
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

     /*DB connection*/
        $dbhost = 'careertreetest.cytukzawpi8t.ap-southeast-2.rds.amazonaws.com';
        $dbuser = 'careertreetest';
        $dbpass = 'careerree2018';
        $port = 5432;
        $dbname ='ctdb_test';
        $conn = "host=careertreetest.cytukzawpi8t.ap-southeast-2.rds.amazonaws.com port=5432 dbname=ctdb_test user=careertreetest password=careertree2018";
        $dbconn4 = pg_connect($conn);
        if(! $conn )
        {
            echo "error";
        }
        /*DB connection end*/
        $stringconcat = "";
        $sql = "Select RelatedOccName from Career_Changer_Matrix
            Where  OccName = '$occp'
            Order by Rank";
     $relatedOccupation = pg_query($dbconn4, $sql);
     while ($relatedOcc = pg_fetch_row($relatedOccupation)) {
         echo $relatedOcc[0] ;
         $relatedOccParameter = $relatedOcc[0];
         echo " Percentage Match: ";
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
                                    ) as knwtotal) as col4";
         $eachRelatedOccupation = pg_query($dbconn4, $sql);
         while ($numOfMatch = pg_fetch_row($eachRelatedOccupation)) {
             $percentageMatch = ($numOfMatch[0] + $numOfMatch[2])/($numOfMatch[1] + $numOfMatch[3]);
             $percentageMatch = ceil($percentageMatch * 100);
             $stringconcat = $stringconcat."'".$relatedOccParameter."'"."-".$percentageMatch."% :";
             $reldb = pg_query($dbconn4, "INSERT INTO percentage (
	title, relatedtitle, percentage)
	 VALUES ('$occp','$relatedOccParameter',$percentageMatch);"); 
                    if (!$reldb) {echo "An INSERT query error occurred.\n"; exit;}
             echo $percentageMatch;
             echo '<br />';
         }

     }
     //exec("app.R");
     header("Location: /shiny",TRUE,302);
     //exec("app.R");
    
    ?>  

        </body>
        </html>