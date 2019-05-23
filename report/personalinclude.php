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
    
    
    
    $first = $_POST['fname'];
    $last = $_POST['lname'];
    $dayB = $_POST['dayBirth'];
    $monthB = $_POST['monthBirth'];
    $yearB = $_POST['yearBirth'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $street = $_POST['streetAddress'];
    $city = $_POST['city'];
    $state = $_POST['stateAddress'];
    $zip = $_POST['zip'];
    $country = $_POST['country'];

    $sql = "INSERT INTO personalInformation(IDpersonal, fname, lname, dayBirth, 
    monthBirth, yearBirth, email, phone, streetAddress, city, stateAddress, zip, 
    country)
        VALUES (NULL,'$first','$last','$dayB','$monthB','$yearB','$email','$phone',
        '$street','$city','$state','$zip','$country')";
    mysqli_query($conn,$sql);
    header("location: incidentReport.php");
?>