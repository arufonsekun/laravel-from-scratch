<?php

	include_once "back-end/classes/application.php";
	$application = new Application();

	//check if the user is logged
	if (!$application->isLogged){
		header("location:pages/login.php");
	}else{
		header("location:pages/home.php");
	}

?>
