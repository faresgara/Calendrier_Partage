<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
        <div class="login">
            <div class="center">
              <div class="ret">
                <a href="Home2.html">Return to Home page</a></div>
                <h2>Login</h2>
                <form method="post" action="login_post.php" >
                
                <?php if(isset($message_error)){
                    echo $message_error;


                  }  ?>

                  <div class="txt_field">
                    <input type="text" name="email" required>
                    <span></span>
                    <label>Email</label>
                  </div>
                  <div class="txt_field">
                    <input type="password" name="password" required>
                    <span></span>
                    <label>Password</label>
                  </div>
                  <div class="pass">Forgot Password?</div>
                  <input type="submit" value="LOGIN" name="submit">
                  <div class="signup_link">
                    Not a member? <a href="signup.php">Signup</a>
                  </div>
                </form>
              </div>
        </div>
</body>
</html>