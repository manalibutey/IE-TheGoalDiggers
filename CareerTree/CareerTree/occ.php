<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <title>CareerTree</title>
    <link rel="icon" href="./images/title.ico" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <link rel="stylesheet" href="./css/occ.css">
     <link rel="stylesheet" href="./css/awesomplete.css" />
     <script language="javascript" type="text/javascript" src="./js/jquery.min.js"></script> <link href="css/modern-business.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/customstyle.css" />
    <script src="./vendor/chosen_v1.8.5/chosen.jquery.min.js"></script>
    <link href="./vendor/chosen_v1.8.5/chosen.css" rel="stylesheet" />
     <script>
         //function validate_submit() {
         //    var result = false;
         //    var options = document.getElementById("mylist").options;
         //    for (var i = 0; i < options.length; i++) {
         //        if (document.getElementById('pcategory').value == options[i].value) {
         //            result = true;  
         //        }
         //    }
         //    if (!result) {
         //        alert("Please select occupations from the list");
         //    }
         //    return result;
         //}
        $(document).ready(function () {
            $('.chosen-select').chosen();
         });

         function validate_submit() {
            var result = false;
            if (document.getElementById('category').value) {
                    result = true;
            }
            if (!result) {
                alert("Please select occupations from the list");
            }
            return result;
        }
     </script>

</head>

<body>

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
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">
            Tell us what's your previous occupation
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/industry.php">Industry</a>
            </li>
            <li class="breadcrumb-item active">Occupation</li>
        </ol>

        <?php
        if ( isset($_POST['submit1_x'], $_POST['submit1_y'] ) ) {
            $ind = 'IND08';

        }
        else if ( isset($_POST['submit2_x'], $_POST['submit2_y'] ) ) {
            $ind = 'IND14';

        }
        else if ( isset($_POST['submit3_x'], $_POST['submit3_y'] ) ) {
            $ind = 'IND01';

        }
        else if ( isset($_POST['submit4_x'], $_POST['submit4_y'] ) ) {
            $ind = 'IND18';

        }
        else if ( isset($_POST['submit5_x'], $_POST['submit5_y'] ) ) {
            $ind = 'IND05';

        }
        else if ( isset($_POST['submit6_x'], $_POST['submit6_y'] ) ) {
            $ind = 'IND16';

        }
        else if ( isset($_POST['submit7_x'], $_POST['submit7_y'] ) ) {
            $ind = 'IND04';

        }
        else if ( isset($_POST['submit8_x'], $_POST['submit8_y'] ) ) {
            $ind = 'IND11';

        }
        else if ( isset($_POST['submit9_x'], $_POST['submit9_y'] ) ) {
            $ind = 'IND17';

        }
        else if ( isset($_POST['submit10_x'], $_POST['submit10_y'] ) ) {
            $ind = 'IND10';

        }
        else if ( isset($_POST['submit11_x'], $_POST['submit11_y'] ) ) {
            $ind = 'IND03';

        }
        else if ( isset($_POST['submit12_x'], $_POST['submit12_y'] ) ) {
            $ind = 'IND02';

        }
        else if ( isset($_POST['submit13_x'], $_POST['submit13_y'] ) ) {
            $ind = 'IND19';

        }
        else if ( isset($_POST['submit14_x'], $_POST['submit14_y'] ) ) {
            $ind = 'IND13';

        }
        else if ( isset($_POST['submit15_x'], $_POST['submit15_y'] ) ) {
            $ind = 'IND15';

        }
        else if ( isset($_POST['submit16_x'], $_POST['submit16_y'] ) ) {
            $ind = 'IND12';

        }
        else if ( isset($_POST['submit17_x'], $_POST['submit17_y'] ) ) {
            $ind = 'IND07';

        }
        else if ( isset($_POST['submit18_x'], $_POST['submit18_y'] ) ) {
            $ind = 'IND09';

        }
        else if ( isset($_POST['submit19_x'], $_POST['submit19_y'] ) ) {
            $ind = 'IND06';

        }


        ///*DB connection*/
        //$dbhost = 'careertreetest.cytukzawpi8t.ap-southeast-2.rds.amazonaws.com';
        //$dbuser = 'careertreetest';
        //$dbpass = 'careerree2018';
        //$port = 5432;
        //$dbname ='ctdb_test';
        //$conn = "host=careertreetest.cytukzawpi8t.ap-southeast-2.rds.amazonaws.com port=5432 dbname=ctdb_test user=careertreetest password=careertree2018";
        //$dbconn4 = pg_connect($conn);
        //if(! $conn )
        //{
        //    echo "error";
        //}
        ///*DB connection end*/
        include 'db_connection.php';
        $dbconn4 = OpenCon();
        //updated query 29/04/2018
        $sql = "Select CASE WHEN OccABS.abs_name is not null THEN OccABS.abs_name ELSE Occ.occname END as ABSName
                From Occupation as Occ
	            left outer join Occupation_ABS as OccABS on Occ.occid = OccABS.occid
	            inner join Industry_Occupation as IndOcc on Occ.OccID = IndOcc.OccID
	            inner join Industry as Ind on IndOcc.IndID = Ind.IndID
                Where  Occ.occid in (select occid from Career_Changer_Matrix )
	            and Ind.indid = '$ind'
                Order by ABSName";
        $result = pg_query($dbconn4, $sql);

        if (!$result) {
            echo "An error occurred.\n";
            exit;
        }


        echo '<div class="selection">';
        echo '<form method="post" action="skill.php" >';
        echo '<div class="mid">';
        echo '<label for="pcategory">Occupation: </label>' ;
        //echo '<input type="text" id="pcategory" name="occ"autocomplete="off" list="mylist">';
        //echo '</div>';

        //echo '<datalist id="mylist">';
        //while ($res = pg_fetch_row($result)) {
        //    $result1 = $res[0];

        //    echo '<option value = "'. $result1 .'">'. $result1 .'</option>';
        //}
        //echo '</datalist>';
        echo '<select class="chosen-select" id="category" name="occ" style="height:auto;width:500px;">';
        echo '<option disabled selected value> -- select an option -- </option>';
        while ($res = pg_fetch_row($result)) {
            $result1 = $res[0];
            echo '<option value = "'. $result1 .'">'. $result1 .'</option>';
        }
        echo '</select>';

        echo '<div class="cbut">';
        echo '<input class="but" type="submit" name="submit" id = "submit" value="GO" onclick="return validate_submit()"/>';
        echo '</div>';
        echo '</form>';
        pg_close($dbconn4); ?>

    </div>
   
    
 
</body>
</html>