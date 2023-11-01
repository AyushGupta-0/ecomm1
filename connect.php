<?php
  //start the session;
  session_start(); 
  $localhost="localhost";
  $username="root";
  $password="";
  $dbname="printertech";
  //Create Connection
  $conn= mysqli_connect("$localhost", "$username", "$password","$dbname");
  if(!$conn){
      die("connection failed:".mysqli_connect_error());
  }else{
  	echo "Connected"."<br>";
  }
  //Insert Data into Database
      $name= $_POST['name'];
      $email= $_POST['email'];
      $phone= $_POST['phone'];
      $message= $_POST['message'];
	$sql = "INSERT INTO contact(name,email,phone,message) values('$name','$email','$phone','$message')"; 
	if (mysqli_query($conn,$sql)) {
   	 echo "New record created successfully";
	} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   header('location:contact.html');
 mysqli_close($conn);  
  ?>