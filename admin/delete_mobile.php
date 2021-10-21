<?php include "../includes/connection.php";

$query="delete from mobile_type where mobile_id={$_GET['mobile_id']}";
mysqli_query($con, $query);
header("location:manage_mobile.php");
?>