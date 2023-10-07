<?php

$link = mysqli_connect("localhost", "root", "", "project");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    
    $category = $_POST['Category'];
    $user_id = $_POST['UserID'];
    $c_doc = $_POST['description'];
    $bytes = random_bytes(8);
    $c_id = bin2hex($bytes);


    $sql = "INSERT INTO complaints (user_id, c_id, state, details, category_name) VALUES ('$user_id',  '$c_id', 'Pending', '$c_doc', '$category')";


    if(mysqli_query($link, $sql)){
        echo '<script>alert("Complaint recorded successfully.")</script>';
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}

mysqli_close($link);

?>