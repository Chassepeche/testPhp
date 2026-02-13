<?php require "../config.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, password, sudo) VALUES ('$username', '$password', '0')";

    $conn->query($sql);

    echo("$username, $password");
?>