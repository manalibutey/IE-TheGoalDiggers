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
 function replicate(element) {
   // element = $(element).clone(); //copy
    element = $(element); //if move
    //alert(element);
    element.appendTo($('#skill-box'));
}


</script>
 <script>
 function cancel(element) {
   // element = $(element).clone(); //copy
    element = $(element); //if move
    alert(element);
    element.appendTo($('#select-box'));
}


</script>
</head>

<body>

<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-close" viewBox="0 0 24 24">
<title>close</title>
<path d="M18.984 6.422l-5.578 5.578 5.578 5.578-1.406 1.406-5.578-5.578-5.578 5.578-1.406-1.406 5.578-5.578-5.578-5.578 1.406-1.406 5.578 5.578 5.578-5.578z"></path>
</symbol>
<symbol id="icon-cross" viewBox="0 0 16 16">
<title>cross</title>
<path d="M15.854 12.854c-0-0-0-0-0-0l-4.854-4.854 4.854-4.854c0-0 0-0 0-0 0.052-0.052 0.090-0.113 0.114-0.178 0.066-0.178 0.028-0.386-0.114-0.529l-2.293-2.293c-0.143-0.143-0.351-0.181-0.529-0.114-0.065 0.024-0.126 0.062-0.178 0.114 0 0-0 0-0 0l-4.854 4.854-4.854-4.854c-0-0-0-0-0-0-0.052-0.052-0.113-0.090-0.178-0.114-0.178-0.066-0.386-0.029-0.529 0.114l-2.293 2.293c-0.143 0.143-0.181 0.351-0.114 0.529 0.024 0.065 0.062 0.126 0.114 0.178 0 0 0 0 0 0l4.854 4.854-4.854 4.854c-0 0-0 0-0 0-0.052 0.052-0.090 0.113-0.114 0.178-0.066 0.178-0.029 0.386 0.114 0.529l2.293 2.293c0.143 0.143 0.351 0.181 0.529 0.114 0.065-0.024 0.126-0.062 0.178-0.114 0-0 0-0 0-0l4.854-4.854 4.854 4.854c0 0 0 0 0 0 0.052 0.052 0.113 0.090 0.178 0.114 0.178 0.066 0.386 0.029 0.529-0.114l2.293-2.293c0.143-0.143 0.181-0.351 0.114-0.529-0.024-0.065-0.062-0.126-0.114-0.178z"></path>
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

<form method="post" action="output.php"    >
<div class="full">
  <!--  <div class="container">-->
        <!-- Page Heading/Breadcrumbs -->
        <div class="mid-section">
           <h1><div class="title-line1" >Your Skills and Knowledge</div></h1>
        </div>
         <div class="sub-heading"><h4>Let us know your skills</h4><h4>Choose your skills from the skill box</h4></div>
          <div class="boxes">
         
        
<div class="select-box">
       
<div class="select-box-heading"><h4>Skill Box</h4></div>
     
            <div class="select-box-backgnd" id="select-box">

                <?php
 if ( isset($_POST['submit'] ) ) {
    $occp = $_POST['occ'];

        }
         include 'db_connection.php';
    $dbconn4 = OpenCon();
        $sql = "select * from (
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
             echo '<div  class="value" onclick="replicate(this);" value="'.$resultsk.'"><p>'.$resultsk.' </p></div>';
             }
                ?>
            
             </div>
        </div>
      

<div class="skill-box">
<div class="select-box-heading"><h4>Your Skill Box</h4></div>
            <div class="skill-box-backgnd" id="skill-box">
            
                <!-- <p></p> -->
                <?php
                $sql = "Select b.skid as ID,b.skName as name, b.description as description, 1 as checked
	                From skill_Occupation as a, skill as b, Occupation as c
	                Where a.skID = b.skID and c.OccID = a.OccID
	                And c.OccName = '$occp'
	                Order by c.OccName, a.Rank desc
	                Limit 10";
                $resultSkill = pg_query($dbconn4, $sql);

                if (!$resultSkill) {
                    echo "An error occurred.\n";
                    exit;
                }
                while ($res = pg_fetch_row($resultSkill)) {
                    $resultsk = $res[1];
                    echo '<button type="button" onclick="cancel();"><div  class="value"><p>'.$resultsk.' <span> <svg class="icon icon-close"><use xlink:href="#icon-close"></use></svg><span></p></div></button>';
                }
                ?>
                
 
            
            

</div>
</div>

</div>

 <div class="boxes-2">
          <div class="sub-heading"><h4>Let us know your knowledge</h4><h4>Choose your knowledge from the knowledge box</h4></div>
        <div class="select-box">
        <div class="select-box-heading"><h4>Knowledge Box</h4></div>
      
            <div class="select-box-backgnd">

            
             </div>
        </div>
      

<div class="skill-box">
<div class="select-box-heading"><h4>Your Knowledge Box</h4></div>

            <div class="skill-box-backgnd" >

            
</div>
</div>

</div>
</div>
   
</form>

</body>
</html>

