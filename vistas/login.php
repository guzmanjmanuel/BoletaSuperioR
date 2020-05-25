
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
  <script src="../bootstrap/js/jquery-3.2.1.min.js"></script>
    <!--Fontawesome CDN-->

	
	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="../bootstrap/styles.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Inicio de Session</h3>
				<div class="d-flex justify-content-end social_icon">
				
				</div>
			</div>
			<div class="card-body">
				<form id="frmLogin" form action="././modelo/validarUsuario.php" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="NUMERO DE DUI" name="dui">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="CONTRASEÑA" name="pass" >
					</div>
					<div class="row align-items-center remember">
					
					</div>
					<div class="form-group">
						<input type="submit" value="Login" id="entrarSistema" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					<h5>SUPERIOR CLEANING SERVICES</h5>
				</div>
				<div class="d-flex justify-content-center">
					
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>

