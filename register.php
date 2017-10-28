<!DOCTYPE html5>
<html lang="en-US">
<head>
   <meta charset="UTF-8">
  <title> Register </title>
  <link rel="stylesheet" href="css/style.css" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Palanquin:200" rel="stylesheet">
</head>
<body>
  <img src="images/jammer_logo.png" title="Logo" />
  <h1> The Jammer </h1>
  <div>
    <ul>
      <li><a href="login.html">Login</a></li>
      <li><a href="register.html">Register</a></li>
    </ul>
  <div/>
  <span font-weight: bold>
    <h2> Connecting and sharing with people since 2017 </h2>
  </span>

<div class="content">

<div class="register">
  <form id='registerForm'>
    <fieldset>
      <legend> Register </legend>
    <p> First Name:<br>
    <input id= 'regName' type="text" name="firstname" required>
  </p>
    <p> Last Name:<br>
    <input id= 'regLastN' type="text" name="lastname" required>
  </p>
    <p> User Name:<br>
    <input id= 'regUser' type="text" name="username" required>
  </p>
    <p> Email:<br>
    <input id= 'regEmail' type="text" name="email" required>
  </p>
    <p> Password:<br>
    <input id='regPassword' type="text" name="password" required>
  </p>
    <p> Password confirmation:<br>
    <input id= 'regPassconf' type="text" name="passwordconfirmation" required>
    <p/>
    <p>Country<br/>
      <select id= 'Country'>
        <option value = "0" selected hidden>Select a Country...</option>
        <option value="1">Argentina</option>
        <option value="2">Australia</option>
        <option value="3">Belgica</option>
        <option value="4">Brazil</option>
        <option value="5">Canada</option>
        <option value="6">Chile</option>
        <option value="7">Dinamarca</option>
        <option value="8">Estados Unidos</option>
        <option value="9">Ecuador</option>
        <option value="10">Finlandia</option>
        <option value="11">Francia</option>
        <option value="12">Grecia</option>
        <option value="13">Irlanda</option>
        <option value="14">Italia</option>
        <option value="15">Mexico</option>
      </select>
    </p>
    <p>
    <input id = 'regM' type="radio" name="Gender" value="Male"> Male<br>
    <input id = 'regF' type="radio" name="Gender" value="Female"> Female<br>
  </p>
  <p>
    <input id= "register" type="submit" value="Register">
    <a href="home.html" onclick="validateReg()"></a>
  </p>
  </fieldset>
  </form>
</div>
</div>
<script type="text/javascript" src="jasons/jquery.js"></script>
<script type="text/javascript" src="jasons/registro.js"></script>
</body>
</html>
