<?php
//connect to the par database
$servername = "localhost";
$username = "root";
$password = "";
$database = "par_database";

$connection = new mysqli($servername, $username, $password, $database);

$id = "";
$admission = "";
$duration = "";
$room = "";
$tci = "";
$name = "";
$payor = "";
$number= "";
$surgery = "";
$consultant = "";
$theatre = "";
$postOp = "";
$histOrAllergies = "";
$viewHist = "";
$newsWoundFallsSg = "";
$hbNa = "";
$invPlanProgress = "";
$xRay = "";
$ttos = "";
$appt = "";
$discLtr = "";
$edd = "";
$discharge = "";
$ongoing = "";

$errorMessage = "";
$successMessage = "";

if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {

    if ( !isset($_GET["id"]) ) {
        header("location: table.php");
        exit;
    }
    $id = $_GET["id"];
    // read all rows from database
    $sql = "SELECT * FROM handoverData WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->FETCH_ASSOC();

    if (!$row) {
        header("location: table.php");
        exit;
    }

    $id - $row["id"];
    $admission = $row["admission"];
    $duration = $row["duration"];
    $room = $row["room"];
    $tci = $row["tci"];
    $name = $row["name"];
    $payor = $row["payor"];
    $number= $row["number"];
    $surgery = $row["surgery"];
    $consultant = $row["consultant"];
    $theatre = $row["theatre"];
    $postOp = $row["postOp"];
    $histOrAllergies = $row["histOrAllergies"];
    $viewHist = $row["viewHist"];
    $newsWoundFallsSg = $row["newsWoundFallsSg"];
    $hbNa = $row["hbNa"];
    $invPlanProgress = $row["invPlanProgress"];
    $xRay = $row["xRay"];
    $ttos = $row["ttos"];
    $appt = $row["appt"];
    $discLtr = $row["discLtr"];
    $edd = $row["edd"];
    $discharge = $row["discharge"];
    $ongoing = $row["ongoing"];
}
else {  //update record

    $admission = $_POST["admission"];
    $duration = $_POST["duration"];
    $room = $_POST["room"];
    $tci = $_POST["tci"];
    $name = $_POST["name"];
    $payor = $_POST["payor"];
    $number= $_POST["number"];
    $surgery = $_POST["surgery"];
    $consultant = $_POST["consultant"];
    $theatre = $_POST["theatre"];
    $postOp = $_POST["postOp"];
    $histOrAllergies = $_POST["histOrAllergies"];
    $viewHist = $_POST["viewHist"];
    $newsWoundFallsSg = $_POST["newsWoundFallsSg"];
    $hbNa = $_POST["hbNa"];
    $invPlanProgress = $_POST["invPlanProgress"];
    $xRay = $_POST["xRay"];
    $ttos = $_POST["ttos"];
    $appt = $_POST["appt"];
    $discLtr = $_POST["discLtr"];
    $edd = $_POST["edd"];
    $discharge = $_POST["discharge"];
    $ongoing = $_POST["ongoing"];

    do {
        if (empty($admission) || empty($room) || empty($tci) || empty($name) || empty($payor) || 
            empty($number) || empty($surgery) || empty($consultant) || empty($theatre) ) {
            $errorMessage = "complete all required* fields";
            break;
        }
        //edit the record
        $sql = "UPDATE handoverData SET admission = '$admission', duration = '$duration', room = '$room', tci = '$tci', name = '$name', 
                payor = '$payor', number = '$number', surgery = '$surgery', consultant = '$consultant', theatre = '$theatre',
                postOp = '$postOp', histOrAllergies = '$histOrAllergies', viewHist = '$viewHist', newsWoundFallsSg = '$newsWoundFallsSg', 
                hbNa = '$hbNa', invPlanProgress = '$invPlanProgress', xRay = '$xRay', ttos = '$ttos', appt = '$appt', 
                discLtr = '$discLtr', edd = '$edd', discharge = '$discharge', ongoing = '$ongoing' WHERE id = '$id' "; 

        $result = $connection->query($sql);

            if (!$result) {
                $errorMessage = "Data not saved" . $connection->error;
            break;
        }

        $successMessage = "Update successful";
        header("location: table.php");
        exit;

    } while(false);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" >
        <!--viewport to allow reponsiveness to different device screen sizes-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Handover for Patient Activity Communication Tool"/>
        <meta name="author" content="Naomi Reid"/>
    <title>Update record</title>
    <link rel="stylesheet" href="par.css">
</head>
<body>
    <div class="container">
    <header>	
        <picture> <!-- hospital logo-->
            <source srcset="logo/hosp_logo.png" media="(max-width: 1024px)" />
            <source srcset="logo/hosp_logo.png" media="(min-width: 375px)" />
            <img class="responsive" src="logo/hosp_logo.jpg" alt="Hospital Logo" />
        </picture>
        <h1>Patient Activity Record</h1>
    </header>
    <h2>Update Record</h2>

    <?php
    if ( !empty($errorMessage) ) {
        echo "
        <div class='alert alert-warning alert-dismissable fade show' role='alert'>
            <strong>$errorMessage</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            <br><br>
            ";
}
    ?>

    <form action="table.php" method="post"> 
    <fieldset style="float: left; width: 50%;">
        <legend><h3>Required* Information</h3></legend><br>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label>Admission*</label>
            <br>
            <input type="date" tabindex="1" name="admission" value="<?php echo $admission; ?>">
            <br><br>
            <label>ELOS*</label>
            <br>
            <input type="int" tabindex="1" name="duration" value="<?php echo $duration; ?>">
            <br><br>
            <label>Room*</label>
            <br>
            <input type="int" tabindex="1" name="room" value="<?php echo $room; ?>">
            <br><br>
            <label>TCI*</label>
            <br>
            <input type="time" tabindex="1" name="tci" value="<?php echo $tci; ?>">
            <br><br>
            <label>Name*</label>
            <br>
            <input type="text" tabindex="1" name="name" value="<?php echo $name; ?>">
            <br><br>
            <label>Payor*</label>
            <br>
            <input type="text" tabindex="1" name="payor" value="<?php echo $payor; ?>">
            <br><br>
            <label>Number*</label>
            <br>
            <input type="int" tabindex="1" name="number" value="<?php echo $number; ?>">
            <br><br>
            <label>Procedure*</label>
            <br>
            <input type="text" tabindex="1" name="surgery" value="<?php echo $surgery; ?>">
            <br><br>
            <label>Consultant*</label>
            <br>
            <input type="text" tabindex="1" name="consultant" value="<?php echo $consultant; ?>">
            <br><br>
            <label>Theatre*</label>
            <br>
            <input type="time" tabindex="1" name="theatre" value="<?php echo $theatre; ?>">
            <br><br>
            <button type="submit" class="button1">Submit</button><br>
        </fieldset>
        <br>
        <fieldset style="float">
            <legend><h3>Additional Information</h3></legend><br>
            <label>PO Day</label>
            <br>
            <input type="int" tabindex="1" name="postOp" value="<?php echo $postOp; ?>">
            <br><br>
            <label>Med/Soc Hist/Allergies</label>
            <br>
            <input type="text" tabindex="1" name="histOrAllergies" value="<?php echo $histOrAllergies; ?>">
            <br><br>
            <label>View Hist</label>
            <br>
            <input type="file" tabindex="1" name="viewHist" value="<?php echo $viewHist; ?>">
            <br><br>
            <label>NEWS/Wound/Falls/SG</label>
            <br>
            <input type="text" tabindex="1" name="newsWoundFallsSg" value="<?php echo $newsWoundFallsSg; ?>">
            <br><br>
            <label>Hb/Na</label>
            <br>
            <input type="text" tabindex="1" name="hbNa" value="<?php echo $hbNa; ?>">
            <br><br>
            <label>Investigations/Plan of Care/Progress</label>
            <br>
            <input type="text" tabindex="1" name="invPlanProgress" value="<?php echo $invPlanProgress; ?>">
            <br><br>
            <label>Xray</label>
            <input type="checkbox" tabindex="1" name="xRay" value="<?php echo $xRay; ?>">
            <label>TTOs</label>
            <input type="checkbox" tabindex="1" name="ttos" value="<?php echo $ttos; ?>">
            <label>Appt</label>
            <input type="checkbox" tabindex="1" name="appt" value="<?php echo $appt; ?>">
            <label>Disc Ltr</label>
            <input type="checkbox" tabindex="1" name="discLtr" value="<?php echo $discLtr; ?>">
            <br><br>
            <label>EDD</label>
            <br>
            <input type="date" tabindex="1" name="edd" value="<?php echo $edd; ?>">
            <br><br>
            <label>Discharge</label>
            <input type="checkbox" tabindex="1" name="discharge" value="<?php echo $discharge; ?>">
            <label>Ongoing</label>
            <input type="checkbox" tabindex="1" name="ongoing" value="<?php echo $ongoing; ?>">
            <br><br><br>
            <ul><li><a href="table.php" style="background-color: #b32952;" tabindex="1" >Cancel</a></li><br>
            <li><a href="guide.php" class="button3" tabindex="1" >User Guide</a><br>
        </fieldset>

            <?php
            if ( !empty($successMessage) ) {
                echo "
                <div class='row mb-3'>
                    <div class='offset-sm-3 col-sm-6'>
                        <div class='alert alert-success alert-dismissable fade show' role-'alert'>
                            <strong>$successMessage</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                    </div>
                 </div>
                 ";
            }
            ?>    
    </form>
</body>
</html>

