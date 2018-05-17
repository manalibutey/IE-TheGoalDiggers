<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <title>CareerTree</title>
    <link rel="icon" href="./images/tab.ico" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/stats.css">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    
    <script src="./vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="./vendor/chosen_v1.8.5/chosen.jquery.min.js"></script>
    <link href="./vendor/chosen_v1.8.5/chosen.css" rel="stylesheet" />
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
    <script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
       
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
window.onload =function(){
document.getElementById('London').style.display = "block";
document.getElementById("1").className += " active";
  document.getElementById("show_1").style.display = "block";
  document.getElementById("show_2").style.display = "none";
  document.getElementById("chart1").style.backgroundColor = "#111E62";
  document.getElementById("chart1").style.color = "#fff";
}
function switch_div(show) {  
if(show == 1){
  document.getElementById("show_"+show).style.display = "block";
  document.getElementById("show_"+((show==1)?2:1)).style.display = "none";
   document.getElementById("chart1").style.backgroundColor = "#111E62";
  document.getElementById("chart1").style.color = "#fff";
   document.getElementById("chart2").style.backgroundColor = "transparent";
  document.getElementById("chart2").style.color = "#111E62";
  }
  else{
   document.getElementById("show_"+show).style.display = "flex";
  document.getElementById("show_"+((show==1)?2:1)).style.display = "none";
   document.getElementById("chart2").style.backgroundColor = "#111E62";
  document.getElementById("chart2").style.color = "#fff";
   document.getElementById("chart1").style.backgroundColor = "transparent";
  document.getElementById("chart1").style.color = "#111E62";
}
} 

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
<symbol id="icon-point-down" viewBox="0 0 32 32">
<title>Decline</title>
<path d="M30 13v5c0 1.654-1.346 3-3 3-0.535 0-1.037-0.14-1.472-0.387-0.534 0.833-1.468 1.387-2.528 1.387-0.768 0-1.469-0.29-2-0.766-0.531 0.476-1.232 0.766-2 0.766-0.35 0-0.687-0.060-1-0.171v7.171c0 1.654-1.346 3-3 3s-3-1.346-3-3v-12.334l-5.501 2.932c-0.454 0.262-0.973 0.401-1.499 0.401-1.654 0-3-1.346-3-3 0-0.824 0.327-1.592 0.921-2.163 0.008-0.007 0.015-0.015 0.023-0.022l7.474-6.815h-1.419c-0.552 0-1-0.448-1-1v-6c0-0.552 0.448-1 1-1h20c0.552 0 1 0.448 1 1v6c0 0.552-0.448 1-1 1h-1.382l2.276 4.553c0.070 0.139 0.106 0.292 0.106 0.447zM28 5c0-0.552-0.448-1-1-1s-1 0.448-1 1 0.448 1 1 1 1-0.448 1-1zM28 13.236l-2.618-5.236h-11.995l-9.088 8.287c-0.193 0.19-0.299 0.443-0.299 0.713 0 0.551 0.449 1 1 1 0.171 0 0.332-0.041 0.479-0.122 0.017-0.010 0.033-0.020 0.051-0.029l7-3.732c0.31-0.165 0.684-0.156 0.985 0.025s0.485 0.506 0.485 0.857v14c0 0.551 0.449 1 1 1s1-0.449 1-1v-10c0-0.552 0.448-1 1-1s1 0.448 1 1c0 0.551 0.449 1 1 1s1-0.449 1-1c0-0.552 0.448-1 1-1s1 0.448 1 1c0 0.551 0.449 1 1 1s1-0.449 1-1v-1c0-0.552 0.448-1 1-1s1 0.448 1 1c0 0.551 0.449 1 1 1s1-0.449 1-1v-4.764z"></path>
</symbol>
</defs>
</svg>

