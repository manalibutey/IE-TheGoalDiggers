<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <title>CareerTree</title>
    <link rel="icon" href="./images/tab.ico" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/skill.css">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script src="./js/jquery.min.js"></script>
    
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
    <script>
AOS.init({
  duration: 1100,
})
</script>
 <script>
 function replicate(element) {
    element = $(element).clone(); //copy
    //element = $(element); //if move
    element.appendTo($('#creation'));
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
						<a class="nav-item active" href="#" style="margin-top: 7px;">Home</a>
					</li>
					<li>
						<a class="nav-item" href="/aboutus.php" style="margin-top: 7px;">About Us</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

<form method="post" action="output.php"    >
<div class="full">
  <!--  <div class="container">-->
        <!-- Page Heading/Breadcrumbs -->
        <div class="mid-section">
           
				<h1><div class="title-line1" >Your Skills and Knowledge</div></h1>
                
			</div>
            <div class="select-box">
            <div class="select-box-backgnd">
             <?php
 if ( isset($_POST['submit'] ) ) {
    $occp = $_POST['occ'];
    
        }
         include 'db_connection.php';
    $dbconn4 = OpenCon();
    ////-------------------------------------------------
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
              while ($res = pg_fetch_row($resultSkill)) {
                 $resultsk = $res[1];
             echo '<div  class="value" onclick="replicate(this);"><p>'.$resultsk.' </p></div>';
             }
             ?>
            
            
</div>
</div>
      
<div class="skill-box">
            <div class="skill-box-backgnd">
            <div  class="value" id="creation"><p></p></div>
            
            
</div>
</div>
    </div>

   
</form>

</body>
</html>

