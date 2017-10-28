<?php
//session_start();
header('Content-type: application/json');
header('Accept: application/json');

function doDBconnection(){
  $serverName = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "labDB";

  $conn = new mysqli($serverName,$username,$password,$dbname);
  if($conn->connect_error){
    return null;
  }else{
    return $conn;
  }
}
function doLogin($username,$uPass){
  $conn = doDBconnection();

  if($conn != NULL){
    $sqlLogin = "SELECT uName
                 FROM Users
                 WHERE uName = '$username'";

    $result = $conn->query($sqlLogin);
    if($result->num_rows>0){
      while($row = $result->fetch_assoc()){
        $response = array("uName"=>$row["uName"]);
      }
      $_SESSION['is_open'] = "TRUE";
      $_SESSION['uName'] = $username;
      $conn -> close();
      return array("status" => "Work");
    }else{
      $conn -> close();
      return array("status" => "Please verify credentials");
    }
  }else{
    //echo "i";
    $conn -> close();
    return array("status" => "Failed to connect to the database");
  }
}

function doLogout(){

}

function doRegister($username,$uPass,$fName,$lName,$uMail,$uGenero,$uCountry){
  $conn = doDBconnection();
  if($conn != NULL){
    $sqlRegister = "SELECT *
                    FROM Users
                    WHERE uName = '$username'";
    $qResult = $conn -> query($sqlRegister);
    if($qResult->num_rows == 0){
      //echo $uGenero;
      $sqlLogin = "INSERT INTO Users
                   VALUES  ('$username', '$uPass', '$fName', '$lName','$uMail','$uGenero','$uCountry')";
      $qResult = $conn -> query($sqlLogin);
      if($qResult === TRUE){
        $_SESSION['is_open'] = "TRUE";
        $_SESSION['uName'] = $username;
        $conn -> close();
        return array("status" => "Work");
      }else{
        $conn -> close();
        return array("status" => "Registration failed");
      }
    } else{
      $conn -> close();
      return array("status" => "Please choose a diferent username. That username is taken");
    }
    }else{
    $conn -> close();
    return array("status" => "Failed to connect to the database");
  }
}

function doLoadComments(){
  $conn = doDBconnection();
  $resultArr = array();
  if($conn != NULL){
    $sqlComments = "SELECT uName, comment
                    FROM comments";
    $result = $conn->query($sqlComments);
    if($result->num_rows>0){
      while($row = $result->fetch_assoc()){
        $response = array("uName"=>$row["uName"],"comment"=>$row["comment"]);
        array_push($resultArr,$response);
      }
      $conn -> close();
      return $resultArr;
    }else{
      $conn -> close();
      return $resultArr;
    }
  }else{
    $conn -> close();
    return $resultArr;
  }
}

function doAddComment($txComment){
  $conn = doDBconnection();
  if($conn !=  NULL){
    $user = $_SESSION['uName'];
    $sqlComments = "INSERT INTO comments (uName, comment)
                    VALUES ('$user','$txComment')";
    $resultComment = $conn -> query($sqlComments);
    if($resultComment === TRUE){
      $conn -> close();
      return array("status" => "Work");
    }else{
      $conn -> close();
      return array("status" => "Failed to add a comment");
    }
  }else{
    $conn -> close();
    return array("status" => "Failed to connect to the database");
  }
}

function doAddFriend($newFriend,$currentUser){
  $conn = doDBconnection();
  if($conn != NULL){
    // TODO: Prepared statments (MASSIVE SECURITY BUG!)
    $sqlFriend = "INSERT INTO friendList (idFriend, uName, status)  VALUES('$newFriend','$currentUser','Pending')";
    $result = $conn->query($sqlFriend);
    if($result){
      $conn->close();
      return ['status' => 'Work'];
    }
  }
  else{
    $conn->close();
    return ['status' => "Doesn't work"];
  }
}

function doSearchUsers($friend, $currentUser){
  $conn = doDBconnection();
  $resultArr = array();
  $friendSearch = $friend . "%"; //permite buscar parte del nombre del usuario o email
  //y no necesariamente hace que el usuario escriba tooooodo
  if($conn != NULL){
    $sqlUser = "SELECT *
                FROM Users
                Where ( uName LIKE '$friendSearch'
                  OR  uEmail LIKE '$friendSearch' )
                AND uName <> '$currentUser'"
              ;
    $result = $conn->query($sqlUser);
    if($result->num_rows>0){
      while($row = $result->fetch_assoc()){
        $response = array("username"=>$row["uName"],
                          "fname"=>$row["fName"],
                          "lname"=>$row["lName"],
                          "email"=>$row["uEmail"],
                          "gender"=>$row["uGender"],
                          "country"=>$row["uCountry"]);
        array_push($resultArr,$response);
      }
      $conn -> close();
      return $resultArr;
    }else{
      $conn -> close();
      return $resultArr;
    }
  }else{
    $conn -> close();
    return $resultArr;
  }
}

?>
