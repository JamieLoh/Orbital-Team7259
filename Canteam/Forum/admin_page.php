<?php

session_start();
if (!isset($_SESSION['email'])) {
    header("Location: ../Register and Login/index.php");
    exit();
} 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="background: #fff;">

    <div class="box">
        <h1>Welcome, <span><?= $_SESSION['name']; ?></span></h1>
        <p>This is an <span>admin</span>page</p>
        <p>currently haven't finished yet</p>
        <button onclick="window.location.href='../Register and Login/logout.php'">Logout</button>
    </div>
    
</body>

</html>