<?php
  $firstname=$_POST['firstname'];
  $email=$_POST['email'];
  $phonenumber=$_POST['number'];
  $message=$_POST['message'];
  $conn =new mysqli('localhost','root','','hello');
  if($conn->connect_error){
      die('Connection Failed : '.$conn->connect_error);
  }
  else{
      $stmt=$conn->prepare("insert into registration(firstname,email,number,message) values(?,?,?,?)");
      $stmt->bind_param("ssis",$firstname,$email,$phonenumber,$message);
      $stmt->execute();
      echo '<script>alert("your registration is suceesfull")</script>';
      $stmt->close();
      $conn->close();
  }
  ?>