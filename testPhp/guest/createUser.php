<!DOCTYPE html>
<?php require "../config.php";

    $username = $_POST['username'];
    $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password, sudo) VALUES ('$username', '$hash', '0')";

    $conn->query($sql);
?>

<html>
    <head><title>Bienvenue</title></head>
    <body><h1>Succès</h1><button onclick="redirect()" class="button">Se connecter</button></body>
    <script>
        function redirect()
        {
            location.href = "index.php" ;
        }
    </script>
</html>
