<?php include('server.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginpage.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>login form</title>
</head>
<body>
  <div class="main">
        <div class="logo">
            <img src="https://cdn.glitch.com/04799a36-5be0-4baa-ac44-edab05b6d66d%2Fcreativelogo.png?v=1592208196968" alt="">
        </div>
        <ul>
            <li><a class="active" href="homegallery.html">HOME</a></li>
            <li><a class="active" href="gallery.html">COLLECTIONS</a></li>
            <li><a class="active" href="#">CONTACT</a></li>
            <li><a class="login" href="loginform.html">LOG IN</a></li>
            
        </ul>
    </div>
   <div class="container">
        <header>Login Form</header>
        <form method="POST" action="loginpage.php">
        <?php include('error.php'); ?>
            <div class="input-field">
                <input type="text" name="username" required>
                <label>Email or UserName</label>
            </div>
            <div class="input-field">
                <input class="active" type="password" name="password" id="pswrd" required>
                <span class="show"><i id="icon" class="fa fa-eye-slash" aria-hidden="true"></i></span>
                <label>Password</label>
            </div>
            <div class="button">
                <div class="inner"></div>
                <button type="submit" name="login">LOGIN</button>
            </div>
        </form>
        <div class="auth">Or login with</div>
        <div class="links">
            <div class="github">
                <a href="https://github.com/login"><i class="fa fa-github-square" aria-hidden="true"><span>GitHub</span></i></a>
            </div>
            <div class="google">
                <a href="https://www.gmail.com"><i class="fa fa-google-plus-square" aria-hidden="true"><span>Google</span></i></a>
            </div>
        </div>
        <div class="signup">
            <p>Not a Member?<a href="register.php"> signup now</a></p>
        </div>
    </div>
    <script>
        var inputpass = document.getElementById("pswrd");
        var icon = document.getElementById("icon");
        icon.onclick = function() {
            if(inputpass.className=="active"){
                inputpass.setAttribute("type","text");
                icon.className="fa fa-eye";
                inputpass.className = "";
            }else{
                inputpass.setAttribute("type","password");
                icon.className="fa fa-eye-slash";
                inputpass.className="active";
            }
        }
    </script>
    
</body>
</html>
