<?php
 
  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
  //include 'DB.php';
  //$con = mysql_connect($host,$user,$pass);
  //$dbs = mysql_select_db($databaseName, $con);

  header('Access-Control-Allow-Origin: *');

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

  //--------------------------------------------------------------------------
  // 2) Query database for data
  //--------------------------------------------------------------------------

  
$occp = $_POST['occ']; 

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
$result = pg_query($dbconn4, $sql);
while ($row=pg_fetch_array($result)) {
    echo $row[1];
 }

 

  pg_close($dbconn4);


 /*$sql = "Select * from (
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
             echo '<div class="midskill">';
             while ($res = pg_fetch_row($resultSkill)) {
                 $resultsk = $res[1];
                 if($res[3] == 1){
                  echo '<input type="checkbox" name="skill[]" value = "'. $resultsk .'" checked>'. $resultsk .'</br>';  
                 }else{
                  echo '<input type="checkbox" name="skill[]" value = "'. $resultsk .'">'. $resultsk .'</br>';   
                 }
             }
              echo '</div>'; 

              */


?>