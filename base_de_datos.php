<?php
/*

*/
$contraseña = "";
$usuario = "root";
$nombre_base_de_datos = "pruebas";
try{
	$db = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario, $contraseña);
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}
?>


            <?php
            include "base_de_datos.php";

// --- ATENCION --- esta sintaxis elimina TODOS los registros de una tabla, mucho OJO. 
// Los valores autoincrementales se incian como si la tabla se hubiese creado por primera vez. 
            if (isset($_POST["borrar"])) {
                $query = "TRUNCATE TABLE torques";
                $result = $db->query($query);
            } if (!empty($result)) {
                $tipo = "success";
                $mensaje = "Registros eliminados correctamente";
            } else {
                
            }

// Confirmamos que todos los registros de la tabla han sido eliminados con exito 
            ?> 


            <form method="post" >
                <div  class="pt-1 mb-2"> 
                    <button  class="btn btn-danger  btn-block" type="submit" id="submit" name="borrar" > Terminar proceso </button>
                </div>
            </form>



  