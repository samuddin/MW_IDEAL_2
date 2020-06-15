<?php
error_reporting(0);
$conn = new mysqli("localhost", "root","","records");
    if($conn->connect_error){        
        die("<h1>Alert sms to MAVEN</h1><br> Database not located On server <br>".$conn->connect_error);    
    } 
?> 