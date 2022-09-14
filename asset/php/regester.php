<?php
include('conn.php');
if(isset($_POST["join"])){

    $name = $_POST["name"];
    $email= $_POST['email'];
    $passwordUS= $_POST['password'];
    $repasswordUS= $_POST['repassword'];
    $data=$_POST['data'];
    $type=$_POST['select'];
    $data_join=date("Y/m/d");
    $time_join=date("h:i:s");
    $f=" "; 



      if($passwordUS === $repasswordUS){
      $query=mysqli_query($conn,"INSERT INTO `user`(`username`,`email`,`password`,`data`,`phone`,`data_join`,`data_time`,`image`,`type`)
       VALUES ('$name','$email','$passwordUS','$data',' ','$data_join','$time_join',' ','$type')");
       if($query){
        header('location: ../../login&&Regester.html');
       }else{
        header('location: ../../login&&Regester.html');
    
       }
    }else{
        header('location: ../../login&&Regester.html');
    }

}
