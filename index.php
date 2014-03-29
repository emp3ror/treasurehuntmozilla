<?php
session_start(); 
?>
<html>
<head>
    <title></title>
</head>
<body>
<?php
if ($_SESSION['name']) {
    echo "anyth";
    // echo $_SESSION['name'];
    include 'questions.php';

}
else {
    ?>
    <img src="images/treasure.png" alt="first page treasure hunt">
    <div>
        <form method='post' action="teamname.php">
            <label>team name:</label> <input name='teamname' type='text'>
            <input type='submit'>
        </form>
    </div> 

<?php
}
?>

   
</body>
</html>