
<?php 

require dirname(__FILE__)."/../framework/helpers.php";
if(!empty($_REQUEST['ID'])){
    $users = db_select( sprintf("SELECT * FROM Users WHERE ID = '%d'", $_REQUEST['ID']));
        if(!empty($users)){
            
        $user = $users[0];
       
        };
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Dashboard Template for Bootstrap</title>

		<!-- Bootstrap core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>

		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 col-md-12 main">
					<h1 class="page-header">User</h1>

					<form class="form-signin" method="POST" action="users.php">
						<input type="hidden" name="action" value="">
						<input type="hidden" name="id" value="">

						<label for="email" class="sr-only">Email address</label>
						<input type="email" id="email" name="email" value="" class="form-control" placeholder="Email address" required autofocus>
						
						<label for="password" class="sr-only">Password</label>
						<input type="password" id="password" name="password" value="" class="form-control" placeholder="Password" required>
						
						<label for="nickname" class="sr-only">Nickname</label>
						<input type="text" id="nickname" name="nickname" value="" class="form-control" placeholder="Nickname">
						
						<button class="btn btn-lg btn-primary btn-block" type="submit">Save</button>
					</form>
					
					<?php 
					if(!empty($user)){
					?>
					<form class="form-signin" method="POST" action="users.php">
						<input type="hidden" name="action" value="delete">
						<input type="hidden" name="id" value="">
						<button class="btn btn-lg btn-danger btn-block" type="submit">Delete</button>
					</form>
					<?php 
					}
					?>
					
				</div>
			</div>
		</div>

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
