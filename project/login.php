<?php
$conn = new mysqli("localhost", "root", "", "role_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $usertype = $row['usertype'];
    
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['usertype'] = $usertype;

    if ($usertype === 'admin') {
        header("Location: admin.php");
    }
     if ($usertype === 'crew'){
        header("Location: crew.php");
    } elseif ($usertype === 'manager') {
        header("Location: manager.php");
    }else {
       
    }
} 
else {
    header("Location: loginform.php?login_error=true");
}

$conn->close();
?>
