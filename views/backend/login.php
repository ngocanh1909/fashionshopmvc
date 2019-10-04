<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/backend/layout3/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top: 50px;">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					<form method="post" action="index.php?area=backend&controller=login&action=login">
					<!-- row -->
					<div class="row" style="margin-bottom: 5px;">
						<div class="col-md-2">Email</div>
						<div class="col-md-10"><input type="text" required name="email" class="form-control"></div>
					</div>
					<!-- end row -->
					<!-- row -->
					<div class="row" style="margin-bottom: 5px;">
						<div class="col-md-2">Password</div>
						<div class="col-md-10"><input type="password" required name="password" class="form-control"></div>
					</div>
					<!-- end row -->
					<!-- row -->
					<div class="row" style="margin-bottom: 5px;">
						<div class="col-md-2"></div>
						<div class="col-md-10"><input type="submit" class="btn btn-primary" value="Login"> <input type="reset" class="btn btn-danger" value="Reset"></div>
					</div>
					<!-- end row -->
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>