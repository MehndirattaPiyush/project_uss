<?php 

session_start();

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

$roll_no=$_POST['roll_no'];
$school=$_POST['school'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$contact=$_POST['contact'];

$_SESSION['branch'] = $branch;
$_SESSION['year'] = $year;
$_SESSION['roll'] = $roll_no;

$sql = "INSERT INTO voter(roll_no, school, branch, year, contact) 
		VALUES('$roll_no', '$school', '$branch', '$year', '$contact')";

if(mysqli_query($conn, $sql))
{
	echo "<br/><i>You are registered !</i>";
	header('Location: vote.php');
}

else
{
	echo "Error : " . $sql . "<br>" .mysqli_error($conn);
}

if(mysqli_close($conn))
echo "<br/>Disconnected";
?>
