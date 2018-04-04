<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <title>CareerTree</title>
    <link rel="icon" href="./images/title.ico" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/modern-business.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/customstyle.css" />
    <link rel="stylesheet" href="./css/style5.css">
    <script>
        function validate_submit() {
            var result1 = false;
            var result2 = false;
            var result = false;
            var checkboxs1 = document.getElementsByName('skill[]');
            var checkboxs2 = document.getElementsByName('knw[]');
            for (var i = 0, l = checkboxs1.length; i < l; i++) {
                if (checkboxs1[i].checked) {
                    result1 = true;
                    break;
                }
            }
            for (var i = 0, l = checkboxs2.length; i < l; i++) {
                if (checkboxs2[i].checked) {
                    result2 = true;
                    break;
                }
            }
            if (result1 && result2) {
                result = true;
            }
            else {
                alert("Please specify at least one skill and knowledge");
            }
            return result;
        }
    </script>

</head>

<body>

    

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

<form method="post" action="output.php" style="
    padding-top: 80px;
">
<!--<div class="full">-->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">
            Specify your skills and knowledge
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
        </ol>
        <?php
 if ( isset($_POST['submit'] ) ) {
    $occp = $_POST['occ'];
    //echo "You have selected :" .$occp;
    //echo '<br>';
    }

    echo '<div class="container">';
    echo '<h3>Select your skills: </h3>';
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
    //-------------------------------------------------
        $sql = "Select * from (
                Select b.skid as ID,b.skName as name, b.description as description, 1 as checked
	                From skill_Occupation as a, skill as b, Occupation as c
	                Where a.skID = b.skID and c.OccID = a.OccID
	                And c.OccName = '$occp'
	                Order by c.OccName, a.Rank desc
	                Limit 10) as default_checked
                union
                select * from (
                select allskill.skid as ID,allskill.skname as name, allskill.description as description, 0 as checked
                from skill as allskill
                where allskill.skid not in (Select b.skid
	                From skill_Occupation as a, skill as b, Occupation as c
	                Where a.skID = b.skID and c.OccID = a.OccID
	                And c.OccName = '$occp'
	                Order by c.OccName, a.Rank desc
	                Limit 10)
                order by allskill.skid
                ) as default_no_checked
                order by checked desc, id";

            $resultSkill = pg_query($dbconn4, $sql);

             if (!$resultSkill) {
                 echo "An error occurred.\n";
                 exit;
             }
             echo '<div class="midskill">';
             while ($res = pg_fetch_row($resultSkill)) {
                 $resultsk = $res[1];
                 if($res[3] == 1){
                  echo '<input type="checkbox" name="skill[]" value = "'. $resultsk .'" checked>'. $resultsk .'</br>';
                 }else{
                  echo '<input type="checkbox" name="skill[]" value = "'. $resultsk .'">'. $resultsk .'</br>';
                 }
             }

 //-------------------------------------------------
    //echo '<input type="submit" name="submit" value="SKILLS" />';
    echo '</div>';

//--------------------------------------------------
    $sql = "Select * from (
            Select b.knwid as ID,b.knwName as name, b.description as description, 1 as checked
	            From knowledge_Occupation as a, knowledge as b, Occupation as c
	            Where a.knwID = b.knwID and c.OccID = a.OccID
	            And c.OccName = '$occp'
	            Order by c.OccName, a.Rank desc
	            Limit 10) as default_checked
            union
            select * from (
            select allknowledge.knwid as ID,allknowledge.knwname as name, allknowledge.description as description, 0 as checked
            from knowledge as allknowledge
            where allknowledge.knwid not in (Select b.knwid
	            From knowledge_Occupation as a, knowledge as b, Occupation as c
	            Where a.knwID = b.knwID and c.OccID = a.OccID
	            And c.OccName = '$occp'
	            Order by c.OccName, a.Rank desc
	            Limit 10)
            order by allknowledge.knwid
            ) as default_no_checked
            order by checked desc, id";
        $resultknw = pg_query($dbconn4, $sql);
         if (!$resultknw) {
                    echo "An error occurred.\n";
                    exit;
                }

    echo '<div class="container">';
    echo '<h3>Select your knowledge: </h3>';
    echo '</div>';

    echo '<div class="midskill">';
                while ($res = pg_fetch_row($resultknw)) {
                    $resultk = $res[1];
                    if($res[3] == 1){
                        echo '<input type="checkbox" name="knw[]" value = "'. $resultk .'" checked>'. $resultk .'</br>';
                    }else {
                        echo '<input type="checkbox" name="knw[]" value = "'. $resultk .'">'. $resultk .'</br>';
                    }
    }
//-------------------------------------------------
     echo '</div>';
     echo '<br/>';
     echo '<div class="cbut">';
     echo '<input class="but2" type="submit" name="submit" value="EXPLORE MY OCCUPATIONS" onclick = "return validate_submit()"/>';
     echo '</div>';
     echo '<div>';
     echo '<br/>';
     echo '</div>';

     pg_close($dbconn4); ?>
    </div>

    <footer class="py-5 bg-dark">
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

