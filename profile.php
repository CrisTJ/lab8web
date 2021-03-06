<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title> Profile </title>
  <link rel="stylesheet" href="css/style.css" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Palanquin:200" rel="stylesheet">
</head>
<body>
  <img src="images/jammer_logo.png" title="Logo" />
  <h1>The Jammer</h1>
  <div>
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="profile.php">Profile</a></li>
      <li><a href="searchUsers.php">Search Users</a></li>
      <li><a href="myFriends.php">Friend Requests</a></li>
      <li><a id="logout" href="login.php">Logout</a></li>
    </ul>
  </div>
  <h2 style="font-weight: bold;"> Connecting and sharing with people since 2017 </h2>

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
