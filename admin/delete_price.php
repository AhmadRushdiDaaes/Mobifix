<?php include "../includes/connection.php";

$query="delete from pricing where price_id={$_GET['price_id']}";
mysqli_query($con, $query);
header("location:manage_pricing.php");
?>