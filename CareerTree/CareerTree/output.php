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
    <link href="css/modern-business.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/customstyle.css" />
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <script language="javascript" type="text/javascript" src="./js/jquery.min.js"></script>

</head>

<body>
    <form method="post" action="output.php">
        <div class="navbar  navbar-dark navbar-expand-md fixed-top">

            <div class="container">
                <a class="navbar-brand" href="/home.php">
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
                            <a class="nav-item active" href="/home.php">HOME</a>
                        </li>
                        <li>
                            <a class="nav-item" href="/aboutus.php">ABOUT US</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <h1 class="mt-4 mb-3">
                Suggested Occupations
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/industry.php">Industry</a>
                </li>
                <li class="breadcrumb-item active">Occupation</li>
                <li class="breadcrumb-item active">Skills and Knowledge</li>
                <li class="breadcrumb-item active">Suggested Occupation</li>
            </ol>

            <h2>According to your previous occupation, you can be:</h2>
            <div class="table-responsive">
                <!--<table id="example" class="table table-striped table-bordered" style="width:100%">-->
                    <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Occupations</th>
                            <th>Percentage Matching</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
    if ( isset($_POST['submit'] ) ) {
        $occp = $_POST['occ'];

    //echo "You have selected :" .$occp;

    //echo '<br>';
    $skills = "";
    $knw = "";
    if(!empty($_POST['skill'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['skill'] as $selected){
$skills .=  '\''.$selected.'\''.',';
    }
    $skills = rtrim($skills,",");
    //echo $skills."</br>";
    }
    if(!empty($_POST['knw'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['knw'] as $select){
$knw .=  '\''.$select.'\''.',';
    }
    $knw = rtrim($knw,",");
    //echo $knw."</br>";
    }
    }
 $randID = rand(1,10000);
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
         echo "<tr>";
         echo '<td>'.$occCount.'</td>';
         echo '<td><a href="/occDetail.php?id='.$relatedOcc[3].'&occid='.$relatedOcc[8].'">'.$relatedOcc[1].'</a><br/>'.$relatedOcc[11].'</td>';
         echo '<td>'.$relatedOcc[2].'</td>';
         echo "</tr>";
         $occCount++;
     }


     pg_close($dbconn4);
     //header("Location: /shiny?id=$randID",TRUE,302);
     //exec("app.R");
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <footer class="py-5 bg-dark" >
            <div class="container">
                <a href="/">
                    <img src="./images/logo3.png" class="logoFooter" />
                </a>
                <label class="motto"> Empowering the unemployed</label>
            </div>
            <div class="container">
                <hr />
                <a href="#" class="FooterTxt">Sitemap</a>
                <a href="#" class="FooterTxt">Copyright &copy;2018</a>
                <a href="#" class="FooterTxt">Contact Us</a>
            </div>
        </footer>
    </form>
</body>
        </html>