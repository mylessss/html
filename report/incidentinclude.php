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
    
    
    
    
    $dayOccur = $_POST['dayOccur'];
    $monthOccur = $_POST['monthOccur'];
    $yearOccur = $_POST['yearOccur'];
    $streetOccur = $_POST['streetOccur'];
    $cityOccur = $_POST['cityOccur'];
    $stateOccur = $_POST['stateOccur'];
    $zipOccur = $_POST['zipOccur'];
    $countryOccur = $_POST['countryOccur'];
    $classEncounter = $_POST['classEncounter'];
    $threatEncounter = $_POST['threatEncounter'];
    $corroborated = $_POST['corroborated'];
    $usingPsychedelics = $_POST['usingPsychedelics'];
    $IDpersonal = $_POST['IDpersonal'];

    $sql = "INSERT INTO incidentReport(IDreport, dayOccur, monthOccur, yearOccur, 
    streetOccur, cityOccur, stateOccur, zipOccur, countryOccur, classEncounter, threatEncounter, corroborated, 
    usingPsychedelics, IDpersonal)
        VALUES (NULL,'$dayOccur','$monthOccur','$yearOccur','$streetOccur','$cityOccur','$stateOccur','$zipOccur',
        '$countryOccur','$classEncounter','$threatEncounter', b'$corroborated', b'$usingPsychedelics', '$IDpersonal')";
    mysqli_query($conn,$sql);
    
    
    if ($classEncounter == 1){
        header("Location: class1.html");
       }
    if ($classEncounter == 2){
        header("Location: class2.html");
    }
    if ($classEncounter == 3){
        header("Location: class3.html");
    }
    
    
?>