<?php

$conn = mysqli_connect("localhost", "root", "", "ajax");

if(isset($_POST["fname"]) && isset($_POST["lname"])){

	$first_name = $_POST['fname'];
	$last_name = $_POST['lname'];

	$sql = "INSERT INTO student(firstname,lastname) VALUES ('{$first_name}', '{$last_name}')"; 

	if(mysqli_query($conn, $sql)){
		echo 1;
	}else{
		echo 0;
	}

} else{
	echo "All fields are required.";
}

?>