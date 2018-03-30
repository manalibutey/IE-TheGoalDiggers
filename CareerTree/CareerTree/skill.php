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

<form method="post" action="output.php">
<div class="full">
    <?php
 if ( isset($_POST['submit'] ) ) {
    $occp = $_POST['occ'];
    //echo "You have selected :" .$occp;
    //echo '<br>';
    }

    echo '<div class="headme">';
    echo '<h2>Please specify your skills</h2>';
    echo '<input type="hidden" name="occ" value="'.$occp.'">';
    echo '</div>';

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

        $sql = "select allSkill.skname, allSkill.description,
	            (Select b.SkName
	            From Skill_Occupation as a, Skill as b, Occupation as c
	            Where a.SkID = b.SkID and c.OccID = a.OccID
	            And c.OccName = '$occp'
	            and allSkill.skid = b.skid
	            Order by c.OccName, a.Rank desc
	            Limit 10) as checked
                from skill as allSkill
                order by checked";

 $resultSkill = pg_query($dbconn4, $sql);
 //-------------------------------------------------
             if (!$resultSkill) {
                 echo "An error occurred.\n";
                 exit;
             }
             echo '<div class="midskill">';
             while ($res = pg_fetch_row($resultSkill)) {
                 $resultsk = $res[0];
                 if($res[2] == ''){
                     echo '<input type="checkbox" name="skill[]" value = "'. $resultsk .'">'. $resultsk .'</br>';
                 }else {
                     echo '<input type="checkbox" name="skill[]" value = "'. $resultsk .'" checked>'. $resultsk .'</br>';
                 }
             }
 //-------------------------------------------------
    //echo '<input type="submit" name="submit" value="SKILLS" />';
    echo '</div>';

//--------------------------------------------------
    $sql = "select allKnowledge.knwname, allKnowledge.description,
	                (Select b.knwName
	                From Knowledge_Occupation as a, Knowledge as b, Occupation as c
	                Where a.knwID = b.knwID and c.OccID = a.OccID
	                And c.OccName = '$occp'
	                and allKnowledge.knwid = b.knwid
	                Order by c.OccName, a.Rank desc
	                Limit 10) as checked
                from knowledge as allKnowledge
                order by checked";
        $resultknw = pg_query($dbconn4, $sql);

         if (!$resultknw) {
                    echo "An error occurred.\n";
                    exit;
                }

    echo '<div class="headme">';
    echo '<h2>Please specify your knowledge</h2>';
    echo '</div>';

    echo '<div class="midsk">';
                while ($res = pg_fetch_row($resultknw)) {
                    $resultk = $res[0];
                    if($res[2] == ''){
                        echo '<input type="checkbox" name="knw[]" value = "'. $resultk .'">'. $resultk .'</br>';
                    }else {
                        echo '<input type="checkbox" name="knw[]" value = "'. $resultk .'" checked>'. $resultk .'</br>';
                    }
    }
//-------------------------------------------------
     echo '</div>';
     echo '<div class="cbut">';
    echo '<input class="but" type="submit" name="submit" value="FIND MY OCCUPATIONS" />';
     echo '</div>';
     echo '</form>';

     pg_close($dbconn4); ?> 
    
  </full>                   

</br>
    


</body>
</html>

