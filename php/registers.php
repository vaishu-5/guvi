<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_guvi";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $select = "SELECT email from users WHERE email = '$email'";
    $sql_select = $conn->query($select);
    $row = $sql_select->fetch_assoc();
    if ($row["email"] == $email) {
        echo 'Email already exists';
    }
    else{
        $sql = "INSERT INTO users (id,username,email) VALUES ('', '$username', '$email')"; 


        if ($conn->query($sql) === TRUE) {
            echo "Registered successfully";
        } else {
            echo "Error profile: " . $conn->error;
        }
    }
}

$conn->close();

?>
