<?php

include_once('../db/dbconnect.php');

$querycheck='SELECT * from `products`';
$query_result=$conn->query($querycheck);

if ($query_result !== FALSE)
{
echo "table exist";
} else
{
     $createTableProducts = $conn->query('CREATE TABLE products ( 
        id_product int(11) NOT NULL AUTO_INCREMENT, 
        names varchar(100) NOT NULL, 
        descriptions varchar(250) NOT NULL, 
        price int (11) NOT NULL, 
        PRIMARY KEY (id_product)
      )');};




  
