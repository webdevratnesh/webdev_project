<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="webdev.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@100&display=swap" rel="stylesheet">
</head>
<body>
<section id="banner">
        <img src="images/nlogo.jpg" class="logo">
        <div class="signup_form">
        <form action="signup_validation.php" method="post">
            Create An Account
            <div class="form_group">
                NAME:<input type="text"  name="name" placeholder="Name">
            </div>
            <div class="form_group">
                email:<input type="email" name="email" placeholder="email">
            </div>
            <div class="form_group">
                Gender:
                 Male <input  type="radio" name="gender">
                 FeMale<input  type="radio" name="gender">
            </div>
            <div class="form_group">
                USERNAME:<input type="text" name="username" placeholder="username">
            </div>
            <div class="form_group">
                PASSWORD:<input type="password" name="password" placeholder="password">
            </div>
            <div class="form_group">
                CONFIRM PASSWORD:<input type="password" name="confirm_password" placeholder="confirm password">
            </div>
            <div class="form_group">
                DOB:<input type="date" name="dob" placeholder="">
            </div>
            <div class="form_group">
                <input type="submit">
            </div>
        </form>
        </div> 
    </section> 
        

    <div id="sidenav">
        <nav>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="#">FEATURE</a></li>
                <li><a href="#">SERVICES</a></li>
                <li><a href="#">TESTIMONIAL</a></li>
                <li><a href="#">MEET US</a></li>
                <li><a href="signup.php">Sign Up</a></li>
            </ul>
        </nav>  
    </div>
    <div id="menubtn">
        <img src="images/menu.png" id="menu">
    </div>
    <section>
        <h1>starting of another section</h1>
        <h1>starting of another section</h1>
        <h1>starting of another section</h1>
        <h1>starting of another section</h1>
        <h1>starting of another section</h1>
    </section>

    <script>
        var menubtn = document.getElementById("menubtn")
        var sidenav = document.getElementById("sidenav")
        var menu = document.getElementById("menu")

        sidenav.style.right="-250px";

        menubtn.onclick=function()
        {
        if (sidenav.style.right=="-250px") {
            sidenav.style.right="0px";
            menu.src="images/close.png";
            
        }
        else{
            sidenav.style.right="-250px";
            menu.src="images/menu.png";
        }
    }
    </script>

</body>
</html>