<?php
include('conn.php');
session_start();
if(isset($_POST["login"])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    /*check email*/
    $check_email_login=mysqli_query($conn,"SELECT `email` FROM `user` WHERE `email`='$email'");
     /**check password */
    $check_password_login=mysqli_query($conn,"SELECT `password` FROM `user` WHERE `password`='$password'");
      if(!$check_email_login){
        echo
        "
        <script>
          alert('Invalid Image Extension');
        </script>
        ";
  }elseif(!$check_password_login){
    echo
    "
    <script>
      alert('Invalid Image Extension');
    </script>
    ";
  }else{
    $sql=mysqli_query($conn,"SELECT `id`,`username`,`type` FROM `sign_up`
     WHERE `email`='$email' AND `password`='$password'");
     $row=mysqli_fetch_array($sql);

    if($row['type']==="admin"){
      $_SESSION['user_id']=$row['id'];
      $_SESSION['name_user']=$row['username'];

    }else{
      $_SESSION['user_id']=$row['id'];
      $_SESSION['name_user']=$row['username'];


    }
  }
}
?>