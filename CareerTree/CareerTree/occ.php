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

</head>

<body>

    <div class="navbar  navbar-dark navbar-expand-md fixed-top">

        <div class="container">
            <a class="navbar-brand" href="#">
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
                        <a class="nav-item active" href="#">Home</a>
                    </li>
                    <li>
                        <a class="nav-item" href="#">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="full">
    <div class="headme">
    
    <h2>Tell us what's your previous occupation</h2>
    </div>
        
        <?php
    if ( isset($_POST['submit1_x'], $_POST['submit1_y'] ) ) {
    $ind = 'IND08';
    
    }
    else if ( isset($_POST['submit2_x'], $_POST['submit2_y'] ) ) {
    $ind = 'IND01';
    
    }
     else if ( isset($_POST['submit3_x'], $_POST['submit3_y'] ) ) {
    $ind = 'IND05';
    
    }
     else if ( isset($_POST['submit4_x'], $_POST['submit4_y'] ) ) {
    $ind = 'IND10';
    
    }
     else if ( isset($_POST['submit5_x'], $_POST['submit5_y'] ) ) {
    $ind = 'IND03';
    
    }
     else if ( isset($_POST['submit6_x'], $_POST['submit6_y'] ) ) {
    $ind = 'IND02';
    
    }
     else if ( isset($_POST['submit7_x'], $_POST['submit7_y'] ) ) {
    $ind = 'IND09';
    
    }
     else if ( isset($_POST['submit8_x'], $_POST['submit8_y'] ) ) {
    $ind = 'IND06';
    
    }
     
    
        /*DB connection*/
        $dbhost = 'careertreetest.cytukzawpi8t.ap-southeast-2.rds.amazonaws.com';
        $dbuser = 'careertreetest';
        $dbpass = 'careerree2018';
        $port = 5432;
        $dbname ='ctdb_test';
        $conn = "host=careertreetest.cytukzawpi8t.ap-southeast-2.rds.amazonaws.com port=5432 dbname=ctdb_test user=careertreetest password=careertree2018";
        $dbconn4 = pg_connect($conn);
        if(! $conn )
        {
            echo "error";
        }
        /*DB connection end*/
        
            $sql = "Select Occname From Occupation as Occ, Industry as Ind, Industry_Occupation as IndOcc
                                        Where IndOcc.IndID = Ind.IndID and Occ.OccID = IndOcc.OccID
                                        and Ind.IndID = '$ind'
                                        Order by Ind.IndName, Occ.OccName";
          $result = pg_query($dbconn4, $sql);
                
                if (!$result) {
                    echo "An error occurred.\n";
                    exit;
                }

                
                echo '<div class="selection">';
                echo '<form method="post" action="skill.php">';
                echo '<div class="mid">';
                echo '<label for="pcategory">Occupation</label>' ;
                echo '<input type="text" id="pcategory" name="occ"autocomplete="off" list="mylist">';
                echo '</div>';
                //echo '</div>';
    echo '<datalist id="mylist">';
    while ($res = pg_fetch_row($result)) {
    $result1 = $res[0];
    //echo $res[0] ;
    echo '<option value = "'. $result1 .'">'. $result1 .'</option>';
    }
    echo '</datalist>';
    echo '<div class="cbut">';
    echo '<input class="but" type="submit" name="submit" value="GO" />';
    echo '</div>';
    echo '</form>';
    
                            
    
 pg_close($dbconn4); ?> 
 </div>

 <footer class="foo">
            <div class="pull-right">
                <a href="#">Back to top</a>
            </div>
        </div>

</footer>
   
     
</body>
</html>