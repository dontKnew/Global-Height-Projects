<?php
   // Database configuration 
   $dbHost     = "localhost"; 
   $dbUsername = "elect7wk_rapidex"; 
   $dbPassword = "R@p!dex123"; 
   $dbName     = "elect7wk_rapidex"; 

    
   // Create database connection 
   $con = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
    
   // Check connection 
   if ($con->connect_error) { 
       die("Connection failed: " . $con->connect_error); 
   }
?>