<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-point-up" viewBox="0 0 32 32">
<title>Growth</title>
<path d="M30 19v-5c0-1.654-1.346-3-3-3-0.535 0-1.037 0.14-1.472 0.386-0.534-0.833-1.467-1.386-2.528-1.386-0.768 0-1.469 0.29-2 0.766-0.531-0.476-1.232-0.766-2-0.766-0.35 0-0.687 0.060-1 0.171v-7.171c0-1.654-1.346-3-3-3s-3 1.346-3 3v12.334l-5.501-2.932c-0.454-0.262-0.973-0.401-1.499-0.401-1.654 0-3 1.346-3 3 0 0.824 0.327 1.592 0.922 2.163 0.008 0.007 0.015 0.015 0.023 0.022l7.474 6.815h-1.419c-0.552 0-1 0.448-1 1v6c0 0.552 0.448 1 1 1h20c0.552 0 1-0.448 1-1v-6c0-0.552-0.448-1-1-1h-1.382l2.276-4.553c0.069-0.139 0.106-0.292 0.106-0.447zM28 27c0 0.552-0.448 1-1 1s-1-0.448-1-1 0.448-1 1-1 1 0.448 1 1zM28 18.764l-2.618 5.236h-11.995l-9.088-8.286c-0.193-0.19-0.299-0.443-0.299-0.714 0-0.551 0.449-1 1-1 0.171 0 0.332 0.041 0.479 0.122 0.017 0.010 0.033 0.020 0.051 0.029l7 3.732c0.31 0.165 0.684 0.156 0.985-0.025s0.485-0.506 0.485-0.857v-14c0-0.551 0.449-1 1-1s1 0.449 1 1v10c0 0.552 0.448 1 1 1s1-0.448 1-1c0-0.551 0.449-1 1-1s1 0.449 1 1c0 0.552 0.448 1 1 1s1-0.448 1-1c0-0.551 0.449-1 1-1s1 0.449 1 1v1c0 0.552 0.448 1 1 1s1-0.448 1-1c0-0.551 0.449-1 1-1s1 0.449 1 1v4.764z"></path>
</symbol>
</defs>
</svg>


<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-briefcase" viewBox="0 0 32 32">
<title>Work</title>
<path d="M30 8h-8v-2c0-1.1-0.9-2-2-2h-8c-1.1 0-2 0.9-2 2v2h-8c-1.1 0-2 0.9-2 2v18c0 1.1 0.9 2 2 2h28c1.1 0 2-0.9 2-2v-18c0-1.1-0.9-2-2-2zM12 6.004c0.001-0.001 0.002-0.003 0.004-0.004h7.993c0.001 0.001 0.003 0.002 0.004 0.004v1.996h-8v-1.996zM30 16h-4v3c0 0.55-0.45 1-1 1h-2c-0.55 0-1-0.45-1-1v-3h-12v3c0 0.55-0.45 1-1 1h-2c-0.55 0-1-0.45-1-1v-3h-4v-2h28v2z"></path>
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

<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-cogs" viewBox="0 0 32 32">
<title>Skills</title>
<path d="M11.366 22.564l1.291-1.807-1.414-1.414-1.807 1.291c-0.335-0.187-0.694-0.337-1.071-0.444l-0.365-2.19h-2l-0.365 2.19c-0.377 0.107-0.736 0.256-1.071 0.444l-1.807-1.291-1.414 1.414 1.291 1.807c-0.187 0.335-0.337 0.694-0.443 1.071l-2.19 0.365v2l2.19 0.365c0.107 0.377 0.256 0.736 0.444 1.071l-1.291 1.807 1.414 1.414 1.807-1.291c0.335 0.187 0.694 0.337 1.071 0.444l0.365 2.19h2l0.365-2.19c0.377-0.107 0.736-0.256 1.071-0.444l1.807 1.291 1.414-1.414-1.291-1.807c0.187-0.335 0.337-0.694 0.444-1.071l2.19-0.365v-2l-2.19-0.365c-0.107-0.377-0.256-0.736-0.444-1.071zM7 27c-1.105 0-2-0.895-2-2s0.895-2 2-2 2 0.895 2 2-0.895 2-2 2zM32 12v-2l-2.106-0.383c-0.039-0.251-0.088-0.499-0.148-0.743l1.799-1.159-0.765-1.848-2.092 0.452c-0.132-0.216-0.273-0.426-0.422-0.629l1.219-1.761-1.414-1.414-1.761 1.219c-0.203-0.149-0.413-0.29-0.629-0.422l0.452-2.092-1.848-0.765-1.159 1.799c-0.244-0.059-0.492-0.109-0.743-0.148l-0.383-2.106h-2l-0.383 2.106c-0.251 0.039-0.499 0.088-0.743 0.148l-1.159-1.799-1.848 0.765 0.452 2.092c-0.216 0.132-0.426 0.273-0.629 0.422l-1.761-1.219-1.414 1.414 1.219 1.761c-0.149 0.203-0.29 0.413-0.422 0.629l-2.092-0.452-0.765 1.848 1.799 1.159c-0.059 0.244-0.109 0.492-0.148 0.743l-2.106 0.383v2l2.106 0.383c0.039 0.251 0.088 0.499 0.148 0.743l-1.799 1.159 0.765 1.848 2.092-0.452c0.132 0.216 0.273 0.426 0.422 0.629l-1.219 1.761 1.414 1.414 1.761-1.219c0.203 0.149 0.413 0.29 0.629 0.422l-0.452 2.092 1.848 0.765 1.159-1.799c0.244 0.059 0.492 0.109 0.743 0.148l0.383 2.106h2l0.383-2.106c0.251-0.039 0.499-0.088 0.743-0.148l1.159 1.799 1.848-0.765-0.452-2.092c0.216-0.132 0.426-0.273 0.629-0.422l1.761 1.219 1.414-1.414-1.219-1.761c0.149-0.203 0.29-0.413 0.422-0.629l2.092 0.452 0.765-1.848-1.799-1.159c0.059-0.244 0.109-0.492 0.148-0.743l2.106-0.383zM21 15.35c-2.402 0-4.35-1.948-4.35-4.35s1.948-4.35 4.35-4.35 4.35 1.948 4.35 4.35c0 2.402-1.948 4.35-4.35 4.35z"></path>
</symbol>
</defs>
</svg>


