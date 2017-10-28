<!DOCTYPE html>
<html lang="en-US">

<head>
   <meta charset="UTF-8">
  <title> Profile </title>
  <link rel="stylesheet" href="css/style.css" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Palanquin:200" rel="stylesheet">
  <meta charset="utf-8"/>
</head>

<body>
  <img src="images/jammer_logo.png" title="Logo" />
  <h1> The Jammer </h1>
  <div>
    <ul>
      <li><a href="home.html">Home</a></li>
      <li><a href="profile.html">Profile</a></li>
      <li><a href="searchUsers.html">Search Users</a></li>
      <li><a id=logout href = "login.html">Logout</a></li>
    </ul>
  </div>
  <span font-weight: bold>
    <h2> Connecting and sharing with people since 2017 </h2>
  </span>
  <div>
    <div id="profileSection" class="notSelectedSection"> </div>
    <div id="userProfile" class="infoProfile">User:  </div>
    <div id="nameProfile" class="infoProfile">Name:  </div>
    <div id="emailProfile" class="infoProfile">Email:  </div>
    <div id="GenderProfile" class="infoProfile">Gender:  </div>
    <div id="CountryProfile" class="infoProfile">Country:  </div>
  </div>

<script type="text/javascript" src="jasons/jquery.js"></script>
<script type="text/javascript" src="jasons/profile.js"></script>
</body>
</html>
