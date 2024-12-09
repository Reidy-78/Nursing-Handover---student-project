<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" >
        <!--viewport to allow responsiveness to different device screen sizes-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Patient Activity Record">
        <meta name="author" content="Naomi Reid">
        <title>User Guide</title>
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
        <h2>User Guide for the PAR system</h2>
        <!--username and password - required element forces input-->
        <fieldset>
            <legend><h3>Login</h3></legend>
            <p><b>Step One: </b>Enter your system username and password in the boxes indicated.</p>
            <p><b>Step Two: </b>Click on the Login button. A successful login message should appear.</p>
            <p><i>Note: if your username or password is left blank or is incorrectly entered you will be prompted to correctly complete these fields</i></p>
            <p><b>Step Three: </b>Select an option from the Main Menu by clicking on the button.</p><br>
        </fieldset>
        <fieldset>
            <legend><h3>Create and View a Handover</h3></legend>
            <p><b>Step One: </b>Select a Ward by clicking in the circle. <i>Note: Only one ward can be selected at one time.</i></p>
            <p><b>Step Two: </b>Select a Team by clicking in the circle. <i>Note: Only one team can be selected at one time.</i></p>
            <p><b>Step Three: </b>Click on the calendar icon to choose a date from the calendar. &nbsp;
                Alternatively, enter a date in the format DD/MM/YYYY.</p>
            <p><b>Step Four: </b>Click the View Handover button.</p><br>
        </fieldset>
        <fieldset>
            <legend><h3>Edit a Handover entry</h3></legend>
            <p><b>Any box in the handover table can be edited. The different elements are listed below: </b></p><br>
            <p><b>Date<i>(Admission or EDD)</i> : </b>Click on the calendar icon to select a date from the calendar. &nbsp;
                Alternatively, enter a date in the format DD/MM/YYYY.</p>
            <p><b>Time<i>(TCI or Theatre)</i> : </b>Click on the clock icon to select a time from the clock. &nbsp;
                Alternatively, enter a time in the format hh/mm.</p>
            <p><b>Number<i>(ELOS, Room, SAP number or PO day)</i> : </b>Click in the box to free-type.</p>
            <p><b>Text<i>(Name, Payor, Procedure, Consultant, Med/Soc Hist/Allergies, NEWS/Wound/Falls/SG,
                Investigations/PoC/Progress)</i> : </b> Click in the box to free-type.</p>
            <p><b>Choose a file<i>(View Hist)</i> :</b> Click on the Choose file button, select the corresponding file&nbsp;
                from the folder and click OK to upload the file to the record.</p>
                <p><b>Checkboxes<i>(XRay, TTOs, Appt, Disc Ltr, Discharge, Ongoing)</i> :</b> Click in the box to enter a tick. 
                <i>Note: any number of boxes can be checked.</i></p><br>
            <p><b>When you have edited the required elements, click the Update button on the far right for each row to save the data 
                to the handover form.</b></p><br>
        </fieldset>
        <fieldset>
            <legend><h3>Add a New Record</h3></legend>
            <p><b>Step One:</b> Click on the Add Record button.</p> 
            <p><b>Step Two:</b> Complete all the required* fields in the left section. 
                <i>See Edit a Handover entry for more details of how to complete different field elements</i></p> 
            <p><b>Step Three:</b> If you have the information available to you, you can also complete any of the fields in the right section.</p> 
            <p><i>* Note: if any required* fields on the left are incomplete, the form will not save into the handover form.</i></p>
            <p><b>Step Four:</b> Click the Submit button to add the entry into the handover form.</p><br>
        </fieldset>
        <fieldset>
            <legend><h3>Update a Record</h3></legend>
            <p><b>Step One:</b> Click on the Update button at the end of the row you wish to update.</p> 
            <p><b>Step Two:</b> Complete the additional fields you require. <i>Note: all required fields must be completed.
                See Edit a Handover entry for details of how to complete different field elements</i></p> 
            <p><b>Step Three:</b> Click the Submit button to update the information in the handover form.</p><br>
        </fieldset>
        <fieldset>
            <legend><h3>Nursing Support Tool</h3></legend>
            <p><b>This page is designed to support ward staff with easy access to relevant and important information.</b></p>
            <p><b>Documents can be uploaded and displayed as Word, PDF or JPeg images.</b></p><br>
            <p><b>Step One:</b> Click on Upload or Change.</p> 
            <p><b>Step Two:</b> Select the corresponding file from the folder and click OK.</p><br>
        </fieldset> 
        <br>
                <!--return to previous page -->
                <input type="button" class="button1" value="Back" onclick="history.go(-1)" tabindex="1">
    </body>
</html>       