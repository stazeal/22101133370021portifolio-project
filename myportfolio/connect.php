<?php
$dbhost="localhost";
$dbuser="root";
$dbpassword="";
$dbname="portifolio";

$connection=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

  if (!$connection) {
    echo"connection error";
  }


?>