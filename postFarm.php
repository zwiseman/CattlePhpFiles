<?php
$con = mysql_connect("localhost","","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("my_database_Name...", $con);
 
$sql="INSERT INTO Farm(farmName, address, city, state, zipCode, firstName, lastName, email)
VALUES
('$_POST[farmName]','$_POST[address]','$_POST[city]','$_POST[state]','$_POST[zipCode]','$_POST[firstName]','$_POST[lastName]','$_POST[email]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
 
mysql_close($con)
?>
