<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" >
        <!--viewport to allow responsiveness to different device screen sizes-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Handover for Patient Activity Record">
        <meta name="author" content="Naomi Reid">
        <title>View Handover</title>    
        <link rel="stylesheet" href="par.css" >
    </head>
    <body style="margin: 50px;" class="table">	
        <header>
            <picture> <!-- hospital logo -->
                <source srcset="logo/hosp_logo.png" media="(max-width: 1024px)" >
                <source srcset="logo/hosp_logo.png" media="(min-width: 375px)" >
                <img class="responsive" src="logo/hosp_logo.jpg" alt="Hospital Logo" >
            </picture>
            <h1>Patient Activity Record</h1>
            <br>
        </header>
        <fieldset>
            <legend><h2>View Handover</h2></legend>
            <ul> <!--add a new record link-->
                <li><a href="add.php" tabindex="1" >Add Record</a></ul><br>
        <br> <!--boxes for allocated staff names to be entered-->
        <table class="table" style="width: 100%">
            <thead>
            <tr>      
                <th>NIC</th>
                    <td colspan="3"><input type='text' name='nic' tabindex="1"></td>
            </tr> 
            <tr>    
                <th>Nurse</th>
                    <td colspan="3"><input type='text' name='nurse' tabindex="1"></td>
            </tr> 
            <tr>
                <th>HCA</th>
                    <td colspan="3"><input type='text' name='hca' tabindex="1"></td>
            </tr>
            <tr> <!--SBARD framework table headings-->
                <th colspan="11" style="font-size: 20px; border-style: solid; border-width: 1px 3px 0px 3px;">SITUATION</th>
                <th colspan="2" style="font-size: 20px; border-style: solid; border-width: 1px 3px 0px 3px;">BACKGROUND</th>
                <th colspan="2" style="font-size: 20px; border-style: solid; border-width: 1px 3px 0px 3px;">ASSESSMENT</th>
                <th colspan="1" style="font-size: 20px; border-style: solid; border-width: 1px 3px 0px 3px;">RECOMMENDATION</th>
                <th colspan="7" style="font-size: 20px; border-style: solid; border-width: 1px 3px 0px 3px;">DISCHARGE</th>
                <th colspan="1" style="font-size: 20px; border-style: solid; border-width: 1px 3px 0px 3px;">ACTIVITY</th>
            </tr> <!--standard table headings-->
            <tr class="sbard">
                <th style="border-style: dotted; border-width: 1px 0px 0px 1px;">Admission</th>    
                <th style="border-style: dotted; border-width: 1px 0px 0px 1px;">ELOS</th>
                <th style="border-style: dotted; border-width: 1px 0px 0px 1px;">Room</th>
                <th style="border-style: dotted; border-width: 1px 0px 0px 1px;">TCI</th>
                <th style="border-style: dotted; border-width: 1px 0px 0px 1px;">Name</th>
                <th style="border-style: dotted; border-width: 1px 0px 0px 1px;">Payor</th>
                <th style="border-style: dotted; border-width: 1px 0px 0px 1px;">Number</th>
                <th style="border-style: dotted; border-width: 1px 0px 0px 1px;">Procedure</th>
                <th style="border-style: dotted; border-width: 1px 0px 0px 1px;">Consultant</th>
                <th style="border-style: dotted; border-width: 1px 0px 0px 1px;">Theatre</th>
                <th style="border-style: dotted; border-width: 1px 0px 0px 1px;">PO Day</th>
                <th style="border-style: dotted; border-width: 1px 0px 0px 1px;">Med/Soc Hist/Allergies</th>
                <th style="border-style: dotted; border-width: 1px 0px 0px 1px;">View Hist</th>
                <th style="border-style: dotted; border-width: 1px 0px 0px 1px;">NEWS/Wound/Falls/SG</th>
                <th style="border-style: dotted; border-width: 1px 0px 0px 1px;">Hb/Na</th>
                <th style="border-style: dotted; border-width: 1px 0px 0px 1px;">Investigations/Plan of Care/Progress</th>
                <th style="border-style: dotted; border-width: 1px 0px 0px 1px;">Xray</th>
                <th style="border-style: dotted; border-width: 1px 0px 0px 1px;">TTOs</th>
                <th style="border-style: dotted; border-width: 1px 0px 0px 1px;">Appt</th>
                <th style="border-style: dotted; border-width: 1px 0px 0px 1px;">Disc Ltr</th>
                <th style="border-style: dotted; border-width: 1px 0px 0px 1px;">EDD</th>
                <th style="border-style: dotted; border-width: 1px 0px 0px 1px;">Discharge</th>
                <th style="border-style: dotted; border-width: 1px 0px 0px 1px;">Ongoing</th>
                <th style="border-style: dotted; border-width: 1px 1px 0px 1px;">Update Record</th>
            </tr>
            </thead>
            <tbody> 
                <?php //connect to the database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "par_database";

                $connection = new mysqli($servername, $username, $password, $database);
                // check the connection
                if ($connection->connect_error) {
                    die("connection failed: " . $connection->connect_error);
                }
                // read all data from the database table 
                $sql = "SELECT * FROM handoverData ORDER BY room;";
                $result = $connection->query($sql);
                // check sql query has been executed correctly 
                if (!$result) {
                    die("Invalid query: " . $connection->error);
                }
                ?>
                <form action="" method="post"></form>
                <?php

                // read all rows from result and display in table              
                while($row = $result->FETCH_ASSOC()) {
                ?>
                <tr>
                    <td><input type='date' name ='admission' style="width: 105px" value ="<?php echo $row['admission']; ?>" ></td>
                    <td><input type='int' name ='duration' style="width: 20px" value ="<?php echo $row['duration']; ?>" ></td>
                    <td><input type='int' name ='room' style="width: 30px" value ="<?php echo $row['room']; ?>" ></td>
                    <td><input type='time' name ='tci' style="width: 70px" value ="<?php echo $row['tci']; ?>" ></td>
                    <td><input type='text' name ='name' style="width: 140px" value ="<?php echo $row['name']; ?>" ></td>
                    <td><input type='text' name ='payor' style="width: 60px" value ="<?php echo $row['payor']; ?>" ></td>
                    <td><input type='int' name ='number' style="width: 70px" value ="<?php echo $row['number']; ?>" ></td>
                    <td><input type='text' name ='surgery' style="width: 100px" value ="<?php echo $row['surgery']; ?>" ></td>
                    <td><input type='text' name ='consultant' style="width: 120px" value ="<?php echo $row['consultant']; ?>" ></td>
                    <td><input type='time' name ='theatre' value ="<?php echo $row['theatre']; ?>" ></td>
                    <td><input type='int' name ='postOp' style="width: 25px" value ="<?php echo $row['']; ?>" ></td>
                    <td><input type='text' name = 'histOrAllergies' value = "<?php echo $row['']; ?>" ></td>
                    <td><input type="file" name="viewHist" class="button4" value = "<?php echo $row['']; ?>" ></td>
                    <td><input type='text' name = 'newsWoundFallsSg' value = "<?php echo $row['']; ?>" ></td>                    
                    <td><input type='text' name = 'hbNa' style="width: 50px" value = "<?php echo $row['']; ?>" ></td>
                    <td><input type='text' name = 'invPlanProgress' value = "<?php echo $row['']; ?>" ></td>                   
                    <td><input type='checkbox' name = 'xRay' value = "<?php echo $row['']; ?>" ></td>
                    <td><input type='checkbox' name = 'tto' value = "<?php echo $row['']; ?>" ></td>
                    <td><input type='checkbox' name = 'appt' value = "<?php echo $row['']; ?>" ></td>
                    <td><input type='checkbox' name = 'discLtr' value = "<?php echo $row['']; ?>" ></td>
                    <td><input type='date' name = 'edd' style="width: 105px" value = "<?php echo $row['']; ?>" ></td>
                    <td><input type='checkbox' name = 'discharge' value = "<?php echo $row['']; ?>" ></td>
                    <td><input type='checkbox' name = 'ongoing' value = "<?php echo $row['']; ?>" ></td>
                    <td><ul><li> <!--update button pulls line data through to another form-->
                        <a href="update.php?id=<?= $row["id"] ?>" style="width: 90px; height: 30px" name="update">Update</a></ul>
                    </td>
                </tr>
                <?php } ?>    
            </tbody> 
        </table> 
        </fieldset>
        <br>
        <fieldset><br> <!--buttons to refresh, go back or print a page-->
            <input type="button" class="button1" value="Refresh" onclick="history.go(0)" tabindex="1">
            <input type="button" class="button2" value="Back" onclick="history.go(-1)" tabindex="1">  
            <input type="button" class="button3" name="print" value="Print" onclick="window.print()"><br><br>
        </fieldset><br>
        <fieldset><br>
        <nav>
            <ul><!--button links to handover or support tool pages-->
                <li><a href="guide.php" class="button3" tabindex="1" >User Guide</a><br>
            </ul>
        </nav>
        </fieldset>
    </body>
</html>

