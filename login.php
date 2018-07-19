<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<?php

		include_once "includes/head.php"

	?>
</head>
<body>
		<!--Header-->
		<?php

			include_once "includes/header.php"

		?>
		<main role = "main">
			
			<div class="container-fluid">
				<img src = "http://localhost/task-manager/img/tasks.jpg" class="img-fluid rounded login-img">
			</img>
				<div class = "row  login-card">
					<div class="offset-md-4"></div>
					<div class="col-md-3">
						<div class="card">
						  <div class="card-body">
						    <h5 class="card-title">Entrar</h5>
						    <input type="text" class="form-control login-input" aria-label="input" placeholder="Username">
						    <input type="password" class="form-control login-input" aria-label="input" placeholder="Password">
						    <button class="btn btn-outline-success btn-block">Log in</button>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</main>

	<?php

		include_once "includes/footer.php";

	?>

	<!--jquery, bootstrap-4 scritps, etc-->
	<?php

		include_once "includes/scripts.php";

	?>
</body>
</html>