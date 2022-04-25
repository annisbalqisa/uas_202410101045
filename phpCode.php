<?php
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'uts_202410101045');

	// initialize variables
	$name = "";
	$address = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['fakultas'];
		$address = $_POST['jumlahAnimo'];

		mysqli_query($db, "INSERT INTO info (fakultas, jumlahAnimo) VALUES ('$fakultas', '$jumlahAnimo')");
		$_SESSION['message'] = "Data Tersimpan";
		header('location: index.php');
	}

// ...
