<?php
    session_start();
    $data = array();
    $count = 0;
    mysql_connect("localhost", "root", "") or die(mysql_error());
    // echo "Connected to MySQL<br />";
    mysql_select_db("treasurehunt") or die(mysql_error());
    $result = mysql_query('SELECT * FROM user') or die(mysql_error());
        
        while($row = mysql_fetch_array( $result )) {
            //echo '['.$row[teamname].','.$row[level].']';
            //echo $row
            // $data .= $row;
            $data[$count] = array($row[teamname], $row[level] );
            $count++;
        }
          // print_r($data);
        echo json_encode($data);
?>