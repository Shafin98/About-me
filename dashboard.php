<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/dashboard.css">
</head>
<body>
    <div class="home text-center bolder">
        <div class="warpper">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="complaint.php">Complaint</a></li>
                <li><a href="index.php">Log-out</a></li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <div class="warpper">
        <h1>Dashboard</h1>
        <div class="col-4 text-center">

<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, "project");
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   
   $sql1 = 'SELECT count(c_id) FROM complaints where state ="inProcess";';
   //mysqli_select_db('project');
   $retval1 = mysqli_query(  $conn, $sql1 );
   
   if(! $retval1 ) {
      die('Could not get data1: ' . mysqli_error());
   }
   
   $row1 = mysqli_fetch_array($retval1);
   $total1 = $row1[0];

   
   mysqli_close($conn);
?>


            <h1><?php echo $total1 ?></h1>
            <br />
            In process
        </div>
        <div class="col-4 text-center">

<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, "project");
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   
   $sql1 = 'SELECT count(c_id) FROM complaints where state ="pending";';
   //mysqli_select_db('project');
   $retval1 = mysqli_query(  $conn, $sql1 );
   
   if(! $retval1 ) {
      die('Could not get data1: ' . mysqli_error());
   }
   
   $row1 = mysqli_fetch_array($retval1);
   $total1 = $row1[0];

   
   mysqli_close($conn);
?>


            <h1><?php echo $total1 ?></h1>
            <br />
            Pending
        </div>
        <div class="col-4 text-center">


<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, "project");
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   
   $sql1 = 'SELECT count(c_id) FROM complaints where state ="Closed";';
   //mysqli_select_db('project');
   $retval1 = mysqli_query(  $conn, $sql1 );
   
   if(! $retval1 ) {
      die('Could not get data1: ' . mysqli_error());
   }
   
   $row1 = mysqli_fetch_array($retval1);
   $total1 = $row1[0];

   
   mysqli_close($conn);
?>

            <h1><?php echo $total1 ?></h1>
            <br />
            Closed
        </div>
        <div class="clearfix"></div>
        </div>
    </div>

    <div class="footer">
        <div class="warpper">
            <p class="text-center">Menu</p>
        </div>
    </div>
</body>
</html>