<?php

//connecting database 


include "DBconnect.php";



//checking if the text fields arent empty
if(isset($_POST['UserID']) && isset($_POST['Password'])) {
	
  
  
  
  $u = $_POST['UserID'];
  $p = $_POST['Password'];


  $sql = "INSERT INTO `signup` (`UserID`, `Password`) VALUES ('$u', '$p');";
 
  $result = mysqli_query($conn, $sql);

 if(mysqli_affected_rows($conn)){
    header("Location: register.php");

} else{
    echo "";
}
}
	
?>