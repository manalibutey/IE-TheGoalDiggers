<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <title>CareerTree</title>
    <link rel="icon" href="./images/title.ico" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style3.css">
    <link rel="stylesheet" href="./css/awesomplete.css" />
    <script language="javascript" type="text/javascript" src="./js/jquery.min.js"></script>
    <link href="css/modern-business.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/customstyle.css" />
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

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
                            <a class="nav-item active" href="/home.php">HOME</a>
                        </li>
                        <li>
                            <a class="nav-item" href="/aboutus.php">ABOUT US</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">
            Occupation Detail
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/industry.php">Industry</a>
            </li>
            <li class="breadcrumb-item active">Occupation</li>
            <li class="breadcrumb-item active">Skills and Knowledge</li>
            <li class="breadcrumb-item active">Suggested Occupation</li>
            <li class="breadcrumb-item active">Occupation Detail</li>
        </ol>

        <?php
        $queries = array();
        parse_str($_SERVER['QUERY_STRING'], $queries);
        $tranID =  $queries['id'];
        $occID = $queries['occid'];

        include 'db_connection.php';
        $dbconn4 = OpenCon();
        $sql = "select title as previousocc, relatedtitle as relatedocc, description, matchingskill,matchingknowledge,lackingskill,lackingknowledge,percentage
        from percentage, occupation
        where relatedoccid = occid
        and id = '$tranID'
        and relatedoccid = '$occID'";
        $result = pg_query($dbconn4, $sql);
        $occDetail = pg_fetch_row($result);
        if (!$result) {
            echo "An error occurred.\n";
            exit;
        }
        echo '<form method="post" action="skill.php" >';
        echo '<h2>'.$occDetail[1].' ('.$occDetail[7].'%)</h2>';
        echo '<p>'.$occDetail[2].'</p>';
        echo '<hr>';
        //--------- Task Statement --------------
        echo '<h3>Task Statement</h3>';
        echo '<ul>';
        $sql = "select taskname from task_occupation
                where occid = '$occID'
                order by rank desc
                limit 10";
        $result = pg_query($dbconn4, $sql);
        while ($task = pg_fetch_row($result)) {
            echo '<li>'.$task[0].'</li>';
        }
        echo '</ul>';
        echo '<hr>';
        //--------- Work Style --------------
        echo '<h3>Work Style</h3>';
        echo '<ul>';
        $sql = "select a.wrkname as workstylename, substring (a.description,14) as description, rank
                from workstyle a, workstyle_occupation b
                where b.wrkid = a.wrkid
                and b.occid = '$occID'
                order by rank desc
                limit 5";
        $result = pg_query($dbconn4, $sql);
        while ($workstyle = pg_fetch_row($result)) {
            echo '<li>'.$workstyle[0].' ('.$workstyle[1].')</li>';
        }
        echo '</ul>';
        echo '<hr>';
        //--------- Common Skills and Knowledge --------------
        echo '<h3>Common Skills and Knowledge</h3>';
        echo '<ul>';
        if ($occDetail[3]){
            $commonSkillsArray = explode(',', $occDetail[3]);
            for($x = 0; $x < count($commonSkillsArray); $x++) {
                $commonSkills .= '\''.trim($commonSkillsArray[$x]).'\',';
            }
            $commonSkills = rtrim($commonSkills,",");
            $sql = "select a.skname as skillname, a.description as description, rank
            from skill a, skill_occupation b
            where b.skid = a.skid
            and b.occid = '$occID'
            and a.skname in ($commonSkills)
            order by rank desc";
            $result = pg_query($dbconn4, $sql);
            while ($cskill = pg_fetch_row($result)) {
                echo '<li><h5>'.$cskill[0].' (skill)</h5>'.$cskill[1].'</li><br/>';
            }
        }
        if ($occDetail[4]){
            $commonKnowledgeArray = explode(',', $occDetail[4]);
            for($x = 0; $x < count($commonKnowledgeArray); $x++) {
                $commonKnowledge .= '\''.trim($commonKnowledgeArray[$x]).'\',';
            }
            $commonKnowledge = rtrim($commonKnowledge,",");
            $sql = "select a.knwname as knowledgename, a.description as description, rank
                    from knowledge a, knowledge_occupation b
                    where b.knwid = a.knwid
                    and b.occid = '$occID'
                    and a.knwname in ($commonKnowledge)
                    order by rank desc";
            $result = pg_query($dbconn4, $sql);
            while ($cknowledge = pg_fetch_row($result)) {
                echo '<li><h5>'.$cknowledge[0].' (knowledge)</h5>'.$cknowledge[1].'</li><br/>';
            }
        }
        echo '</ul>';
        echo '<hr>';
        //--------- Lacking Skills and Knowledge --------------
        echo '<h3>Lacking Skills and Knowledge</h3>';
        echo '<ul>';
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
                echo '<li><h5>'.$lskill[0].' (skill)</h5>'.$lskill[1].'</li><br/>';
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
                echo '<li><h5>'.$lknowledge[0].' (knowledge)</h5>'.$lknowledge[1].'</li><br/>';
            }
        }

        echo '</ul>';
        echo '<hr>';
        //--------- Suggested Course and Training --------------
        echo '<h3>Suggested Course and Training</h3>';
        echo '<hr>';
        echo '</form>';
        pg_close($dbconn4);
        ?>

    </div>
    <footer class="py-5 bg-dark">
        <div class="container">
            <a href="/">
                <img src="./images/logo3.png" class="logoFooter" />
            </a>
            <label class="motto"> Empowering the unemployed</label>
        </div>
        <div class="container">
            <hr />
            <a href="#" class="FooterTxt">Sitemap</a>
            <a href="#" class="FooterTxt">Copyright &copy;2018</a>
            <a href="#" class="FooterTxt">Contact Us</a>
        </div>
    </footer>
 
</body>
</html>