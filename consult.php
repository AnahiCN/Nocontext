<?php 
require('conexion.php');
$con = Conectar();
$SQL = 'SELECT * FROM torques';
$stmt = $con->prepare($SQL);
$result = $stmt->execute();
$rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
echo(json_encode($rows));


function MostrarClientesM($tablaBD){

        /*====== Con PDO =======*/
        /*============================================================================*/
        $pdo = ConexionBD::cBD()->prepare("SELECT id_cliente,nombre,razon_social,rfc,direccion,correo1,correo2,telefono1,telefono2 FROM $tablaBD
                                            ORDER BY id_cliente ASC");
        $pdo -> execute();
        $clientes = $pdo->fetchAll();
        return $clientes;
        $pdo->close();


    }



 function MostrarClientesC(){
        $tablaBD = "cliente";
        $respuesta = ClientesM::MostrarClientesM($tablaBD);
        foreach ($respuesta as  $valor){
            echo '
            <option value="'.$valor['id_cliente'].'">'.$valor['nombre'].'</option>
            ';
        }

    }
?>