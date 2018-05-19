<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <title>CareerTree</title>
    <link rel="icon" href="./images/tab.ico" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/home.css">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
  <script src="./vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="./vendor/chosen_v1.8.5/chosen.jquery.min.js"></script>
    <link href="./vendor/chosen_v1.8.5/chosen.css" rel="stylesheet" />    <script>
    $(document).ready(function () {
            $('.chosen-select').chosen();
        });

   //       $(function() {
  //  $(window).scroll(function() {
  //          $(".sidebar").show();
      
 //   });
 //   });


    function validate_submit() {
            var result = false;
            if (document.getElementById('category').value) {
                    result = true;
            }
            if (!result) {
                alert("Please select your previous occupation from the list");
            }
            return result;
        }
    </script>
    </head>
    <body>

    <svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-search" viewBox="0 0 32 32">
<title>search</title>
<path d="M31.008 27.231l-7.58-6.447c-0.784-0.705-1.622-1.029-2.299-0.998 1.789-2.096 2.87-4.815 2.87-7.787 0-6.627-5.373-12-12-12s-12 5.373-12 12 5.373 12 12 12c2.972 0 5.691-1.081 7.787-2.87-0.031 0.677 0.293 1.515 0.998 2.299l6.447 7.58c1.104 1.226 2.907 1.33 4.007 0.23s0.997-2.903-0.23-4.007zM12 20c-4.418 0-8-3.582-8-8s3.582-8 8-8 8 3.582 8 8-3.582 8-8 8z"></path>
</symbol>
</defs>
</svg>

<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-mail" viewBox="0 0 32 32">
<title>Gmail</title>
<path d="M26.666 0h-21.332c-2.934 0-5.334 2.4-5.334 5.333v21.333c0 2.934 2.4 5.334 5.334 5.334h21.332c2.936 0 5.334-2.4 5.334-5.334v-21.333c0-2.934-2.398-5.333-5.334-5.333zM8 8h16c0.286 0 0.563 0.061 0.817 0.177l-8.817 10.286-8.817-10.287c0.254-0.116 0.531-0.177 0.817-0.177zM6 22v-12c0-0.042 0.002-0.084 0.004-0.125l5.864 6.842-5.8 5.8c-0.045-0.167-0.069-0.34-0.069-0.517zM24 24h-16c-0.177 0-0.35-0.024-0.517-0.069l5.691-5.691 2.826 3.297 2.826-3.297 5.691 5.691c-0.167 0.045-0.34 0.069-0.517 0.069zM26 22c0 0.177-0.024 0.35-0.069 0.517l-5.8-5.8 5.864-6.842c0.003 0.041 0.004 0.083 0.004 0.125v12z"></path>
</symbol>
</defs>
</svg>

<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-tree" viewBox="0 0 32 32">
<title>Options</title>
<path d="M30.5 24h-0.5v-6.5c0-1.93-1.57-3.5-3.5-3.5h-8.5v-4h0.5c0.825 0 1.5-0.675 1.5-1.5v-5c0-0.825-0.675-1.5-1.5-1.5h-5c-0.825 0-1.5 0.675-1.5 1.5v5c0 0.825 0.675 1.5 1.5 1.5h0.5v4h-8.5c-1.93 0-3.5 1.57-3.5 3.5v6.5h-0.5c-0.825 0-1.5 0.675-1.5 1.5v5c0 0.825 0.675 1.5 1.5 1.5h5c0.825 0 1.5-0.675 1.5-1.5v-5c0-0.825-0.675-1.5-1.5-1.5h-0.5v-6h8v6h-0.5c-0.825 0-1.5 0.675-1.5 1.5v5c0 0.825 0.675 1.5 1.5 1.5h5c0.825 0 1.5-0.675 1.5-1.5v-5c0-0.825-0.675-1.5-1.5-1.5h-0.5v-6h8v6h-0.5c-0.825 0-1.5 0.675-1.5 1.5v5c0 0.825 0.675 1.5 1.5 1.5h5c0.825 0 1.5-0.675 1.5-1.5v-5c0-0.825-0.675-1.5-1.5-1.5zM6 30h-4v-4h4v4zM18 30h-4v-4h4v4zM14 8v-4h4v4h-4zM30 30h-4v-4h4v4z"></path>
</symbol>
</defs>
</svg>

<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-linkedin" viewBox="0 0 32 32">
<title>LinkedIn</title>
<path d="M29 0h-26c-1.65 0-3 1.35-3 3v26c0 1.65 1.35 3 3 3h26c1.65 0 3-1.35 3-3v-26c0-1.65-1.35-3-3-3zM12 26h-4v-14h4v14zM10 10c-1.106 0-2-0.894-2-2s0.894-2 2-2c1.106 0 2 0.894 2 2s-0.894 2-2 2zM26 26h-4v-8c0-1.106-0.894-2-2-2s-2 0.894-2 2v8h-4v-14h4v2.481c0.825-1.131 2.087-2.481 3.5-2.481 2.488 0 4.5 2.238 4.5 5v9z"></path>
</symbol>
</defs>
</svg>


