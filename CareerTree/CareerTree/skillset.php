<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <title>CareerTree</title>
    <link rel="icon" href="./images/tab.ico" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/skillset.css">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script src="./js/jquery.min.js"></script>
    
   
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
            //element = $("#knowledge-box").find(".value");
            //var knowledgeValue = '';
            //for (i = 0; i < element.length; i++) {
            //    knowledgeValue += "'" + element[i].innerText.trim() + "'," ;

            //}
            //knowledgeValue = knowledgeValue.replace(/,+$/, '');
            ////alert(knowledgeValue);
            //$("#knw").val(knowledgeValue);

            if (skillValue) {
              result = true;
            }
            else {
              alert("Please specify at least one skill");
              result = false;
            }
            return result;
        }
    </script>
    
 <script>
 function replicate(element) {
     $(element).attr("onclick","cancel(this)");
    element = $(element); //if move
   
 ele =  $(element).get(0); 
 
var name = ele.className;


     var skill = $(element).find('p').text();
 //    alert(skill);
     var group = $(element).find("a").text();
   //  alert(group);

     var s = "<div  class=\"value\" onclick=\"cancel(this);\" id=\"+group+\" value=\"+skill+\"><a style=\"display:none;\">"+group+"</a><p>"+skill+"<span class=\"cross\"> <svg class=\"icon icon-close\"><use xlink:href=\"#icon-close\"></use></svg></span></p></div>";
 //alert(v);    
 $('#skill-box').append(s);
//element.appendTo($('#skill-box'));
element.remove();
//alert(group);
var grouping = group.replace(/ /g,"\\ ");
 var c = $('.skillgroup#'+grouping).children().length;
//  alert(c);
    if( c == 1){
    $('.skillgroup#'+grouping).hide();
    }
}


 function cancel(element) {
     
     $(element).attr("onclick","replicate(this)");     
     element = $(element); //if move 
     
     ele =  $(element).get(0); 
   //  alert(ele);

   $(ele).children("#all").hide();

     var name = ele.className;
   //  alert(name);

     var id = element[0].id;
  //   alert(id);

     var skill = $(element).find('p').text();
   //  alert(skill);

     var groupname = $(element).find("a").text();
  //   alert(groupname);
     var group = groupname.replace(/ /g,"\\ ");
$('.skillgroup#'+group).show();
   //  alert('div.skillgroup#'+group);
     $('div.skillgroup#'+group).append('<div  class="' + groupname + '" onclick="replicate(this);" id="value" value="' + skill + '" style="display:none;"><a style="display:none;">' + groupname + '</a><p><span class="add"><svg class="icon icon-plus"><use xlink:href="#icon-plus"></use></svg></span>' + skill + '</p></div>');
    element.remove();

     }


</script>

<script>
function child(id) {
//alert(id);
  var res = id.replace(/ .*/,'');
//alert(res);
  $('.'+res).css('display', 'inline-block');

   var array = ['Analytics','Communication','Education','Engineering','Governance','Health','Interpersonal','Liberal','Maintenance','Management','Mathematics','Others','Production','Software',]; 
 
for (var i=array.length-1; i>=0; i--) {
    if (array[i] === res) {
        array.splice(i, 1);
        break;      
    }
}
//alert(array);
for(var i=0;i<=array.length;i++){
 $('.'+array[i]).hide();
} 
}
</script>

