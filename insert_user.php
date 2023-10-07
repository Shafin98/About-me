<?php

//connecting database 


include "DBconnect.php";



//checking if the text fields arent empty
if(isset($_POST['u_id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['contact_no']) && isset($_POST['address']) && isset($_POST['area_PIN']) && isset($_POST['age'])) {
	
  
  
  
  $u = $_POST['u_id'];
  $n = $_POST['name'];
  $e = $_POST['email'];
  $c = $_POST['contact_no'];
  $l = $_POST['address'];
  $p = $_POST['area_PIN'];
  $a = $_POST['age'];

  $sql = "INSERT INTO user values ('$u', '$n', '$e', '$c', '$l' ,'$p' ,'$a')";
 
  $result = mysqli_query($conn, $sql);

 if(mysqli_affected_rows($conn)){
    header("Location: index.php");

} else{
    echo "";
}
}
	
?>