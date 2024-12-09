<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" >
        <!--viewport to allow responsiveness to different device screen sizes-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Patient Activity Record">
        <meta name="author" content="Naomi Reid">
        <title>Menu Homepage</title>
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
        <!--successful login output-->
        <fieldset>
            <legend><h3>Login Status</h3></legend>
            <label style="font-size: 25px; color: #b32952;">User has logged in successfully.  
                Please select a menu option to continue.</label><br><br>
        </fieldset>
        <fieldset>  
            <legend><h3>Main Menu</h3></legend>  
            <nav>
                <ul><!--button links to other pages-->
                    <li><a href="handover.php" tabindex="1" >Handover</a><br>
                    <li><a href="nst.php" tabindex="1" >Support Tool</a><br>
                    <li><a href="guide.php" class="button3" tabindex="1" >User Guide</a><br>
                    <!--logout button - links to login page-->
                    <li><a href="login.php" class="button2" tabindex="1" >Log Out</a><br>
                </ul>
            </nav>
        </fieldset>
    </body>
</html>       