<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <title>CareerTree</title>
    <link rel="icon" href="./images/tab.ico" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/lack.css">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script src="./js/jquery.min.js"></script>
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
        <?php

        $occID = $_POST['occid'];
        $tranID = $_POST['id'];
        $para = $_POST['para'];
        $getLackingskill = $_POST['lackingskill'];
        $getLackingknowledge = $_POST['lackingknowledge'];

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
           <h1><div class="title-line1">Enhance Your Skill Set</div></h1>
        </div>
        <div class="sub-heading"><h4>Acquire the skills you will need to become "" by undertaking the recommended courses</h4></div>

        <div class=boxes>
       <div class="lack-box">
        <div class="box-heading"><h4>Skills to Acquire</h4></div>
      
            <div class="lack-box-backgnd" id="lack-select-box">
                <?php
            include 'db_connection.php';
            $dbconn4 = OpenCon();
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
<div class="box-heading"><h4>Recommended Courses</h4></div>

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
        pg_close($dbconn4);
                ?>
            </div>
            </div>
            </div>

</div>

<div class="foot">
<footer class="footer"><p>
  &#169; Copyright 2018 Career Tree </p>
</footer>
</div>

</body>
</html>