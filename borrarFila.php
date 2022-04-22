<?php 
include("funcionPHP.php");
$id = $_GET['id'];
delete('torques','id',$id);
header("location:Motor_ParteTrasera2.php");
?>