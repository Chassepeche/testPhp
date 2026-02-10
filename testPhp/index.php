<!DOCTYPE html>
<html>
<body>
 
<?php
//connection BDD

$db_name = "louisducourneau_testPHP";
$db_username = "louisducourneau_phpUser";
$db_password = "t%^Rw{NFfC0;";
$db_servername = "localhost";

$conn = new mysqli($db_servername, $db_username, $db_password, $db_name);

if($conn->connect_error){
    die("Connection failed");
}

$sql = "SELECT INTO `users` (`ID`, `username`, `password`, `sudo`)";

$result = $conn->query($sql);

$row = $result->fetch_assoc();

echo $row;

//echo "Hello";
?>

</body>
</html>