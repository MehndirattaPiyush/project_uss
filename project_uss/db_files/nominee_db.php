<?php 
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
echo "Connected successfully"; 

$name=$_POST['name'];
$roll_no=$_POST['roll_no'];
$school=$_POST['school'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$contact=$_POST['contact'];
$found = 0;

$sql_s = "SELECT * FROM record WHERE 1";

$results = mysqli_query($conn, $sql_s);

if(!$results){
	die('Invalid Query' . mysqli_error($conn));
}

while($result = mysqli_fetch_array($results)){

	if($result['roll_no'] == $roll_no and $result['name'] == $name)
	{	
		if($result['visited'])
		{
			echo "<br/><em>You have visited earlier !<em>";
		}

		else if(!$result['visited'])
		{			
			$sql = "INSERT INTO nominee(name, roll_no, school, branch, year, contact, votes) 
			VALUES('$name', '$roll_no', '$school', '$branch', '$year', '$contact', 0)";

			if(mysqli_query($conn, $sql))
			{
				echo "<br/><i>You are registered with " .$roll_no ." id</em>";
				
				$sql_update = "UPDATE record SET visited = 1 WHERE roll_no = $roll_no ";
				if(mysqli_query($conn,$sql_update))
				{
					echo "<br/><br/>Good Luck !";
				}
				else
				{
					echo "Error : " . $sql . "<br>" .mysqli_error($conn);
				}
				
				//header('Location: /project_uss/php/index.php');
			}

			else
			{
				echo "Error !";
			}
		}
	
		$found=1;
		break;
	}

}

if($found == 0)
	echo "<br/><br/><em>You are not registered with IPU</em>";

mysqli_close($conn);
?>
