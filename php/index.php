<?php


session_start();
if (isset($_SESSION["username"])) {
        $id = $_SESSION["user_id"];
        $username = $_SESSION["username"];
        $email = $_SESSION["email"];

        echo $id;
        echo $username;
        echo $email;
}
?>