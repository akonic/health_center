<?php
include 'connection.php';
$id= $_GET['id'];
$deletequery = "delete from hc_doctor where doctor_id=$id";
$query = mysqli_query($con,$deletequery);
header('location:hc_admin_doctor.php');
?>