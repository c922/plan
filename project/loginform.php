
<!DOCTYPE html>
<html lang="en">
<head>      
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="/cssfiles/login.css">

     <script>
        function validateForm(event) {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            if (username.trim() === '' || password.trim() === '') {
                alert('Please enter both username and password.');
                event.preventDefault();  // Prevent form submission
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
 
    <div class="container">
        
           
            <h1>Login</h1>
        
        
            <div class="loginbody">
            <form action="login.php" method="post" onsubmit="return validateForm(event)">
                
               
            <div class="input-box" >
                
                <input type="text" placeholder="Username" name="username" id="username" >
            </div>
            <div class="input-box" >
                
                <input type="password" placeholder="Date hired" id="password" class="form-control" name="password">
            </div>
            <div class="input-box button" >
            <input type="submit" value="login" name="login_btn">
            </div>
            
         </form>
            </div>
    </div>
    </div>
  </div> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>