<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-quill" viewBox="0 0 32 32">
<title>Study</title>
<path d="M0 32c4-12 14.469-32 32-32-8.219 6.594-12 22-18 22s-6 0-6 0l-6 10h-2z"></path>
</symbol>
</defs>
</svg>


<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-paste" viewBox="0 0 32 32">
<title>Tasks</title>
<path d="M22 4h-4v-2c0-1.1-0.9-2-2-2h-4c-1.1 0-2 0.9-2 2v2h-4v4h16v-4zM16 4h-4v-1.996c0.001-0.001 0.002-0.002 0.004-0.004h3.993c0.001 0.001 0.003 0.002 0.004 0.004v1.996zM26 10v-5c0-0.55-0.45-1-1-1h-2v2h1v4h-6l-6 6v8h-8v-18h1v-2h-2c-0.55 0-1 0.45-1 1v20c0 0.55 0.45 1 1 1h9v6h20v-22h-6zM18 12.828v3.172h-3.172l3.172-3.172zM30 30h-16v-12h6v-6h10v18z"></path>
</symbol>
</defs>
</svg>

<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-diamonds" viewBox="0 0 32 32">
<title>diamonds</title>
<path d="M16 0l-10 16 10 16 10-16z"></path>
</symbol>
</defs>
</svg>

        <?php

        $occID = $_POST['occid'];
        $tranID = $_POST['id'];
        $para = $_POST['para'];
        $currentState = $_POST['currentState'];
        $futureState = $_POST['futureState'];
        //-------Receive ABS Name from parameter ------------//updated 29/04/2018
        if($para){
            $addParaString = " and trim(OccABS.abs_name) ='".$para."'";
        }
        else{
            $addParaString = "";
        }
        //------------------------------------

        include 'db_connection.php';
        $dbconn4 = OpenCon();
        $sql = "select *
                From australia_state
                where statename = '$currentState'";
        $result = pg_query($dbconn4, $sql);
        while ($row = pg_fetch_row($result)) {
            $currentNo = $row[2];
        }
        if($futureState){
            $sql = "select *
                From australia_state
                where statename = '$futureState'";
            $result = pg_query($dbconn4, $sql);
            while ($row = pg_fetch_row($result)) {
                $futureNo = $row[2];
            }
        }
        //updated query 29/04/2018
        $sql = "select p.title as previousocc, CASE WHEN OccABS.abs_name is not null THEN OccABS.abs_name ELSE p.relatedtitle END  as relatedocc,
                CASE WHEN OccABS.abs_description is not null THEN OccABS.abs_description ELSE Occ.description END as description,
                p.matchingskill,p.matchingknowledge,p.lackingskill,p.lackingknowledge,p.percentage,trim(OccABS.abs_name),trim(OccABS.abs_original)
                        from percentage as p
		                inner join occupation as Occ on p.relatedoccid = Occ.occid
		                Left outer join Occupation_ABS as OccABS on Occ.occid = OccABS.occid
                        where
                        id = '$tranID'
                        and relatedoccid = '$occID'".$addParaString;
        $result = pg_query($dbconn4, $sql);
        $occDetail = pg_fetch_row($result);
        if (!$result) {
            echo "An error occurred.\n";
            exit;
        }
        if($occDetail[8] <> $occDetail[9])
        {
            //Set ABS Original Name as parameter for query career statistic
            $para = $occDetail[9];
        }
        $getLackingskill = $occDetail[5];
        $getLackingknowledge = $occDetail[6];
        $previousocc = $occDetail[0];
        $occname = $occDetail[1];
        //-------Find State with best job vacancy-----------
        $sql = "select year,act, nsw, nt, qld, sa, tas, vic, wa
                from abs_job_vacancy_state
                where occname = '$para'
                and year = (select max(year) as year
                from abs_job_vacancy_state) - 1
                order by month desc limit 1";
        $result = pg_query($dbconn4, $sql);
        while ($row = pg_fetch_row($result)) {
            $state[1] = $row[1];
            $state[2] = $row[2];
            $state[3] = $row[3];
            $state[4] = $row[4];
            $state[5] = $row[5];
            $state[6] = $row[6];
            $state[7] = $row[7];
            $state[8] = $row[8];
        }
        $maxs = array_keys($state, max($state));
        $futureNo = $maxs[0];
        if ($currentNo == $futureNo){
            $futureNo = null;
        }
        //--------------------------------------------------
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
 <!--<div class="icon-space"><a href="/shiny?id= --><?php //echo $randID; ?><!-- "><svg class="icon icon-tree"><use xlink:href="#icon-tree"></use></svg></a></div> -->
