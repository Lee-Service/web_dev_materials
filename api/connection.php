<?php
     $host = 'localhost';
      $username = 'lservice01';
      $password = 'rDr3GP2KVbLxmVxy';
      $db_name = 'lservice01';

     $conn= new mysqli($host, $username, $password, $db_name);

   if ($conn->connect_error) {
     
    echo "not connected ".$conn->connect_error;
    die();
}else{
}
