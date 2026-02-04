<?php

   // Read data from JSON file
   $jsonFile = 'bakeshop.json';

   if(!file_exists($jsonFile)) {
      header('Content-type: application/json');
      echo json_encode(['error' => 'Data file not found']);
      exit;
   }

   $jsonData = file_get_contents($jsonFile);
   $result = json_decode($jsonData, true);

   if($result === null) {
      header('Content-type: application/json');
      echo json_encode(['error' => 'Invalid JSON data']);
      exit;
   }

   header('Content-type: application/json');
   echo json_encode($result);

?>