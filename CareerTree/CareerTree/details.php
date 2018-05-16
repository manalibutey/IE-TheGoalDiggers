<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <title>CareerTree</title>
    <link rel="icon" href="./images/tab.ico" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/details.css">
    <script src="./js/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>smoothscroll</script>
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

     <form method="post" action="skill.php" >

     <div class="full">

         <?php
        $queries = array();
        parse_str($_SERVER['QUERY_STRING'], $queries);
        $tranID =  $queries['id'];
        $occID = $queries['occid'];
        //-------Receive ABS Name from parameter ------------//updated 29/04/2018
        $para = $queries['para'];
        if($para){
        $addParaString = " and trim(OccABS.abs_name) ='".$para."'";
        }
        else{
        $addParaString = "";
        }
        //--------Receive parameter from form posting----------------------
        //$occID = $_POST['occid'];
        //$tranID = $_POST['id'];
        //$para = $_POST['para'];
        //$previousocc = $_POST['previousocc'];
        //$currentState = $_POST['currentState'];
        $currentState = 'Victoria';
        //$futureState = $_POST['futureState'];
        $futureState = 'Tasmania';
        //$occname = $_POST['occname'];
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
        //------------------------------------
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
         ?>

        <div class="mid-section">
           <h1><div class="title-line1" ><?php echo $occDetail[1]; ?></div></h1>
        </div>
        <div class="sub-heading"><h4>Learn about the tasks carried out, your lacking skills,</h4><h4>and online course recommendations to upskill</h4></div>
    
         <div class="boxes">
          <div class="task-box-heading"><h4>Task Statement</h4></div>
     
            <div class="task-box-backgnd" id="task-box">
            <?php
             $sql = "select taskname from task_occupation
                where occid = '$occID'
                order by rank desc
                limit 10";
        $result = pg_query($dbconn4, $sql);
        while ($task = pg_fetch_row($result)) {
            $resultsk =$task[0];
             echo '<div  class="value" id="'.$resultsk.'" value="'.$resultsk.'"><p>'.$resultsk.' </p></div>';
        }
            ?>
            </div>
         </div>

          <div class="boxes-2">
         
        <div class="lack-box">
        <div class="box-heading"><h4>Lacking Skills</h4></div>
      
            <div class="lack-box-backgnd" id="lack-select-box">
            <?php
            if ($occDetail[5]){
            $lackingSkillsArray = explode(',', $occDetail[5]);
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
            echo '<div  class="value" id="'.$lskill[0].'" value="'.$lskill[0].'"><p>'.$lskill[0].' </p></div>';
                // echo '<li><h5>'.$lskill[0].' (skill)</h5>'.$lskill[1].'</li><br/>';
            }
        }
        if ($occDetail[6]){
            $lackingKnowledgeArray = explode(',', $occDetail[6]);
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
            echo '<div  class="value" id="'.$lknowledge[0].'" value="'.$lknowledge[0].'"><p>'.$lknowledge[0].' </p></div>';
               // echo '<li><h5>'.$lknowledge[0].' (knowledge)</h5>'.$lknowledge[1].'</li><br/>';
            }
        }
?>
            </div>
            </div>

            <div class="course-box">
<div class="box-heading"><h4>Recommended Courses</h4></div>

            <div class="course-box-backgnd" id="course-box">
            <?php  if ($occDetail[5]||$occDetail[6]){
            if(!$occDetail[5]){
                $lackingskill = '\'\'';
            }
            if(!$occDetail[6]){
                $lackingKnowledge = '\'\'';
            }
          
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
        //pg_close($dbconn4);
            ?>
            </div>
            </div>

            </div>


    </div>

         <?php //---------Assign Data to Google Chart
         //---------Extract Data for Job Vacancy Trend

         $sql = "select year, month, day,act, nsw, nt, qld, sa, tas, vic, wa
            from abs_job_vacancy_state
            where occname = '$para'
            and year > (select distinct year as year
											            from abs_job_vacancy_state
											            order by year desc
											            limit 1) - 5";

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
             echo '<div class="vac">';
             echo '<div id="colFilter_div"></div>';
             echo '<div id="chart_div" style="width: 900px; height: 300px"></div>';

             echo '</div>';
         }
         //-----------Extract Data for Average Salary
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
             echo '<div class="sal">';
             echo '<div id="column_chart" style="width: 900px;  height: 400px"></div>';
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

         pg_close($dbconn4);
         ?>
   </form>
      
    <div class="foot">
<footer class="footer"><p>
  &#169; Copyright 2018 Career Tree </p>
</footer>
</div>
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
                 title: 'Average Weekly Salary for  <?php echo $para ?> Compared to Your Previous and All Australian Occupations',

                 legend: { position: 'none' },
                 vAxis: {title: 'Weekly Salary ($)'},
                 hAxis: {textStyle: {fontSize: 12}},
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