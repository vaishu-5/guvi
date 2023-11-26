<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_guvi";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



    $username = $_POST["username"];
    $email = $_POST["email"];
    $passwords = $_POST["passwords"];

    $select = "SELECT email from users WHERE email = '$email'";
    
    if ($conn->query($select)->fetch_assoc()>0) {
        echo 'Email already exists';
    }
    else{
        $sql = "INSERT INTO users (id,username,email,passwords) VALUES ('', '$username', '$email', '$passwords')"; 


        if ($conn->query($sql) === TRUE) {
            echo "Registered successfully";
        } else {
            echo "Error profile: " . $conn->error;
        }
    }


$conn->close();

?>
