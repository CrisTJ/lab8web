<!DOCTYPE html>
<html lang="en-US">

<head>
   <meta charset="UTF-8">
  <title> Search Users </title>
  <link rel="stylesheet" href="css/style.css" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Palanquin:200" rel="stylesheet">
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
  <div/>
  <span font-weight: bold>
    <h2> Connecting and sharing with people since 2017 </h2>
  </span>
<div>
  <input id = "searchText" class="searchBar"  type="text" name="search" placeholder="Search..">
  <input id="searchButton" type="submit" value="Search">
  <p id="userProfile"></p>
</div>
<div id='searchResults'>

</div>

<script type="text/javascript" src="jasons/jquery.js"></script>
<script type="text/javascript" src="jasons/searchUsers.js"></script>
</body>
</html>
