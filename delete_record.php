<?php
include 'connection.php';
$id= $_GET['id'];
$deletequery = "delete from hc_registration where consult_id=$id";
$query = mysqli_query($con,$deletequery);
header('location:hc_admin_treatments.php');
?>