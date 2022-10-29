<?php
require("connect.php");

$id =$_POST['id'];
$name =$_POST['name'];
$age =$_POST['age'];
$course =$_POST['course'];

$query = "INSERT INTO ajaxrecords VALUES ($id, '$name', '$age', '$course')";
mysqli_query($connection,$query);

header('location:../index.php');

?>