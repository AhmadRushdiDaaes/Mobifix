<?php include "../includes/connection.php";

$query="delete from rate_us where rate_id={$_GET['rate_id']}";
mysqli_query($con, $query);
header("location:manage_rating.php");
?>