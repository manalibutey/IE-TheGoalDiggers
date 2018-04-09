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
        echo '<hr>';
        //--------- Description --------------
        echo '<h3>Description</h3>';
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
        //--------- Common Skills and Knowledge --------------
        echo '<h3>Common Skills and Knowledge</h3>';
        echo '<ul>';
        $commonSkillsArray = explode(',', $occDetail[3]);
        for($x = 0; $x < count($commonSkillsArray); $x++) {
            echo '<li>'.$commonSkillsArray[$x].' (skill)</li>';
        }
        $commonKnowledgeArray = explode(',', $occDetail[4]);
        for($x = 0; $x < count($commonKnowledgeArray); $x++) {
            echo '<li>'.$commonKnowledgeArray[$x].' (knowledge)</li>';
        }
        echo '</ul>';
        echo '<hr>';
        //--------- Lacking Skills and Knowledge --------------
        echo '<h3>Lacking Skills and Knowledge</h3>';
        echo '<ul>';
        $lackingSkillsArray = explode(',', $occDetail[5]);
        for($x = 0; $x < count($lackingSkillsArray); $x++) {
            echo '<li>'.$lackingSkillsArray[$x].' (skill)</li>';
        }
        $lackingKnowledgeArray = explode(',', $occDetail[6]);
        for($x = 0; $x < count($lackingKnowledgeArray); $x++) {
            echo '<li>'.$lackingKnowledgeArray[$x].' (knowledge)</li>';
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