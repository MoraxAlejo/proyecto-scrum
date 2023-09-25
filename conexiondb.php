<?php 
try {
    $mysqli = new mysqli("localhost", "root", "", "scrum");
    echo "conexion exitosa mi llave";
   
} catch(mysqli_sql_exception $e) {
    echo "Error" . $e->getMessage();
}
?>