<?php include "../includes/connection.php";

$query="delete from customer where customer_id={$_GET['customer_id']}";
mysqli_query($con, $query);
header("location:manage_customer.php");
?>