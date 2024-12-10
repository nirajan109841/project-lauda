<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login & Signup Form</title>
  <link rel="stylesheet" href="css/loginstyle.css">
</head>
<body>
<div class="wrapper">
  <div class="title-text">
    <div class="title login">Login Form</div>
    <div class="title signup">Signup Form</div>
  </div>
  <div class="form-container">
    <div class="slide-controls">
      <input type="radio" name="slide" id="login" checked>
      <input type="radio" name="slide" id="signup">
      <label for="login" class="slide login">Login</label>
      <label for="signup" class="slide signup">Signup</label>
      <div class="slider-tab"></div>
    </div>
    <div class="form-inner">
      <!-- Login Form -->
      <form action="#" class="login">
        <div class="field">
          <input type="email" placeholder="Email" aria-label="Email" required>
        </div>
        <div class="field">
          <input type="password" placeholder="Password" aria-label="Password" required>
        </div>
        <div class="pass-link"><a href="#">Forgot password?</a></div>
        <div class="field btn">
          <div class="btn-layer"></div>
          <input type="submit" value="Login">
        </div>
        <div class="signup-link">Not a member? <a href="#">Signup now</a></div>
        

        <!--Foot  er start-->
<div class="row footer">

<div class="col-md-3 box">
<a href="AdminLogin.php" data-toggle="modal" data-target="#login">Admin Login</a></div>
<div class="col-md-3 box">
<a href="http://www.projectworlds/online-examination" target="_blank">About us</a>
</div>

</div>


      </form>

      <!-- Signup Form -->
      <form method="post" action="#" class="signup">
        <div class="field">
          <input type="text" placeholder="Full Name" aria-label="Full Name" required>
        </div>
        <div class="field gender-radio">
          <input class="radio-input" type="radio" name="gender" value="Male" id="myradio1" required>
          <label class="radio-label" for="myradio1">Male</label>
          <input class="radio-input" type="radio" name="gender" value="Female" id="myradio2" required>
          <label class="radio-label" for="myradio2">Female</label>
        </div>
        <div class="field">
          <input type="text" placeholder="College Name" aria-label="College Name" required>
        </div>
        <div class="field">
          <input type="email" placeholder="Email" aria-label="Email" required>
        </div>
        <div class="field">
          <input type="tel" placeholder="Phone Number" aria-label="Phone Number" required>
        </div>
        <div class="field">
          <input type="password" placeholder="Password" aria-label="Password" required>
        </div>
        <div class="field">
          <input type="password" placeholder="Confirm Password" aria-label="Confirm Password" required>
        </div>
        <div class="field btn">
          <div class="btn-layer"></div>
          <input type="submit" value="Signup">
        </div>
      </form>
    </div>
  </div>
</div>




<script src="../main.js"></script>
</body>
</html>