<div class="icon-space"><a href="/home.php"><svg class="icon icon-home3"><use xlink:href="#icon-home3"></use></svg><span class="name"></span></a></div> 
<div class="icon-space"><a href="javascript:window.history.back()"><svg class="icon icon-circle-left"><use xlink:href="#icon-circle-left"></use></svg></a></div>
</div>

 <div class="full">

        <div class="mid-section">
           <h1><div class="title-line1"><?php echo $occname; ?></div></h1>
        </div>
        <div class="sub-heading"><h4>View details of the recommended occupation below</h4></div>
           <!--     the job vacancy trends in your chosen state and the average salary offered within Australia for -->
     
               <section id="tabs">
<div class="tab">
  <button class="tablinks" id="1" onclick="openCity(event, 'London')"><svg class="icon icon-stats-bars"><use xlink:href="#icon-stats-bars"></use></svg><h3>&nbsp;Statistics</h3></button>
  <button class="tablinks" onclick="openCity(event, 'Paris')"><svg class="icon icon-stack"><use xlink:href="#icon-stack"></use></svg><h3>&nbsp;Upskill</h3></button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')"><svg class="icon icon-briefcase"><use xlink:href="#icon-briefcase"></use></svg><h3>&nbsp;Tasks</h3></button>
</div>

