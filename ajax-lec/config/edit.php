<?php
	require("connect.php");

	$id = $_GET['id'];
	$query = "SELECT * FROM ajaxrecords WHERE id = $id";
	$results = mysqli_query($connection, $query);
	$data = mysqli_fetch_array($results);
	echo json_encode($data);

?>