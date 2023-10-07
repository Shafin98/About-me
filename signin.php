<?php

//connecting database 

include('DBconnect.php');


//checking if the text fields arent empty
if(isset($_POST['fname']) && isset($_POST['pass'])) {
	
  //writing the sql query for checking existance in database
  
  
  $u = $_POST['fname'];
  $p = $_POST['pass'];
  $sql = "SELECT * FROM signup WHERE UserID = '$u' AND Password='$p'";
 

//executing the query
  $result = mysqli_query($conn, $sql);
  
//checking if the textbox is empty
if(mysqli_num_rows($result) !=0 ) {

  header("Location: dashboard.php");
 
 
 }
else{
  header("Location: index.php");
 }  
}

	
?>