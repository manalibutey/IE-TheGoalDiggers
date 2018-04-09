<?php
function OpenCon()
{
    /*DB connection*/
    $dbhost = 'careertreetest.cytukzawpi8t.ap-southeast-2.rds.amazonaws.com';
    $dbuser = 'careertreetest';
    $dbpass = 'careerree2018';
    $port = 5432;
    $dbname ='ctdb_test';
    $conn = "host=careertreetest.cytukzawpi8t.ap-southeast-2.rds.amazonaws.com port=5432 dbname=ctdb_test user=careertreetest password=careertree2018";
    $dbconn = pg_connect($conn);
    if(! $conn )
    {
        echo "error";
    }
    return $dbconn;
    /*DB connection end*/
}

function CloseCon($dbconn)
{
    pg_close($dbconn);
}
?>