<?php
include 'connection.php';
$id= $_GET['id'];
$deletequery = "delete from hc_labs where lab_id=$id";
$query = mysqli_query($con,$deletequery);
header('location:hc_admin_lab.php');
?>