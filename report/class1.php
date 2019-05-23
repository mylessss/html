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
    $additionalDetails = $_POST['additionalDetails'];
    $IDreport = $_POST['IDreport'];
  

    $sql = "INSERT INTO classOneReport (IDclassOne, inVehicle, typeOfVehicle, additionalDetails, IDreport)
        VALUES (NULL,b'$inVehicle','$typeOfVehicle','$additionalDetails','$IDreport')";
    mysqli_query($conn,$sql);
    header("location: ../../../index.html");
    
?>