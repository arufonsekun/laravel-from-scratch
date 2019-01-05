<header class="navbar navbar-expand-lg navbar-light bg-warning">
	<div class="collapse navbar-collapse">
		<img class="logo" src="http://task.manager/front-end/img/logo.png">
			<div class="offset-md-9 d-flex justify-content-end">
				<?php
					$url = $_SERVER['REQUEST_URI'];
					$equal = strcmp($url, '/pages/signup.php');
					if ($equal != 0){
						echo "<a href='signup.php' class='p-2 bd-highlight nav-link'>",'Sign up',"</a>";
					}
				?>
			</div>
	</div>
</header>

<!--<div class = "container-fluid">
		<div class="row">
			<div class="col-md-3">
				<h3>App image</h3>
			</div>
		</div>
	</div>
-->
