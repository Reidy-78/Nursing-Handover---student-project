<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" >
        <!--viewport to allow responsiveness to different device screen sizes-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Patient Activity Record">
        <meta name="author" content="Naomi Reid">
        <title>nursing support tool</title>
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
        <h2>Nursing Support Tool</h2>
        <!--areas to upload information-->
        <form action="upload.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend><h3>Staffing</h3></legend>
                <input type="file" name="filename">
                <button type="submit" class="button1" name="submit">Upload</button>
                <button type="submit" class="button3" name="change">Change</button>
                <button type="submit" class="button2" name="delete">Delete</button>
                <picture>
                    <source srcset="placeholder.png" style="float: right" media="(max-width: 40px)">
                    <img class="responsive" src="logo/placeholder.png" alt="Rota">
                </picture>
        </fieldset>
        <fieldset>
            <legend><h3>Allocations</h3></legend>
                <input type="file" name="filename">
                <button type="submit" class="button1" name="submit">Upload</button>
                <button type="submit" class="button3" name="change">Change</button>
                <button type="submit" class="button2" name="delete">Delete</button>
                <picture>
                    <source srcset="placeholder.png" media="(max-width: 40px)">
                    <img class="responsive" src="logo/placeholder.png" alt="Allocations">
                </picture>
        </fieldset>
        <fieldset>
            <legend><h3>Important Information and Updates</h3></legend>
                <input type="file" name="filename">
                <button type="submit" class="button1" name="submit">Upload</button>
                <button type="submit" class="button3" name="change">Change</button>
                <button type="submit" class="button2" name="delete">Delete</button>
                <picture>
                    <source srcset="placeholder.png" media="(max-width: 40px)">
                    <img class="responsive" src="logo/placeholder.png" alt="Information">
                </picture>
        </fieldset>
        <br><fieldset><br>
        <nav>
            <ul><!--button links to homepage or log out-->
                <li><a href="menu.php" style="background-color: #008b8b;" tabindex="1" >Homepage</a><br>
                <li><a href="login.php" style="background-color: #b32952;" tabindex="1" >Log Out</a><br>
                <li><a href="guide.php" class="button3" tabindex="1" >User Guide</a>
            </ul>
        </nav><br>
    </fieldset>
    </form>
</body>
</html>       