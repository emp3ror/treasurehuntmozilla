<?php
    session_start();
    $data  = array();
    $count = 0;
    mysql_connect("localhost", "root", "") or die(mysql_error());
    
    mysql_select_db("treasurehunt") or die(mysql_error());
    $result = mysql_query('SELECT * FROM user') or die(mysql_error());
        
    ?>
    <div>
    <?php
        while($row = mysql_fetch_array( $result )) {
            //echo '['.$row[teamname].','.$row[level].']';
            //echo $row
            // $data .= $row;
            $data[$count] = array($row[teamname], $row[level]);
            $count++;
?>
            <div><?php echo $row[teamname]." ==="; ?><?php echo $row[level]; ?></div>
            
            <?php
        }
?>
</div>
<?php

        // print_r($data);
        // echo $data;
        // echo json_encode($data);
?>

<script type="text/javascript">
    setInterval(function () {
        location.reload();
    },2000);
</script>