<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'DataBaseConfig.php';
 
 $query = "SELECT * FROM torques";
 
 $stmt = $DBcon->prepare($query);
 $stmt->execute();
 
 $torquesData = array();
 
 while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
  
  $torquesData['CajaRodamiento'][] = $row;
 }
 
 echo json_encode($userData);
