<?php 
$hname = 'localhost';
$uname = 'root';
$pass = '';
$db = 'myhotel';
$con = mysqli_connect($hname,$uname,$pass,$db);
if(!$con){
    die("cannot connect to database".mysqli_connect_error());
}

function filteration($data){
    foreach($data as $key => $value){
      $data[$key] = trim($value);
      $data[$key] = stripslashes($value);
      $data[$key] = htmlspecialchars($value);
      $data[$key] = strip_tags($value);
    }
    return $data;
}

?>
