<?php

   include_once "dbConfig.php";
   // autocomplete textbox jquery ajax in PHP
   
   if (isset($_POST['state'])) {
        $output = "";
        $state = $_POST['state'];
        $query = "SELECT * FROM cities WHERE name LIKE '%$state%'  order by name ";
        $result = $con->query($query);
        $output = '<ul class="list-unstyled">';      
        if ($result->num_rows > 0) {
           while ($row = $result->fetch_array()) {
              $output .= '<li>'.ucwords($row['name']).'</li>';
           }
        }else{
             $output .= '<li> State not Found</li>';
        }
        
        $output .= '</ul>';
        echo $output;
   }
?>