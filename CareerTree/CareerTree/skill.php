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
   <script>smoothscroll</script>
    <script>
        function validate_submit2() {
            var result = false;
            ////////////////Skill/////////////////////////////
            var element = $("#skill-box").find(".value");
            var i;
            var skillValue = '';
            for (i = 0; i < element.length; i++) { 
                skillValue += "'" + element[i].innerText.trim() + "'," ;
                
            }
            skillValue = skillValue.replace(/,+$/, '');
            //alert(skillValue);
            $("#skill").val(skillValue);
            ////////////////Knowledge/////////////////////////////
            element = $("#knowledge-box").find(".value");
            var knowledgeValue = '';
            for (i = 0; i < element.length; i++) {
                knowledgeValue += "'" + element[i].innerText.trim() + "'," ;

            }
            knowledgeValue = knowledgeValue.replace(/,+$/, '');
            //alert(knowledgeValue);
            $("#knw").val(knowledgeValue);

            if (knowledgeValue && skillValue) {
              result = true;
            }
            else {
              alert("Please specify at least one skill and knowledge");
              result = false;
            }
            return result;
        }
    </script>
    
 <script>
 function replicate(element) {
     $(element).attr("onclick","cancel(this)");
    element = $(element); //if move
     var skill = $(element).find('p').text();
     var s = "<div  class=\"value\" onclick=\"cancel(this);\" id=\"+skill+\" value=\"+skill+\" ><p>"+skill+"<span class=\"cross\"> <svg class=\"icon icon-close\"><use xlink:href=\"#icon-close\"></use></svg></span> </p></div>";
 //alert(v);    
 $('#skill-box').append(s);
//element.appendTo($('#skill-box'));
element.remove();
}


 function cancel(element) {
     
     $(element).attr("onclick","replicate(this)");
     
     element = $(element); //if move 
     var skill = $(element).find('p').text();
     var s = "<div  class=\"value\" onclick=\"replicate(this);\" id=\"+skill+\" value=\"+skill+\"><p>"+skill+"</p></div>";
     //var time = $(element).find("span").contents().unwrap();
    //ele = this.$("span").remove(); 
    //delete element.cross;
     //alert(v);
      //alert(ele);
     //alert(Object.values(element));
     $('#select-box').append(s);
    element.remove();

     }

