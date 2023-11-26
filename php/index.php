<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    $email = $_SESSION["email"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="shortcut icon" href="../assets/favicon.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/profile.css">
</head>
<body>
        <div class='logo'>
        <img src="../assets/right.png" alt="www.google.com" id="login-container-right-logo-image">
            <div>guvi</div>
        </div>
        <div class="card">
                <h1>User Profile</h1>
                <img src="../assets/person.svg" alt="Avatar" style="width:100%;height:200px;">
                <div class="container">
                <h4><b><?php echo $username; ?></b></h4>
                <p><?php echo $email; ?></p> 
                <div class='btn'>
                   <form action='profile.html' method='get'>
                      <button type="submit">Update Profile</button>
                   </form>
                  <form action='logout.php'>
                        <button>Logout</button>
                  </form>
                </div>
                </div>
        </div>
        
  
</body>
</html>
