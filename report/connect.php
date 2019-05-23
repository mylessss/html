<?php   
        //login credential
        $servername = "gator4268.hostgator.com";
        $username = "mmcclend_alien";
        $password = "alientoor";
        $dbname = "mmcclend_alien";
       
       /* $servername = "localhost";
        $username = "root";
        $password = "toor";
        $dbname = "a4";
        */
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            $servername = "localhost";
            $username = "root";
            $password = "toor";
            $dbname = "alien";
            $conn = new mysqli($servername, $username, $password, $dbname);
            
         }
?>

