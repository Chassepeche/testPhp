<!DOCTYPE html>
<?php require "../config.php";
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT password FROM users WHERE username = '$username'";
    echo "SQL: $sql<br>";

    $result = $conn->query($sql);
    echo "Résultat trouvé: " . $result->num_rows . "<br>";
    $row = $result->fetch_assoc();
    $hash = $row['password'];
    $isPassWordCorrect = password_verify($password, $hash);

    echo($isPassWordCorrect);

?>
<html>
    

</html>
