<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title> Home </title>
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
      <li><a href="myFriends.php">Search Users</a></li>
      <li><a id="logout" href="login.php">Logout</a></li>
    </ul>
  </div>
  <h2 style="font-weight: bold;"> Connecting and sharing with people since 2017 </h2>

  <div id = "comments"></div>
  <span class="textArea">
  <!--<label>Text Area</label>-->
  <textarea
          id = "message"
          rows = "3"
          cols = "80"
          placeholder="Your text here">
  </textarea>
  <input id="send" type="submit" value="Send">
  </span>
<!-- <script src="jasons/comments.js" charset="utf-8"></script> -->
<script type="text/javascript" src="jasons/jquery.js"></script>
<script type="text/javascript" src="jasons/comments.js"></script>
</body>
</html>