<div id="London" class="tabcontent">
<div class="chart-buttons">
<button class="chart1" id="chart1" onclick="switch_div(1);"><h4>  Job Vacancy Trend</h4>
</button>
<button class="chart2"  id="chart2" onclick="switch_div(2);"><h4>  Salary Comparision</h4>
</button>
</div>
    <?php //---------Assign Data to Google Chart
     //---------Extract Data for Job Vacancy Trend

     $sql = "select year, month, day,act, nsw, nt, qld, sa, tas, vic, wa
            from abs_job_vacancy_state
            where occname = '$para'
            and year > (select distinct year as year
											            from abs_job_vacancy_state
											            order by year desc
											            limit 1) - 5
            and year < (select max(year) as year
            from abs_job_vacancy_state)";

     $result = pg_query($dbconn4, $sql);
     while ($row = pg_fetch_array($result)) {
         $month = $row{'month'} - 1;

  //if($row{'current'}){
         //   $entryVacancy .= "[new Date(".$row{'year'}.",".$month.",".$row{'day'}."),".round($row{'vacancy'},0).",'".$row{'current'}."'],";
         //}
         //else{
         //   $entryVacancy .= "[new Date(".$row{'year'}.",".$month.",".$row{'day'}."),".round($row{'vacancy'},0).",null],";
         //}

         $entryVacancy1 .= "[new Date(".$row{'year'}.",".$month.",".$row{'day'}."),".$row{'act'}.",".$row{'nsw'}.",".$row{'nt'}.",".$row{'qld'}.",".$row{'sa'}.",".$row{'tas'}.",".$row{'vic'}.",".$row{'wa'}."],";

         //if($row{'current'}){
         //    $currentYear = $row{'year'};
         //    $currentVacancy = round($row{'vacancy'},0);
         //}
         //if($row{'future'}){
         //    $futureYear = $row{'year'};
         //    $futureVacancy = round($row{'vacancy'},0);
         //}
     }
     //if($entryVacancy)
     //{
     //    echo '<div id="curve_chart" style="width: 900px; height: 500px"></div>';
     //    echo '<div><h3>Current Job Vacancy ('.$currentYear.'): '.$currentVacancy.'</h3></div>';
     //    echo '<div><h3>Future Job Vacancy ('.$futureYear.'): '.$futureVacancy.'</h3></div>';
     //}
       if($entryVacancy1){
     echo '<div class="vac" id="show_1">';
     echo '<div id="colFilter_div"></div>';
     echo '<div id="chart_div" style="width: 900px; height: 300px"></div>';

     echo '</div>';
     }
     //-----------Extract Data for Average Salary
     echo '<div class="sal" id="show_2">';
     $sql = "select occname, ceil(cash_earning) as weeklysalary
                from abs_salary a, occupation_abs b
                where a.occname = b.abs_original
                and b.abs_name = '$previousocc'";
     $result = pg_query($dbconn4, $sql);
     while ($row = pg_fetch_array($result)) {
         $entrySalary .= "['".$row{'occname'}."',".$row{'weeklysalary'}.",'color: #111E6C',".$row{'weeklysalary'}."],";
         $prvSalary = $row{'weeklysalary'};
     }
     $sql = "select occname, ceil(cash_earning) as weeklysalary
                from abs_salary
                where occname = '$para'";

     $result = pg_query($dbconn4, $sql);
     while ($row = pg_fetch_array($result)) {
         $entrySalary .= "['".$row{'occname'}."',".$row{'weeklysalary'}.",'color: #00b300',".$row{'weeklysalary'}."],";
         $avgSalary = $row{'weeklysalary'};
     }
     $sql = "select occname, ceil(cash_earning) as weeklysalary
                from abs_salary
                where occname = 'All Occupations'";
     $result = pg_query($dbconn4, $sql);
     while ($row = pg_fetch_array($result)) {
         $entrySalary .= "['".$row{'occname'}."',".$row{'weeklysalary'}.",'color: #A22631',".$row{'weeklysalary'}."],";
     }
     if($entrySalary)
     {

         echo '<div id="column_chart" style="width:900px;  height: 400px"></div>';
         $profit = $avgSalary - $prvSalary;
         if($avgSalary > $prvSalary){
            echo '<div><h4>Average Weekly Salary Increase for You<br><br><svg class="icon icon-point-up"><use xlink:href="#icon-point-up"></use></svg> AU$'.$profit.'<br></h4></div>';
            }
         else{
         $profit = trim($profit, '-');
            echo '<div><h4>Average Weekly Salary Decrease for You<br><br><br><svg class="icon icon-point-down"><use xlink:href="#icon-point-down"></use></svg>AU$'.$profit.'</h4></div>';
            }

         echo '</div>';
     }
     //-----------Extract Data for Employment by Gender
     //$sql = "select sex, employment, CASE WHEN sex = 'Male' THEN 'M' ELSE '' END as gender
     //           from abs_employment_gender
     //           where occname = '$para'";

     //$result = pg_query($dbconn4, $sql);
     //while ($row = pg_fetch_array($result)) {
     //    $entryEmployedGender .= "['".$row{'sex'}."',".$row{'employment'}."],";
     //    if($row{'gender'}){
     //        $maleEmploy = $row{'employment'};
     //    }
     //    else{
     //        $femaleEmploy = $row{'employment'};
     //    }
     //}
     //if($entryEmployedGender)
     //{
     //    echo '<div id="donut_chart" style="width: 900px; height: 500px"></div>';
     //    echo '<div><h3>Male: '.$maleEmploy.'</h3></div>';
     //    echo '<div><h3>Female: '.$femaleEmploy.'</h3></div>';

     //}
     //-----------Extract Data for Employment by State
     //$sql = "select statecode,state, employment,
     //       CASE WHEN employment = (select max(employment) from abs_employment_state where occname = '$para') THEN 'Max' ELSE '' END as Max,
     //       CASE WHEN employment = (select min(employment) from abs_employment_state where occname = '$para') THEN 'Min' ELSE '' END as Min
     //           from abs_employment_state
     //           where occname = '$para'";

     //$result = pg_query($dbconn4, $sql);
     //while ($row = pg_fetch_array($result)) {
     //    $entryEmployedState_Geo .= "['".$row{'statecode'}."','".$row{'state'}."',".$row{'employment'}."],";
     //    $entryEmployedState_Chart .= "['".$row{'state'}."',".$row{'employment'}.",'color: #111E6C',".$row{'employment'}."],";
     //    if($row{'max'}){
     //        $maxStateName = $row{'state'};
     //        $maxStateEmploy = $row{'employment'};
     //    }
     //    if($row{'min'}){
     //        $minStateName = $row{'state'};
     //        $minStateEmploy = $row{'employment'};
     //    }
     //}
     //if($entryEmployedState_Geo)
     //{
     //    echo '<div id="regions_div" style="width: 900px; height: 500px"></div>';

     //    echo '<div id="column_chart1" style="width: 900px; height: 500px"></div>';
     //    echo '<div><h3>Highest Employment: '.$maxStateName.'('.$maxStateEmploy.')</h3></div>';
     //    echo '<div><h3>Lowest Employment: '.$minStateName.'('.$minStateEmploy.')</h3></div>';
     //}
     //------------------------------------------------------------------

     //pg_close($dbconn4);
    ?>
