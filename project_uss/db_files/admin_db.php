<!DOCTYPE html>
<html lang="en">

<head>
	<title>result page</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<style type="text/css">
		.panel-default{
			margin: 70px 0px 30px; 
		}
		@media(max-width: 662px){
			.panel-default{
				margin: 30px 0px 20px; 
			}	
		}
	</style>
</head>

<body>

<div class="container">

<?php 

// session_start();

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

$user_id = $_POST['id'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE 1 ";

$result = mysqli_query($conn,$sql);

if(!$result){
	die('Invalid Query' . mysqli_error($conn));
}

while ($data = mysqli_fetch_array($result)) {

	if( ($data['id'] == $user_id) and ($data['password'] == $password) )
	{
		echo "<i>Hello ADMIN</i>";


		$sql_result = "SELECT * FROM nominee WHERE votes = ( SELECT MAX(votes) FROM nominee) GROUP BY(branch) ORDER BY (name) " ;
	
		$new_result = mysqli_query($conn, $sql_result); 
		?>
		
<div class="row">
	<div class="col-md-12">
    	<div class="panel panel-default">

            <div class="panel-heading">
                Result
            </div>
                       
        	<div class="panel-body"> 

			<div class="table-responsive">

		    <table class="table table-hover">
				
				<thead>
					<tr>
						<th>Roll #</th>
						<th>Name</th>
						<th>School</th>
						<th>Branch</th>
						<th>Year</th>
						<th>Votes</th>
					</tr>
				</thead>

				<tbody>									    
		<?php
			while ($new_data = mysqli_fetch_array($new_result)) { 
				echo "
				
				<tr>
					<td>" . $new_data['roll_no'] .
				"</td>
					<td>" . $new_data['name'] .
					"</td>
					<td>" . $new_data['school'] .
					"</td>
					<td>" . $new_data['branch'] .
					"</td>
					<td>" . $new_data['year'] .
					"</td>
					<td>" . $new_data['votes'] .
					"</td>
				</tr>
				";
			} 
		?>
				</tbody>
			</table>
			</div> <!--table res-->
			</div> <!--panel body-->
		</div> <!--- panel-def -->
	</div> <!--col-->
</div> <!-- row-->

<a href="../php/index.php" class="btn btn-md btn-danger">Logout !</a>
	<?php		
	} //if cond

	else
	{
		echo "<i>You are not autorised !<i>";
		header('Location: /project_uss/php/admin_login.php');

	}

} //while-outer

	mysqli_close($conn);

	?>

</div> <!-- container -->

</body>

</html>