function replicateKnw(element) {
    $(element).attr("onclick","cancelKnw(this)");
    element = $(element); //if move
     var knw = $(element).find('p').text();
     var k = "<div  class=\"value\" onclick=\"cancelKnw(this);\" id=\"+knw+\" value=\"+knw+\" ><p>"+knw+"<span class=\"cross\"> <svg class=\"icon icon-close\"><use xlink:href=\"#icon-close\"></use></svg></span> </p></div>";
 //alert(v);    
 $('#knowledge-box').append(k);
//element.appendTo($('#skill-box'));
element.remove();
   // element.appendTo($('#knowledge-box'));
}

 function cancelKnw(element) {

     $(element).attr("onclick","replicateKnw(this)");
     element = $(element); //if move
     var knw = $(element).find('p').text();
     var k = "<div  class=\"value\" onclick=\"replicateKnw(this);\" id=\"+knw+\" value=\"+knw+\"><p>"+knw+"</p></div>";
     $('#knw-select-box').append(k);
     element.remove();
    

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
						<a class="nav-item active" href="/home.php" style="margin-top: 7px;">Home</a>
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
           <h1><div class="title-line1" >Your Skill Set and Knowledge Domain</div></h1>
        </div>
         <div class="sub-heading"><h4>Let us know your skills</h4><h4>Choose your skills from the skill set</h4></div>
          
<div class="boxes">
      
    <div class="select-box">
       
        <div class="select-box-heading"><h4>Skill Set</h4></div>
     
            <div class="select-box-backgnd" id="select-box">

                <?php
 if ( isset($_POST['submit'] ) ) {
    $occp = $_POST['occ'];
    echo '<input type="hidden" name="occ" value="'.$occp.'">';
        }
        include 'db_connection.php';
        $dbconn4 = OpenCon();
        //----------Select Onet Occupation Name -------------////updated query 29/04/2018
        $sql = "Select Occ.occname
                From occupation as Occ
                Left outer join Occupation_ABS as OccABS on Occ.occid = OccABS.occid
                Where OccABS.abs_name = '$occp'
                or Occ.occname = '$occp'";
                $resultOccp = pg_query($dbconn4, $sql);
                $fetchOccp = pg_fetch_row($resultOccp);
                $Onetoccp = $fetchOccp[0];
        echo '<input type="hidden" name="Onetocc" value="'.$Onetoccp.'">';
        //--------------------------------------------------// 
        $sql = "select * from (
                select allskill.skid as ID,allskill.skname as name, allskill.description as description, 0 as checked
                from skill as allskill
                where allskill.skid not in (Select b.skid
	                From skill_Occupation as a, skill as b, Occupation as c
	                Where a.skID = b.skID and c.OccID = a.OccID
	                And c.OccName = '$Onetoccp'
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

             //echo '<div  class="value" onclick="replicate(this);" value="'.$resultsk.'"><p>'.$resultsk.' </p></div>';
                 echo '<div  class="value" onclick="replicate(this);" id="'.$resultsk.'" value="'.$resultsk.'"><p>'.$resultsk.' </p></div>';

             }
                ?>
            
                <!--<div class="reverse-box-backgnd" id="reverse-box" ></div>-->

             </div> 
             
        </div>
      

<div class="skill-box">
<div class="select-box-heading"><h4>Your Skill Set</h4></div>
            <div class="skill-box-backgnd" id="skill-box">
            
                <!-- <p></p> -->
                <?php
                $sql = "Select b.skid as ID,b.skName as name, b.description as description, 1 as checked
	                From skill_Occupation as a, skill as b, Occupation as c
	                Where a.skID = b.skID and c.OccID = a.OccID
	                And c.OccName = '$Onetoccp'
	                Order by c.OccName, a.Rank desc
	                Limit 10";
                $resultSkill = pg_query($dbconn4, $sql);

                if (!$resultSkill) {
                    echo "An error occurred.\n";
                    exit;
                }
                while ($res = pg_fetch_row($resultSkill)) {
                    $resultsk = $res[1];

                    //echo '<button type="button" onclick="cancel();"><div  class="value"><p>'.$resultsk.' <span> <svg class="icon icon-close"><use xlink:href="#icon-close"></use></svg><span></p></div></button>';
                    echo '<div  class="value" onclick="cancel(this);" id="'.$resultsk.'" value="'.$resultsk.'"><p>'.$resultsk.'<span class="cross"> <svg class="icon icon-close"><use xlink:href="#icon-close"></use></svg></span> </p></div>';
                    
                }
                ?>
                
            </div>
</div>

</div>

 <div class="sub-heading2"><h4>Let us know your knowledge</h4><h4>Choose your knowledge from the knowledge domain</h4></div>
 <div class="boxes-2">
         
        <div class="knw-select-box">
        <div class="select-box-heading"><h4>Knowledge Domain</h4></div>
      
            <div class="select-box-backgnd" id="knw-select-box">
                <?php
                $sql = "select * from (
                select allknowledge.knwid as ID,allknowledge.knwname as name, allknowledge.description as description, 0 as checked
                from knowledge as allknowledge
                where allknowledge.knwid not in (Select b.knwid
	                From knowledge_Occupation as a, knowledge as b, Occupation as c
	                Where a.knwID = b.knwID and c.OccID = a.OccID
	                And c.OccName = '$Onetoccp'
	                Order by c.OccName, a.Rank desc
	                Limit 10)
                order by allknowledge.knwid
                ) as default_no_checked
                order by checked desc, id";
                $resultKnowledge = pg_query($dbconn4, $sql);
                if (!$resultKnowledge) {
                    echo "An error occurred.\n";
                    exit;
                }
                while ($res = pg_fetch_row($resultKnowledge)) {
                    $resultknw = $res[1];
                    //echo '<div  class="value" onclick="replicate(this);" value="'.$resultsk.'"><p>'.$resultsk.' </p></div>';
                    echo '<div  class="value" onclick="replicateKnw(this);" id="'.$resultknw.'" value="'.$resultknw.'"><p>'.$resultknw.' </p></div>';
                }
                ?>
            </div>
        </div>
      

<div class="knw-box">
<div class="select-box-heading"><h4>Your Knowledge Domain</h4></div>

            <div class="skill-box-backgnd" id="knowledge-box">
                <?php
                $sql = "Select b.knwid as ID,b.knwName as name, b.description as description, 1 as checked
	                From knowledge_Occupation as a, knowledge as b, Occupation as c
	                Where a.knwID = b.knwID and c.OccID = a.OccID
	                And c.OccName = '$Onetoccp'
	                Order by c.OccName, a.Rank desc
	                Limit 10";
                $resultKnowledge = pg_query($dbconn4, $sql);

                if (!$resultKnowledge) {
                    echo "An error occurred.\n";
                    exit;
                }
                while ($res = pg_fetch_row($resultKnowledge)) {
                    $resultknw = $res[1];
                    //echo '<button type="button" onclick="cancel();"><div  class="value"><p>'.$resultsk.' <span> <svg class="icon icon-close"><use xlink:href="#icon-close"></use></svg><span></p></div></button>';
                    echo '<div  class="value" onclick="cancelKnw(this);" id="'.$resultknw.'" value="'.$resultknw.'"><p>'.$resultknw.'  <svg class="icon icon-close"><use xlink:href="#icon-close"></use></svg></span></p></div>';
                }
                ?>
            </div>
</div>
   


</div>
    <div class="btn">
    <input class="but2" type="submit" name="submit" value="Explore My Occupations" onclick="return validate_submit2()" />
    <input type="hidden" name="skill" id="skill" />
    <input type="hidden" name="knw" id="knw" />
    </div>
</div>

<div class="foot">
<footer class="footer"><p>
  &#169; Copyright 2018 Career Tree </p>
</footer>
</div>
   
</form>

</body>
</html>

