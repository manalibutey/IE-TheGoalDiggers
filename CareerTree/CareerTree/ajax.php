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
     <script>
         function validate_submit() {
             var result = false;
             var options = document.getElementById("mylist").options;
             for (var i = 0; i < options.length; i++) {
                 if (document.getElementById('category').value == options[i].value) {
                     result = true;  
                 }
             }
             if (!result) {
                 alert("Please select occupations from the list");
             }
             return result;
         }
     </script>
      
   <script type = "text/javascript">
   
function skill_list()
{
var occ = document.getElementById("category").value;

var xhr;
 if (window.XMLHttpRequest) { // Mozilla, Safari, ...
    xhr = new XMLHttpRequest();
} 
else if (window.ActiveXObject) { // IE 8 and older
    xhr = new ActiveXObject("Microsoft.XMLHTTP");
}
var data = "occ=" + occ;
window.alert(data);
     xhr.open("POST", "http://localhost:43669/api.php", true); 
     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");        
      xhr.send(data);
	 xhr.onreadystatechange = function() {
	 if (xhr.readyState == 4 && xhr.status == 200) {
       alert(xhr.responseText);	
       console.log(xhr.responseText);
        console.log("What", xhr.readyState); 	
	  
      document.myForm.skill.value = xhr.responseText;
      document.getElementById("midskill").innerHTML = xhr.responseText;
      }
     else {
        console.log("There was a problem with the request.");
        console.log("Error", xhr.readyState);  
      }
     };
    
};


</script>
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
    $ind = 'IND14';
    
    }
     else if ( isset($_POST['submit3_x'], $_POST['submit3_y'] ) ) {
    $ind = 'IND01';
    
    }
     else if ( isset($_POST['submit4_x'], $_POST['submit4_y'] ) ) {
    $ind = 'IND18';
    
    }
     else if ( isset($_POST['submit5_x'], $_POST['submit5_y'] ) ) {
    $ind = 'IND05';
    
    }
     else if ( isset($_POST['submit6_x'], $_POST['submit6_y'] ) ) {
    $ind = 'IND16';
    
    }
     else if ( isset($_POST['submit7_x'], $_POST['submit7_y'] ) ) {
    $ind = 'IND04';
    
    }
     else if ( isset($_POST['submit8_x'], $_POST['submit8_y'] ) ) {
    $ind = 'IND11';
    
    }
    else if ( isset($_POST['submit9_x'], $_POST['submit9_y'] ) ) {
    $ind = 'IND17';
    
    }
    else if ( isset($_POST['submit10_x'], $_POST['submit10_y'] ) ) {
    $ind = 'IND10';
    
    }
    else if ( isset($_POST['submit11_x'], $_POST['submit11_y'] ) ) {
    $ind = 'IND03';
    
    }
    else if ( isset($_POST['submit12_x'], $_POST['submit12_y'] ) ) {
    $ind = 'IND02';
    
    }
    else if ( isset($_POST['submit13_x'], $_POST['submit13_y'] ) ) {
    $ind = 'IND19';
    
    }
    else if ( isset($_POST['submit14_x'], $_POST['submit14_y'] ) ) {
    $ind = 'IND13';
    
    }
    else if ( isset($_POST['submit15_x'], $_POST['submit15_y'] ) ) {
    $ind = 'IND15';
    
    }
    else if ( isset($_POST['submit16_x'], $_POST['submit16_y'] ) ) {
    $ind = 'IND12';
    
    }
    else if ( isset($_POST['submit17_x'], $_POST['submit17_y'] ) ) {
    $ind = 'IND07';
    
    }
    else if ( isset($_POST['submit18_x'], $_POST['submit18_y'] ) ) {
    $ind = 'IND09';
    
    }
    else if ( isset($_POST['submit19_x'], $_POST['submit19_y'] ) ) {
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
                                        and Occ.occid in (select occid from Career_Changer_Matrix )
                                        Order by Ind.IndName, Occ.OccName";
          $result = pg_query($dbconn4, $sql);
                
                if (!$result) {
                    echo "An error occurred.\n";
                    exit;
                }

                
                echo '<div class="selection">';
                
                echo '<div class="mid">';
                echo '<label for="category">Occupation</label>' ;
                echo '<input type="text" onchange="skill_list();" id="category" name="occ" autocomplete="off" list="mylist">';
                echo '</div>';
                //echo '</div>';
    echo '<datalist id="mylist" >';
    while ($res = pg_fetch_row($result)) {
    $result1 = $res[0];
    //echo $res[0] ;
    echo '<option value = "'. $result1 .'">'. $result1 .'</option>';
    }
    echo '</datalist>';
    echo '<div class="cbut">';
    //echo '<input class="but" type="submit" name="submit" id = "submit" value="GO" onclick="book_suggestion()"/>';
echo '<div id="skill">Skill displayed here</div>';    
echo '</div>';
   
 echo '<form name="myForm" method="post" action="output.php">';
 echo '<div class="midskill">';
            
                
                  echo '<input type="checkbox" name="skill" ></br>';  
                
                  
             
        
        echo '<div class="cbut">';
     echo '<input class="but" type="submit" name="submit" value="FIND MY OCCUPATIONS" onclick = "return validate_submit()"/>';
     echo '</div>';

        echo '</form>';                     
    
 pg_close($dbconn4); ?> 
 </div>

 



     
</body>
</html>