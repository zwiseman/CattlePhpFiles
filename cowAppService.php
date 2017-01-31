<?php
// Create connection
$con=mysqli_connect("localhost", "", "", "")
or die ('I cannot connect to the database.');
 
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 
// This SQL statement selects ALL from the table 'Locations'
$farmSql = "SELECT * FROM Farm";
$cowsSql = "SELECT * FROM cows";

// Check if there are results
if ($result = mysqli_query($con, $cowsSql))
{
	// If so, then create a results array and a temporary one
	// to hold the data
	$cowResultArray = array();
	$cowTempArray = array();
 
	// Loop through each row in the result set
	while($row = $result->fetch_object())
	{
		// Add each row into our results array
		$cowTempArray = $row;
	    array_push($cowResultArray, $cowTempArray);
	}
 
	// Finally, encode the array to JSON and output the results
	echo json_encode($cowResultArray, JSON_PRETTY_PRINT);
}
// Close connections
mysqli_close($con);
?>