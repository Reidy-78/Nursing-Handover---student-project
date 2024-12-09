<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" >
        <!--viewport to allow responsiveness to different device screen sizes-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Handover for Patient Activity Communication Tool">
        <meta name="author" content="Naomi Reid">
        <title>Create Handover</title>
        <link rel="stylesheet" href="par.css" >
    </head>
    <body style="margin: 50px" class="handover">	
        <header>
            <picture> <!--hospital logo-->
                <source srcset="logo/hosp_logo.png" media="(max-width: 375px)" >
                <source srcset="logo/hosp_logo.png" media="(min-width: 200px)" >
                <img class="responsive" src="logo/hosp_logo.jpg" alt="Hospital Logo" >
            </picture>
            <h1>Patient Activity Record</h1>
        </header>
        <main>
            <!-- Start of the form element -->
            <form action="table.php" method="post">    
                <div id="forminfo">
                <h2>Create Handover</h2>
                    <!--fieldset sections and legend labelling to assist screen readers
                    and tabindex to support focus/keyboard use-->
                    <fieldset>
                        <legend><h3>Select Ward</h3></legend>
                        <input type="radio" name="ward" tabindex="1" value="lavender">Lavender
                        <input type="radio" name="ward" tabindex="1" value="poppy">Poppy
                        <br><br>
                    </fieldset>
                    <br>
                    <fieldset>
                        <legend><h3>Select Team</h3></legend>
                        <input type="radio" name="team" tabindex="1" value="team1">Team 1
                        <input type="radio" name="team" tabindex="1" value="team2">Team 2
                        <input type="radio" name="team" tabindex="1" value="team3">Team 3 
                        <br><br>
                    </fieldset>
                    <br>
                    <fieldset>
                         <!--area to set a handover date-->
                        <legend><h3>Select TCI Date</h3></legend>
                        <input type="date" class="calendar" id="date" name="date" tabindex="1">
                        <br><br>
                    </fieldset>
                    <br>
                    <fieldset><br>
                        <!-- view, reset and homepage buttons -->
                        <input type="submit" class="button1" name="submit" value="View Handover" tabindex="1" >
                        <input type="reset" class="button2" name="reset" value="Reset" tabindex="1" >
                        <input type="button" class="button3" value="Homepage" onclick="history.go(-1)" tabindex="1"><br><br>
                    </fieldset>
                        <!-- End of the form element -->
                </div>
                <br><fieldset><br>
                <nav><ul><!--link button to guide pages-->
                    <li><a href="guide.php" class="button3" tabindex="1" >User Guide</a>
                    </ul>
                </nav><br>
                </fieldset>
            </form>   
        </main>    
    </body>
</html>