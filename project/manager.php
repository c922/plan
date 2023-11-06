<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['usertype'] !== 'manager') {
    header("Location: loginform.php");
    exit;
}
?>

<!-- Your Manager Dashboard HTML here -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>jollibee || Manager</title>
    <link rel="stylesheet" type="text/css" href="/cssfiles/manager.css">
    <script src="https://kit.fontawesome.com/0ef9f44f19.js" crossorigin="anonymous"></script>
</head>
<body>
    <input type="checkbox" id ="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">

    <header>Manager page</header>
    <ul>
    <li><a href="#"><i class="fas fa-calendar-week"></i>Schedule</a></li>
    <li><a href="#"><i class="fas fa-envelope"></i>Req-resday</a></li>
    <li><a href="#"><i class="fa-solid fa-pen"></i>Requirements</a></li>
    <li><a href="#"><i class="fas fa-qrcode"></i>Crew avalability</a></li>
    
    </ul>
 </div>
 <div  class="container_logout">
    <div class="logout">
    <ul>
    <li> <a href="loginform.php"><i class="fa-solid fa-power-off"></i> Logout</a></li>
    </ul>
    </div>
</div>
</body>
</html>