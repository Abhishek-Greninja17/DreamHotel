<?php
 $dbhost="localhost";
 $dbuser="root";
 $dbpass="";
 $db="info";

 $conn=  mysqli_connect($dbhost,$dbuser,$dbpass,$db);

  //check connection 

  if($conn-->connect_error)
  {
   echo "connection is failed";
  }
  else{
  echo "connection was succes";
  }
  ?>