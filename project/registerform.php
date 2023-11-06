
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="/cssfiles/register.css"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body >

<div class="container">
    <h2>Registration</h2>
    <?php
        if(isset($_GET['user_exist'])){
            // Display Bootstrap alert if the user already exists
            echo '<div class="alert alert-danger" role="alert">';
            echo 'Username already exists. Please choose a different username.';
            echo '</div>';
        }
        ?>



    <form action="register.php" method="post">
        <div class="input-box">
        
        <input type="text" id="first_name" name="first_name" placeholder="First name" required><br><br>
        </div>
        <div class="input-box">
        
        <input type="text" id="last_name" name="last_name" placeholder="Last name" required><br><br>
        </div>
        <div class="gender">
        <label for="gender">Gender</label><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br><br>
        </div>
        <div class="input-box">
        
        <input type="text" id="username" name="username" placeholder="Username" required><br><br>
        </div>
        <div class="input-box">
        
        <input type="password" id="password" name="password" placeholder="Date hired" required><br><br>
        </div>
       
        <div class="usertype">
        <label for="usertype">User Type</label>
        <select id="usertype" name="usertype">
            <option value="admin">Admin</option>
            <option value="crew">Crew</option>
            <option value="manager">Manager</option>
        </select><br><br>
        </div>
        <div class="input-box">
        
        <input type="text" id="number" name="phone_number" placeholder="Phone Number" required><br><br>
        </div>
        <div class="input-box">

        <label for="datetime">Date and Time</label>
        <input type="datetime-local" id="datetime" name="registration_date"><br><br>

        <div class="input-box button">
        <input type="submit" value="Register">
        </div>
    </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
