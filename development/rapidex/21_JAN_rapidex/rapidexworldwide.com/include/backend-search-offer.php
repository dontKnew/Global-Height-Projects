<?php

   include_once "dbConfig.php";
   // autocomplete textbox jquery ajax in PHP
   
   if (isset($_POST['state'])) {
        $output = "";
        $state = $_POST['state'];
        if($_POST['state']=='0'){
            $query = "SELECT * FROM inoffer WHERE country LIKE '%a%'  order by country ";
        }else {
            $query = "SELECT * FROM inoffer WHERE country LIKE '$state%'  order by country ";
        }
        
        $result = $con->query($query);
        $output = '<ul class="list-unstyled">';      
        if ($result->num_rows > 0) {
           while ($row = $result->fetch_array()) {
               $imgn=str_replace(' ','-',$row['country']);
               if($row['country']=="destination"){
                   
               }else {
                $output .= '<a href="special-offer.php?destination='.$row['country'].'" style="color: #000;"><li>'.ucwords($row['country']).' <img src="assets/flag/'.$imgn.'-Flag-32.png" ></li></a>';     
               }
              
           }
        }else{
             $output .= '<li> Country not Found</li>';
        }
        
        $output .= '</ul>';
        echo $output;
   }
?>