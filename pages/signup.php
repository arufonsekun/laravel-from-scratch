<!DOCTYPE html>
<html>
	<?php

		include_once "../front-end/includes/head.php";

	?>
	<title>Sign Up</title>
</head>
<body>
		<!--Header-->
		<?php

			include_once "../front-end/includes/header.php";

		?>
		<main role = "main">
            <div class="row">
                <div class="offset-md-3 col-md-5">
                    <div class="card border-dark mb-3" style="margin-top: 15vh;">
                      <div class="card-header">Sign Up</div>
                      <div class="card-body text-dark">
                          <form>
                          <div class="row">
                                  <div class=col-md-8>
                                      <div class="input-group mb-3">
                                          <input type="text" class="form-control" placeholder="Name">
                                     </div>
                                 </div>
                                 <div class=col-md-4>
                                     <div class="input-group mb-3">
                                         <input type="text" class="form-control" placeholder="Age">
                                    </div>
                                </div>
                                 <div class=col-md-6>
                                     <div class="input-group mb-3">
                                         <input type="e-mail" class="form-control" placeholder="E-mail">
                                    </div>
                                </div>
                               <div class=col-md-6>
                                   <div class="input-group mb-3">
                                       <input type="text" class="form-control" placeholder="Username">
                                  </div>
                              </div>
                              <div class=col-md-5>
                                  <div class="input-group mb-3">
                                      <input type="password" class="form-control" placeholder="Password">
                                 </div>
                             </div>
                             <div class="col-md-4">
                                <div class="input-group mb-3">
                                    <button type="button" class="btn btn-outline-info">Submit</button>
                                </div>
                             </div>
                        </div>
                    </form>
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