</div>

<div id="Paris" class="tabcontent">
      <div class=boxes>
         <div class="lack-box">
             <div class="box-heading">
                 <h3><svg class="icon icon-cogs"><use xlink:href="#icon-cogs"></use></svg>&nbsp;Skills to Acquire</h3>
             </div>

             <div class="lack-box-backgnd" id="lack-select-box">
                 <?php
                 if ($getLackingskill){
                     $lackingSkillsArray = explode(',', $getLackingskill);
                     for($x = 0; $x < count($lackingSkillsArray); $x++) {
                         $lackingskill .= '\''.trim($lackingSkillsArray[$x]).'\',';
                     }
                     $lackingskill = rtrim($lackingskill,",");
                     $sql = "select a.skname as skillname, a.description as description, rank
                            from skill a, skill_occupation b
                            where b.skid = a.skid
                            and b.occid = '$occID'
                            and a.skname in ($lackingskill)
                            order by rank desc";
                     $result = pg_query($dbconn4, $sql);
                     while ($lskill = pg_fetch_row($result)) {
                         echo '<label for="'.$lskill[1].'" title="'.$lskill[1].'"><div  class="value" id="'.$lskill[0].'" value="'.$lskill[0].'"><p>'.$lskill[0].' </p></div></label>';
                         //  echo '<div  class="value" id="'.$lskill[1].'" value="'.$lskill[1].'"><p>'.$lskill[1].' </p></div>';
                         // echo '<li><h5>'.$lskill[0].' (skill)</h5>'.$lskill[1].'</li><br/>';
                     }
                 }
                 if ($getLackingknowledge){
                     $lackingKnowledgeArray = explode(',', $getLackingknowledge);
                     for($x = 0; $x < count($lackingKnowledgeArray); $x++) {
                         $lackingKnowledge .= '\''.trim($lackingKnowledgeArray[$x]).'\',';
                     }
                     $lackingKnowledge = rtrim($lackingKnowledge,",");
                     $sql = "select a.knwname as knowledgename, a.description as description, rank
                    from knowledge a, knowledge_occupation b
                    where b.knwid = a.knwid
                    and b.occid = '$occID'
                    and a.knwname in ($lackingKnowledge)
                    order by rank desc";
                     $result = pg_query($dbconn4, $sql);
                     while ($lknowledge = pg_fetch_row($result)) {
                         echo '<label for="'.$lknowledge[1].'" title="'.$lknowledge[1].'"><div  class="value" id="'.$lknowledge[0].'" value="'.$lknowledge[0].'"><p>'.$lknowledge[0].' </p></div></label>';

                     }
                 }

                 ?>
             </div>
         </div>

         <div class="course-box">
             <div class="box-heading">
                 <h3><svg class="icon icon-quill"><use xlink:href="#icon-quill"></use></svg>&nbsp;Recommended Courses</h3>
             </div>

             <div class="course-box-backgnd" id="course-box">
                 <?php
                 if ($getLackingskill||$getLackingknowledge){
                     if ($getLackingskill){
                         $lackingSkillsArray = explode(',', $getLackingskill);
                         for($x = 0; $x < count($lackingSkillsArray); $x++) {
                             $lackingskill .= '\''.trim($lackingSkillsArray[$x]).'\',';
                         }
                         $lackingskill = rtrim($lackingskill,",");
                     }
                     if ($getLackingknowledge){
                         $lackingKnowledgeArray = explode(',', $getLackingknowledge);
                         for($x = 0; $x < count($lackingKnowledgeArray); $x++) {
                             $lackingKnowledge .= '\''.trim($lackingKnowledgeArray[$x]).'\',';
                         }
                         $lackingKnowledge = rtrim($lackingKnowledge,",");
                     }
                     if(!$getLackingskill){
                         $lackingskill = '\'\'';
                     }
                     if(!$getLackingknowledge){
                         $lackingKnowledge = '\'\'';
                     }
                     //include 'db_connection.php';
                     // $dbconn4 = OpenCon();
                     $sql = "select a.coursename, a.coursetype,a.description, a.provider,a.duration,a.fee,a.link,c.skname as related
                    from course as a, course_related as b , skill as c
                    where a.courseid = b.courseid and b.relatedid = c.skid
                    and c.skname in ($lackingskill)
                    union
                    select a.coursename, a.coursetype,a.description, a.provider,a.duration,a.fee,a.link,c.knwname as related
                    from course as a, course_related as b , knowledge as c
                    where a.courseid = b.courseid and b.relatedid = c.knwid
                    and c.knwname in ($lackingKnowledge)";
                     $result = pg_query($dbconn4, $sql);

                     if(!$result){
                         echo "No data available";
                     }
                     while ($course = pg_fetch_row($result)) {
                         echo '<div  class="value" id="'.$lknowledge[0].'" value="'.$lknowledge[0].'"><p>'.$lknowledge[0].' </p></div>';

                         echo '<div  class="value" ><a href="'.$course[6].'" target="_blank">'.$course[0].'</a> ('.$course[1].') - By '.$course[3].'</div>';
                     }

                 }
        
                 ?>
             </div>
         </div>
     </div>
