<?php
  //--------------------------------------------------------------------------
  // Example php script for fetching data from mysql database
  //--------------------------------------------------------------------------
  //$host = "localhost";
  //$user = "root";
  //$pass = "root";

  //$databaseName = "ajax01";
  //$tableName = "variables";

  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
  //include 'DB.php';
  //$con = mysql_connect($host,$user,$pass);
  //$dbs = mysql_select_db($databaseName, $con);

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
  //$result = mysql_query("SELECT * FROM $tableName");          //query
  //$array = mysql_fetch_row($result);                          //fetch result  

$occ = $_POST['occp']; 
//echo "lkjhgfdsasdgfhgjhkj"; 
//echo $occ;
echo $occ;

 
//$array = pg_fetch_row($result);  
//echo $array;

  //--------------------------------------------------------------------------
  // 3) echo result as json 
  //--------------------------------------------------------------------------
  //echo json_encode($array);

?>