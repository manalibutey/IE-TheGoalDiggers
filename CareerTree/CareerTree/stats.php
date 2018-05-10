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
        <?php

        $occID = $_POST['occid'];
        $tranID = $_POST['id'];
        $para = $_POST['para'];
        $previousocc = $_POST['previousocc'];
        $currentState = $_POST['currentState'];
        $futureState = $_POST['futureState'];
        $occname = $_POST['occname'];
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
           <h1><div class="title-line1">Career Statistics</div></h1>
        </div>
        <div class="sub-heading"><h4>View the job vacancy trends in your chosen state and the average salary offered within Australia for <?php echo $occname; ?></h4></div>
               

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

</div>

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