</div>


<div id="Tokyo" class="tabcontent">
    <div class="box">
    <div class="task-box">
         <div class="task-box-heading">
             <h3><svg class="icon icon-paste"><use xlink:href="#icon-paste"></use></svg>&nbsp;Tasks Performed</h3>
         </div>

         <div class="task-box-backgnd" id="task-box">
             <?php
             $sql = "select taskname from task_occupation
                where occid = '$occID'
                order by rank desc
                limit 10";
               
             $result = pg_query($dbconn4, $sql);
             while ($task = pg_fetch_row($result)) {
                 $resultsk =$task[0];
            
                 echo '<div  class="value" id="'.$resultsk.'" value="'.$resultsk.'"><p><svg class="icon icon-diamonds"><use xlink:href="#icon-diamonds"></use></svg>&nbsp;'.$resultsk.' </p></div>';
                
                 
        }
             pg_close($dbconn4);
             ?>
         </div>
     </div>
     </div>
</div>
</section>
</div>




<div class="foot">
<footer class="footer"><p>
  &#169; Copyright 2018 Career Tree </p>
</footer>

        <script type="text/javascript">
         google.charts.load('current', { 'packages': ['corechart'] });
         google.charts.load('current', { 'packages': ['geochart'],'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY' });

         //google.charts.setOnLoadCallback(drawLineChart);
         google.charts.setOnLoadCallback(drawColumnChart);
         //google.charts.setOnLoadCallback(drawDonutChart);
         //google.charts.setOnLoadCallback(drawRegionsMap);
         //google.charts.setOnLoadCallback(drawColumnChart1);
         google.charts.setOnLoadCallback(drawChart);
         function drawLineChart() {
             var data = google.visualization.arrayToDataTable([
                 ['Time', 'Vacancy', { role: 'annotation' }],
                 <?php echo $entryVacancy ?>
             ]);

             var options = {
                 title: 'Job Vacancy Trend for  <?php echo $para ?>',
                 curveType: 'function',
                 legend: { position: 'none' },
                 hAxis: {title: 'Time'},
                 vAxis: {title: 'Job Vacancy'},
             };
             var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
             chart.draw(data, options);
         }

          function drawColumnChart() {
             var data = google.visualization.arrayToDataTable([
                 ['Occupation', 'Average Weekly Salary', { role: 'style' },{ role: 'annotation' }], 
                <?php echo $entrySalary ?>
             ]);

             var options = {
                 title: 'Average Weekly Salary for  <?php echo $para ?> \n Compared to Your Previous and All Australian Occupations',
                 titleTextStyle: { fontSize: 12, bold: true},
                 width:900,
                 height:400,
                 legend: { position: 'none' },
                 vAxis: {title: 'Weekly Salary ($)'},
                 hAxis: {textStyle: {fontSize: 11}},
                  bar: {groupWidth: "45%"},

             };
             var chart = new google.visualization.ColumnChart(document.getElementById('column_chart'));
             chart.draw(data, options);
         }

         function drawDonutChart() {
             var data = google.visualization.arrayToDataTable([
                 ['Sex', 'Employment'],
             <?php echo $entryEmployedGender ?>
             ]);

             var options = {
                 title: 'Employment of <?php echo $para ?> by Gender',
                 pieHole: 0.6,
                 legend: { position: 'right' },

             };
             var chart = new google.visualization.PieChart(document.getElementById('donut_chart'));
             chart.draw(data, options);
         }

        function drawRegionsMap() {
             var data = google.visualization.arrayToDataTable([
                 ['StateCode','State Name', 'Employment'],
             <?php echo $entryEmployedState_Geo ?>
             ]);

             var options = {
                 title: 'Employment of <?php echo $para ?> by State',
                 region: 'AU',
                 displayMode: 'regions',
                 resolution: 'provinces',

             };
             var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));
             chart.draw(data, options);
         }

         function drawColumnChart1() {
             var data = google.visualization.arrayToDataTable([
                 ['State', 'Employment', { role: 'style' },{ role: 'annotation' }],
                 <?php echo $entryEmployedState_Chart ?>
             ]);

             var options = {
                 title: 'Employment of <?php echo $para ?> by State',
                 legend: { position: 'none' },
                 vAxis: {title: 'Employment'},
                 hAxis: {textStyle: {fontSize: 12}},
                  bar: {groupWidth: "45%"},

             };
             var chart = new google.visualization.ColumnChart(document.getElementById('column_chart1'));
             chart.draw(data, options);
         }
  function drawChart () {
   var data = google.visualization.arrayToDataTable([
                 ['Time', 'Australian Capital Territory', 'New South Wales','Northern Territory','Queensland','South Australia','Tasmania','Victoria','Western Australia'],
                 <?php echo $entryVacancy1 ?>
             ]);

    var columnsTable = new google.visualization.DataTable();
    columnsTable.addColumn('number', 'colIndex');
    columnsTable.addColumn('string', 'colLabel');
    var initState= {selectedValues: []};
    // put the columns into this data table (skip column 0)
    for (var i = 1; i < data.getNumberOfColumns(); i++) {
        columnsTable.addRow([i, data.getColumnLabel(i)]);
        // you can comment out this next line if you want to have a default selection other than the whole list
        //initState.selectedValues.push(data.getColumnLabel(i));
    }
    // you can set individual columns to be the default columns (instead of populating via the loop above) like this:
     initState.selectedValues.push(data.getColumnLabel(<?php echo $currentNo ?>));
     var future = '';
     future = '<?php echo $futureNo ?>';
     if(future != ''){
     initState.selectedValues.push(data.getColumnLabel(Number(future)));
     }
    
    var chart = new google.visualization.ChartWrapper({
        chartType: 'LineChart',
        containerId: 'chart_div',
        dataTable: data,
        options: {
            title: 'Job Vacancy Trend for  <?php echo $para ?>',
            curveType: 'function',
            hAxis: {title: 'Time'},
            vAxis: {title: 'Job Vacancy'},
            pointSize: 5
        }
    });
    
    var columnFilter = new google.visualization.ControlWrapper({
        controlType: 'CategoryFilter',
        containerId: 'colFilter_div',
        dataTable: columnsTable,
        options: {
            filterColumnLabel: 'colLabel',
            ui: {
                label: '',
                allowTyping: false,
                allowMultiple: true,
                allowNone: false,
                selectedValuesLayout: 'aside'
            }
        },
        state: initState
    });
    
    function setChartView () {
        var state = columnFilter.getState();
        var row;
        var view = {
            columns: [0]
        };
        for (var i = 0; i < state.selectedValues.length; i++) {
            row = columnsTable.getFilteredRows([{column: 1, value: state.selectedValues[i]}])[0];
            view.columns.push(columnsTable.getValue(row, 0));
        }
        // sort the indices into their original order
        view.columns.sort(function (a, b) {
            return (a - b);
        });
        chart.setView(view);
        chart.draw();
    }
    google.visualization.events.addListener(columnFilter, 'statechange', setChartView);
    
    setChartView();
    columnFilter.draw();
}
        </script>
</body>
</html>