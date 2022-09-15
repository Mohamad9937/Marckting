<?php
include('conn.php');
if(isset($_POST["send_me"])){
$name=$_POST['w3lName'];
$email=$_POST['w3lSender'];
$job=$_POST['w3lSubject'];
$massage=$_POST['w3lMessage'];
$data_send=date("Y/m/d");
$time_send=date("h:i:s");
$query=mysqli_query($conn,"INSERT INTO `countact`(`name`, `email`, `job`, `massage`, `data`, `time`)
 VALUES ('$name','$email','$job','$massage','$data_send','$time_send')");

header('location: ../../index.html');
}

header('location: ../../index.html');
?>