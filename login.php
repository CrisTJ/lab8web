<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8"/>
  <title> Jammer Login </title>
  <link rel="stylesheet" href="css/style.css" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Palanquin:200" rel="stylesheet">
</head>
<body>
  <img src="images/jammer_logo.png" title="Logo" alt="This is the logo"/>
  <h1> The Jammer </h1>
  <div>
    <ul>
      <li><a href="login.php">Login</a></li>
      <li><a href="register.php">Register</a></li>
    </ul>
  </div>
  <h2 style="font-weight: bold;"> Connecting and sharing with people since 2017 </h2>
<div class="content">
  <div class="login">
    <form action="#" id="loginform">
      <fieldset>
        <legend>Login</legend>
        <p> Email:<br> <input id= "logUsername" type="text" name="uName" required> </p>
        <p> Password:<br> <input id="logPassword" type="text" name="password" required> </p>
        <p>
          <input id="loginButton" value="Login" type="submit" name="login"><br>
          <input id= "rememberMe" type="checkbox" name="rememberMe">Remember me<br>
        </p>
      </fieldset>
    </form>
  </div>
</div>

<script type="text/javascript" src="jasons/jquery.js"></script>
<script type="text/javascript" src="jasons/login.js"></script>
</body>
</html>
