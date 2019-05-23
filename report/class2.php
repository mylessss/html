<?php
     
    $servername = "gator4268.hostgator.com";
    $username = "mmcclend_alien";
    $password = "alientoor";
    $dbname = "mmcclend_alien";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    /*
    $servername = "localhost";
    $username = "root";
    $password = "toor";
    $dbname = "alien";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    */
    
    
    $inVehicle = $_POST['inVehicle'];
    $typeOfVehicle = $_POST['typeOfVehicle'];
    $personHarmDone = $_POST['personHarmDone'];
    $enviromentHarmDone = $_POST['enviromentHarmDone'];
    $physicalTrace = $_POST['physicalTrace'];
    $descriptionOfTrace = $_POST['descriptionOfTrace'];
    $additionalDetails = $_POST['additionalDetails'];
    $IDreport = $_POST['IDreport'];
  

    $sql = "INSERT INTO classTwoReport (IDclassTwo, inVehicle, typeOfVehicle, personHarmDone, environmentHarmDone, physicalTrace, descriptionOfTrace, additionalDetails, IDreport)
        VALUES (NULL,b'$inVehicle','$typeOfVehicle',b'$personHarmDone',b'$environmentHarmDone',b'$physicalTrace','$descriptionOfTrace','$additionalDetails','$IDreport')";
    mysqli_query($conn,$sql);
    header("location: ../../../index.html");
    
   /* if ($conn->query($sql) === TRUE) {
        echo "Works";
    }else {
        echo "Error" . $sql . "<br>" . $conn->error;
    }*/
?>