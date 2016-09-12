<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>nominee page</title>

    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/login-style.css" rel="stylesheet">
</head>

<body>

    <div class="container">   
		 <div class="col-md-4 col-md-offset-4 col-xs-12">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title text-center">Fill your details</h3>
				</div>
				<div class="panel-body">
					<form role="form" action="../db_files/nominee_db.php" method="post">                         
						<div class="form-group">
							<input class="form-control" placeholder="Full Name" name="name" type="text" autofocus value="">
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Enrollment No" name="roll_no" type="text" value="">
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="University School" name="school" type="text" value="">
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Branch" name="branch" type="text" value="">
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Present Year" name="year" type="text" value="">
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Contact No" name="contact" type="text" value="">
						</div>
						<div class="checkbox">
						<!-- <label>
							<input name="remember" type="checkbox" value="Remember Me">Remember Me
						</label> -->
						</div>
						<input type="submit" class="btn btn-md btn-success btn-block" value="Nominate Yourself !"/>                           
					</form>
				</div>
			</div>
		</div>       
    </div>

</body>

</html>
