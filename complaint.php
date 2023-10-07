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
                <li><a href="dashboard.php">Home</a></li>
                <li><a href="#">Complaint</a></li>
                <li><a href="index.php">Log-out</a></li>
            </ul>
        </div>
        <div class="main-content spacing">
        <form action="submit_C.php" method="POST">
        <!--Category-->
        <p><?php echo "Category"; ?></p>
        <select name="Category">
            <option value="">SELECT</option>
            
            <option value="human resource">human resource</option>
            <option value="roads">roads</option>
            <option value="transport system">transport system</option>
            <option value="water supply">water supply</option>
        </select>
        <br>
        <!--Complaint ID-->
        <p><?php echo "User ID"; ?></p>
        <input type="number" name="UserID">
        <br>
        <!--Complaint Details-->
        <p id="uppercase">Complaint Details</p>
        <textarea name="description" cols="100" rows="20" placeholder="Write your description"></textarea>
        <br>
        <input type="submit" value="Submit" name="submit">
        <input type="reset">
        </div>  
    </div>
</body>
</html>


