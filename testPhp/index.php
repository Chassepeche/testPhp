<?php

    session_start();
    if(isset($_SESSION["logged"]) && $_SESSION["logged"]==true)
    {
        header("Location: /connected_user/index.php");
        exit();
    }
    else
    {
        header("Location: /guest/index.php");
        exit();
    }

?>