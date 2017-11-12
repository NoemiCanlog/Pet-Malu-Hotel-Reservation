<!doctype html>
<html>
<title>Log-in Page</title>

    <head>
        <meta charset = "utf-8">
        <title>Homepage</title>
        <link rel = "stylesheet" href = "./styles/style1.css">
        <link rel="stylesheet" type="text/css" href="./styles/styles.css">

        <script language="javascript" type="text/javascript">
  function fun_val()
    {
        var l=document.loginsell.username.value;
        if(l=="")
        {
            alert("Please Enter User name");
            document.loginsell.username.focus;
            return false;
        }

        var p=document.loginsell.password.value;
        if(p=="")
        {
            alert("Please Enter Password");
            document.loginsell.password.focus;
            return false;
        }
    }
  </script>

    </head>
    <body>
        <div id="header-container">
                <div id= "title-noemi" class="title"> Hotel Online Booking     </div>

    <div id="banner" class="site-header col-12">
        
        <h3>PET MALU HOTEL<br/>
            <span>a world of unparalleled comfort and convenience</span>
        </h3>
        <nav class="main-nav">
            <ul>
                <li><a class="border" href="index.php#">HOME</a></li>
                <li><a class="border" href="#about">ABOUT US</a></li>
                <li><a class="border" href="#port">GALLERY</a></li>
                <li><a class="border" href="#exp">ROOM TYPES</a></li>
                <li><a class="border" href="#contact">CONTACT US</a></li>
                <li><a class="border" href="login.php">LOG IN</a></li>
            </ul>
        </nav>
    </div>


        <div class = "loginBox">
        <div class = "glass">
        <img src = "image.png" class = "user">
        <h3>Sign in Here</h3>
        <form>
            <div class = "inputBox">
            <input type = "text" name = "" placeholder= "Username">
            <span><i class = "fa fa-user" aria-hidden = "true"></i></span>
            </div>

             <div class = "inputBox">
            <input type = "password" name = "" placeholder= "Password">
            <span><i class = "fa fa-password" aria-hidden = "true"></i></span>
            </div>
                <input type = "submit" name = "" value = "Log-in" onClick="return fun_val();"> 
        </form>
        <a href = "userinfo.php">New User?</a>
        </div>
        </div>
    </body>
</html>        