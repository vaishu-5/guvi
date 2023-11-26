<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_guvi";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $passwords = $_POST["passwords"];
    $email = $_POST["email"];

    
    $sql = "SELECT * FROM users WHERE passwords='$passwords' AND email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        $user = $result->fetch_assoc();

        
        $_SESSION["username"] = $user["username"];
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["email"] = $email;
        $_SESSION["passwords"] = $passwords;


        
        if (!isset($_SESSION["session_token"])) {
            
            $session_token = bin2hex(random_bytes(32));

            
            $_SESSION["session_token"] = $session_token;

            
            $user_id = $user["id"];
            $update_token_sql = "UPDATE users SET session_token='$session_token' WHERE id='$user_id'";
            $conn->query($update_token_sql);

            
            header("Location: index.php");
            exit();
        } else {
            
            echo "<h1>You are not authenticated user</h1>";
            exit();
        }
    } else {
        echo "Login failed. Invalid username or password.";
    }
}


$conn->close();
session_destroy();
?>
