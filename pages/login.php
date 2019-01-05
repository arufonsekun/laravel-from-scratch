<!DOCTYPE html>
<html>
	<?php

		include_once "../front-end/includes/head.php";

	?>
	<title>login</title>
</head>
<body>
		<!--Header-->
		<?php

			include_once "../front-end/includes/header.php";

		?>
		<main role = "main">

			<div class = "row login-card">
				<img src = "http://task.manager/front-end/img/tasks.jpg" class="img-fluid rounded login-img">
				</img>
					<div class="offset-md-4"></div>
					<div class="col-md-3">
						<div class="card card-login">
						  <div class="card-body">
						    <h5 class="card-title">Login</h5>
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

		include_once "../front-end/includes/footer.php";

	?>

	<!--jquery, bootstrap-4 scritps, etc-->
	<?php

		include_once "../front-end/includes/scripts.php";

	?>
</body>
</html>
