<?php

   $dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = 'usbw';
   $db = 'bakeshop';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
   
   if(! $conn )
   {
      die('Could not connect: ' . mysqli_connect_errno());
   }
   
   $sql = 'SELECT I.code as Code, I.descr as Description, I.cost as Cost, I.qty as Quantity, I.um as `U/M` FROM  `items` I LIMIT 0 , 30';
   $retval = mysqli_query( $conn, $sql);
   
   if(! $retval )
   {
      die('Could not get data: ' . mysqli_connect_errno());
   }
   $result = array();
   $i = 0;
   while($row = mysqli_fetch_assoc($retval))
   {
      $result[$i] = $row;
      $i++;
   }

   header('Content-type: application/json');
   echo json_encode($result);


   mysqli_close($conn);

?>