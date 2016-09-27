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
$roll = $_SESSION['roll'];

$voted_enroll = $_POST['elect'];


$sql = "UPDATE nominee SET votes = votes+1 WHERE roll_no = '$voted_enroll'";


if($results = $conn->query($sql))
{
	echo"Vote Casted";
	//$sql2 = "UPDATE voter SET voted = '$voted_enroll' WHERE roll_no = '$roll'";
	//echo$sql2;
		//if(mysqli_query($conn,$sql2))
		header('Location: /project_uss/php/index.php');
	
} 

else
{
	echo "Error : " . $sql . "<br>" .mysqli_error($conn);
}
mysqli_close($conn);
?>
