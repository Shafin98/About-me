<?php

//connecting database 

include('DBconnect.php');


//checking if the text fields arent empty
if(isset($_POST['id']) && isset($_POST['username']) && isset($_POST['password'])) {
	
  //writing the sql query for checking existance in database
  
  
  $i = $_POST['id'];
  $u = $_POST['username'];
  $p = $_POST['password'];

  $sql = "SELECT `id`, `username`, `password` FROM `admin` WHERE id='$i' AND username='$u' AND password='$p'";
 

//executing the query
  $result = mysqli_query($conn, $sql);
  
//checking if the textbox is empty
if(mysqli_num_rows($result) !=0 ) {

  header("Location: a_index.php");
 
 
 }
else{
  header("Location: admin_login.php");
 }  
}

	
?>