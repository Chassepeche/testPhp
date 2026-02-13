<!DOCTYPE html>
<?php require "../config.php";
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT password FROM users WHERE username = '$username'";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $hash = $row['password'];
    $isPassWordCorrect = password_verify($password, $hash);

    echo($isPassWordCorrect);

?>
<html>
    

</html>
