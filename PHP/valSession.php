<?php

  session_start();
  header('Content-type: application/json',true);
  if(isset($_SESSION['is_open'])){

    $response = array("session" => 'TRUE' );
    echo json_encode($response);
  }else{
    $response = array("session" => 'FALSE' );
    echo json_encode($response);
  }
