<?php include "../includes/connection.php";

$query="delete from service where service_id={$_GET['service_id']}";
mysqli_query($con, $query);
header("location:manage_services.php");
?>