<script>
 $(document).ready(function () {
           
  var array = ['Analytics','Communication','Education and Training','Engineering','Governance and Law Enforcement','Health','Interpersonal and Public Relations','Liberal Arts','Maintenance','Management','Mathematics','Others','Production and Operation','Software and Technology',]; 
  for(var i=0;i<=array.length;i++){
  var group = array[i].replace(/ /g,"\\ ");
  //alert(group);
  var c = $('.skillgroup#'+group).children().length;
 // alert(c);
    if( c == 1){
    $('.skillgroup#'+group).hide();
    }
 
}

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

<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-plus" viewBox="0 0 32 32">
<title>Add</title>
<path d="M31 12h-11v-11c0-0.552-0.448-1-1-1h-6c-0.552 0-1 0.448-1 1v11h-11c-0.552 0-1 0.448-1 1v6c0 0.552 0.448 1 1 1h11v11c0 0.552 0.448 1 1 1h6c0.552 0 1-0.448 1-1v-11h11c0.552 0 1-0.448 1-1v-6c0-0.552-0.448-1-1-1z"></path>
</symbol>
</defs>
</svg>

<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-close" viewBox="0 0 24 24">
<title>Cancel</title>
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

      <div class="sidebar">

<div class="icon-space"><a href="/home.php"><svg class="icon icon-home3"><use xlink:href="#icon-home3"></use></svg><span class="name"></span></a></div> 
<div class="icon-space"><a href="javascript:window.history.back()"><svg class="icon icon-circle-left"><use xlink:href="#icon-circle-left"></use></svg></a></div>
</div>

<form method="post" action="output.php"    >
<div class="full">
  <!--  <div class="container">-->
        <!-- Page Heading/Breadcrumbs -->
        <div class="mid-section">
           <h1><div class="title-line1" >Your Skill Set</div></h1>
        </div>
         <div class="sub-heading"><h4>Let us know the skills you possess</h4><h4>Choose your skills from within the skill categories below</h4></div>
          
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
            
              $sql = "Select distinct group_name
                        from skill_knowledge_group
                        order by group_name";
                $resultGrouping = pg_query($dbconn4, $sql);
                if (!$resultGrouping) {
                    echo "An error occurred.\n";
                    exit;
                }
                
                while ($res = pg_fetch_row($resultGrouping)) {
                $grpName = $res[0];
                    echo '<div class="skillgroup" id="'.$grpName.'" onclick="child(\''.$grpName.'\',this)"><h4>'.$grpName.'</h4>';
                    //echo '<a href="#" rel="week_3">'.$grpName.'</a>';

                    $sql = "Select ID,name,description, grouped.group_name from (
                            select ID,name,description from (
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
                            union
                            select ID,name,description from (
                            select allknowledge.knwid as ID,allknowledge.knwname as name, allknowledge.description as description, 0 as checked
                            from knowledge as allknowledge
                            where allknowledge.knwid not in (Select b.knwid
                            From knowledge_Occupation as a, knowledge as b, Occupation as c
                            Where a.knwID = b.knwID and c.OccID = a.OccID
                            And c.OccName = '$Onetoccp'
                            Order by c.OccName, a.Rank desc
                            Limit 10)
                            and allknowledge.knwname <> 'Mathematics'
                            order by allknowledge.knwid
                             ) as default_no_checked) as remaining, skill_knowledge_group as grouped
                             where remaining.id = grouped.relatedid
                             and grouped.group_name = '$grpName'
                             order by grouped.group_name";
                    $resultGroupingMembers = pg_query($dbconn4, $sql);
                    //echo '<ui>';
                    $allAquire = true;
                    while ($res2 = pg_fetch_row($resultGroupingMembers)) {
                  
                    echo '<div  class="'.$grpName.'" onclick="replicate(this);" id="value" value="'.$res2[1].'" style="display:none;"><a style="display:none;">'.$grpName.'</a><p><span class="add"><svg class="icon icon-plus"><use xlink:href="#icon-plus"></use></svg></span>'.$res2[1].'</p></div>';
                       // echo '<li>'.$res2[1].'</li>';
                        $allAquire = false;
                    }
                    if ($allAquire) {
                      //    echo '<div  class="'.$grpName.'" id="all" value="'.$grpName.'" style="display:none;"><p>You have acquired all '.$grpName.' skills </p></div>';
                         }
                   // echo '</ui>';
                   echo '</div>';
                }

             //echo '<div  class="value" onclick="replicate(this);" value="'.$resultsk.'"><p>'.$resultsk.' </p></div>';
                // echo '<div  class="value" onclick="replicate(this);" id="'.$resultsk.'" value="'.$resultsk.'"><p>'.$resultsk.' </p></div>';

             
                ?>
            
                <!--<div class="reverse-box-backgnd" id="reverse-box" ></div>-->

             </div> 
             
        </div>
      

<div class="skill-box">
<div class="select-box-heading"><h4>Your Choosen Skill Set</h4><h5>Skills prepopulates according to your previous occupation (<?php echo $occp; ?>)</h5></div>
            <div class="skill-box-backgnd" id="skill-box">
            
                <!-- <p></p> -->
                <?php
                $sql = "Select * from (
                        Select b.skid as ID,b.skName as name, b.description as description, 1 as checked, d.group_name
                        From skill_Occupation as a, skill as b, Occupation as c, skill_knowledge_group as d
                        Where a.skID = b.skID and c.OccID = a.OccID
                        And b.skid = d.relatedid	
                        And c.OccName = '$Onetoccp'
                        Order by c.OccName, a.Rank desc
                        Limit 10) as selectedSkill
                         union
                        Select * from (
                        Select b.knwid as ID,b.knwName as name, b.description as description, 1 as checked, d.group_name
                        From knowledge_Occupation as a, knowledge as b, Occupation as c, skill_knowledge_group as d
                        Where a.knwID = b.knwID and c.OccID = a.OccID
                        And b.knwid = d.relatedid	
                        And c.OccName = '$Onetoccp'
                        And b.knwname <> 'Mathematics'
                        Order by c.OccName, a.Rank desc
                        Limit 10) as selectedKnowledge
                        order by name";
                 $result = pg_query($dbconn4, $sql);
                // echo '<ui>';
                 while ($res = pg_fetch_row($result)) {
                   

                    //echo '<button type="button" onclick="cancel();"><div  class="value"><p>'.$resultsk.' <span> <svg class="icon icon-close"><use xlink:href="#icon-close"></use></svg><span></p></div></button>';
                    echo '<div  class="value" onclick="cancel(this);" id="'. $res[4].'" value="'. $res[1].'"><a style="display:none;">'.$res[4].'</a><p>'. $res[1].'<span class="cross"> <svg class="icon icon-close"><use xlink:href="#icon-close"></use></svg></span> </p></div>';
                    
                }
                ?>
                
            </div>
</div>

</div>

 <div class="sub-heading2"></div>
 <div class="boxes-2">
         
  
</div>
    <div class="btn">
    <input class="but2" type="submit" name="submit" value="Explore My Occupations" onclick="return validate_submit2()" />
    <input type="hidden" name="skill" id="skill" />
    <!--<input type="hidden" name="knw" id="knw" />-->
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

