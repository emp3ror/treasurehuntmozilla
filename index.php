<?php
session_start(); 
?>
<html>
<head>
    <title></title>
     <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
if ($_SESSION['name']) {
    // echo "anyth";
    // echo $_SESSION['name'];
    include 'questions.php';

}
else {
    ?>
    <img src="images/treasure.png" alt="first page treasure hunt">
    <div class="first">
        <form method='post' action="teamname.php">
            <input name='teamname' type='text' placeholder="team name">
            <input type='submit'>
        </form>
    </div> 

<?php
}
?>

   
</body>
</html>