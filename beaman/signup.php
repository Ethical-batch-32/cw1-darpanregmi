<?php include('database.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Signup Form</title>
    <link rel="stylesheet" href="signup.css">
  </head>
  <body>
    <div class="center">
      <h1>Signup</h1>
      <form method="post" action="signup.php">
        <?php include('errors.php'); ?>
        <div class="txt_field">
          <input type="text" required name="username" value="<?php echo $username; ?>">
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="email" required name="email" value="<?php echo $email; ?>">
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" required name="password_1">
          <span></span>
          <label>Password</label>
        </div>
        <div class="txt_field">
          <input type="password" required name="password_2">
          <span></span>
          <label>Confirm Password</label>
        </div>
        <input type="submit" value="Signup" name="signup_user">
        <div class="login_link">
          Already have an account? <a href="login.php">Login Here</a>
        </div>
      </form>
    </div>
  </body>
</html>