<?php

	// connect to the database
	//ninja_pizza is database name.
	//table name is pizzas
	$conn = mysqli_connect('localhost', 'haider', 'test1234', 'ninja_pizza');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}
//go show message to the user what is the error for not connecting to the database.
?>
