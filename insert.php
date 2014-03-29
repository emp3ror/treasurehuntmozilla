<?php
    session_start();
    mysql_connect("localhost", "root", "") or die(mysql_error());
    echo "Connected to MySQL<br />";
    mysql_select_db("treasurehunt") or die(mysql_error());

    $name = $_SESSION['name'];
    $level = $_POST['level'];
    $result = mysql_query("UPDATE user SET level='$level' WHERE teamname='$name'") or die(mysql_error()); 
?>