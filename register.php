<head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing Script">
        <title>
            Online Complaint management system
        </title>
        <link rel="stylesheet" href="./css/dashboard.css">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"/> -->
        <style>
            .brand {
                background: #111111 !important;
            }
            .brand-text {
                color: #4F63F9 !important;
            }
            form {
                background-color: teal-lighten-3;
                max-width: 460px;
                margin: 20px auto;
                padding: 20px;
            }
       </style>
    </head>
<body>    
	  <section id="Menu Bar">
        <nav class="white z-depth-0">
            <div class="container">
                <a href="index.php" class="brand-logo brand-text" style="font-family: Dancing-Script !important;">Complaint Management System</a>
                <ul id="nav-mobile" class="class right hide-on-small-and-down">
                    <li><a href="index.php" class="btn brand z-depth-0">SIGN IN</a></li>
                                       
                </ul>
            </div>
        </nav>
       </section>
     <div class="text-center bolder">
         <p>ADD PERSONAL INFO</p>
     </div>
     <section id="Register">
             <form action= "insert_user.php" class ="form_design" method="post">
                 UserID: <input type="text" name="u_id"><br/>
                 Name: <input type="text" name="name"> <br/>
                 Email: <input type="email" name="email"> <br/>
                 Contact.No: <input type="text" name="contact_no"> <br/>
                 Address: <input type="text" name="address"> <br/>
                 Area_Pin: <input type="text" name="area_PIN"> <br/>
                 Age: <input type="text" name="age"> <br/>
                 <input type="submit" value="Save info and return to Sign In">
             </form>
    </section>

  


</body>


<section id="Footer">	
<footer class="centre blue panel">
       
    <div class="center black-text">Nabil@CSE370 Project</div>
</footer>
</section>