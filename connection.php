<?php
    function OpenCon()
     {
     $dbhost = "localhost";
     $dbuser = "maram";
     $dbpass = "password";
     $db = "Hospital";
     $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
     
     return $conn;
     }
     $sql = "CREATE TABLE Details (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        doctor_name VARCHAR(30) NOT NULL,
room VARCHAR(30) NOT NULL,
surgery_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
reg_time FLOAT(6,2) NOT NULL,
patient_name VARCHAR(30) NOT NULL,
surgery_type  VARCHAR(30) NOT NULL
        )";
   
    function CloseCon($conn)
     {
     $conn -> close();
     }
       
    ?>