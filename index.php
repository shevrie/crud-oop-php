<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

	<script src="bootstrap/js/jquery-3.4.1.slim.min.js"></script>
	<script src="bootstrap/js/popper.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body style="padding: 200px">
	<div class="container">
		<div class="col-md-6 offset-md-3">
			
			<!-- Alert Notification -->
			<?php if(isset($_SESSION['alert'])): ?>
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
			    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			      <span aria-hidden="true">&times;</span>
			    </button>
			    <strong><?php echo $_SESSION['alert']; ?></strong>
			</div>
			<?php 
				unset($_SESSION['alert']);
				endif; 
			?>

			<!-- Form Login -->
			<div class="card">
				<div class="card-body text-center">
					<img src="bootstrap/images/logo-umt-informatika.png" width="200">
					<form action="proses_login.php" method="POST">
						<div class="form-group">
						    <input type="text" class="form-control" name="user" placeholder="Username">
						</div>
						<div class="form-group">
						    <input type="password" class="form-control" name="pass" placeholder="Password">
						</div>
						<div class="form-group">
						    <input type="submit" name="submit" class="btn btn-info btn-lg btn-block" value="MASUK">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>