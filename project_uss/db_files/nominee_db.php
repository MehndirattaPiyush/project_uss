<?php 
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "cr_nomination";
// Create connection 
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection 
if (mysqli_connect_error()) 
	{    
		die("Connection failed: " . $conn->connect_error); 
	} 
echo "Connected successfully"; 

$name=$_POST['name'];
$roll_no=$_POST['roll_no'];
$school=$_POST['school'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$contact=$_POST['contact'];

$sql = "INSERT INTO nominee(name, roll_no, school, branch, year, contact) 
		VALUES('$name', '$roll_no', '$school', '$branch', '$year', '$contact')";

if(mysqli_query($conn, $sql))
{
	echo "<br/><i>You are registered !</i>";
}

else
{
	echo "Error : " . $sql . "<br>" .mysqli_error($conn);
}

if(mysqli_close($conn))
echo "<br/>Disconnected";
?>
