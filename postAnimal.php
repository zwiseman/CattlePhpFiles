<?php
$con = mysql_connect("localhost","HA","PaSsWoRdHAHA;)");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("My_Database_Name", $con);
 
$sql="INSERT INTO cows(gender, name, breed, lotNumber, price, farmCow)
VALUES
('$_POST[gender]','$_POST[name]','$_POST[breed]','$_POST[lotNumber]','$_POST[price]','$_POST[farmCow]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
 
mysql_close($con)
?>