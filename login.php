<?php require_once('header.php') ?>

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

<?php require_once('footer.php') ?>
