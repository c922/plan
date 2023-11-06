<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "role_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Escape user inputs for security
$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$usertype = mysqli_real_escape_string($conn, $_POST['usertype']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$registration_date = mysqli_real_escape_string($conn, $_POST['registration_datetime']);
$phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);

// Check if the username already exists
$sql_check = "SELECT username FROM users WHERE username='$username'";
$result = $conn->query($sql_check);
if ($result->num_rows > 0) {
    header("Location: registerform.php?user_exist=true");
} else {
    // Attempt insert query execution
    $sql = "INSERT INTO users (first_name, last_name, username, password, usertype, gender, registration_datetime, phone_number) 
            VALUES ('$first_name', '$last_name', '$username', '$password', '$usertype', '$gender', '$registration_date', '$phone_number')";

    if ($conn->query($sql) === TRUE) {
       header('Location:admin.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
