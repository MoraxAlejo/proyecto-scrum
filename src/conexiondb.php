<?php 
try {
    $mysqli = new mysqli("localhost", "root", "", "scrum");
    
   
} catch(mysqli_sql_exception $e) {
    echo "Error" . $e->getMessage();
}
?>