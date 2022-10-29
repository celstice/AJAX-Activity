<?php
require("connect.php");

$sql = "Select * FROM ajaxrecords";
$results = mysqli_query($connection,$sql);

while($row = mysqli_fetch_array($results)){
    echo "<tr>"
            ."<td>".$row['id']."</td>"
            ."<td>".$row['name']."</td>"
            ."<td>".$row['age']."</td>"
            ."<td>".$row['course']."</td>"
            ."<td><center>"
            ."<button class='edit btn btn-primary' value='".$row['id']."'>Edit</button>&nbsp;&nbsp;&nbsp;"
            ."<button class='delete btn btn-danger' value='".$row['id']."'>Delete</button>"
            ."</center></td>"
            ."</tr>";
}

// $id = $_GET['id'];
// $query = "SELECT * FROM ajaxrecords WHERE 'id'= $id"; 
// $results = mysqli_query($connection,$query);
// $data = mysqli_fetch_array($results);
// echo json_encode($data);

?>