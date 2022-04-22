<?php
include "DataBaseConfig.php";

// --- ATENCION --- esta sintaxis elimina TODOS los registros de una tabla, mucho OJO. 
// Los valores autoincrementales se incian como si la tabla se hubiese creado por primera vez. 

    $query = "TRUNCATE TABLE crtornillo1";
    $result = $db->query($query);



header('Location: CajaDeRodamiento.php');

// Confirmamos que todos los registros de la tabla han sido eliminados con exito 
?>  
