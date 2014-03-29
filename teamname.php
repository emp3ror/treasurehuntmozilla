<?php
    session_start();
    $name = $_POST['teamname'];
    $_SESSION['name'] = $name;
    echo "name = ".$name."</br>";
    mysql_connect("localhost", "root", "") or die(mysql_error());
    echo "Connected to MySQL<br />";
    mysql_select_db("treasurehunt") or die(mysql_error());
    mysql_query("INSERT INTO user (teamname) VALUES('$name')") or die(mysql_error());
    header("Location: index.php")
?>