<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-stack" viewBox="0 0 32 32">
<title>stack</title>
<path d="M32 10l-16-8-16 8 16 8 16-8zM16 4.655l10.689 5.345-10.689 5.345-10.689-5.345 10.689-5.345zM28.795 14.398l3.205 1.602-16 8-16-8 3.205-1.602 12.795 6.398zM28.795 20.398l3.205 1.602-16 8-16-8 3.205-1.602 12.795 6.398z"></path>
</symbol>
</defs>
</svg>

<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-stats-bars" viewBox="0 0 32 32">
<title>Statistics</title>
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
						<a class="nav-item active" href="#" style="margin-top: 7px;">Home</a>
					</li>
					<li>
						<a class="nav-item" href="/about.php" style="margin-top: 7px;">About Us</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
    <div class="sidebar" style="display:none;">
        <div class="icon-space"><a href="mailto:careertree.thegoaldiggers@gmail.com"><svg class="icon icon-mail"><use xlink:href="#icon-mail"></use></svg><span class="name"></span></a></div> 
        <div class="icon-space"><a href="https://www.linkedin.com/company/careertree-goaldiggers/"><svg class="icon icon-linkedin"><use xlink:href="#icon-linkedin"></use></svg></use></svg></a></div>

    </div>

    <section class="section">
    <section class="section1"> 
	<div class="full">
		<div class="back">
        <img class="back-image" src="./images/b.jpg" />
        </div>
		<div class="layer">	
             <div class="head" >
                    <div class="title-line" ><b><h1>Career TreeWay</h1></b> </div>

              </div>
<h5>We empower the unemployed</h5>

<div class = "part">

             <div class="subhead1" >


<div class="left2"><h4><svg class="icon icon-tree"><use xlink:href="#icon-tree"></use></svg>&nbsp;Career Options</h4></div>
<div class="left1"><h4><svg class="icon icon-stats-bars"><use xlink:href="#icon-stats-bars"></use></svg>&nbsp;Career Statistics</h4></div>
<div class="left"><h4><svg class="icon icon-stack"><use xlink:href="#icon-stack"></use></svg>&nbsp;Enhance Skill Set</h4></div>
</div>
<div class="search"><div class="right">
<label for="category"></label>
<form method="post" action="skillset.php">
    <?php
    include 'db_connection.php';
    //$dbconn4 = OpenCon();
    //$sql = "Select Occname
    //From Occupation as Occ, Industry as Ind, Industry_Occupation as IndOcc
    //Where IndOcc.IndID = Ind.IndID and Occ.OccID = IndOcc.OccID
    //and Occ.occid in (select occid from Career_Changer_Matrix )
    //Order by Occ.OccName";
    //$result = pg_query($dbconn4, $sql);
    //if (!$result) {
    //echo "An error occurred.\n";
    //exit;
    //}
    //echo '<datalist id="mylist">';
    //while ($res = pg_fetch_row($result)) {
    //$result1 = $res[0];
    //echo '<option value = "'. $result1 .'">'. $result1 .'</option>';
    //}
    //echo '</datalist>';
    //pg_close($dbconn4);

    ///////////////////////////////////////////////////////////////////////////////////
    $dbconn4 = OpenCon();
    //updated query 10/05/2018
    $sql = "Select CASE WHEN OccABS.abs_name is not null THEN OccABS.abs_name ELSE Occ.occname END as ABSName, Occ.occname
    From Occupation as Occ
	inner join Occupation_ABS as OccABS on Occ.occid = OccABS.occid
    Where  Occ.occid in (select distinct a.occid from Career_Changer_Matrix a inner join occupation_abs b on a.relatedoccid = b.occid )
    Order by ABSName";
    $result = pg_query($dbconn4, $sql);
        echo '<div class="searchicon"><svg class="icon icon-search"><use xlink:href="#icon-search"></use></svg>';

    echo '<select class="chosen-select" id="category" name="occ" style="width: 450px;height:140px;padding-right: 20px;">';
    echo '<option disabled selected value>Enter your previous occupation name</option>';
        while ($res = pg_fetch_row($result)) {
            $result1 = $res[0];
            echo '<option value = "'. $result1 .'">'. $result1 .'</option>';
        }
        echo '</select>';
        echo '</div>';
    pg_close($dbconn4);
    ?>
    <button type="submit" class="button button-rounded-small" name="submit" id="searchsubmit" onclick="return validate_submit()">
      Search
    </button>
   
</form>
</div>
 <div class="eg">Eg: Mining Engineers, Baristas</div>
</div>

</div>

</div>
</div>
</section></section>
    </body>
    </html>