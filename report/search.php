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


    $IDpersonal = $_POST['IDpersonal'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];


    $sql = 'SELECT * FROM personalInformation WHERE IDpersonal LIKE " . $IDpersonal ." ';
        $result = $conn->query($sql);
        if($result->num_rows>0){
            echo "<table><tr><th>Personal ID</th><th>First Name</th>
            <th>Last Name</th><th>Birth Day</th><th>Birth Month</th><th>Birth Year</th><th>Email</th><th>Phone</th><th>Address</th><th>City</th><th>State</th><th>Zip</th><th>Country</th></tr>";
   
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["IDpersonal"]. "</td><td>" . $row["fname"]. 
        "</td><td>" . $row["lname"]. "</td><td> " . $row["dayBirth"]. "</td><td>" . 
        $row["monthBirth"]. "</td><td>" . $row["yearBirth"]. "</td><td>" . $row["email"]. "</td><td>" . $row["phone"]. "</td><td>" . $row["streetAddress"]. "</td><td>" . $row["city"]. "</td><td>" . $row["stateAddress"]. "</td><td>" . $row["zip"]. "</td><td>" . $row["country"]. "</td></tr>";
    }
    echo "</table>";
            
}    
        else{
            echo 'No results';
        }


?>