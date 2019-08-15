<?php

require 'config/database.php';
require 'control/authenController.php';

$one = true;
$zero = false;
$employees = array();
$customers = array();

if(session_status() == PHP_SESSION_ACTIVE){
  global $conn;
$employee = "SELECT * FROM users WHERE employee = '$one'";
$result = mysqli_query($conn, $employee);
$i = 0;
if(mysqli_num_rows($result) > 0){
  while($r = mysqli_fetch_assoc($result)){
    $employees[$i] = array(
      'firstName' => $r['firstName'],
      'lastName' => $r['lastName'],
      'email' => $r['email'],
      'phoneNumber' => $r['phoneNumber']
    );
    $i++;
  }
}
$customer = "SELECT * FROM users WHERE employee='$zero'";
$response = mysqli_query($conn, $customer);
$j = 0;
if(mysqli_num_rows($response) > 0){
  while($r = mysqli_fetch_assoc($response)){
    $customers[$i] = array(
      'firstName' => $r['firstName'],
      'lastName' => $r['lastName'],
      'email' => $r['email'],
      'phoneNumber' => $r['phoneNumber'],
      'id' => $r['id']
    );
    $i++;
  }
}
// implement edit !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
if(isset($_POST['user_id'])){
  $output = 'gg';
  echo $output;
}
}

?>
