<?php
require("connect.php");

    $id = $_GET['id'];
    $query = "DELETE FROM ajaxrecords WHERE id = $id";
    mysqli_query($connection, $query);

?>