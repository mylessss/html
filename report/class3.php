<?php
     /*
    $servername = "gator4268.hostgator.com";
    $username = "mmcclend_alien";
    $password = "alientoor";
    $dbname = "mmcclend_alien";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    */
    $servername = "localhost";
    $username = "root";
    $password = "toor";
    $dbname = "alien";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    
    
    
    $inVehicle = $_POST['inVehicle'];
    $typeOfVehicle = $_POST['typeOfVehicle'];
    $personHarmDone = $_POST['personHarmDone'];
    $environmentHarmDone = $_POST['environmentHarmDone'];
    $physicalTrace = $_POST['physicalTrace'];
    $descriptionOfTrace = $_POST['descriptionOfTrace'];
    $colorCreature = $_POST['colorCreature'];
    $numLegsStandingOn = $_POST['numLegsStandingOn'];
    $closestAnimal = $_POST['closestAnimal'];
    $otherAppendages = $_POST['otherAppendages'];
    $alienSize = $_POST['alienSize'];
    $numEyes = $_POST['numEyes'];
    $abducted = $_POST['abducted'];
    $toOffWorld = $_POST['toOffWorld'];
    $timeGone = $_POST['timeGone'];
    $howManyCreatures = $_POST['howManyCreatures'];
    $additionalDetails = $_POST['additionalDetails'];
    $IDreport = $_POST['IDreport'];
  

    $sql = "INSERT INTO classThreeReport (IDclassThree, inVehicle, typeOfVehicle, personHarmDone, environmentHarmDone, physicalTrace, descriptionOfTrace, colorCreature, numLegsStandingOn, closestAnimal, otherAppendages, alienSize, numEyes, abducted, toOffWorld, timeGone, howManyCreatures, additionalDetails, IDreport)
        VALUES (NULL, b`$inVehicle`, `$typeOfVehicle`, b`$personHarmDone`, b`$environmentHarmDone`, b`$physicalTrace`, `$descriptionOfTrace`, `$colorCreature`, `$numLegsStandingOn`, `$closestAnimal`, `$otherAppendages`, `$alienSize`, `$numEyes`,b `$abducted`, b`$toOffWorld`, `$timeGone`, `$howManyCreatures`, `$additionalDetails`, `$IDreport`)";
    mysqli_query($conn,$sql);
    header("location: ../../../index.html");
    
   /* if ($conn->query($sql) === TRUE) {
        echo "Works";
    }else {
        echo "Error" . $sql . "<br>" . $conn->error;
    }*/
?>