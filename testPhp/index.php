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
    die("Connection failed")
}

$username = SELECT username FROM users WHERE ID = 1;

echo "Hello $username";
?>

</body>
</html>