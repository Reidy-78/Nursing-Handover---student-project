<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" >
        <!--viewport to allow responsiveness to different device screen sizes-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Patient Activity Record">
        <meta name="author" content="Naomi Reid">
        <title>Login Homepage</title>
        <link rel="stylesheet" href="par.css" >
    </head>
    <body style="margin: 50px;" class="login">	
        <header>
            <picture> <!-- hospital logo -->
                <source srcset="logo/hosp_logo.png" media="(max-width: 1024px)" >
                <source srcset="logo/hosp_logo.png" media="(min-width: 375px)" >
                <img class="responsive" src="logo/hosp_logo.jpg" alt="Hospital Logo" >
            </picture>            
            <h1>Patient Activity Record</h1>
        </header>
        <h2>Homepage</h2>
        <!--username and password - required element forces input-->
        <fieldset>
            <legend><h3>Login</h3></legend>
            <form action="menu.php">
            <label>Username</label>
                <input type="text" tabindex="1" name="username" required ><br><br>
            <label>Password </label>
                <input type="password" tabindex="1" name="password" required ><br><br>
                <!--button to login-->
                <input type="submit" class="button1" name="login" value="Login" tabindex="1" >
            </form>
        </fieldset>
        <fieldset>  
            <legend><h3 style="color: #808080;">Main Menu</h3></legend>  
                <!--buttons dormant - on successful login user will be redirected to menu.php 
                where buttons are working links -->
            <input type="button" style="background-color: #d3d3d3; font-size: 20px; color: #808080; width: 200px; height: 40px;" 
                name="handover" value="Handover" tabindex="1" ><br><br>
            <input type="button" style="background-color: #d3d3d3; font-size: 20px; color: #808080; width: 200px; height: 40px;" 
                name="supportTool" value="Support Tool" tabindex="1" ><br><br>
        </fieldset><br>
        <fieldset><br>
        <nav>
            <ul><!--button link to guide pages-->
                <li><a href="guide.php" class="button3" tabindex="1" >User Guide</a><br>
            </ul>
        </nav>
        </fieldset>
    </body>
</html>       