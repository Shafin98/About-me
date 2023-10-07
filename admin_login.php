<head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing Script">
        <title>
            Online complaint management system
        </title>
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"/> -->
        <link rel="stylesheet" href="./css/dashboard.css">
        <style>
            .brand {
                background: #111111 !important;
            }
            .brand-text {
                color: #4F63F9 !important;
            }
            form {
                background-color: #ced6e0;
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
                    
                    <li><a href="#" class="btn brand z-depth-0">ADMIN LOGIN</a></li>                   
                    <li><a href="user_register.php" class="btn brand z-depth-0">REGISTER</a></li>
                </ul>
            </div>
        </nav>
       </section>

     <section id="Sign Up">
         <div class="title text-center bolder"> SIGN IN </div>

             <form action= "admin_signin.php" class ="form_design" method="post">
                 AdminID: <input type="text" name="id"><br/>
                 Username:<input type="text" name="username"> <br/><br>
                 Password: <input type="password" name="password"> <br/><br>
                 <input type="submit" value="Sign In">
             </form>
    </section>

  


</body>


<section id="Footer">	
<footer class="centre blue panel">
       
    <div class="center black-text">Nabil@CSE370 Project</div>
</footer>
</section>