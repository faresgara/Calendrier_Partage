<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title>Sign Up</title>
</head>
<body>
        <div class="login">
            <div class="center">
                <a href="home2.html" class="ret">Return to Home page</a>
                <h2>Sign Up</h2>
                <form method="POST" action="register_post.php">
                 <div class="user_error"> 
                  <?php if(isset($user_error)){
                    echo $user_error;


                  }  ?>
                  </div>
                  <div class="txt_field">
                    <input type="text" name="username" required>
                    <span></span>
                    <label>Username</label>
                  </div>
                  <div class="txt_field">
                    <input type="email" name="email" required>
                    <span></span>
                    <label>Email</label>
                  </div>
                  <div class="txt_field">
                    <input type="password" name="password" required>
                    <span></span>
                    <label>Password</label>
                  </div>
                  <div class="txt_field">
                    <input type="password" name="password1" required>
                    <span></span>
                    <label>Confirm Password</label>
                  </div>
                  <input type="submit" value="SIGN UP" name="submit">
                  <div class="signup_link">
                    Already have an account ? <a href="login.php">Login</a>
                  </div>
                </form>
              </div>
        </div>
</body>
</html>