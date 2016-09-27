<?php 

session_start();

$servername = "localhost"; 
$username = "root";
$password = "pankaj_96";
$dbname = "cr_nomination";
// Create connection 
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection 
if (mysqli_connect_error()) 
	{    
		die("Connection failed: " . $conn->connect_error); 
	} 

$branch = $_SESSION['branch'];
$year = $_SESSION['year'];

$sql = "SELECT * FROM nominee WHERE branch = '$branch' and year = '$year'";


if($results = $conn->query($sql))
{
	echo"<form action = 'vote_casted.php' method = 'post'>";

	
	while ($row = $results->fetch_assoc()) 
	{
	echo "<input type='radio' name='elect' value='".$row['roll_no']."'>".$row['name']."   ".$row['roll_no']."<br>";	
	}
	echo"<input type='submit' value='Submit'>";
	echo"</form>";
	
} 

else
{
	echo "Error : " . $sql . "<br>" .mysqli_error($conn);
}
mysqli_close($conn);
?>
