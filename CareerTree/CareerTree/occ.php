<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <title>CareerTree</title>
    <link rel="icon" href="./images/tab.ico" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <link rel="stylesheet" href="./css/occ.css">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script src="./js/jquery.min.js"></script>
     <script src="./vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="./vendor/chosen_v1.8.5/chosen.jquery.min.js"></script>
    <link href="./vendor/chosen_v1.8.5/chosen.css" rel="stylesheet" />
     <script type="text/javascript">
        
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
<<<<<<< HEAD

</head>
=======
>>>>>>> New_Design

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

        <div class="navbar  navbar-dark navbar-expand-md fixed-top">
<<<<<<< HEAD

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
=======

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


>>>>>>> New_Design

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

         include 'db_connection.php';
        $dbconn4 = OpenCon();

        // industry name

        $sql = "select indname
                from industry
                where indid = '$ind'";
        $result = pg_query($dbconn4, $sql);
        while ($res = pg_fetch_row($result)) {
            $indName = $res[0];
        }

        ?>

        <div class="full">

        <div class="mid-section">
           <h1><div class="title-line1">Your Previous Occupation</div></h1>
        </div>
        <div class="sub-heading"><h4>Let us know your previous occupation in the <?php echo $indName; ?> industry</h4></div>



            <?php


        //updated query 29/04/2018
        $sql = "Select CASE WHEN OccABS.abs_name is not null THEN OccABS.abs_name ELSE Occ.occname END as ABSName
                From Occupation as Occ
	            inner join Occupation_ABS as OccABS on Occ.occid = OccABS.occid
	            inner join Industry_Occupation as IndOcc on Occ.OccID = IndOcc.OccID
	            inner join Industry as Ind on IndOcc.IndID = Ind.IndID
                Where  Occ.occid in (select distinct a.occid from Career_Changer_Matrix a inner join occupation_abs b on a.relatedoccid = b.occid )
	            and Ind.indid = '$ind'
                Order by ABSName";
        $result = pg_query($dbconn4, $sql);

        if (!$result) {
            echo "An error occurred.\n";
            exit;
        }


      echo '<div class="selection">';
        echo '<form method="post" action="skillset.php" >';
       echo '<div class="mid">';
      //  echo '<label for="pcategory">Occupation: </label>' ;
        echo '<select class="chosen-select" id="category" name="occ" style="height:auto;width:500px;">';
        echo '<option disabled selected value>Enter your previous occupation</option>';
        while ($res = pg_fetch_row($result)) {
            $result1 = $res[0];
            echo '<option value = "'. $result1 .'">'. $result1 .'</option>';
        }
        echo '</select>';
        echo'</div>';

        echo '<div class="btn">';
        echo '<input class="but" type="submit" name="submit" value="Next" onclick="return validate_submit ()" />';
        echo '</div>';

       // echo '<div class="cbut">';
       // echo '<input class="but" type="submit" name="submit" id = "submit" value="GO" onclick="return validate_submit()"/>';
      //  echo '</div>';
        echo '</form>';
        echo '</div>';
        pg_close($dbconn4); ?>

    </div>
<<<<<<< HEAD
   
=======

   <div class="foot">
<footer class="footer"><p>
  &#169; Copyright 2018 Career Tree </p>
</footer>
</div>
>>>>>>> New_Design
    
 
</body>
</html>